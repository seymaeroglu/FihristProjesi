@extends('components/layout')


@section('banner')
<h1 style="text-align: center;"><strong> Fihrist </strong></h1>
@endsection

@section('content')
<ul class="list-group">
    <li class="list-group-item">
        <div>
            <form method="GET" action="#">
                <div class="row">
                    <div class="col-sm-11">
                        <input type="text" class="form-control" name="search" placeholder="Search" value="{{request('search')}}">
                    </div>
                    <div class="col-sm-1">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <li class="list-group-item">
        <div class="row" style="padding-left: 20px;">
            <a class="btn btn-success" href="/add-person" role="button" data-toggle="tooltip" data-placement="right" title="Add"><i class="fa fa-plus"></i></a>
        </div>
    </li>
    <li class="list-group-item">
        @if(Session::has('person_deleted'))
        <div class="alert alert-success" role='alert'>
            {{Session:get('person_deleted')}}
        </div>
        @endif
        @if(is_array($people) || is_object($people))
        @foreach ($people as $person)

        <h1>
            <div class="row">
                <div class="col-sm-9">
                    <a class="list-group-item list-group-item-action" href="/people/{{ $person -> id }}"> {{ $person -> name }}</a>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-success" href="/edit-person/{{$person -> id}}" role="button" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="/delete-person/{{$person -> id}}" role="button" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>
        </h1>
        @endforeach
        @endif
    </li>
</ul>
@endsection