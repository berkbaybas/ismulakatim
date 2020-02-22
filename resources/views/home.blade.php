@extends('layouts/master')

@section('header')
<header>

<div class="wrapper">
    <div class="container">
        <nav class="menu navbar navbar-expand-lg navbar-light">

            <a class="navbar-brand" href="#">işmülakatım.com</a>

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
    </div>


<div class="announce">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Mülakat mı arıyorsunuz</h1>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto non dignissimos quod impedit? Veritatis rerum eos</h3>
                <a href="mulakatekle" class="btn btn-mulakatim">Mülakat Ekle</a>
            </div>
            <div class="col-md-6">
                <img class="header-img" src="../public/images/header-img.png" alt="">
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
    <path class="shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3 c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
</svg>

</div>
</header>
@endsection
@section('content')
<section>
            <h2 class="text-center section-title">Neden İş Mülakatım</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="whyColumn">
                            <img class="whyColumnImg" src="../public/images/search.png" alt="">
                            <div>
                                <h3>lorem</h3>
                                <span>
                                    <div class="10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque fuga quia reprehenderit sed! Modi </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="whyColumn">
                            <img class="whyColumnImg" src="../public/images/search.png" alt="">
                            <div>
                                <h3>lorem</h3>
                                <span>
                                    <div class="10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque fuga quia reprehenderit sed! Modi </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="whyColumn">
                            <img class="whyColumnImg" src="../public/images/search.png" alt="">
                            <div>
                                <h3>lorem</h3>
                                <span>
                                    <div class="10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque fuga quia reprehenderit sed! Modi </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
</section>
    
        <section>
            <div class="background">
                <div class="container">
                    <p class="missionMulakatim">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident ut commodi, ducimus nesciunt illum quaerat vel dignissimos n
                        ihil omnis qui. Perspiciatis vero repellendus impedit voluptatem cum tempora sequi natus! Error?</p>
    
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h5>Sayılarla Biz</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dicta omnis a. Tempora animi, ullam aut blanditiis vel necessitatibus aperiam ducimus ex voluptate qui, non expedita amet, iusto numquam dolorem iure commodi itaque autem ad?</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box">
                                    <h4>560</h4>
                                    <span>Mülakat</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                    <h4>560</h4>
                                    <span>Mülakat</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box">
                                    <h4>560</h4>
                                    <span>Mülakat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img class="factImg" src="../public/images/facts.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="brandSection">
            <h2 class="text-center section-title">Mülakat Örneği Olan Bazı Şirketler</h2>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img class="brand-logo" src="../public/images/oyak-renault.jpg" alt="">
                    </div>
                    <div class="col-2">
                        <img class="brand-logo" src="../public/images/oyak-renault.jpg" alt="">
                    </div>
                    <div class="col-2">
                        <img class="brand-logo" src="../public/images/oyak-renault.jpg" alt="">
                    </div>
                    <div class="col-2">
                        <img class="brand-logo" src="../public/images/oyak-renault.jpg" alt="">
                    </div>
                    <div class="col-2">
                        <img class="brand-logo" src="../public/images/oyak-renault.jpg" alt="">
                    </div>
                    <div class="col-2">
                        <img class="brand-logo" src="../public/images/oyak-renault.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        
@endsection('content')
