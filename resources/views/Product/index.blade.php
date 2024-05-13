<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>laravel crud</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light p-3 px-5">
        <a class="navbar-brand" href="#">CRUD</a>
        <a href="{{url('product/create')}}" class="btn btn-primary btn-sm">add Product</a>
      </nav>
        <div class="container ">
                  <div class="row">
                        <div class="col-md-12">            
                        <table class="table mt-3 table-hover">
                          <thead>
                            <tr class="text-center">
                                <th>S.No</th>  
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($product as $product)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <img src="product/{{$product->image}}" class="rounded-circle" width="30px" height="30px">
                                </td>
                                <td class="d-flex algin-items-cneter">
                                  <a class="btn btn-primary btn-sm my-2 mx-1" href="product/{{$product->id}}/edit">EDIT</a>
                                  <a class="btn btn-danger btn-sm my-2" href="product/{{$product->id}}/delete">DELETE</a>
                                 </td>
                              </tr>  
                            @endforeach
                            
                          </tbody>
                        </table>
                      
                  </div>
                  
                 
            </div>

</body>
</html>