@extends('layouts.app')

@section('title')Show Page @endsection

@section('content')
<div class="card">
    <div class="card-header">
      Post Info
    </div>
    <div class="card-body">
      <h5 class="card-title">Title:</h5>
      <p class="card-text">{{ $posts['title'] }}</p>
      <h5 class="card-title">Description:</h5>
      <p class="card-text">{{ $posts['description'] }}</p>
    </div>
</div>

<div class="card my-5">
    <div class="card-header">
      Post Creator info
    </div>
    <div class="card-body">
      <h5 class="card-title">Name:- </h5>
      <p class="card-text">{{ $posts['posted_by'] }}</p>
      <h5 class="card-title">Email:- </h5>
      <p class="card-text">{{ $posts['email'] }}</p>
      <h5 class="card-title">Created at:- </h5>
      <p class="card-text">{{ $posts['created_at'] }}</p>
    </div>
</div>

@endsection
