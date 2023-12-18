@extends('layouts.app')

@section('content')

<div class="container">
    <div class="top">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12 row">
                    <div class="col-md-10">
                        <h3>Product List</h3>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary">  <a href="{{route('product.create')}}">Add new product</a></button>
                    </div>
                    
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12 row">
                    <div class="col-lg-3 col-md-4 col-sm-2 mb-2">
                        <div class="card" >
                            <img class="card-img-top" src="{{'images.jpeg'}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Camera</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>Price: 5000</h5>
                                <button class="btn btn-primary d-flex justify-content-end" style="float: left;" >Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="{{'images.jpeg'}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Camera</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>Price: 5000</h5>
                                <button class="btn btn-primary d-flex justify-content-end" style="float: left;">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="{{'images.jpeg'}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Camera</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>Price: 5000</h5>
                                <button class="btn btn-primary d-flex justify-content-end" style="float: left;">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-2 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="{{'images.jpeg'}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Camera</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <h5>Price: 5000</h5>
                                <button class="btn btn-primary d-flex justify-content-end" style="float: left;">Buy Now</button>
                            </div>
                        </div>
                    </div> 
                </div>
                 

            </div>
        </div>
        
    </div>
</div>

@endsection


<!-- https://docs.google.com/spreadsheets/d/1jLSQIAB2h7jNnMuT6T_veYVfgNIHSEa3bOYUPfE2_OA/edit?pli=1#gid=0 -->