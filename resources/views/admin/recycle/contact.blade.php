@extends('layouts.admin');
@section('content')
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif

<table id="table_id" class="display" style="background:#FFF;border:2px solid #ccc">
  <thead>
    <tr>
      <th>Contact id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Time</th>
      <th>Manage</th>
    </tr>
  </thead>
    <tbody >
      @foreach($recycle as $Recycle)
      <tr>
        <th>{{$Recycle->contactId}}</th>
        <td>{{$Recycle->contactname}}</td>
        <td>{{$Recycle->contactemail}}</td>
        <td>{{$Recycle->contactsubject}}</td>
        <td>{{str_limit($Recycle->contactmessage,50)}}</td>
        <td>{{$Recycle->created_at}}</td>
        <td>
          <a class="btn btn-primary" href="{{route('restore', $Recycle->contactId)}}">Restore</i></a>
          <a class="btn btn-danger" onclick="return confirm('are you sure delete data')" href="{{route('delete',$Recycle->contactId)}}">Delete</i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection
