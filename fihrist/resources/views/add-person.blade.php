@extends('components/layout')

@section('banner')
<h1 style="text-align: center;"><strong> Fihrist Add </strong></h1>
@endsection

@section('content')
@if(Session::has('person_created'))
<div class="alert alert-success" role="alert">
    {{Session::get('person_created')}}
</div>
@endif
<form method="POST" action="{{route('person.create')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name Surname</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name Surname">
    </div>
    <div class="form-group">
        <label for="regno">Registration Number</label>
        <input type="number" class="form-control" id="regno" name="regno" placeholder="Enter Registration Number">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="123-45-67" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}">
    </div>
    <div class="form-group">
        <label for="photo">Photograph</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
        <br />
        <div class="row">
            <div class="col-sm-12">
                <img id="photo-tag" width="150px" src="">
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
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Add </button>
</form>
@endsection