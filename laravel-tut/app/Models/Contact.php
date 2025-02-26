<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];



    //to make inverse relation in one - one
    //when want to attach foreign key table with primary key table i.e. called inverse realtion
    public function CustomerInfo(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
