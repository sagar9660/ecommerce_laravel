@extends('admin/layout')
@section('page_title','Category')
@section('container')
<div>
    <h2>Category of Foods and vegitables</h2>
    {{session('message')}}
    <div class="mt-4 p-5 bg-primary text-dark rounded">
      <style>
    table,
    th,
    td{
        border: 1px solid black;
    }
</style>
      <h1>Category</h1>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    <div class="col-md-6">
        <a href="category/manage_category">
        <button type="button" class="btn btn-success">Add Category</button>
    </a>
    </div>
    &nbsp;
    &nbsp;
    <table class="table table-bordered text-white text-center">
<thead>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Category Slug</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($data as $list)
    <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->category_name}}</td>
        <td>{{$list->category_slug}}</td>
        <td>
            <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
            @if($list->status==1)
            <a href="{{url('admin/category/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-secondary">Active</button></a>
            @elseif($list->status==0)
            <a href="{{url('admin/category/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
            @endif
            <a href="{{url('admin/category/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
    </div>
    <div class="col-md-3"></div>
    <div class="clearfix"></div>
</div>
      @endsection
  </div>
</div>