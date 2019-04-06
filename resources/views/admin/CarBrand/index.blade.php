@extends('layouts.app')

@section('content')
    <div class="az-content-header d-block d-md-flex">
        <div>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Car Brand</h2>
        </div>
    </div><!-- az-content-header -->
    <div class="az-content-body">
        <div class="row row-sm mg-b-15 mg-sm-b-20">
            <div class="col-lg-6 col-xl-6">
                <div class="card card-dashboard-six">
                    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Add Brand</h2>
                    <hr>
                    <form action="{{route('admin.car-brand.store')}}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label>Brand Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Brand Name">
                        </div><!-- form-group -->
                        <div class="form-group">
                            <label>Description (Optional)</label>
                            <input type="text" autocomplete="off" name="desc" class="form-control"
                                   placeholder="Enter Description">
                        </div><!-- form-group -->
                        <div class="form-group">
                            <label>Avatar (Optional)</label>
                            <input type="text" autocomplete="off" name="avatar" class="form-control"
                                   placeholder="Enter Description">
                        </div><!-- form-group -->
                        <button class="btn btn-az-primary btn-block">Add</button>
                    </form>
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-6 col-xl-6 mg-t-20 mg-lg-t-0">
                <div class="bd pd-20">
                    <ul class="list-unstyled">
                        @foreach($carBrands as $carBrand)
                            <div class="card bd-0">
                                <li class="media d-block d-sm-flex border pa-5">
                                    <img src="{{$carBrand->avatar}}"
                                         class="wd-100p wd-sm-100 rounded mg-sm-r-20 mg-b-20 mg-sm-b-0 " alt="">
                                    <div class="media-body">
                                        <h5 class="mg-b-10 tx-inverse">{{$carBrand->name}}</h5>
                                        {{$carBrand->desc}}
                                        <p class="text-right pd-r-10">
                                            <a class="btn-warning btn"
                                               href="{{route('admin.car-brand.edit',['car_brand'=>$carBrand->id])}}">Edit</a>
                                        </p>
                                    </div>
                                </li>
                            </div>
                            <br>
                        @endforeach
                    </ul>
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- az-content-body -->
@endsection
