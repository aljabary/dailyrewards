<?php
/*** DailyReward v.1.0
* Reward v.1.0
* Author: Ibnu Nugraha
* Model Reward
*/

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model 
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table ='user_rewards';
	 protected $primaryKey ='reward_id';
    protected $fillable = [
        'user_id','today','reward' 
    ];
	function User(){
		return $this->belongsTo('App\User','user_id');
	}

}
