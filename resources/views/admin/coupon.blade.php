@extends('admin/layout')
@section('page_title','Coupon')
@section('container')
<div>
    <h2>Coupon of Foods and vegitables</h2>
    {{session('message')}}
    <div class="mt-4 p-5 bg-primary text-white rounded">
      <style>
    table,
    th,
    td{
        border: 1px solid black;
    }
</style>
      <h1>Coupon</h1>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    <div class="col-md-6">
        <a href="{{url('admin/coupon/manage_coupon')}}">
        <button type="button" class="btn btn-success">Add Coupon</button>
    </a>
    </div>
    &nbsp;
    &nbsp;
    <table class="table table-bordered text-center">
<thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Code</th>
        <th>Value</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($data as $list)
    <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->title}}</td>
        <td>{{$list->code}}</td>
        <td>{{$list->value}}</td>
        <td>
            <a href="{{url('admin/coupon/manage_coupon/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
            @if($list->status==1)
            <a href="{{url('admin/coupon/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-secondary">Active</button></a>
            @elseif($list->status==0)
            <a href="{{url('admin/coupon/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
            @endif
            <a href="{{url('admin/coupon/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
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