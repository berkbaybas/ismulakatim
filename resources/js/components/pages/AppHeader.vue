<template>
<header>
    <div class="container">
        <nav class="menu navbar navbar-expand-lg navbar-light">
            <router-link to="/"><a class="navbar-brand">işmülakatım.com</a></router-link>

            <div class="navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/mulakatlar"  active-class="active" exact><a class="nav-link nav-item ">Şirketler</a></router-link>
                    <router-link to="/mulakatekle" active-class="active" exact><a class="nav-link nav-item btn btn-mulakatim">Mülakat Ekle</a></router-link>

                    <a class="nav-link nav-item">blog ></a>
                </div>
            </div>

        </nav>
    </div>
    <!-- <div class="container">
        <nav class="menu navbar navbar-expand-lg navbar-light">
            <router-link 
                to="/"
            ><a class="navbar-brand">işmülakatım.com</a></router-link>

            <div class="navbar-collapse">
                <div class="navbar-nav">
                    <router-link 
                        to="/mulakatlar"
                        active-class="active"
                        exact  
                    ><a class="nav-item nav-link">Şirketler</a></router-link>

                    <a class="nav-item nav-link">İşler</a>
                </div>
            </div>
            <div class="search">
                <form class="form-inline searchFrom">
                    <input class="form-control mr-sm-2" type="search" placeholder="Şirket veya iş ara" aria-label="Search">
                    <button class="btn btn-search my-2 my-sm-0" type="submit"><img :src="'images/search.png'" /></button>
                </form>
            </div>
            <div class="auth">
                <router-link 
                    to="/mulakatekle"  
                ><a class="btn btn-mulakatim">Mülakat Ekle</a></router-link>

                <a class="blog">blog ></a>
            </div>
        </nav>
    </div> -->

</header>
</template>
<style scoped>
    .navbar-brand{
        font-family: 'Pangolin', cursive;
        font-weight: 900;
        color: #f4d672;
    }
    .navbar-brand:hover{
        color: #f4d672;
    }
</style>
