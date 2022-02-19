<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dis_Agency;
use App\Models\Contact;
use App\Models\Rating;

class HomeController extends Controller
{
	
    function index()
    {
    	$agcn_data = Dis_Agency::where('ds_status', 1)
        ->join('city','dis_agency.ds_cit_id','=','city.cit_id')
    	->inRandomOrder()
    	->limit(3)
    	->get();
        $ratting_couting=0;
            foreach($agcn_data as $agcy){
                $id_agency = $agcy['ds_id'];
                $rating_data = Rating::where('rt_ds_id', $id_agency)
                ->get();
                $ratting_couting=0;
                foreach($rating_data as $ratting){
                    $ratting_couting += $ratting['rt_rating']; 
                }
                $total_ratings = count($rating_data);

                if($total_ratings > 0 ) {
                    $final_rating = ($ratting_couting/$total_ratings);
                }
                else {
                    $final_rating = 0;
                }
                $finalskdf[] = $final_rating;
            }
    	return view('main_homepage', ['agcn_data'=> $agcn_data, 'finalskdf'=> $finalskdf]);
    }
    function contactus()
    {
        return view('contactus');
    }
    function contactdata(request $req) 
    {
        $cn_name = $req->input('name');
        $cn_email = $req->input('email');
        $cn_subject = $req->input('subject');
        $cn_message = $req->input('message');
        if($cn_name == "" || $cn_email=="" || $cn_subject=="" || $cn_message==""){
            $req->session()->flash('contact_errr', ' Please fill all fields ');
            return redirect('contactus');
        }
        else {
            $insrt_contact = Contact::insert([
                    'cn_name' => $cn_name,
                    'cn_email' => $cn_email,
                    'cn_subject' => $cn_subject,
                    'cn_message' => $cn_message
                ]);
                if($insrt_contact)
                {
                    $req->session()->flash('contact_success', ' Messege Successfully Sent. ');
                    return redirect('contactus');
                }
        }
    }
    function aboutus()
    {
        return view('aboutus');
    }

}
