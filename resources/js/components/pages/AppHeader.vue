<template>
<header>
    <div class="container">
        <nav class="menu navbar navbar-expand-lg navbar-light">
            <router-link to="/"
            ><a class="navbar-brand">işmülakatım.com</a></router-link>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <router-link to="/mulakatlar"  
                    ><a class="nav-item nav-link">Şirketler</a></router-link>
                    
                    <a class="nav-item nav-link" href="isler">İşler</a>
                </div>
            </div>
            <div class="search">
                <form class="form-inline searchFrom">
                    <input class="form-control mr-sm-2" type="search" placeholder="Şirket veya iş ara" aria-label="Search">
                    <button class="btn btn-search my-2 my-sm-0" type="submit"><img :src="'images/search.png'" /></button>
                </form>
            </div>
            <div class="auth">
                <router-link to="/mulakatekle"  
                ><a class="btn btn-mulakatim">Mülakat Ekle</a></router-link>
                
                <a class="blog" href="blog">blog ></a>
            </div>
        </nav>
    </div>
</header>
</template>