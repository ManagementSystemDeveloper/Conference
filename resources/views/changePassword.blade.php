@extends('layouts.app')
@section('content')

<div class="responsive-color">
</div>

<section class="ftco-section">

    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">
            Change<strong> Password</strong> 
            </h2>
        </div>
        </div>
    </div>
    <div class="container">
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ auth()->user()->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Current Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Current Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="New Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Save</button>
        </form>
    </div>
</section>

@endsection