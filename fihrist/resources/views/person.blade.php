@extends('components/layout')

@section('banner')
<h1 style="text-align: center;"><strong> Fihrist </strong></h1>
@endsection

@section('content')
<div class="h4">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-12">
                    <img src="{{ asset('storage/'.$person->photo)}}" width="250px">
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <h4><strong>Name Surname :</strong></h4>
                </div>
                <div class="col-sm-8">
                    <h4>{{ $person -> name }}</h4>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <h4><strong>Registration Number :</strong></h4>
                </div>
                <div class="col-sm-8">
                    <h4>{{ $person -> regno }}</h4>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <h4><strong>E-Mail :</strong></h4>
                </div>
                <div class="col-sm-8">
                    <h4>{{ $person -> email }}</h4>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <h4><strong>Address :</strong></h4>
                </div>
                <div class="col-sm-8">
                    <h4>{{ $person -> address }}</h4>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4">
                    <h4><strong>Phone Number :</strong></h4>
                </div>
                <div class="col-sm-8">
                    <h4>{{ $person -> phone }}</h4>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row" style="padding-left: 20px;">
                <div class="col">
                    <a class="btn btn-primary" href="/" role="button"><i class="fa fa-arrow-left"></i> Go Back </a>
                    <a class="btn btn-success" href="/edit-person/{{$person -> id}}" role="button"><i class="fa fa-edit"></i> Edit </a>
                    <a class="btn btn-danger" href="/delete-person/{{$person -> id}}" role="button" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i> Delete </a>
                </div>
            </div>
        </li>
    </ul>
</div>
@endsection