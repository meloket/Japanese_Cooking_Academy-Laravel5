@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h1>Hello, {{ $myname }}</h1>
                    <p>My age is {{ $age }}</p>

                       {{ $auth->name }} 

                    You are logged in! {!! Auth::user()->email !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
