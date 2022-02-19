<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Dis_Agency;
use App\Models\Dis_Order;
use App\Models\Rating;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class AgencyController extends Controller
{
    //
    function registeragency()
    {
    	if(session('ad_agency'))
    	{
    		return redirect('/Agency_Dashboard');
    	}
    	$cities_data=City::where('cit_status',1)
    		->orderby('cit_name')
    		->get();
    	return view('agencyregistration', ['cities_data'=>$cities_data]);
    }

    function agencygetdata(request $req)
    {
    	$agency_name = $req->input('agency_name');
    	$agency_email = $req->input('agency_email');
    	$agency_pass = $req->input('agency_pass');
    	$agency_phone = $req->input('agency_phone');
        $agency_price = $req->input('agency_price');
    	$agency_litre = $req->input('agency_litre');
    	$agency_tycp = $req->input('agency_tycp');
    	$agency_addrs = $req->input('agency_addrs');
    	$agency_city = $req->input('agency_city');

    	if($agency_name == "" || $agency_email == "" || $agency_pass == "" || $agency_phone == "" || $agency_price == "" || $agency_tycp == "" || $agency_addrs == "" || $agency_city == "" || $agency_litre=="")
    	{
    		$req->session()->flash('agc_errs', 'Please Fill all fields.. ');
    		return redirect('RegisterAgency');

    	}else 
    	{
            if($agency_price <= 0){
                $req->session()->flash('agc_errs', 'Price must be grater then 0 ');
                return redirect('RegisterAgency');
            }
            else {
                $agcn_data= Dis_Agency::where('ds_email',$agency_email)->get();
                if(count($agcn_data) > 0)
                {
                    
                    $req->session()->flash('agency_err', ' Email already exist! ');
                    return redirect('RegisterAgency');
                }
                else {
                    $insrt_agency = Dis_Agency::insert([
                        'ds_title' => $agency_name,
                        'ds_regis_date' => date('Y-m-d H:i:s'),
                        'ds_price' => $agency_price,
                        'ds_type' => $agency_tycp,
                        'ag_litre' => $agency_litre,
                        'ds_cit_id' => $agency_city,
                        'ds_location' => $agency_addrs,
                        'ds_email' => $agency_email,
                        'ds_pass' => Crypt::encryptString($agency_pass),
                        'ds_profilepic' => "bottled_water.png",
                        'ds_phone' => $agency_phone,
                        'ds_status' => 3
                    ]);
                    if($insrt_agency)
                    {
                        $req->session()->flash('agency_success', ' Agency Successfully Created. Please wait Admin will review your application then you can login ');
                        return redirect('RegisterAgency');
                    }
                }
            }
    		
    	}

    }

    function profile($ds_title)
    {
    	//echo $ds_title;

		$agency_data= Dis_Agency::where('ds_title', $ds_title)
		->where('ds_status', 1)
		->join('city','dis_agency.ds_cit_id','=','city.cit_id')
		->get();
		if(count($agency_data) > 0){
            $ag_id=$agency_data[0]['ds_id'];
            $ratting_data = Rating::select('rt_rating')
            ->where('rt_ds_id', $ag_id)
            ->get();
            // Rating coding
            $ratting_couting=0;
            foreach($ratting_data as $ratting){
                $ratting_couting += $ratting['rt_rating']; 
            }
            $total_ratings = count($ratting_data);

            if($total_ratings > 0 ) {
                $final_rating = ($ratting_couting/$total_ratings);
            }
            else {
                $final_rating = 0;
            }
    		return view('agencyprofile', ['agency_data' => $agency_data, 'final_rating'=>$final_rating]);
            
    	}
    	else {
    		return redirect('searchbycity');
    	}
    }

    function order($ds_title)
    {
    	$agency_data= Dis_Agency::where('ds_title', $ds_title)
    		->get();
    	// $agency_id = $agency_data[0]['ds_id'];
    	return view('agencyorder',['agency_data'=> $agency_data]);
    }
    function sendorder(request $req)
    {

    	$cus_dis_id = $req->input('cus_dis_id');
    	$cus_dis_city = $req->input('cus_dis_city');
    	$cus_address = $req->input('cus_address');
    	$cus_name = $req->input('cus_name');
    	$cus_numb = $req->input('cus_numb');
    	$numof_cans = $req->input('numof_cans');
    	$ord_date = $req->input('cus_dis_id');
    	$cus_dis_title = $req->input('cus_dis_title');
    	if($cus_dis_id == "" || $cus_dis_city == "" || $cus_address == "" || $cus_name == "" || $cus_numb == "" || $numof_cans == "" || $ord_date == "" || $cus_dis_title == "")
    	{
    		if($cus_dis_title <= 0){ $cus_dis_title = 0; }
    		return redirect('/profile/'.$cus_dis_title);
    	}
    	else 
    	{
            if($numof_cans <= 0)
            {
                $req->session()->flash('order_errr', ' Please insert CAN number more then 0 ');
                    return redirect('/profile/'.$cus_dis_title);
            }
            else 
            {
                $insrt_order = Dis_Order::insert([
                    'ord_dis_id' => $cus_dis_id,
                    'ord_cit_id' => $cus_dis_city, //date('Y-m-d H:i:s'),
                    'ord_fulladdr' => $cus_address,
                    'ord_cusname' => $cus_name,
                    'ord_cusnumb' => $cus_numb,
                    'ord_can_no' => $numof_cans,
                    'ord_date' => date('Y-m-d H:i:s'),
                    'ord_status' => 1,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                if($insrt_order)
                {
                    $req->session()->flash('order_success', ' Order Successfully Placed. ');
                    return redirect('/profile/'.$cus_dis_title);
                }
            }
    		
    	}
    }
    function agencylogin()
    {
    	if(session('ad_agency'))
    	{
    		return redirect('/Agency_Dashboard');
    	}
    	return view('agencylogin');
    }

    function agencygetlog(request $req)
    {
    	$email = $req->input('email');
    	$password = $req->input('password');
    	if ($email == "" || $password == "") {
    		$req->session()->flash('agencylog_err', ' Email or password empty ');
	    	return redirect('/LoginAgency');
    	}
    	else 
    	{
    		$agency_log_data= Dis_Agency::where('ds_email', $email)
    		->get();
    		if(count($agency_log_data) > 0){
    			 
                $mypass = Crypt::decryptString($agency_log_data[0]['ds_pass']);
                if($password == $mypass)
                {
                    if($agency_log_data[0]['ds_status'] == 1 ){
                        $req->session()->put('ad_agency',Crypt::encryptString($agency_log_data[0]['ds_id']));
                        return redirect('/Agency_Dashboard');
                    }
                    else if($agency_log_data[0]['ds_status'] == 0 ){
                        $req->session()->flash('agencylog_err', ' Your Agency is blocked please contact Admin ');
                        return redirect('/LoginAgency');
                    } elseif($agency_log_data[0]['ds_status'] == 3 ){
                        $req->session()->flash('agencylog_err', ' Your Agency will be accepted soon by admin  ');
                        return redirect('/LoginAgency');
                    }
                    
                }
                else {
                    $req->session()->flash('agencylog_err', ' Email or password Invalid ');
	    			return redirect('/LoginAgency');
                }
    		}
    		else {
    			$req->session()->flash('agencylog_err', ' Email or password Invalid ');
	    		return redirect('/LoginAgency');
    		}
    	}
    }
    function agencyxdashboard()
    {
    	if(session('ad_agency'))
    	{
    		$dat = $this->get_orders(session('ad_agency'));
    		return view('agency_dashboard', [
    			'agency_ord_data' => $dat['agency_ord_data'],
    			'ords_count' => $dat['ords_count']

    		]);

   //  		$agency_id = Crypt::decryptString(session('ad_agency'));

   //  		$agency_ord_data = Dis_Order::where('ord_dis_id', $agency_id)
   //  		->where('ord_status', 1)
			// ->join('city','dis_order.ord_cit_id','=','city.cit_id')
			// ->join('dis_agency','dis_order.ord_dis_id','=','dis_agency.ds_id')
   //  		->get();
    		
   //  		$ords_count = count($agency_ord_data);

    		//echo "/////////////";
    		//return $agency_ord_data;
    		// return view('agency_dashboard', [
    		// 	'agency_ord_data' => $agency_ord_data,
    		// 	'ords_count' => $ords_count

    		// ]);
    	}
    	else {
    		return redirect("/LoginAgency");
    	}
    }
    function agency_xout(request $req)
    {
    	if(session('ad_agency'))
    	{
    		$req->session()->forget('ad_agency');
    		return redirect('/LoginAgency');
    	}
    	else 
    	{
    		return redirect('/LoginAgency');
    	}
    }
    function listoforders()
    {
    	if(session('ad_agency'))
    	{
    		$dat = $this->get_orders(session('ad_agency'));
    		
    		return view('listoforders', [
    			'agency_ord_data' => $dat['agency_ord_data'],
    			'ords_count' => $dat['ords_count']

    		]);
    	}
    	else 
    	{
    		return redirect('/LoginAgency');
    	}
    }

    function deliverorder($ord_idxx)
    {
    	if(session('ad_agency'))
    	{
	    	try {
			    $ord_id_decry = Crypt::decryptString($ord_idxx);
	    		$status = 2;
	    		$dataaa = Dis_Order::where('ord_id', $ord_id_decry)
	    		->update([
	    			"ord_status" =>  $status
	    		]);
	    		return redirect('/list_of_orders');
	    		
		    	

			} catch (DecryptException $e) {
			    return redirect('/list_of_orders');
			}
		}
    	else 
    	{
    		return redirect('/LoginAgency');
    	}
    	
    	
    	
    }


    function deliveredorders()
    {
    	if(session('ad_agency'))
    	{
    		$dat = $this->get_orders(session('ad_agency'), 2);
    		//return $dat['agency_ord_data'][0]['ord_status'];
    		return view('listofdeliveredorder', [
    			'agency_ord_data' => $dat['agency_ord_data'],
    			'ords_count' => $dat['ords_count']

    		]);
    	}
    	else 
    	{
    		return redirect('/LoginAgency');
    	}
    }
    function agencyeditprofile()
    {
    	if(session('ad_agency'))
    	{
    		$agency_edit_decry = Crypt::decryptString(session('ad_agency'));
    		$agency_edit_data = Dis_Agency::where('ds_id', $agency_edit_decry)
    		->where('ds_status', 1)
    		->get();

    		return view('agencyeditprofile',['agency_edit_data'=>$agency_edit_data]);	
    	}
    	else 
    	{
    		return redirect('/LoginAgency');
    	}
    }
    function updateprofile(request $req)
    {
    	if(session('ad_agency'))
    	{
    		try {

			    $agency_edit_decry = Crypt::decryptString(session('ad_agency'));
			    $ag_name = $req->input('ag_name');
		    	$ag_price = $req->input('ag_price');
		    	$ag_location = $req->input('ag_location');
		    	$ag_phone = $req->input('ag_phone');
		    	if($ag_name == "" || $ag_price=="" || $ag_location=="" || $ag_phone==""){
		    		$req->session()->flash('ag_edit_errs', 'Please Fill all fields.. ');
    				return redirect('/agencyprofile');
		    	}else {
		    		$done = Dis_Agency::where('ds_id', $agency_edit_decry)
			    		->update([
			    			"ds_title" =>  $ag_name,
			    			"ds_price" =>  $ag_price,
			    			"ds_location" =>  $ag_location,
			    			"ds_phone" =>  $ag_phone
			    		]);

		    		$req->session()->flash('ag_edit_succ', 'Profile Updated Successfully');
			    		return redirect('/agencyprofile');

		    	}
    			

			} catch (DecryptException $e) {
			    return redirect('/agencyprofile');
			}
    			
    	}
    	else 
    	{
    		return redirect('/LoginAgency');
    	}
    }


    function get_orders($data, $status = 1)
    {
    	$agency_id = Crypt::decryptString($data);

		$agency_ord_data = Dis_Order::where('ord_dis_id', $agency_id)
		->where('ord_status', $status)
		//->join('city','dis_order.ord_cit_id','=','city.cit_id')
		->join('dis_agency','dis_order.ord_dis_id','=','dis_agency.ds_id')
		->get();
		
		$ords_count = count($agency_ord_data);
		return $dat = array(
			'agency_ord_data' => $agency_ord_data,
			'ords_count' => $ords_count
		);
    }
    function placerating(request $req)
    {
        $cus_dis_title = $req->input('cus_dis_title');;
        $rt_ds_id = Crypt::decryptString($req->input('re_ds_id'));
        $rt_rating = $req->input('rt_rating');
        $rt_cusnumb = $req->input('cus_numb');
        if ($rt_cusnumb == "" || $rt_rating==0 || $rt_ds_id<=0) {
            $req->session()->flash('rating_errr', 'Please Fill number field Or select the stars ');
            return redirect('/profile/'.$cus_dis_title);
        }else if(!is_numeric($rt_cusnumb)){
            $req->session()->flash('rating_errr', 'Please Enter Correct number');
            return redirect('/profile/'.$cus_dis_title);
        }else if($rt_rating<=0 || $rt_rating>5){
            $req->session()->flash('rating_errr', 'Rating must be greather 0 and less then 5');
            return redirect('/profile/'.$cus_dis_title);
        }else {
            $rating_data= Rating::where('rt_cusnumb',$rt_cusnumb)
            ->where('rt_ds_id',$rt_ds_id)
            ->get();
            if(count($rating_data) > 0)
            {
                
                $req->session()->flash('rating_errr', ' Number already exist! You can only rate onces ');
                return redirect('/profile/'.$cus_dis_title);
            }else 
            {
                $insrt_rating = Rating::insert([
                    'rt_ds_id' => $rt_ds_id,
                    'rt_cusnumb' => $rt_cusnumb,
                    'rt_rating' => $rt_rating
                ]);
                if($insrt_rating)
                {
                    $req->session()->flash('rating_success', ' Successfully Rated. ');
                    return redirect('/profile/'.$cus_dis_title);
                }
            }
        }
    }
}


