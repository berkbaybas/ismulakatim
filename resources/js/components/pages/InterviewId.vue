<template>
    <div class="container">
        <h2 class="text-center filtering-interviews-tittle">{{this.company_name}} şirketi {{this.company_job}} mülakatı</h2>
     <div class="card card-body p-4">
        <!-- <h2>{{ interview.id }}</h2> -->
        <h2> <span class="company-name">Şirketin Adı:</span> {{ this.company_name }}</h2>
        <hr>
        <p> <span class="company-desc">Başvurulan İş:</span> {{ this.company_job }}</p>
        <p> <span class="company-desc">Şirket Mülakatı:</span> {{ this.company_interview }}</p>
        <p> <span class="company-desc">Şirketin Teklifi:</span> {{ this.interviews_offer[this.company_offer] }}</p>
     </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            id: '',
            company_name: '',
            company_interview: '',
            company_job: '',
            company_offer: '',
            interviews_offer :["Teklif yapıldı","Teklif Yapılmadı","Mülakat Yakın Zamanda Gerçekleşti"],

        }
    },
    created(){
        this.id=this.$route.params.id
        this.fetchInterviews();
    },
    methods: {
        fetchInterviews(){
            fetch(`api/mulakat/${this.id}`)
                .then(res => res.json())
                .then(res => {
                    this.id = res.id
                    this.company_name = res.company_name
                    this.company_interview = res.company_interview
                    this.company_job = res.company_job
                    this.company_offer = res.company_offer
                })
        },
}
}
</script>
<style scoped>
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