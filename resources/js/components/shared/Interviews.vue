<template>
  <div class="wrapper-interview">
    <div class="container">
        <h2 class="text-center interviews-tittle">Tüm Mülakatlar</h2>
        <div class="row">
            <div class="col-sm-6" v-for="interview in interviews" v-bind:key="interview.id">
                <div class="card card-body p-4">
                    <!-- <h2>{{ interview.id }}</h2> -->
                    <h2> <span class="company-name">Şirketin Adı:</span> {{ interview.company_name | toCamelCase}}</h2>
                    <hr>
                    <p> <span class="company-desc">Başvurulan İş:</span> {{ interview.company_job | toCamelCase}}</p>
                    <p> <span class="company-desc">Şirket Mülakatı:</span> {{ interview.company_interview | toCamelCase}}</p>
                    <p :style="{color : fontColor(interview.company_offer)}" > <span :style="{color : fontColor(interview.company_offer)}" class="company-desc">Şirketin Teklifi:</span> {{ interviews_offer[interview.company_offer] | toCamelCase}}</p>
                    <router-link class="router_link" :to="{path: interviewLink, params: {id: interview.id } }">
                    <button class="btn btn-mulakatim" @click="examineInterview(interview.id)">Detaylı İncele</button>   
                    </router-link> 
                </div>
            </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li v-bind:class="[{disabled : ! pagination.prev_page_url}]" class="page-item"><a
                        @click="fetchInterviews(pagination.prev_page_url)" class="page-link" href="#">Önceki Sayfa</a></li>
                        <li class="page-item disabled"><a class="page-link text-dark" href="#">{{pagination.last_page}}'sayfadan {{pagination.current_page}}.si</a></li>
                        <li v-bind:class="[{disabled : ! pagination.next_page_url}]" class="page-item"><a
                        @click="fetchInterviews(pagination.next_page_url)" class="page-link" href="#">Sonraki Sayfa</a></li>
                    </ul>
                </nav>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return{
            interviews: [],
            // interview : {
            //     id: '',
            //     company_name: '',
            //     company_job: '',
            //     company_interview: '',
            //     company_questions: '',
            //     company_offer: ''
            // },
            interviews_offer :["Teklif yapıldı","Teklif Yapılmadı","Mülakat Yakın Zamanda Gerçekleşti"],
            // interviews_quest : [],
            pagination: {},
            edit: false,
            id: '' // mülakat id sini çekmek için
        }
    },
    created(){  
        this.fetchInterviews();
    },
    methods: {
        fetchInterviews(page_url){
            let vm = this;
            page_url = page_url || "api/mulakatlar"
            fetch(page_url)
                .then(res => res.json())
                .then(res => {   
                    console.log(res.data);
                    
                    this.interviews = res.data
                    // this.interviews_quest = res.data.company_interview.split("+")
                    vm.makePagination(res.meta, res.links);
                })
                .catch(err => console.log(err)
                )
        },
        examineInterview(id){
           this.id = id // mülakat id sini çekmek için
        },
        makePagination(meta, links){
            let pagination = {
                current_page : meta.current_page,
                last_page : meta.last_page,
                next_page_url : links.next,
                prev_page_url : links.prev
            }
            this.pagination = pagination;
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
    computed : {
        interviewLink(){
            return `/mulakat/${this.id}`
        },
 
    }
}
</script>
<style scoped>
.wrapper-interview{
    padding-bottom: 30px
}
.interviews-tittle{
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
.page-item{
    border-radius: 4px;
    display: inline-block;

    margin: 5px;
    background: rgba(0,42,91,.08);
    margin-bottom: 15px;
}
.page-link{
    font-size: 1.0rem;
    color: #002a5b;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    font-weight: 600;
    line-height: 1.8;
    background: 0 0;
    border: 0;
    outline: none !important;
}
.page-item a {
    
    
}
.router_link{
    width: 155px
}
</style>