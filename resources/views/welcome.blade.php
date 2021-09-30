@extends('layouts.app')

@section('content')
        
    <div id="carouselExampleSlidesOnly" class="carousel slide mt-n4" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/images/homeImage.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1>SEARCH FOR YOUR HOME</h1>
                    <p>Where you tells a story.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-sm-2">
            <input type="text" class="form-control" placeholder="City">
            </div>
            <div class="col-sm-2">
                <select name="type" class="browser-default custom-select" >
                    <option value="" disabled selected>Category</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">Condo</option>
                    <option value="house">House</option>
                </select>
            </div>
            <div class="col-sm-2">
                <select name="type" class="browser-default custom-select">
                    <option value="" disabled selected>Type</option>
                    <option value="apartment">Rent</option>
                    <option value="house">Buy</option>
                </select>
            </div>
            <div class="col-sm-2">
                <input type="number" name="minprice" id="minprice" class="form-control" placeholder="Min Price">
            </div>
            <div class="col-sm-2">
                <input type="number" name="minprice" id="minprice" class="form-control" placeholder="Max Price">
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-primary"><i class="bi bi-search"></i>&nbsp;Go!</button>
            </div>
            
        </div>
        
    </div>

    <div class="container pt-4" id="properties">
        <hr class="bg-primary">
        <h4 class="text-center mt-4">Properties</h4>
        <div class="card mb-3 mt-4">
            <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/images/condoImage.jpg') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-4">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            </div>
        </div>
        
    </div>
    
    <div class="container pt-4" id="agents">
        <hr class="bg-primary">
        <h4 class="text-center mt-4">Agents</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/images/default.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Profile</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/images/default.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Profile</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/images/default.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Profile</a>
                    </div>
                </div>
            </div>
            
        </div>
        
        
    </div>
    
    <div class="container pt-4" id="about">
        <hr class="bg-primary">
        <h4 class="text-center mt-4">About Us</h4>
        <div class="card mt-4">
            <img src="{{ asset('storage/images/homeImage.jpg') }}" class="card-img-top rounded" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
@endsection
