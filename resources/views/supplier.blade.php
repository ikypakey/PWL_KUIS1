@extends('layout.master')
@section('content')
<!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
     <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg mb-5" data-setbg="{{asset('img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Employee </h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <a href="/">Supplier</a>
                            <span>Supplier</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<h2 align="center">Daftar Supplier</h2>
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