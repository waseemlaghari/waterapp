<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Dis_Agency;

class SearchmodController extends Controller
{
    //
    function searchagency(request $req)
    {

    	$agency_city = $req->input('agency_search');
    	$city_data= City::where('cit_name', $agency_city)->get();
    	//$city_data= City::where('cit_name','LIKE','%'.$agency_city.'%')->get();
    	
    	if(count($city_data) > 0)
    	{
    		$id_city = $city_data[0]['cit_id'];
    		$agency_data= Dis_Agency::where('ds_cit_id', $id_city)
    		->where('ds_status', 1)
    		->join('city','dis_agency.ds_cit_id','=','city.cit_id')
    		->get();
    		
    		if(count($agency_data) > 0)
    		{
    			//$agency_data;

    			return view('searchdata', ['agency_data'=>$agency_data]);
    		}
    		else {
    			return view('searchdata', ['agency_data'=>$agency_data]);
    		}
    		//return view('searchdata');
    	}
    	else 
    	{
    		$agency_data= Dis_Agency::where('ds_location', 'LIKE', '%'.$agency_city.'%')
    		->where('ds_status', 1)
    		->join('city','dis_agency.ds_cit_id','=','city.cit_id')
    		->get();
    		if(count($agency_data) > 0)
    		{
    			return view('searchdata', ['agency_data'=>$agency_data]);
    		}
    		else {
    			return view('searchdata', ['agency_data'=>$agency_data]);
    		}
    		//return $agency_data;
    	}
    	//$agcn_data= Dis_Agency::where('ds_email',$agency_email)->get();
    	//echo $agency_search;
    }
}
