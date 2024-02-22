@extends('admin.layouts.default')
@section('xyz')

  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          
          <li class="breadcrumb-item">Admin</li>
          <li class="breadcrumb-item">Create</li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">       

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              
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
                            

                  <!-- Profile Edit Form -->
                   
                        <form class="" action="{{URL::to('insert-category')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                            <label class="control-label col-sm-2" for="name">name</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
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