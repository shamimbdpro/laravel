@extends('layouts.website')
@section('content')
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Drop Us A Note</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.</p>
        </div>
      </div>
    </div>
  </div>
</section>

@if (Session('error'))
  <script type="text/javascript">
  swal(
    'Opps!!',
    'Please try again!',
    'success',
    )
  </script>
@endif
<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <div class="row">
          @if (Session('status'))
          <script type="text/javascript">
          swal(
            'Success!',
            'Thanks for contact with us!',
            'success',
            )
          </script>
          @endif
            <form action="{{route('insert')}}" method="post">
               @csrf
                <div class="col-md-6 col-sm-12">
                    <div class="block">

                        <div class="form-group {{$errors->has('user_name') ? 'has-error' : ''}}">
                            <input name="user_name" type="text" class="form-control has->error" value="{{old('user_name')}}" placeholder="Your Name">
                        @if($errors->has('user_name'))
                               <span class='help-block'>
                                     {{$errors->first('user_name')}}
                               </span>
                        @endif
                        </div>
                        <div class="form-group {{$errors->has('user_email') ? 'has-error' : ''}}">
                            <input name="user_email" type="text" class="form-control" value="{{old('user_email')}}" placeholder="Email Address">
                            @if($errors->has('user_email'))
                                   <span class='help-block'>
                                         {{$errors->first('user_email')}}
                                   </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('user_subject') ? 'has-error' : ''}}">
                            <input name="user_subject" type="text" class="form-control" value="{{old('user_subject')}}" placeholder="Subject">
                            @if($errors->has('user_subject'))
                                   <span class='help-block'>
                                         {{$errors->first('user_subject')}}
                                   </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="block">
                        <div class="form-group-2 {{$errors->has('user_message') ? 'has-error' : ''}}">
                            <textarea name="user_message" class="form-control" rows="3" placeholder="Your Message">{{old('user_message')}}</textarea>
                             @if($errors->has('user_message'))
                                   <span class='help-block'>
                                         {{$errors->first('user_message')}}
                                   </span>
                             @endif
                        </div>
                            <button class="btn btn-default" type="submit">Send Message</button>
                    </div>
                </div>
                <div class="error" id="error">Sorry Msg dose not sent</div>
                <div class="success" id="success">Message Sent</div>
            </form>
        </div>
        <div class=" contact-box row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>Stop By For A visit</h2>
                    <ul class="address-block">
                        <li>
                            <i class="ion-ios-location-outline"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>
                    <ul class="social-icons">
                      @foreach($media as $value)
                      <li>
                          <a href="{{$value->sm_facebook}}"><i class="ion-social-googleplus-outline"></i></a>
                      </li>
                      <li>
                          <a href="{{$value->sm_linkdin}}"><i class="ion-social-linkedin-outline"></i></a>
                      </li>
                      <li>
                          <a href="{{$value->sm_printer}}"><i class="ion-social-pinterest-outline"></i></a>
                      </li>
                      <li>
                          <a href="{{$value->sm_dribbble}}"><i class="ion-social-dribbble-outline"></i></a>
                      </li>
                      <li>
                          <a href="{{$value->sm_twitter}}"><i class="ion-social-twitter-outline"></i></a>
                      </li>
                      <li>
                          <a href="{{$value->sm_facebook}}"><i class="ion-social-facebook-outline"></i></a>
                      </li>
                      @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>We Also Count In Google Map</h2>
                    <div class="google-map">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
