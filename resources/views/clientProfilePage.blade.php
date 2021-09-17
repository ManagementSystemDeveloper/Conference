@extends('layouts.app') @section('style')
<link rel="stylesheet" href="{{ asset('main/css/trainer-custom.css') }}"> 
@endsection 

@section('content') 
<div class="responsive-color"></div>
<div class="container emp-profile">
  <form method="post">
    <div class="row">
      <div class="col-md-4">
        <div class="profile-img">
          <img src="{{ asset('main/images/person_1.jpg') }}" alt="" />
          <div class="file btn btn-lg btn-primary"> Change Photo <input type="file" name="file" />
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="profile-head">
          <h5> Mikle Jordan </h5>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tab-content profile-tab" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <div class="col-md-6">
                    <label>Name</label>
                  </div>
                  <div class="col-md-6">
                    <p>Mikle Jordan</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Email</label>
                  </div>
                  <div class="col-md-6">
                    <p>fitness@gmail.com</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Phone</label>
                  </div>
                  <div class="col-md-6">
                    <p>123 456 7890</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Address</label>
                  </div>
                  <div class="col-md-6">
                    <p>New York, USA</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Description</label>
                  </div>
                  <div class="col-md-6">
                    <p>I am a client who has over 3 years of experience.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <input type="button" class="profile-edit-btn" name="btnAddMore" value="Edit" />
      </div>
    </div>
  </form>
</div> @endsection