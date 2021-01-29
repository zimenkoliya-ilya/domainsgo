<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;

class userSearchController extends Controller
{
    public function search(Request $request){
        $project = Domain::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if(($term = $request->domain)){
                    $query->orWhere('domain', 'LIKE', '%' .$term . '%')->get();
                }
            }]
        ])->orderBy("id", "desc")->paginate(10);
       $domain = $request->domain;
        return view('user.domainchecking.domainchecking', compact('project','domain'))
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
       
        return view('user.domainchecking.detail', compact('project','domain_info','domain'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }
}
