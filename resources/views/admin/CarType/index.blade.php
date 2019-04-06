@extends('layouts.app')

@section('content')
    <div class="az-content-header d-block d-md-flex">
        <div>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Car Type</h2>
        </div>
    </div><!-- az-content-header -->
    <div class="az-content-body">
        <div class="row row-sm mg-b-15 mg-sm-b-20">
            <div class="col-lg-6 col-xl-6">
                <div class="card card-dashboard-six">
                    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Add Type</h2>
                    <hr>
                    <form action="{{route('admin.car-type.store')}}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" class="form-control" placeholder="Enter Car Type">
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
                        @foreach($carTypes as $carT)
                            <div class="card bd-0">
                                <li class="media d-block d-sm-flex border pa-5">
                                    <img src="{{$carT->avatar}}"
                                         class="wd-100p wd-sm-100 rounded mg-sm-r-20 mg-b-20 mg-sm-b-0 " alt="">
                                    <div class="media-body">
                                        <h5 class="mg-b-10 tx-inverse">{{$carT->type}}</h5>
                                        {{$carT->desc}}
                                        <p class="text-right pd-r-10">
                                            <a class="btn-warning btn"
                                               href="{{route('admin.car-type.edit',['car_type'=>$carT->id])}}">Edit</a>
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
