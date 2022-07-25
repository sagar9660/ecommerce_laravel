@extends('admin/layout')
@section('page_title','Manage Category')
@section('container')
<div class="container mt-3">
  <h2>Category of Foods and vegitables</h2>

  <h1>Manage Category</h1>

<div class="row">
    <!-- <div class="col-md-3"></div> -->
    <div class="col-md-6">

    <div class="col-md-6">
        <a href="{{url('admin/category')}}">
        <button type="button" class="btn btn-success">Back</button>
    </a>
    </div>
    <form action="{{route('category.manage_category_process')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <div class="row">
          <div class="col-md-4">
            <label for="category_name" class="form-label">Category Name</label>
        <input type="name" name="category_name" value="{{$category_name}}" class="form-control" id="category_name" aria-describedby="emailHelp" required>
          </div>

          <div class="col-md-4">
            <label for="category_name" class="form-label">Parent Category</label>
            <select name="parent_category_id" id="parent_category_id" class="form-control" required>
        <option value="0">Select Categories</option>
        @foreach($category as $list)
        @if($parent_category_id==$list->id)
        <option selected value="{{$list->id}}">
          @else <option value="{{$list->id}}">
            @endif{{$list->category_name}}
          </option>
          @endforeach
          </select>
          </div>
          <div class="col-md-4">
            <label for="category_slug" class="form-label">Category Slug</label>
        <input type="name" name="category_slug" value="{{$category_slug}}" class="form-control" id="category_slug" aria-describedby="emailHelp" required>
        @error('category_slug')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          {{session('error')}}
        </div>
        @enderror

          </div>
        </div>

      </div>
      <div class="mb-3">
        <label for="image" class="control-label mb-1">Image</label>
        <input type="file" name="category_image" id="category_image" class="form-control" aria-required="true" aria-invalid="false">
        @error('category_image')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
        @enderror

        
        @if($category_image!='')
        <a href="{{asset('storage/media/category/'.$category_image)}}" target="_blank">
          <img width="100px" src="{{asset('storage/media/category/'.$category_image)}}">
        </a>
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <input type="hidden" name="id" value="{{$id}}"/>
    </form>
  </div>

      @endsection