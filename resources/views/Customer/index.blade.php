@extends('layouts.app')

@section('content')
    @if(!auth()->user()->hasVerifiedEmail())
        <div class="alert alert-warning text-center" role="alert">
            <strong>Email not verified !</strong> <br>Please verify your email to confirm service request.
        </div>
    @endif
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#card-details">
        Launch demo modal
    </button>

    <resarvation-form></resarvation-form>
    <customer-dashboard></customer-dashboard>
    <card-details></card-details>
@endsection
