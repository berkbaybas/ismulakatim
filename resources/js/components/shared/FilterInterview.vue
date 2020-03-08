<template>
<div class="wrapper-company-filter">
    <h4>Şirketlere göre mülakat ara</h4>
    <input type="text" v-model="search_company" placeholder="Şirket Ara">
    <div class="category-list" v-for="companyName in filteredCompanies" :key="companyNames.id">
        <router-link class="router_link" :to="{path: interviewLink, params: {company: companyName.company_name }}">
            <button class="btn btn-company-filter btn-mulakatim" @click="company=companyName.company_name">{{companyName.company_name | toCamelCase}}</button>
        </router-link>

    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            companyNames: [],
            company: '',
            search_company: ''
        }
    },
    computed: {
        interviewLink() {
            return `/mulakatlar/${this.company}`
        },
        filteredCompanies() {
            return this.companyNames.filter((companyName) => {
                return companyName.company_name.toLowerCase().match(this.search_company.toLowerCase());
            })
        }
    },
    created() {
        fetch("/api/sirketler")
            .then(res => res.json())
            .then(res => {
                this.companyNames = res.data
            })

    },
}
</script>

<style scoped>
.btn-company-filter {
    display: block;
    padding: 5px;
    margin-bottom: 10px;
    border: 0
}

.router_link {
    width: 155px;
}

.category-list {
    display: flex;
    align-items: center;
    justify-content: center;
}

input {
    width: 100%;
    padding: 7px 7px 3px 7px;
    border: none;
    border-bottom: 1px solid gray;
    margin-bottom: 1rem
}
</style>
