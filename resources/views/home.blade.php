@extends('layouts.admin')

@section('title','Dashboard')

@section('content')

<div class="col-md-8 col-md-offset-3">
    <div class="row">
        <div class="page-header">
            <h2>Profile</h2>
        </div>
        <table class="table table-condensed table-bordered">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection