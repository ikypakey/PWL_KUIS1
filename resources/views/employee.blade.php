@extends('layout.master')
@section('content')
<div class="row">
  @foreach ($employees as $employee)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset($employee -> gambar)}}">
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{$employee -> nama}}</a></h6>
                                    <h5>{{$employee -> harga}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
@endsection