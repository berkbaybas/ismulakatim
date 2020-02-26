<template>
<div class="header-backgorund">
   <div class="wrapper">     
        <div class="announce">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="headline wow slideInLeft">Mülakat mı arıyorsunuz ?</h1>
                        <h4 class="description">Sizde hemen gireceğiniz mülakatlar hakkında gerçek insanlardan mülakatları hakkında kayda değer bilgileri öğrenin veya girdiğiniz mülakat detaylarını paylaşın.</h4>
                        <router-link to="/mulakatekle"><a class="btn btn-mulakatim">Mülakat Ekle</a></router-link>
                     
                    </div>
                    <div class="col-md-6">
                        <img class="header-img" :src="'images/header-img.png'" alt="">
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3 c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3 c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
        </svg>
  </div> 
</div>
</template>
<style scoped>
    .header-backgorund{
         background-color: transparent;
    background-image: linear-gradient(45deg, #fa73d1 0%, #5b47ed 100%);
    position: relative;
    z-index: 1;
    }
</style>