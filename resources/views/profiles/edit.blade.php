@extends('profiles.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" >
            <div class="pull-left">
                <h2>Edit Profile</h2>
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


        <form action="{{route('profiles.update',$profileInfo->id)}}" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>firstName</strong>
                        <input type="text" name="First_name" value="{{$profileInfo->first_name}}" class="form-control" placeholder="first_name">

                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>lastName</strong>
                        <input type="text" name="Last_name" value="{{$profileInfo->last_name}}" class="form-control" placeholder="last_name">

                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="text" name="Email" value="{{$profileInfo->email}}" class="form-control" placeholder="Email">

                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Headline</strong>
                        <input type="text" name="Headline" value="{{$profileInfo->headline}}" class="form-control" placeholder="Headline">

                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Summary</strong>
                        <textarea class="form-control"name="Summary"  style="height:150px">{{$profileInfo->summary}}</textarea>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center" >


                    <button type="submit" class="btn btn-primary" name="button">Submit</button>

                </div>

            </div>
        </form>

@endsection
