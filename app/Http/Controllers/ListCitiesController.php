<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class ListCitiesController extends Controller
{
    //
    function citieslist()
    {
    	if(session('aduser'))
    	{
    		$cities_data=City::where('cit_status',1)
    		->orderby('cit_name')
    		->paginate(10);
    		return view('admincities',['cities_data'=>$cities_data]);
    	}
    	else 
    	{
    		return redirect('Admin');

    	}
    }
    function delete_city($ct_id)
    {
    	if(session('aduser'))
    	{
    		$data= City::where('cit_id', $ct_id)->delete();
    		return redirect('lstcities');
    	}
    	else 
    	{
    		return redirect('Admin');
    	}
	   	
    }

    function show_city($ct_id)
    {
    	if(session('aduser'))
    	{
	    	$citeddat = City::where('cit_id', $ct_id)->get();
    		return view('admin_cit_edit',['admin_cit_data'=>$citeddat]);
    	}
    	else 
    	{
    		return redirect('Admin');
    	}
    }

    function cit_edit_data(request $req)
    {
    	if(session('aduser'))
    	{
	    	$cit_id = $req->input('cit_id');
	    	$cit_name = $req->input('cit_name');
	    	$cit_status = $req->input('cit_status');
	    	if($cit_id == "" || $cit_name == "" || $cit_status == "")
	    	{
	    		return redirect("lstcities");
	    	}
	    	else 
	    	{
	    		$data= City::where('cit_id', $cit_id)
	    		->update([
	    			'cit_name' => $cit_name,
	    			'cit_status' => $cit_status
	    		]);
	    		return redirect('lstcities');
	    	}
    	}
    	else 
    	{
    		return redirect('Admin');
    	}
    }
}
