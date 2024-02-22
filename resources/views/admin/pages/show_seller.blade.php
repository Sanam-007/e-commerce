@extends('admin.layouts.default')
@section('xyz')  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">          
          <li class="breadcrumb-item">Admin</li>
          <li class="breadcrumb-item">Show</li>
          <li class="breadcrumb-item active">Seller</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
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
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th> name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>action</th>
                        </tr>
                </thead>
                
                @foreach($sellers as $seller)          
            <tr>
                <td>{{$seller->name}} </td>
                <td>{{$seller->email}}</td>
                <td>{{$seller->phone}}</td>
                <td>{{$seller->address}}</td>               
                
        <td><button type="button" class="btn btn-success"> <a href ="{{URL::to('edit-seller/'.$seller->id)}}"><b>Edit</b></button>             
                            
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$seller->id}}"> <b>Delete</b></button></td>
        <div class="modal" id="myModal{{$seller->id}}">
          <div class="modal-dialog">
          <div class="modal-content">
          
              <!-- Modal Header -->
              <div class="modal-header">
              <h4 class="modal-title">Delete Confirmation!!</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
              Do you really want to delete <b> {{$seller->name}} </b> ? 
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
              <a class="btn btn-success" href="{{ URL::to('delete-seller/'.$seller->id) }}">Yes</a>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
              
          </div>
          </div>
      </div>
      
      </tr>   
            @endforeach     

                        </table>
                    </div>
                </div>
                </div>
            </div>
            </section>   
    
  </main> 
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script >
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
  

</body>

</html>