@extends('layout.master')
@section('content')

<h2 align="center">Daftar Pegawai</h2>
    <div class="container mt-3">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Nomor Telp</th>
                  <th scope="col">Deskripsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($suppliers as $supplier)
                <tr>
                    <th scope="row">{{$supplier->id}}</th>
                    <td>
                        <img src="{{asset('img/profil/supplier.png')}}" alt="" height="50px">
                    </td>
                    <td>{{$supplier -> nama}}</td>
                    <td>{{$supplier -> alamat}}</td>
                    <td>{{$supplier -> notelp}}</td>
                    <td>{{$supplier -> deskripsi}}</td>
                  </tr>
                @endforeach
              </tbody>
          </table>
    </div>

@endsection