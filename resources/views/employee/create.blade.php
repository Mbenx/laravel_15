@extends('layouts.master')
@section('content-header')
<h1>
    Employee
    <small>Add Employee</small>
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
              <h3 class="box-title">Add Employee</h3>
            </div>
            <form role="form" action="/employee/store" method="post">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                </div>
                <div class="form-group">
                  <label> Name </label>
                  <input type="text" name="name" class="form-control"
                  placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label> Alamat </label>
                    <input type="text" name="alamat" class="form-control"
                    placeholder="Enter Alamat">
                </div>

                <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control"
                    placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label> Phone </label>
                    <input type="text" name="phone" class="form-control"
                    placeholder="Enter Phone">
                </div>

                <div class="form-group">
                    <label>Position</label>
                    <select class="form-control" name="position_id">
                        @foreach ($position as $pos)
                            <option value="{{$pos->id}}">
                                {{$pos->name}}
                            </option>
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
