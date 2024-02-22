<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use DB;
use App\Models\Customer;
use App\Models\Product;

class CustomerController extends Controller
{
    public function customerdashboard(){
        $id = Session::get('id');
        $customer= Customer::find($id);
        
        
        return view ('customer.customer',compact('customer'));
    } 
}
