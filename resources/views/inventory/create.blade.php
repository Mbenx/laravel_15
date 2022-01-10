@extends('layouts.master')
@section('content-header')
<h1>
    Inventory
    <small>Add Inventory</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Inventory</li>
</ol>
@endsection
@section('content')
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Inventory</h3>
            </div>
            <form role="form" action="/inventory/store" method="post">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                </div>
                <div class="form-group">
                    <label>Inventory Name</label>
                    <input type="text" class="form-control" name="inventory_name"
                    placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Inventory Detail</label>
                    <input type="text" class="form-control" name="inventory_detail"
                    placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label>Archive Name</label>
                    <input type="text" class="form-control" name="archive_name"
                    placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Archive Detail</label>
                    <input type="text" class="form-control" name="archive_detail"
                    placeholder="Enter Name">
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
@endsection
