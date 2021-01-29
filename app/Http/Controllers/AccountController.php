<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;
use App\User;
use Hash;
use Validator;
use DateTime;
use DateTimeZone;
class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    public function index(){
        return view('user/account/dashboard')->with('account','dashboard');
    }
    public function expired(){
        $user = auth()->user()->id;
        $domains = Domain::where('user_id',$user)->get();
        return view('user.account.expired', compact('domains'))->with('account','expired');
    }
    
    public function expired_update($id){
        $expired_domains = Domain::find($id);
        return view('user.account.expired_update', compact('expired_domains'))->with('account','expired');
    }
    
    public function domains(){
        $user = auth()->user()->id;
        $domains = Domain::where('user_id',$user)->get();
        return view('user.account.domains', compact('domains'))->with('account','domains');
    }
    public function domains_edit($id){
        $domains = Domain::find($id);
        return view('user.account.domains_edit', compact('domains'))->with('account','domains');
    }
    public function domains_update(Request $request, $id){
         $v = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'state'=>'required',
            'city' => 'required',
            'zip' => 'required|max:255',
            'ns1' => 'required',
            'ns2' => 'required',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors())->withInput();
        }
        $domains = Domain::find($id);
        $domains->name = $request->name;
        $domains->email = $request->email;
        $domains->address = $request->address;
        $domains->state = $request->state;
        $domains->city = $request->city;
        $domains->zip = $request->zip;
        $domains->status = $request->status;
        $domains->ns1 = $request->ns1;
        $domains->ns2 = $request->ns2;
        $domains->save();
        return redirect(route('account.domains'))->with('success','successfully updated.');
    }
    public function domains_delete($id){
        $domains = Domain::find($id);
        $domains->delete();
        return redirect(route('account.domains'));
    }
    public function profile(){
        $user = auth()->user();
        return view('user.account.profile', compact('user'))->with('account','profile');
    }
    public function profile_edit(){
        $user=auth()->user();
        return view('user.account.profile_edit', compact('user'))->with('account','profile');
    }
    public function profile_upload(Request $request){
        $v = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'state'=>'required',
            'city' => 'required',
            'zip' => 'required|max:255',
            'phone' => 'required',
        ]);
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors())->withInput();
        }
        $account = User::find(auth()->user()->id);
        $account->name = $request->name;
        $account->email = $request->email;
        $account->address = $request->address;
        $account->state = $request->state;
        $account->city = $request->city;
        $account->zip = $request->zip;
        $account->phone = $request->phone;
        if($request->password){
            $account->password = Hash::make($request->password);
        }
        $account->save();
        return redirect(route('account.profile'))->with('success','Successfully Uploaded');
    }
    public function expired_pay_cart(Request $request){
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
        $id = $request->domain_id;
        $i=0;
        if($domain_name){
            if($results->status == "success"){
            
                $date = new DateTime("now", new DateTimeZone('America/New_York') );
                $now = $date->format('Y-m-d');
                $current = strtotime($now); 
                $expired = strtotime('+'.$domain_year.' years',$current);
                $expired_date = date("Y-m-d", $expired);
               
                $domain = Domain::find($id);
                $domain->domain = $domain_name;
                $domain->price = $domain_price;
                $domain->status = "private";
                $domain->creation_date = $now;
                $domain->experation_date = $expired_date;
                $domain->save();
                return redirect(route('account.domains.edit', $id))->with('success',"Your payment is successful");
            }elseif($results->status == "error"){
                return back()->with('error',$results->msg);
            }
        }else{
            return back()->with('error', "You have not Shopping Cart.");
        }
    }
}
