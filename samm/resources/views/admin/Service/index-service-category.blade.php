@extends('layouts.app')

@section('content')
    <div class="az-content-header d-block d-md-flex">
        <div>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Service Categories</h2>
        </div>
    </div><!-- az-content-header -->
    <div class="az-content-body">
        <div class="row row-sm mg-b-15 mg-sm-b-20">
            <div class="col-lg-6 col-xl-6">
                <div class="card card-dashboard-six">
                    <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Add A Service Category</h2>
                    <hr>
                    <form action="{{route('admin.service-category.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="Enter Service eg. Service Technicians and Mechanics">
                        </div><!-- form-group -->
                        <div class="form-group">
                            <label>Category slang (Should be Unique across the platform )</label>
                            <input type="text" autocomplete="off" name="slang" class="form-control"
                                   placeholder="Enter slang eg st&e ">
                        </div><!-- form-group -->
                        <button class="btn btn-az-primary btn-block">Add</button>
                    </form>
                </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-6 col-xl-6 mg-t-20 mg-lg-t-0">
                <div class="bd pd-20">
                    <ul class="list-unstyled">
                        @if(count($serviceCategories)==0)
                            <div class="card bd-0">
                                <h2 class="text-center">No service category added yet!</h2>
                            </div>
                        @else
                            @foreach($serviceCategories as $serviceCategorie)
                                <div class="card bd-0">
                                    <h5 class="mg-b-10 tx-inverse">{{$serviceCategorie->name}}</h5>
                                    <p>{{$serviceCategorie->slang}}</p>
                                </div>
                                <br>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- az-content-body -->
@endsection
