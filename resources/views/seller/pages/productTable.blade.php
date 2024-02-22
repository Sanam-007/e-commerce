@extends('seller.layouts.default')
@section('xyz')  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">          
          <li class="breadcrumb-item">Seller</li>    
          <li class="breadcrumb-item">Product</li>    
          <li class="breadcrumb-item">Table</li>          
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">                                         
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>amount</th>
                        <th>description</th>
                        <th>category_id</th>
                        <th>image</th>
                        <th>Action</th>
                        </tr>
                </thead>
                
                @foreach($products as $product)          
            <tr>
                <td>{{$product->name}} </td>
                <td>{{$product->amount}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->category_id}}</td> 
                <td>{{$product->image}}</td> 
                                

        <td><button type="button" class="btn btn-success"> <a href ="{{URL::to('product-edit/'.$product->id)}}"><b>Edit</b></button>             
                            
        <button type="button" class="btn btn-danger"> <a href ="{{URL::to('product-delete/'.$product->id)}}"><b>Delete</b></button></td>
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