<?php
/*** DailyReward v.1.0
* UserController v.1.0
* Author: Ibnu Nugraha
* Handle for user space
*/
namespace App\Http\Controllers;

use App\Model\Daily;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    
	/* login_view v.1.0.
	*	diplay page for user login
	*/
	function login_view(){		
		return view('user.login',$data);
	}
	
	/* auth v.1.0.
	*	Authentication for user attempt login
	*/
	function auth(Request $req){
		$credentials = $req->only('email', 'password');
		// Authentication
        if (Auth::attempt($credentials)) {
            // Authentication passed...
			// get user by email
			$user =User::where('email',$req->email)->first();
			
			// star user session
			Auth::login($user); 
			if($user->is_admin){ 								//if user as Admin redirect to admin page
					return redirect()->intended('admin');
			}else{
				 return redirect()->intended('/user/rewards');
			}
        }else{
			// Authentication failed
			return redirect()->route('login')->with('error_login','1');
		}
	}
	/* login_view v.1.0.
	*	diplay page for user login
	*/
	function getuser($id,Request $req){		
		$user	=	User::find($id);
		return response()->json($user);
	}
	/**	logout v.1.0.
	*	User log out
	*/
	function logout(){
		Auth::logout(); // end user session
		//redirect to login page
		return redirect()->route('login');
	}
	function docs(){		
		return view('user.docs',$data);
	}
    //
}
