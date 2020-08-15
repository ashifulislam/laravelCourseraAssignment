<!Doctype html>
<html>

@extends('profiles.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Assignement Of Coursera</h1>
            </div>

        </div>
    </div>
    @if($message =Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif



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
        @foreach($viewSingleInfo as $profileInfo)
            <tr>
                <td>
                    {{$profileInfo['first_name']}}
                </td>
                <td>
                    {{$profileInfo['last_name']}}
                </td>
                <td>
                    {{$profileInfo['email']}}
                </td>
                <td>
                    {{$profileInfo['headline']}}
                </td>

            </tr>
        @endforeach
        </tbody>

    </table>

    @endsection
    </body>
</html>
