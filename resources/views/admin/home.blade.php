@extends('admin/layouts.app')

@section('title','Dashboard')

    @section('body')
        @section('page_title','Dash')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

You are logged in!
    @endsection