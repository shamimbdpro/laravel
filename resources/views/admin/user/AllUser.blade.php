@extends('layouts.admin');
@section('content')
<table id="table_id" class="display" style="background:#FFF;border:2px solid #ccc">
  <thead>
    <tr>
      <th>UserId</th>
      <th>Name</th>
      <th>User Role</th>
      <th>Email</th>
      <th>Status</th>
      <th>Time</th>
      <th>Manage</th>
    </tr>
  </thead>
    <tbody >
      @foreach($userdata as $user)
      <tr>
        <th>{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->roleName->role_name}}</td>
        <td>{{$user->email}}</td>
        <td>
         @if($user->status==1)
           <a href="{{route('Enactive',$user->id)}}" class="btn btn-primary">Active</a>
           @else
             <a href="{{route('active',$user->id)}}" class="btn btn-danger">Deactive</a>
         @endif
        </td>
        <td>{{$user->created_at}}</td>
        <td>
          <a href=""><i class="fa fa-plus-square fa-lg"></i></a>
          <a href=""><i class="fa fa-pencil-square fa-lg"></i></a>
          <a href=""><i class="fa fa-trash fa-lg"></i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
</table>







@endsection
