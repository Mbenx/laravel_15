@extends('layouts.master')

@section('content-header')
    <h1>
        Inventory
        <small>Data Inventory</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Inventory</li>
    </ol>
@endsection

@section('content')
    <div class="col-md-8">
        <a href="/inventory/create">
            <button class="btn-primary">
                Create Inventory
            </button>
        </a>
    </div>
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Inventory</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Inventory Name</th>
                  <th>Inventory Detail</th>
                  <th>Archive Name</th>
                  <th>Archive Detail</th>
                  <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>
                            <a href="/inventory/show/{{$d->id}}">
                                {{ $d->name }}
                            </a>
                        </td>
                        <td>{{ $d->detail }}</td>
                        <td>{{$d->archive->name}}</td>
                        <td>{{$d->archive->detail}}</td>
                        <td> <a href="/inventory/edit/{{$d->id}}">EDIT</a>  |
                            <a href="/inventory/delete/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
@endsection
