@extends('layouts.master')
@section('content-header')
<h1>
    Employee
    <small>Edit Employee</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Employee</li>
</ol>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Employee</h3>
            </div>
            <form role="form" action="/employee/update" method="post">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$data->id}}">
                </div>
                <div class="form-group">
                  <label> Name</label>
                  <input type="text" name="name" class="form-control"
                  value="{{$data->name}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label> Alamat </label>
                    <input type="text" name="alamat" class="form-control"
                    value="{{$data->alamat}}" placeholder="Enter Alamat">
                </div>

                <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control"
                    value="{{$data->email}}" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label> Phone </label>
                    <input type="text" name="phone" class="form-control"
                    value="{{$data->phone}}" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                    <label>Department</label>
                    <select class="form-control" name="position_id">
                        <option value="{{$data->position_id}}">
                            {{$data->position->name}}
                        </option>
                        @foreach ($position as $pos)
                            @if ($data->position_id != $pos->id)
                                <option value="{{$pos->id}}">
                                    {{$pos->name}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection
