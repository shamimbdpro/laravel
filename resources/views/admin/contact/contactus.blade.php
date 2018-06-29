@extends('layouts.admin');
@section('content')
@if(Session('trash'))
    <div class="alert alert-warning">
        {{ session('trash') }}
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
      @foreach($contactus as $contact)
      <tr>
        <th>{{$contact->contactId}}</th>
        <td>{{$contact->contactname}}</td>
        <td>{{$contact->contactemail}}</td>
        <td>{{$contact->contactsubject}}</td>
        <td>{{str_limit($contact->contactmessage,50)}}</td>
        <td>{{$contact->created_at}}</td>
        <td>
          <a href="{{route('contactview', $contact->contactId)}}"><i class="fa fa-plus-square fa-lg"></i></a>
          <a href=""><i class="fa fa-pencil-square fa-lg"></i></a>
          @if(Auth::User()->role_id<=1)
           <a href="{{route('trash',$contact->contactId)}}"><i class="fa fa-trash fa-lg"></i></a>
         @endif
        </td>
      </tr>
      @endforeach
    </tbody>
</table>

@endsection
