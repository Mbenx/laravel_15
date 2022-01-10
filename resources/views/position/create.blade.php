@extends('layouts.master')
@section('content-header')
<h1>
    Position
    <small>Add Position</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Position</li>
</ol>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Position</h3>
            </div>
            <form role="form" action="/position/store" method="post">
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

                {{-- <div class="form-group">
                    <label> Department </label>
                    <input type="text" name="department_id" class="form-control"
                    placeholder="Enter department_id">
                </div> --}}

                <div class="form-group">
                    <label>Department</label>
                    <select class="form-control" name="department_id">
                        @foreach ($department as $dept)
                            <option value="{{$dept->id}}">
                                {{$dept->name}}
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
