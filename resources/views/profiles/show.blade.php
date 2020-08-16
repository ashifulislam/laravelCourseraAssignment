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

            <tr>
                <td>
                    {{$profileInfo->first_name}}
                </td>
                <td>
                    {{$profileInfo->last_name}}

                </td>
                <td>
                    {{$profileInfo->headline}}
                </td>
                <td>
                    {{$profileInfo->summary}}
                </td>

        </tbody>

    </table>

    @endsection
    </body>
</html>

