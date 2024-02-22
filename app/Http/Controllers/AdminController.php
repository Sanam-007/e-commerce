<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Seller;
use App\Models\Category;
use App\Models\Product;
use Session;
use DB;
class AdminController extends Controller
{
            public function admindashboard(){
                    
                    $id = Session::get('id');
                    $admin= Admin::find($id);
                
                    return view ('admin.pages.admin',compact('admin'));
            } 
            public function createSeller(){
                return view('admin.pages.create_seller');
                }                

            public function insertSeller(Request $request){
                    $name=$request->name;
                    $phone=$request->phone;
                    $address=$request->address;
                    $password=$request->password;
                    $email1=$request->email;
                    $email2=(explode("@",$email1));
                    $domain = end($email2);

                    if($domain=="gmail.com"||$domain=="yahoo.com"||$domain=="outlook.com"){                      
                          $email3=Seller::where('email','=',$email1)
                        ->first();
                        if(!$email3){
                                $obj=new Seller();
                                $obj->name = $name;
                                $obj->email = $email3;
                                $obj->phone = $phone;
                                $obj->address = $address;
                                $obj->password = $password;
                                
                                if($obj->save()){
                                  return redirect()->to('create-seller')->with('msg','Seller created succesfully');
                                }                               
                                    }
                        
                        else{
                            return redirect()->back()->with('err_msg','email already exist');
                         }                           
                            
                    }  
                    else{
                        return redirect()->to('create-seller')->with('err_msg','please enter a valid email');
                    }  
                        
                         
           }

           public function createCategory(){
            return view('admin.pages.create_category');
            }

            public function insertCategory(Request $request){
                $name=$request->name;            
                $name2=strtolower($name); 
                $obj=new Category();
                
                $name3=Category::where('name','=',$name2)
                ->first();
                if(!$name3){
                    $obj->name = $name2;                  
                    $obj->save();
                    return redirect()->to('create-category')->with('msg','Category created succesfully');
                }
                else{
                    return redirect()->back()->with('err_msg','name already exist');
                    
                }           
            }
            public function showSeller(){
                $sellers=Seller::all();
                $data=compact('sellers');
                 
                return view('admin.pages.show_seller')->with($data);
                }

               
                public function edSeller($id){
                    $seller= Seller::find($id);
                      if(is_null($seller)){
                        return redirect()->to('show_seller');
                        }

                    else{

                $data=compact('seller');
                return view ('admin.pages.edit_seller')->with($data);
                                }
                }                
                public function updateSeller($id,Request $request){
                    $seller= Seller::find($id);
                    $seller->name=$request['name'];
                    $seller->email=$request['email'];
                    $seller->phone=$request['phone'];
                    $seller->address=$request['address'];
                    $seller->save();                    
                    return redirect()->to('table-seller')->with('msg','Seller updated succesfully') ;
                    
                }               
                
                public function deleteSeller($id){
                    $seller= Seller::find($id);
                     
                     if(!is_null($seller)){
                         $seller->delete();
                     }
                     return redirect()->to('table-seller')->with('err_msg','Seller deleted succesfully');
                     }
}
