@extends('layout.master')
@section('content')

<h2 align="center">Daftar pelanggan</h2>
    <div class="container mt-3">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Nomor Telp</th>
                  <th scope="col">Jenis Kelamin</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pelanggans as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>
                        @if($p->jeniskelamin == 'Laki-laki')
                        <img src="{{asset('img/profil/man.png')}}" alt="" height="50px">
                        @else 
                        <img src="{{asset('img/profil/woman.png')}}" alt="" height="50px">
                        @endif
                    </td>
                    <td>{{$p -> nama}}</td>
                    <td>{{$p -> alamat}}</td>
                    <td>{{$p -> notelp}}</td>
                    <td>{{$p -> jeniskelamin}}</td>
                  </tr>
                @endforeach
              </tbody>
          </table>
    </div>

@endsection