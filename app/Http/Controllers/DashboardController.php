<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Dis_Agency;
use App\Models\Dis_Order;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class DashboardController extends Controller
{
    //
    function adminLogin()
    {
    	if(session('aduser'))
    	{
    		// $cities_data=City::where('cit_status',1)
    		// ->orderby('cit_name')
    		// ->paginate(10);
            // ,['cities_data'=>$cities_data]
            //Messsages
            $cntmessagedata = Contact::get();
            $cntmessage = count($cntmessagedata);
            //Cities
            $citiestotdata = City::where('cit_status', 1)->get();
            $citiestot = count($citiestotdata);
            //Plants
            $plantstotdata = Dis_Agency::where('ds_status', 1)->get();
            $plantstot = count($plantstotdata);
            //Orders
            $orderstotdata = Dis_Order::get();
            $orderstot = count($orderstotdata);

    		return view('admindashboard', [
                'cntmessage'=> $cntmessage,
                'citiestot'=> $citiestot,
                'plantstot'=> $plantstot,
                'orderstot'=> $orderstot
            ]);
    	}
    	else 
    	{
    		return redirect('Admin');

    	}
    	//$data= Administrator::all();
    	//echo $data[0]['ad_email'];
    	//return DB::select("select * from administrator");
    	
    }
    function admin_logout(request $req) 
    {
    	if(session('aduser'))
    	{
    		$req->session()->forget('aduser');
    		return redirect('Admin');
    	}
    	else 
    	{
    		return redirect('Admin');
    	}
    }

    function adlistofagency()
    {
        if(session('aduser'))
        {
            $agcn_data = Dis_Agency::where('ds_status', 1)
            ->join('city','dis_agency.ds_cit_id','=','city.cit_id')
            ->get();
            return view('adlistofagency', ['agcn_data'=> $agcn_data]);
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function adlistoforders()
    {
        if(session('aduser'))
        {
            $adord_data = Dis_Order::join('city','dis_order.ord_cit_id','=','city.cit_id')
            ->join('dis_agency','dis_order.ord_dis_id','=','dis_agency.ds_id')
            ->get();
            return view('adlistoforders', ['adord_data'=> $adord_data]);
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function blkagency($ds_id)
    {
        if(session('aduser'))
        {
            try {
                $agency_id_decry = Crypt::decryptString($ds_id);
                $up_ds_data = Dis_Agency::where('ds_id', $agency_id_decry)
                ->where('ds_status', 1)
                ->update(["ds_status" =>  0]);
                return redirect('/adlstofagencies');

            } catch (DecryptException $e) {
                return redirect('/Admin');
            }
            
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function lstacptagency()
    {
        if(session('aduser'))
        {
           $agcnacpt_data = Dis_Agency::where('ds_status', 3)
            ->join('city','dis_agency.ds_cit_id','=','city.cit_id')
            ->get();
            return view('adlistofacptagency', ['agcnacpt_data'=> $agcnacpt_data]);
            
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function acptagent($ds_id)
    {
        if(session('aduser'))
        {
            try {
                $agency_id_decry = Crypt::decryptString($ds_id);
                $up_ds_data = Dis_Agency::where('ds_id', $agency_id_decry)
                ->where('ds_status', 3)
                ->update(["ds_status" =>  1]);
                return redirect('/lstacptagency');

            } catch (DecryptException $e) {
                return redirect('/Admin');
            }
            
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function adlistofblkagency()
    {
        if(session('aduser'))
        {
           $agcnblk_data = Dis_Agency::where('ds_status', 0)
            ->join('city','dis_agency.ds_cit_id','=','city.cit_id')
            ->get();
            return view('adlistofblkagency', ['agcnblk_data'=> $agcnblk_data]);
            
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function unblkagency($ds_id)
    {
        if(session('aduser'))
        {
            try {
                $agency_id_decry = Crypt::decryptString($ds_id);
                $up_ds_data = Dis_Agency::where('ds_id', $agency_id_decry)
                ->where('ds_status', 0)
                ->update(["ds_status" =>  1]);
                return redirect('/adlstofblkagencies');

            } catch (DecryptException $e) {
                return redirect('/Admin');
            }
            
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function lstmessages()
    {
        if(session('aduser'))
        {
            $contact_data = Contact::all();
            return view('adlistofmessages', ['contact_data'=> $contact_data]);
        }
        else 
        {
            return redirect('Admin');
        }
    }
    function detailmessage($id)
    {
        if(session('aduser'))
        {
            try {
                $cn_id = Crypt::decryptString($id);
                $contact_detail = Contact::where('cn_id', $cn_id)
                ->get();
            return view('detailmessage', ['contact_detail'=> $contact_detail]);

            } catch (DecryptException $e) {
                return redirect('/lstmessages');
            }
            
        }
        else 
        {
            return redirect('Admin');
        }
    }

    // function delete_city($ct_id)
    // {
    // 	if(session('aduser'))
    // 	{
    // 		$data= City::where('cit_id', $ct_id)->delete();
    // 		return redirect('Admin');
    // 	}
    // 	else 
    // 	{
    // 		return redirect('Admin');
    // 	}
	   	
    // }

    // function show_city($ct_id)
    // {
    // 	if(session('aduser'))
    // 	{
	   //  	$citeddat = City::where('cit_id', $ct_id)->get();
    // 		return view('admin_cit_edit',['admin_cit_data'=>$citeddat]);
    // 	}
    // 	else 
    // 	{
    // 		return redirect('Admin');
    // 	}
    // }

    // function cit_edit_data(request $req)
    // {
    // 	if(session('aduser'))
    // 	{
	   //  	$cit_id = $req->input('cit_id');
	   //  	$cit_name = $req->input('cit_name');
	   //  	$cit_status = $req->input('cit_status');
	   //  	if($cit_id == "" || $cit_name == "" || $cit_status == "")
	   //  	{
	   //  		return redirect("AdminDashboard");
	   //  	}
	   //  	else 
	   //  	{
	   //  		$data= City::where('cit_id', $cit_id)
	   //  		->update([
	   //  			'cit_name' => $cit_name,
	   //  			'cit_status' => $cit_status
	   //  		]);
	   //  		return redirect('Admin');
	   //  	}
    // 	}
    // 	else 
    // 	{
    // 		return redirect('Admin');
    // 	}
    // }

}
