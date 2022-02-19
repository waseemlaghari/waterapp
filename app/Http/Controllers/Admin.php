<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Administrator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class Admin extends Controller
{
    //
    public function adminloginpg()
    {
    	if(session('aduser'))
    	{
    		return redirect('AdminDashboard');
    	}
    	return view("adminlogin");
    	
    }
    public function get_admin_data(request $req)
    {
    	$email = $req->input('ademail');
    	$pass = $req->input('adpass');
    	if($email == "" || $pass == ""){
    		$req->session()->flash('ad_err', 'Please enter correct Email Or Password');
    		return redirect('Admin');
    	}else 
    	{
    		$data= Administrator::where('ad_email',$email)
            // ->where('ad_pass', Crypt::encryptString($pass))
            ->get();
    		if(count($data) > 0)
    		{
                $mypass = Crypt::decryptString($data[0]['ad_pass']);
                if($pass == $mypass)
                {
                    $req->session()->put('aduser', Crypt::encryptString($data[0]['ad_id']));
                    return redirect('AdminDashboard');
                }
                else {
                    $req->session()->flash('ad_err', 'Please enter correct Email Or Password');
                    return redirect('Admin');
                }
    		}
    		else {
    			$req->session()->flash('ad_err', 'Please enter correct Email Or Password');
    			return redirect('Admin');
    		}
    	}
    }
}
