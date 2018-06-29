
@extends('layouts.admin');
@section('content')
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
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
    @foreach($recycle as $ban)
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
       <a class="btn btn-primary" href="{{route('ban_restore', $ban->ban_id)}}">Restore</i></a>
          <a class="btn btn-danger" onclick="return confirm('are you sure delete data')" href="{{route('ban_delete',$ban->ban_id)}}">Delete</i></a>
   
      </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection

