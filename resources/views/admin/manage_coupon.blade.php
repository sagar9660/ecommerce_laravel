@extends('admin/layout')
@section('page_title','Manage Coupon')
@section('container')
<div class="container mt-3">
  <h2>Coupon of Foods and vegitables</h2>

  <h1>Manage Coupon</h1>

<div class="row">
    <!-- <div class="col-md-3"></div> -->
    <div class="col-md-6">

    <div class="col-md-6">
        <a href="{{url('admin/coupon')}}">
        <button type="button" class="btn btn-success">Back</button>
    </a>
    </div>
    <form action="{{route('coupon.manage_coupon_process')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="name" name="title" value="{{$title}}" class="form-control" id="title" aria-describedby="emailHelp" required>
        @error('title')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          {{session('error')}}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="name" name="code" value="{{$code}}" class="form-control" id="code" aria-describedby="emailHelp" required>
        @error('code')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          {{session('error')}}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="value" class="form-label">Value</label>
        <input type="name" name="value" value="{{$value}}" class="form-control" id="value" aria-describedby="emailHelp" required>
        @error('value')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          {{session('error')}}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <input type="hidden" name="id" value="{{$id}}"/>
    </form>
  </div>

      @endsection