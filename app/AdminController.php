<?php
/*** Daily Rewards  v.1.0
* AdminController v.1.0
* Author: Ibnu Nugraha
* handle Admin space
*/
namespace App\Http\Controllers;

use App\Model\Daily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{ 
	/* dashboard v.1.0
	*  Display Admin dashboard page
	*/
	function dashboard(){
		$data['today'] 	= Daily::first();
		$data['user'] 	= Auth::User();
		return view('admin.dashboard',$data);
	}
	/* setdate v.1.0
	*/
	function setdate(Request $req){
		if($req->date_now){
			$today 		=  Daily::first();									//retrieve date
			DB::table('daily')->update(['today'=>$req->date_now]); 			//update date for daily rewards
			$status 	= 1;
			$message 	= 'Date Success updated';
		}else{
			$status 	= 2;
			$message 	= 'Date failed for updated';
		}
		return response()->json(['status'=>$status,'message'=>$message]);
	}

    
}
