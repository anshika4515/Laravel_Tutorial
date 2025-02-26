<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        $contact = Contact::with('CustomerInfo')->get();
        return $contact;
    }
}
