@extends('layouts.master')

@section('content-header')
    <h1>
        Inventory
        <small>{{$data->name}}</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard"></i>
                {{$data->name}}
            </a>
        </li>
        <li class="active">Inventory</li>
    </ol>
@endsection

@section('content')
    {{-- <div class="col-md-8">
        <a href="/Inventory/create">
            <button class="btn-primary">
                Create Inventory
            </button>
        </a>
    </div> --}}
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Barang {{$data->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Peminjam</th>
                  <th>email</th>
                  <th>Description</th>
                  <th>Tanggal Peminjaman</th>
                </tr>
                @foreach ($data->employee as $emp)
                    <tr>
                        <td>#</td>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->email }}</td>
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
