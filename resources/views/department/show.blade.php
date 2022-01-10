@extends('layouts.master')

@section('content-header')
    <h1>
        Department
        <small>{{$data->name}}</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                {{$data->name}}
            </a>
        </li>
        <li class="active">Department</li>
    </ol>
@endsection

@section('content')
    {{-- <div class="col-md-8">
        <a href="/department/create">
            <button class="btn-primary">
                Create Department
            </button>
        </a>
    </div> --}}
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Department {{$data->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Position Name</th>
                  <th>Position Code</th>
                </tr>
                @foreach ($data->position as $pos)
                    <tr>
                        <td>#</td>
                        <td>{{ $pos->name }}</td>
                        <td>{{ $pos->code }}</td>
                    </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
@endsection
