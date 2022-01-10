@extends('layouts.master')
@section('content-header')
<h1>
    Karyawan
    <small>Edit Karyawan</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Karyawan</li>
</ol>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Karyawan</h3>
            </div>
            <form role="form" action="/karyawan/update" method="post">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$data->id}}">
                </div>
                <div class="form-group">
                  <label> Name</label>
                  <input type="text" name="nama" class="form-control"
                  value="{{$data->nama}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label> Alamat</label>
                    <input type="text" name="alamat" class="form-control"
                    value="{{$data->alamat}}" placeholder="Enter Alamat">
                </div>
                <div class="form-group">
                    <label> Jabatan</label>
                    <input type="text" name="jabatan" class="form-control"
                    value="{{$data->jabatan}}" placeholder="Enter Jabatan">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection
