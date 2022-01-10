@extends('layouts.master')
@section('content-header')
<h1>
    Department
    <small>Add Department</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Department</li>
</ol>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Department</h3>
            </div>
            <form role="form" action="/department/store" method="post">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                </div>
                <div class="form-group">
                  <label> Name </label>
                  <input type="text" name="name" class="form-control"
                  placeholder="Enter Name">
                  @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('name')}}</li>
                            </ul>
                        </div>
                  @endif
                </div>
                <div class="form-group">
                    <label> Code </label>
                    <input type="text" name="code" class="form-control"
                    placeholder="Enter Code">
                    @if ($errors->has('code'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{$errors->first('code')}}</li>
                            </ul>
                        </div>
                  @endif
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection
