@extends('layouts.admin');
@section('content')
<div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-9">
                          <table class="table table-hover table-striped table-responsive view_table_cus">
                             <tbody><tr>
                                <td>Name</td>
                                  <td>:</td>
                                  <td>{{$data->contactname}}</td>
                              </tr>
                            <tr>
                                <td>Email</td>
                                  <td>:</td>
                                  <td>{{$data->contactemail}}</td>
                              </tr>
                              <tr>
                                <td>Subject</td>
                                  <td>:</td>
                                  <td>{{$data->contactsubject}}</td>
                              </tr>
                              <tr>
                                <td>Message</td>
                                  <td>:</td>
                                  <td>{{$data->contactmessage}}</td>
                              </tr>
                              <tr>
                              <tr>
                                <td>Time</td>
                                  <td>:</td>
                                  <td>{{$data->created_at}}</td>
                              </tr>
                          </tbody></table>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <div class="panel-footer">
                      <div class="col-md-4">
                          <a href="#" class="btn btn-sm btn-primary">PDF</a>
                          <a href="#" class="btn btn-sm btn-success">PRINT</a>
                      </div>
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4 text-right">

                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
              </div>
@endsection
