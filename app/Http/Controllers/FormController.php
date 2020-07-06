<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    //
    public function index(){
    	return view('form');
    }
    public function company(Request $request){
    	$request->validate([
            'id' => 'required'
        ]);
    	$id = $request['id'];
    	$data = Http::get("https://1ZQO8FX6qakvgSrMZGMu1wzbiMuk3Ol2LcbRkZZJ@api.companieshouse.gov.uk/company/{$id}")->json();
    	 
    	if (count($data)>2 ){
    		$directors = Http::get("https://1ZQO8FX6qakvgSrMZGMu1wzbiMuk3Ol2LcbRkZZJ@api.companieshouse.gov.uk/company/{$id}/officers")->json();
    		$status = true;
    		
    	}
    	else{
    		$directors = [];
    		$status = false;
    		
    	}
    	return view('form', ['data' => $data, 'directors'=> $directors, 'status' => $status]);
    	
    }
}
