@extends('seller.layouts.default')
@section('xyz')  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">          
          <li class="breadcrumb-item">Seller</li>    
          <li class="breadcrumb-item">Product</li>    
          <li class="breadcrumb-item">Post</li>          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">    
      @if(Session::has('msg'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('msg') }}</strong> 
                </div>
                @endif
                         
                @if(Session::has('err_msg'))
                <div class="alert alert-danger">
                    <strong>{{ Session::get('err_msg') }}</strong> 
                </div>
                @endif
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
                              
              <form class="" action="{{URL::to('insert-product')}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Product name</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                            </div>
                        </div>
                    

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Product price</label>
                            <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" id="amount" placeholder="Enter price">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Product amount</label>
                            <div class="col-sm-10">
                            <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter amount">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Product description</label>
                            <div class="mb-3 mt-3">
                          <label for="comment"></label>
                          <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                        </div>
                        </div>                      


                        <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Product Category</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="sel1" name="category">

                        @foreach($category as $cat)
                            <option value={{$cat->id}}>{{$cat->name}} - {{$cat->amount}}</option>
                        @endforeach
                        </select>
                        </div>
                        </div>

                        
                        <div class="form-group">
                        <div class="col-sm-10">  
                        <input type="file" name="fileToUpload[]" id="fileToUpload" multiple required>                                  
                        </div>
                      </div>
                    

                   <div class="form-group">
                            <label class="control-label col-sm-2" for="name"></label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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