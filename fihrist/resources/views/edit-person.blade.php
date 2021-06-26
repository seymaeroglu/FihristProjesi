@extends('components/layout')

@section('banner')
<h1 style="text-align: center;"><strong> Fihrist Edit </strong></h1>
@endsection

@section('content')
@if(Session::has('person_updated'))
<div class="alert alert-success" role="alert">
    {{Session::get('person_updated')}}
</div>
@endif
<form method="POST" action="{{route('person.update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$person->id}}" />
    <div class="form-group">
        <label for="name">Name Surname</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$person->name}}" placeholder="Enter Name Surname">
    </div>
    <div class="form-group">
        <label for="regno">Registration Number</label>
        <input type="number" class="form-control" id="regno" name="regno" value="{{$person->regno}}" placeholder="Enter Registration Number">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$person->email}}" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{$person->address}}" placeholder="Enter Address">
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="123-45-67" value="{{$person->phone}}" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}">
    </div>
    <div class="form-group">
        <label for="photo">Photograph</label>
        <input type="file" class="form-control-file" id="photo" name="photo" value="{{ asset('storage/'.$person->photo)}}">
        <br />
        <div class="row">
            <div class="col-sm-12">
                <img id="photo-tag" width="150px" img src="{{URL::asset('storage/'.$person->photo)}}">
            </div>
            <script type="text/javascript">
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#photo-tag').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#photo").change(function() {
                    readURL(this);
                });
            </script>
        </div>
    </div>
    <a class="btn btn-primary" href="/" role="button"><i class="fa fa-arrow-left"></i> Go Back </a>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update </button>
    <a class="btn btn-danger" href="/delete-person/{{$person -> id}}" role="button" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i> Delete </a>
</form>
@endsection