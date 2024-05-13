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
        <a class="navbar-brand" href="#">Add Product</a>
        <a class="btn btn-danger btn-sm" href="{{url('/')}}">Go Home</a>
      </nav>



      @if ($message = Session::get('success'));
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hurry!  </strong> {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
        <div class="container border p-4 my-4">
                  <div class="row">
                    <div class="col-sm-12">
                      <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" class="text-center">Edit product # {{$product->id}}</h3>
                        <form method="POST" action="/product/{{$product->id}}/update" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="name" class="form-control" name="name" id="exampleInputName" value="{{old('name', $product->name)}}"  placeholder="Enter product name">
                            @if($errors->has('name'))
                            <span class="text-danger text-sm"> {{$errors->first('name')}} </span>
                            @endif  
                            </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Product Description</label>
                                <textarea type="text" name="description" class="form-control"  placeholder="product description">
                                    {{old('description', $product->description)}}
                                </textarea>
                                @if($errors->has('description'))
                                <span class="text-danger text-sm"> {{$errors->first('description')}} </span>
                                @endif    
                            </div>
                            
                              <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" value="{{old('image', )}}" name="image">
                                @if($errors->has('image'))
                                <span class="text-danger text-sm"> {{$errors->first('image')}} </span>
                                @endif  
                              </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                  </div>
                  
                 
            </div>
</body>
</html>