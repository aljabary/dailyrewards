<?php
/*** DailyReward v.1.0
* Daily v.1.0
* Author: Ibnu Nugraha
* Model Date today
*/


namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model 
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table ='daily';
	 public $incrementing  =false;
    protected $fillable = [
        'today', 
    ];
	
	public function Year(){
		$exp = explode('-',$this->today);
		return $exp[0];
	}
	
	public function Month(){
		$exp = explode('-',$this->today);
		return $exp[1];
	}
	
	public function Day(){
		$exp = explode('-',$this->today);
		return $exp[2];
	}

}
