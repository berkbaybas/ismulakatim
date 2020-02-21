@extends('layouts/master')

@section('style')
<style>

</style>
@endsection

@section('header')
<header>
    <div class="container">
        <nav class="menu navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand" href="#">işmülakatım</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="sirketler">Şirketler</a>
                    <a class="nav-item nav-link" href="#">İşler</a>
                </div>
            </div>
            <div class="search">
                <form class="form-inline searchFrom">
                    <input class="form-control mr-sm-2" type="search" placeholder="Şirket veya iş ara" aria-label="Search">
                    <button class="btn btn-search my-2 my-sm-0" type="submit"><img src="../public/images/search.png" /></button>
                </form>
            </div>
            <div class="auth">
                <button class="btn btn-mulakatim">Giriş yap / Üye ol</button>
                <a class="blog" href="blog">blog ></a>
            </div>
        </nav>

</header>
@endsection
@section('content')

    <div class="container">
        <div id="app">
            <add-interview></add-interview>
        </div>
    </div>

@endsection
