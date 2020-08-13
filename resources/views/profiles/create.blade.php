@extends('profiles.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" >
            <div class="pull-left">
                <h2>Add profile</h2>
            </div>


        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('profiles.index')}}">Back</a>
        </div>
    </div>
    </div>
    @if($errors->any())

    <div class="alert alert-danger">
        <strong>Oops</strong> There were some problems!!
        <ul>
           @foreach($errors->all() as $error)
                <li>{{$error}}</li>

                @endforeach
        </ul>
    </div>
    @endif
    @if(Auth::check())
    <form action="{{route('profiles.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>firstName</strong>
                <input type="text" name="first_name" class="form-control" placeholder="first_name">

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>lastName</strong>
                <input type="text" name="last_name" class="form-control" placeholder="last_name">

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <stron>Headline</stron>
                <input type="text" name="headline" class="form-control" placeholder="Headline">

            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Summary</strong>
                <textarea class="form-control"name="summary" style="height:150px"></textarea>

            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center" >


                <button type="submit" class="btn btn-primary" name="button">Submit</button>

            </div>

    </div>
    </form>
    @endif

    @endsection
