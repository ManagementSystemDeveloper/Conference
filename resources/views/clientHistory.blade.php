@extends('layouts.app')
@section('content')

<div class="responsive-color">
</div>

<section class="ftco-section">

    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">
            Your <strong>history</strong> 
            </h2>
        </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mikle Jordan</td>
                <td>9/15/2021</td>
                <td>9:00 AM</td>
                <td>Accepted</td>
                <td><a href="{{ route('clientCall') }}" class="btn btn-sm btn-primary"><i class="fas fa-play"></i></a></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>John Franklin</td>
                <td>9/16/2021</td>
                <td>9:00 AM</td>
                <td>Pending</td>
                <td></td>
            </tr>
        </tbody>
        </table>
    </div>
</section>

@endsection