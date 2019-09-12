<?php
/*** DailyReward v.1.0
* RewardsController v.1.0
* Author: Ibnu Nugraha
* Handle for rewards space
*/

namespace App\Http\Controllers;

use App\Model\Daily;
use App\Model\Reward;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RewardsController extends Controller
{
	//Limit Rewards
	private $limitReward	=	200000;
	/** rewards v.1.0.
	*	diplay page for user can get rewards
	*	
	*/
    function rewards(Request $req){
		$data['user'] 	= Auth::User();
		$data['today'] 	= Daily::first();
		return view('user.getreward',$data);
	}
	
	/** getreward v.1.0.
	*	Logic daily reward
	* 	@params: $id | int = User ID
	*	status: 1 | user get a reward
	*			2 | user can not get a reward
	*			3 | reward reached the limit
	*/
	function getreward($id, Request $req){
		//retrieve user and date today
		$user 	= User::find($id);
		$today 	= Daily::first();
		
		//User found
		if($user){
			$response_code 	= 	200;																			//default response code
			$rewardpoin 	= rand($user->min_range,$user->max_range);											//random reward value
			$reward_today 	= Reward::where('user_id',$user->user_id)->where('today',$today->today)->first();	//checking whether current user has got reward or not
			//if user has got a reward
			if($reward_today){ 
				$rewardpoin =	0;
				$status		=	2;
			}else{
				$totalRewardForToday	=	Reward::where('today',$today->today)->sum('reward');				//calculate the total reward has been obtained by all users
				if($totalRewardForToday < $this->limitReward){													//if limit reward has no been reacheed
					if(($totalRewardForToday + $rewardpoin)> $this->limitReward){								//the total reward has been obtained by all users plus the reward will be obtained
						$reward_max		=	$this->limitReward - $totalRewardForToday;							// new random range		
						if($reward_max <= 15000){																// reward minimum
							$rewardpoin = $reward_max;
						}else{
							$rewardpoin = rand(0,$reward_max);
						}
					}
					$reward			=	new Reward();
					$reward->user_id= $user->user_id;
					$reward->reward	= $rewardpoin;
					$reward->today	= $today->today;
					$reward->save();
					$status			=	1;
					
				}else{
					$rewardpoin 	=	0;
					$status			=	3;
				}
			}
		}else{
			$response_code 			= 404;
			$rewardpoin 			= 0;
		}
		
		return response()->json(['status'=>$status,'reward'=>$rewardpoin],$response_code);
	}
    //
}
