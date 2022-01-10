@extends('layouts.master')

@section('content-header')
    <h1>
        Employee
        <small>{{$data->name}}</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                {{$data->name}}
            </a>
        </li>
        <li class="active">Employee</li>
    </ol>
@endsection

@section('content')
    {{-- <div class="col-md-8">
        <a href="/Employee/create">
            <button class="btn-primary">
                Create Employee
            </button>
        </a>
    </div> --}}
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">History Pinjaman {{$data->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Barang</th>
                  <th>Detail</th>
                  <th>Description</th>
                  <th>Tanggal Peminjaman</th>
                </tr>
                @foreach ($data->inventory as $emp)
                    <tr>
                        <td>#</td>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->detail }}</td>
                        <td>{{ $emp->pivot->description }}</td>
                        <td>{{ $emp->pivot->created_at }}</td>
                    </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
@endsection
