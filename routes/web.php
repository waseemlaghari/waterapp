<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListCitiesController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchmodController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

Route::get('/Admin',[Admin::class,'adminloginpg']);

Route::post('/ad_data',[Admin::class,'get_admin_data']);
Route::get('/ad_data',[Admin::class,'get_admin_data']);

Route::get('/AdminDashboard', [DashboardController::class,'adminLogin']);

Route::get('/lstacptagency', [DashboardController::class, 'lstacptagency']); //List for accept
Route::get('/acptagent/{ds_id}', [DashboardController::class, 'acptagent']);

Route::get('/ddxlogxxd', [DashboardController::class, 'admin_logout']);

Route::get('/lstcities', [ListCitiesController::class,'citieslist']); //List of Cities


Route::get('/xbddel/{ct_id}', [ListCitiesController::class, 'delete_city']); //City Delete

Route::get('/xbdedi/{ct_id}',[ListCitiesController::class, 'show_city']); //Show City For Edit

Route::post('/cit_editform',[ListCitiesController::class, 'cit_edit_data']); // City Edit
Route::get('/cit_editform',[ListCitiesController::class, 'cit_edit_data']); // City Edit

Route::get('/RegisterAgency',[AgencyController::class, 'registeragency']); //Register Agency form

Route::post('/agregisxt', [AgencyController::class, 'agencygetdata']); //Insert Agency
Route::get('/agregisxt', [AgencyController::class, 'agencygetdata']); //Insert Agency

Route::get('/searchbycity', [SearchmodController::class, 'searchagency']); //search Module

Route::get('/profile/{ds_title}',[AgencyController::class, 'profile']); //Agency Profile

Route::post('/placeorder', [AgencyController::class, 'sendorder']); //Send Order
Route::get('/placeorder', [AgencyController::class, 'sendorder']); //Send Order

Route::get('/LoginAgency', [AgencyController::class, 'agencylogin']); //Agency Login Page

Route::post('/agencylogxx', [AgencyController::class, 'agencygetlog']); //Agency Login get data
Route::get('/agencylogxx', [AgencyController::class, 'agencygetlog']);

Route::get('/Agency_Dashboard', [AgencyController::class, 'agencyxdashboard']); //Agency Dashboard
Route::get('/Agency_check', [AgencyController::class, 'agencyx']); //agency check

Route::get('/agencylogxout', [AgencyController::class, 'agency_xout']);

Route::get('/list_of_orders', [AgencyController::class, 'listoforders']); //List of orders

Route::get('/deliverordr/{ord_idxx}', [AgencyController::class, 'deliverorder']); //Deliver Order Link

Route::get('/list_of_delivered_orders', [AgencyController::class, 'deliveredorders']); // Order Deliverd Status

Route::get('/agencyprofile', [AgencyController::class, 'agencyeditprofile']);

Route::post('/proupdedit', [AgencyController::class, 'updateprofile']); //Agency Profile edit
Route::get('/proupdedit', [AgencyController::class, 'updateprofile']); //

Route::get('/adlstofagencies', [DashboardController::class, 'adlistofagency']);

Route::get('/adlstoforders', [DashboardController::class, 'adlistoforders']);

Route::get('/blkagent/{ds_id}',[DashboardController::class, 'blkagency']);

Route::get('/adlstofblkagencies', [DashboardController::class, 'adlistofblkagency']);


Route::get('/unblkagent/{ds_id}',[DashboardController::class, 'unblkagency']);


//Contact Us page..
Route::get('/contactus' , [HomeController::class, 'contactus']);

Route::post('/contactform', [HomeController::class, 'contactdata']);
Route::get('/contactform', [HomeController::class, 'contactdata']);

Route::get('/lstmessages', [DashboardController::class, 'lstmessages']);
Route::get('/detailmessage/{id}', [DashboardController::class, 'detailmessage']);
//Rating..
Route::post('/placerating', [AgencyController::class, 'placerating']);

//About Us
Route::get('/aboutus',[HomeController::class, 'aboutus']);






// eyJpdiI6IkNFNEhRRUYycnF1ZThSbUx0ZDJKTFE9PSIsInZhbHVlIjoiTGNHYThkckhYZTA1Y0xLS04rMUI0QT09IiwibWFjIjoiODYyY2RkY2FiODJiYmRlZWRkZjNmZjNlYTM2NmY5Yjk1MmJjNTQ5ZjBkOTk5ZTA2YWI2YmM1NzQwYzRmZjg3MCIsInRhZyI6IiJ9



// eyJpdiI6IjhvdTNTR3RiTGZwQi9sVXdPSTk1a2c9PSIsInZhbHVlIjoiS2tLeTZFejVUUFN0aWVuODl3YkJ6UT09IiwibWFjIjoiOWRlMzIyMzAxM2VmMWM2ZGY3ZWRkZWUwZTU1NTZkOGIyOTMyMDM1Y2VhODA1ZTc5NWE3MTVlMzJmNjNlMWQ5NyIsInRhZyI6IiJ9