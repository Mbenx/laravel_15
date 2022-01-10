@extends('layouts.master')

@section('content-header')
    <h1>
        Archive
        <small>Data Archive</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                Home
            </a>
        </li>
        <li class="active">Archive</li>
    </ol>
@endsection

@section('content')

    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Archive</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Archive Name</th>
                  <th>Archive Detail</th>
                  <th>Inventory Name</th>
                  <th>Inventory Detail</th>

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
                        <td>{{$d->inventory->name}}</td>
                        <td>{{$d->inventory->detail}}</td>
                    </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
@endsection
