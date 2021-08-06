<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'max_date_execution',
    ];

    public function getMaxDateExecutionAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s',$value)->format('d-m-Y h:i');
    }

    public function getIsExpired(){
        return Carbon::createFromFormat('Y-m-d H:i:s',$this->attributes['max_date_execution'])->isPast();
    }

    public function getIsForUserLoggedIn(){
        return $this->attributes['user_assigned_id'] == \Illuminate\Support\Facades\Auth::id();
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function userAssignedId()
    {
        return $this->hasOne(User::class,'id','user_assigned_id');
    }

}
