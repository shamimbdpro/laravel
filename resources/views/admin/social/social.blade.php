@extends('layouts.admin')
@section('content')

  @foreach($social_data as $s_data)
<form class="col-lg-6 col-lg-offset-4" action="{{route('update_social')}}" method="post">
  @csrf
  <h5 style="text-align:center;color:green">@if(Session('smg'))
      {{Session('smg')}}
  @endif </h5>
  <div class="form-group row">
    <label for="google_plus" class="col-sm-2 col-form-label">Google Plus</label>
    <div class="col-sm-10">
      <input type="text" name="sm_google_plus" class="form-control" id="google_plus" value="{{$s_data->sm_google_plus}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="linkdin" class="col-sm-2 col-form-label">linkdin</label>
    <div class="col-sm-10">
      <input type="text" name="sm_linkdin" class="form-control" id="linkdin" placeholder="linkdin" value="{{$s_data->sm_linkdin}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Printest" class="col-sm-2 col-form-label">Printest</label>
    <div class="col-sm-10">
      <input type="text" name="sm_printer" class="form-control" id="Printest" placeholder="Printest" value="{{$s_data->sm_printer}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Dribbble" class="col-sm-2 col-form-label">Dribbble</label>
    <div class="col-sm-10">
      <input type="text" name="sm_dribble" class="form-control" id="Dribbble" placeholder="Dribbble" value="{{$s_data->sm_dribble}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Twitter" class="col-sm-2 col-form-label">Twitter</label>
    <div class="col-sm-10">
      <input type="text" name="sm_twitter" class="form-control" id="Twitter" placeholder="Twitter" value="{{$s_data->sm_twitter}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="Facebook"  class="col-sm-2 col-form-label">Facebook</label>
    <div class="col-sm-10">
      <input type="text" name="sm_facebook" class="form-control" id="Facebook" placeholder="Facebook" value="{{$s_data->sm_facebook}}">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
@endforeach
@endsection
