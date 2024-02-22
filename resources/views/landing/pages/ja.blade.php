
@extends('admin.layouts.default')
@section('xyz')
<main id="main" class="main">
    <section class="section">
      <div class="row align-items-top">
      @foreach($products as $product) 
      
      
         
        <div class="col-lg-3">        
        <!-- Card with an image on top -->
          <div class="card">          
              <img src="img/{{$product->image}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title" ><a  href ="{{URL::to('product-edit/'.$product->id)}}"{{$product->name}}</h3></a>
                
                <h5 class="card-title">{{$product->price}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <a class="btn btn-success" href ="{{URL::to('product-edit/'.$product->id)}}">Add to cart</a>
              </div>
              
          </div>
        </div>
        
        @endforeach 
        
        
   </section>   
  </main><!-- End #main -->
 
  @endsection
