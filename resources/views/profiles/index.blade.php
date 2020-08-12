<!Doctype html>
<html>

@extends('profiles.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Assignement Of Coursera</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('profiles.create')}}">Create</a>

            </div>
        </div>
    </div>
    @if($message =Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif


   <head>
       <title>Crud operation</title>

   </head>
   <body>
    <table class="table table-bordered">
        <thead>
          <tr>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Headline</td>
              <td>Summary</td>
          </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profileValue=>$profiles)
            <tr>
                <td>
                    {{$profileValue->first_name}}
                </td>
                <td>
                    {{$profileValue->last_name}}
                </td>
                <td>
                    {{$profileValue->headline}}
                </td>
                <td>
                    {{$profileValue->summary}}
                </td>
                <td>
                    <form action="{{route('profiles.destroy',$profileValue->profile_id)}}" method="post">
                        <a class="btn btn-success"  href="{{route('profiles.show',$profileValue->profile_id)}}">show</a>
                        <a class="btn btn-success" href="{{route('profiles.edit',$profileValue->profile_id)}}">edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

@endsection
   </body>
</html>