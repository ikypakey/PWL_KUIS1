@extends('layout.master')
@section('content')
     <h2 align="center">Daftar Pegawai</h2>
<div class="row">
  @foreach ($employees as $employee)
 
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{asset('img/profil/employee.png')}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6> {{$employee -> nama}}</h6>
                                    <h6> {{$employee -> alamat}}</h6>
                                    <h5>{{$employee -> jabatan}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                        <div class="row">
                            <ul class="pagination pagination justify-content-center">
                                 {{ $employees->links() }}
                             </ul>
                        </div>
@endsection