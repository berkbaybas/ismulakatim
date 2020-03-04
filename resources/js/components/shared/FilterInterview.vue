<template>
    <div class="wrapper-company-filter">
    <h4>Şirketlere göre mülakat ara</h4>
    <input type="text" v-model="search_company" placeholder="şirket ara">
    <hr>
    <div class="category-list" v-for="companyName in filteredCompanies" :key="companyNames.id">
    <router-link
    :to="{path: interviewLink, params: {company: companyName.company_name }}">
    
    <button class="btn-company-filter btn-mulakatim" @click="company=companyName.company_name">{{companyName.company_name | toCamelCase}}</button></router-link>

    </div>
    </div>
</template>
<script>
export default {
    data() {
        return{
            companyNames: [],
            company: '',
            search_company: '' 
        }
    },
    computed : {
        interviewLink(){
            return `/mulakatlar/${this.company}`
        },
        filteredCompanies(){
           return this.companyNames.filter((companyName) => {
               return companyName.company_name.match(this.search_company);
           })
        }
    },
    created() {
        fetch("api/sirketler")
            .then(res => res.json())
            .then(res => {   
            this.companyNames = res.data
              
        })
    
    },
}

</script>
<style scoped>
    .wrapper-company-filter{
        margin-top: 120px;
        border-radius: 14px;
        transition: .3s ease-in-out;
        width: 100%;
        background: #fff;
        margin-bottom: 1.5rem;
        padding: 24px;
    }
    .btn-company-filter{
        display: block;
        padding: 5px;
        margin-bottom: 10px;
        
        border: 0
    }
</style>