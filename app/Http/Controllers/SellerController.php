<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use DB;
use Intervention\Image\Facades\Image;
use App\Models\Customer;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Picture;

class SellerController extends Controller
{
        public function sellerdashboard(){
            $id = Session::get('id');
            $seller= Seller::find($id);       
            return view ('seller.pages.seller',compact('seller'));
        } 

        public function createProduct(){
            $category = Category::all();
            return view('seller.pages.productPost',compact('category'));
            
            }

    public function insertProduct(Request $request){
        $name=$request->name;
        $price=$request->price;
        $amount=$request->amount;
        $description=$request->description; 
        $category=$request->category;
        $id = Session::get('id'); 
        
        $obj=new Product();
        $obj->name = $name;
        $obj->amount = $amount;
        $obj->price = $price;
        $obj->description = $description;
        $obj->category_id = $category;  
        $obj->seller_id=$id;  

        if($obj->save()){
            $products=Product::all();
            foreach($products as $product){
                $pid = $product->id;
            }
           
            foreach( $request->file('fileToUpload') as $originalImage )   {
                $temp = $originalImage->getClientOriginalName();
                echo $temp;  
                
                $thumbnailImage = Image::make($originalImage);     
                $thumbnailPath = public_path().'/thumbnail/';
                $originalPath = public_path().'/img/';     
                //rename image;
                $temp = $originalImage->getClientOriginalName();
                $temp_ext=(explode(".",$temp));
                $ext = end($temp_ext);
                $filename = time().'.'.$ext;
                echo $filename; 
                $obj2=new Picture();
   
                $obj2->image=$filename; 
                $obj2->pk=$pid;
                $obj2->save();
                $thumbnailImage->save($originalPath.$filename);
                $thumbnailImage->resize(150,150);
                $thumbnailImage->save($thumbnailPath.$filename); 
            }               
            return redirect()->to('product-post')->with('msg','product posted succesfully');
        }
        else{
            return redirect()->back()->with('err_msg','there is a error');
        }         
          
   }

        // public function storeImage(Request $r){
        //     $id = Session::get('id');            
                         
        //      $products->save();
        //      return redirect()->to('seller') ;
     
        //  }
         public function showProduct(){
            $id = Session::get('id');    
            $products=Product::where('seller_id','=',$id)  
            ->get();
           
            $data=compact('products');
             
            return view('seller.pages.productTable')->with($data);
            }



}
