<template>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5 class="headline headline-number">Sayılarla Biz</h5>                        
                <div class="row">
                    <div class="col-md-4 col-4">
                        <div class="box box-color-1">
                            <h4 class="box-color-title-1">{{numberInterview}}</h4>
                            <span class="text-center">Gönderilen Mülakat</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-4">
                        <div class="box box-color-2">
                            <h4 class="box-color-title-2">{{numberCompany.length}}</h4>
                            <span class="text-center">Başvurulan Şirket</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-4">
                        <div class="box box-color-3">
                            <h4 class="box-color-title-3">{{numberJob}}</h4>
                            <span class="text-center">Başvurulan İş</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <img class="factImg" :src="'images/facts.png'" alt="">
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            numberInterview : '',
            numberCompany : '',
            numberJob : ''
        }
    },
    created(){
        fetch(`api/sirketler`)
            .then(res => res.json())
            .then(res => {
               this.numberCompany = res.data
            })
        fetch(`api/NumberInterview`)
            .then(res => res.json())
            .then(res => {
                 this.numberInterview = res
            })    
        fetch(`api/NumberJob`)
          .then(res => res.json())
          .then(res => {
               this.numberJob = res

          })       
    }
}
</script>
<style scoped>
    .box span{
        height: 50px;
        display: flex;
        align-items: center;
        width: 75px;
    }
</style>