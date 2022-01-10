@extends('layouts.master')

@section('content-header')
    <h1>
        Employee
        <small>Data Employee</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Employee</li>
    </ol>
@endsection

@section('content')
    <div class="col-md-8">
        <a href="/employee/create">
            <button class="btn-primary">
                Create Employee
            </button>
        </a>
    </div>
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Employee</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Alamat</th>
                  <th>E-Mail</th>
                  <th>Phone</th>
                  <th>Position</th>
                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td><a href="/employee/show/{{$d->id}}">
                            {{ $d->name }}
                            </a>
                        </td>
                        <td>{{ $d->alamat }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->phone }}</td>
                        <td>{{ $d->position->name }}</td>
                        <td> <a href="/employee/edit/{{$d->id}}">EDIT</a>  |
                            <a href="/employee/delete/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach

              </table>
            </div>
            {{$data->links()}}
            <!-- /.box-body -->
          </div>
    </div>
@endsection
