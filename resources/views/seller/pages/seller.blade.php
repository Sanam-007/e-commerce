@extends('seller.layouts.default')
@section('xyz')  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">          
          <li class="breadcrumb-item">Seller</li>          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">    

        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
                              
                        <form class="" action="{{URL::to('insert-category')}}">
                        <h3 class="text-center text -primary"> Seller Information</h3>
                    {{csrf_field()}}
                                        <div class="form-group">
                        <label for="contact"><b> Name: </b>{{$seller->name}} </label>
                        
                    </div>
                    <div class="form-group">
                        <label for="contact"><b>Email: </b>{{$seller->email}}</label>
                        
                    </div>
                    <div class="form-group">
                        <label for="contact"><b>Contact_no: </b>{{$seller->phone}}</label>
                    
                    </div>
                    <div class="form-group">
                        <label for="contact"><b>Adress: </b>{{$seller->address}}</label>
                        
                    </div>
                    </form><!-- End Profile Edit Form -->
                
             </div>
          </div>

        </div>
      </div>
    </section>

  </main>
 

  

</body>

</html>