<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;
use App\Ext_setting;
use Session;
use DateTime;
use DateTimeZone;

use Exonet\Powerdns\Powerdns;
use Exonet\Powerdns\RecordType;

class SearchController extends Controller
{
    public function search(Request $request){
        // $project = Domain::where([
        //     ['name', '!=', Null],
        //     [function ($query) use ($request) {
        //         if(($term = $request->domain)){
        //             $query->orWhere('domain', 'LIKE', '%' .$term . '%')->get();
        //         }
        //     }]
        // ])->orderBy("id", "desc")->paginate(10);
        $project = Domain::where('domain',$request->domain)->get();
        $project_domain = Domain::where('domain', $request->domain)->pluck('extention');
        $extention = Ext_setting::whereNotIn('ext',$project_domain)->get();
        $domain = $request->domain;
        return view('user.search.search', compact('project','domain','extention'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }
    public function register_info($id, $domain){
        $project = Domain::where([
            ['name', '!=', Null],
            [function ($query) use ($domain) {
                if(($term = $domain)){
                    $query->orWhere('domain', 'LIKE', '%' .$term . '%')->get();
                }
            }]
        ])->orderBy("id", "desc")->paginate(10);
       $domain_info = Domain::find($id);
       
        return view('user.search.detail', compact('project','domain_info','domain'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }
    public function add_cart(Request $request){
        $carts = Session::get('cart');
        $cart_name = $request->domain_name;
        $cart_id = $request->id;
        $prices = Ext_setting::find($cart_id);
        $cart['price'] = $prices->price;
        $cart_ext = $prices->ext;
        $cart['name'] = $cart_name.".".$cart_ext;
        $carts[] = $cart;
        Session::put('cart',$carts);
        echo(1);
    }
    public function del_cart(Request $request){
        $carts = Session::get('cart');
        $cart_number = $request->cart_number;
        unset($carts[$cart_number]);
        $cartt = array_values($carts);
        Session::put('cart',$cartt);
        echo(1);
    }
    public function pay_cart(Request $request){
        $powerdns = new Powerdns('127.0.0.1', 'powerdns_secret_string');

        // Create a new zone.
        $zone = $powerdns->createZone(
            'example.com',
            ['ns1.example.com.', 'ns2.example.com.']
        );
        
        // Add two DNS records to the zone.
        $zone->create([
            ['type' => RecordType::A, 'content' => '127.0.0.1', 'ttl' => 60, 'name' => '@'],
            ['type' => RecordType::A, 'content' => '127.0.0.1', 'ttl' => 60, 'name' => 'www'],
        ]);
        
        $merchant_key = 'CB853-ECB1C-2693B-F9CC9-BA1E6'; // Enter here your merchant API Key
        $merchant_account = $request->merchant_account;
        $hash = $request->hash;
        
        $verification_link = "https://sellupay.com/payment_status.php?merchant_key=$merchant_key&merchant_account=$merchant_account&hash=$hash";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$verification_link);
        $results=curl_exec($ch); 
        curl_close($ch);  
        $results = json_decode($results); 
        
        $domain_name = $request->domain_name;
        $domain_price = $request->domain_price;
        $domain_year = $request->domain_year;
        $i=0;
        if($domain_name){
            $count = count($domain_name);
       
            if($results->status == "success"){
                for($i=0;$i<$count;$i++){
                    $date = new DateTime("now", new DateTimeZone('America/New_York') );
                    $now = $date->format('Y-m-d');
                    $current = strtotime($now); 
                    $expired = strtotime('+'.$domain_year[$i].' years',$current);
                    $expired_date = date("Y-m-d", $expired);
                    $domain_names = $domain_name[$i];
                    $explode = explode(".",$domain_names);
                    $realname = $explode[0];
                    $ext = $explode[1];
                    $domain = new Domain();
                    $domain->domain = $realname;
                    $domain->extention = $ext;
                    $domain->price = $domain_price[$i];
                    $domain->status = "private";
                    $domain->creation_date = $now;
                    $domain->experation_date = $expired_date;
                    $domain->user_id = auth()->user()->id;
                    $domain->save();
                }
                Session::put('cart',array());
                return redirect(route('account.domains'))->with('success',"Your payment is successful");
            }elseif($results->status == "error"){
                return back()->with('error',$results->msg);
            }
        }else{
            return back()->with('error', "You have not Shopping Cart.");
        }
    }
    public function checkout(){
        $shopping_cart = Session::get('cart');
        if(Session::get('cart')!==null){
            $price = 0;
            foreach($shopping_cart as $temp){
                $price = $price+$temp['price'];
            }
            return view('user.search.shoppingcart',compact('price'));            
        }else{
            return back();
        }

    }
}
