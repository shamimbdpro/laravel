@extends('layouts.admin');
@section('content')
@if (session('trash'))
    <div class="alert alert-danger">
        {{ session('trash') }}
    </div>
@endif
<div class="text-right">
<a  href="{{route('show-banner')}}" class="btn btn-success">Add Banner</a>
</div>
<table class="table table-bordered" style="background:#FFF">
  <thead>
    <tr>
      <th scope="col">Banner ID</th>
      <th scope="col">Title</th>
      <th scope="col">Subtitle</th>
      <th scope="col">Status</th>
      <th scope="col">Time</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($banner as $ban)
    <tr>
      <th>{{$ban->ban_id}}</th>
      <td>{{str_limit($ban->ban_title,20)}}</td>
      <td>{{str_limit($ban->ban_subtitle,20)}}</td>
      <td>{{$ban->ban_status}}</td>
      <td>{{$ban->created_at}}</td>
      <td>
        <img height="50" src="public/uploads/{{$ban->ban_photo}}" alt="">
      </td>
      <td>
        <a href="" class="btn btn-primary">View</a>
        <a href="{{route('edit-banner',$ban->ban_id)}}" class="btn btn-warning">Edit</a>
         @if(Auth::User()->role_id<=1)
        <a href="{{route('ban_trash',$ban->ban_id)}}" class="btn btn-danger">Trash</a>
         @endif
      </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
