<template>
<div class="container">
<div class="wrapper-filtering-interview">
    <h2 class="text-center filtering-interviews-tittle">{{this.$route.params.company}} Mülakatları</h2>
        <div class="card card-body p-4"  v-for="interview in interviews" v-bind:key="interview.id">
                    <!-- <h2>{{ interview.id }}</h2> -->
                    <h2> <span class="company-name">Şirketin Adı:</span> {{ interview.company_name }}</h2>
                    <hr>
                    <p> <span class="company-desc">Başvurulan İş:</span> {{ interview.company_job }}</p>
                    <p> <span class="company-desc">Şirket Mülakatı:</span> {{ interview.company_interview }}</p>
                    <p> <span class="company-desc">Şirketin Teklifi:</span> {{ interviews_offer[interview.company_offer] }}</p>
                   <router-link :to="{path: interviewLink, params: {id: interview.id } }">
                    <button class="btn btn-mulakatim" @click="examineInterview(interview.id)">İncele</button>   
                    </router-link> 
        </div>
        <router-link to="/mulakatlar">
            <button class="btn btn-mulakatim">Geri</button>   
        </router-link> 
</div>
</div>
</template>
<script>
export default {
    data(){
        return{
            interviews: [],
            interviews_offer :["Teklif yapıldı","Teklif Yapılmadı","Mülakat Yakın Zamanda Gerçekleşti"],
            id: ''
        }
    },
    methods: {
          examineInterview(id){
           this.id = id // mülakat id sini çekmek için
        }
    },
    created(){
            fetch(`api/mulakatlar/${this.$route.params.company}`)
                .then(res => res.json())
                .then(res => {
                   this.interviews = res.data;
                   console.log(this.interviews);
                   
                })
    },
     computed : {
        interviewLink(){
            return `/mulakat/${this.id}`
        }
    }
    
}
</script>
<style  scoped>
.filtering-interviews-tittle{
    padding-top: 30px;
    padding-bottom: 30px;
    color: #002a5b;
    font-size: 42px;
}
.wrapper-filtering-interview{
    /* margin-top: 30px */
}
.card{
    border-radius: 14px;
    border: 0;
    background: #fff;
    margin-bottom: 1.5rem;
    box-shadow: 0 6px 8px -4px rgba(0,42,91,.1);
    padding: 0 2rem 1.2rem;
}
span.company-desc{
    display: inline;
    color: #002a5b;
    font-size: 18px;
    font-weight: bold;
}
span.company-name{
    display: inline;
    color: #002a5b;
    font-size: 32px;
    font-weight: bold;
}
.card h2 {
    color: #002a5b;
}
.card p{
    color: #002a5b;
}
</style>