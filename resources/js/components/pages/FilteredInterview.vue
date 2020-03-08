<template>
<div class="interview-wrapper">
    <div class="container">
        <div class="wrapper-filtering-interview">
            <h2 class="text-center filtering-interviews-tittle">{{this.$route.params.company | toCamelCase}} Mülakatları</h2>
               <router-link to="/mulakatlar">
                    <button class="btn btn-mulakatim">Geri</button>   
                </router-link> 
                <div class="card card-body p-4"  v-for="interview in interviews" v-bind:key="interview.id">
                            <!-- <h2>{{ interview.id }}</h2> -->
                            <h2> <span class="company-name">Şirketin Adı:</span> {{ interview.company_name | toCamelCase}}</h2>
                            <hr>
                            <p> <span class="company-desc">Başvurulan İş:</span> {{ interview.company_job | toCamelCase}}</p>
                            <p> <span class="company-desc">Şirket Mülakatı:</span> {{ interview.company_interview | toFirstLetterCamelCase | toCutInterview}}...</p>
                            <p :style="{color : fontColor(interview.company_offer)}" > <span :style="{color : fontColor(interview.company_offer)}" class="company-desc">Şirketin Teklifi:</span> {{ interviews_offer[interview.company_offer] | toCamelCase}}</p>
                            <router-link class="router_link" :to="{path: interviewLink, params: {id: interview.id } }">
                                <button class="btn btn-mulakatim" @click="examineInterview(interview.id)">İncele</button>   
                            </router-link> 
                </div>
                <router-link to="/mulakatlar">
                    <button class="btn btn-mulakatim">Geri</button>   
                </router-link> 
        </div>
    </div>
</div>
</template>
<script>
export default {
    metaInfo() {
        return {
            title: this.$route.params.company,
            titleTemplate: (title) => {
                // If undefined or blank then we don't need the hyphen
                return `${title} şirketi mülakatları`;
            },
            htmlAttrs: {
                lang: 'tr',
                amp: true
            },
            meta: [{
                    vmid: 'description',
                    name: 'description',
                    content: `${this.$route.params.company} şirketi mülakatları ${this.$route.params.company} şirketi mülakatlarında sorulan sorular ${this.$route.params.company} şirketi mülakat tavsiyeleri`
                },
                {
                    vmid: 'keywords',
                    name: 'keywords',
                    content: `${this.$route.params.company} şirketi mülakarları,${this.$route.params.company} mülakatları,${this.$route.params.company} mülakat`
                }
            ]
        }

    },
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
            },
        fontColor(value){
            if(value == 0){     
                return "green"
            }
            else if(value == 1){
                return "red"
            }
            else if(value == 2){
                return "orange"
            }
    }
    },
    created(){
        fetch(`/api/mulakatlar/${this.$route.params.company}`)
            .then(res => res.json())
            .then(res => {
               this.interviews = res.data;    
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
body{
    background: rgb(241, 245, 248);
}
.filtering-interviews-tittle{
    padding-top: 30px;
    padding-bottom: 30px;
    color: #002a5b;
    font-size: 42px;
}
.card{
    border-radius: 14px;
    border: 0;
    background: #fff;
    margin-bottom: 1.5rem;
    margin-top: 1.5rem;
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
.router_link{
    width: 155px;
}
</style>