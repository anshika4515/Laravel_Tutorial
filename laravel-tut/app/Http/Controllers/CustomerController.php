<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class  CustomerController extends Controller
{
    //search in the customer table
    public function index(){
        //one to one realtion
        $customers = Customer::where('gender','Male')->with('ContactInfo')->get();
        return $customers;
    }

    //search from both Customer and Contacts
    public function useOfWithWhereHas(){
       $customers = Customer::where('gender','Male')
                    ->withWhereHas('ContactInfo',function($query){
                        $query->where('city','Japan');
                     })->get();
        return $customers;
    }

    //search from both Customer and Contacts but show data only from customers
    public function useOfWhereHas(){
        $customers = Customer::where('gender','Male')
                     ->WhereHas('ContactInfo',function($query){
                         $query->where('city','Japan');
                      })->get();
         return $customers;
     }

     //can create by one-one relation
     public function create(){
        $customer = Customer::create([
            'name' => 'Abhi',
            'age' => 19,
            'gender' => 'Male',
        ]);

        $customer->ContactInfo()->create([
            'email' => 'abhi@gmail.com',
            'city' => 'dubai',
        ]);
     }

}
