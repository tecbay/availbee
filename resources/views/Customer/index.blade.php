@extends('layouts.app')

@section('content')
    @if(!auth()->user()->hasVerifiedEmail())
        <div class="alert alert-warning text-center" role="alert">
            <strong>Email not verified !</strong> <br>Please verify your email to confirm service request.
        </div>
    @endif
    <resarvation-form></resarvation-form>
    <customer-dashboard></customer-dashboard>
@endsection
