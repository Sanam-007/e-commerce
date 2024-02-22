<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Picture;
use Session;
use DB;

class AuthController extends Controller
{
        
        public function login(){
            return view('login'); 
        }

        public function landing(){
            $products=Product::all();
            foreach($products as $product){
                $pid = $product->id;
                $image=Picture::where('pk','=',$pid)
                ->first();
                if ($image!=null){
                    echo $pid.' '.$image->image;
                }
                
            }
            $data=compact('products');
            echo ($products[0]->name);  
               
            //return view('landing.pages.landing')->with($data);
            
        }

         
        public function View($id)
        {
            
            $product= Product::find($id);
           
            return view ('landing.pages.view',compact('product'));

        }




   
    public function loginstore(Request $request){
        $email=$request->email;
        $password=$request->password;
       
         $customer=Customer::where('email','=',$email)
             ->where('password','=',$password)
             ->first();
         if(!$customer){
            $admin=Admin::where('email','=',$email)
            ->where('password','=',$password)
            ->first();

            if(!$admin){
            $seller=Seller::where('email','=',$email)
            ->where('password','=',$password)
            ->first();
            if(!$seller){
                return redirect()->back()->with('err_msg','Invalid msg');
            }
            else{
                $request->session()->put('email',$seller->email);
                $request->session()->put('role','seller');
                $request->session()->put('id',$seller->id);
                 return redirect()->to('seller') ;
             }            
        
        }
        else{
            $request->session()->put('email',$admin->email);
            $request->session()->put('role','admin');
            $request->session()->put('id',$admin->id);
             return redirect()->to('admin/profile') ;
         }    
        }  
        else{
            $request->session()->put('email',$customer->email);
            $request->session()->put('role','customer');
            $request->session()->put('id',$customer->id);
             return redirect()->to('customer') ;
                                               
         } 
         
}
        
    public function admindashboard(){
        return view ('admin');
    } 



    public function signupstore(Request $request){
        
            $name=$request->name;
            $email=$request->email;
            $pass1=$request->pass1;
            $pass2=$request->pass2;

            $obj=new Customer();

            $email2=Customer::where('email','=',$email)
                ->first();
            if(!$email2){
                if ($pass1==$pass2 ){
                    $obj->password =$pass1;
                    $obj->name = $name;
                    $obj->email = $email;
                    if($obj->save()){
                        return redirect()->to('login')->with('msg','account created succesfully. Now log in');
                    }
                }         
                    
                else{
                    return redirect()->back()->with('err_msg','password does not match');
                    
                }                                        //return redirect()->to('admin.create_position') ;
            }
            else{
                return redirect()->back()->with('err_msg','email already exist');
            }
       }                       
    
    
    public function logout(){
            Session::forget('email');
            Session::forget('role');
            return redirect('login');
    }
}
