<?php
/*** DailyReward v.1.0
* User v.1.0
* Author: Ibnu Nugraha
* Model User
*/


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table 		='users';
	protected $primaryKey 	='user_id';
    protected $fillable = [
        'name', 'email','min_range','max_range','user_id','is_admin'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
