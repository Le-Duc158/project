<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	public $timestamps = false;
    protected $table = "orders";
    protected $fillable = [
     'user_id', 'name','Country', 'city','district', 'commune','	email', 'phone','note',
    ];
    


}