@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-center"> 
                    <h3>Add new product</h3>
                </div>                
            </div>
            <div class="card-body mt-10">
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <label for="" class="" style="margin-top: 20px;">Product Name <span style="color: red;">*</span></label>
                        <input class="form-control" type="text" name="name" placeholder="Product Name" required> 
                    </div>
                    <div class="">
                        <label for="" class="" style="margin-top: 20px;">Product Quantity <span style="color: red;">*</span></label>
                        <input class="form-control" type="number" name="quantity" placeholder="Product Quantity" required>
                    </div>
                    <div class="">
                        <label for="" class="" style="margin-top: 20px;">Product Image</label>
                        <input class="form-control" type="file" name="image" placeholder="Product Image" accept="image/*">
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection