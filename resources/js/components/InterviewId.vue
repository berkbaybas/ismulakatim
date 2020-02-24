<template>
    <div class="container">
        <h1>{{this.id}}</h1>
        <h3>{{this.company_name}}</h3>
        <h4>{{this.company_interview}}</h4>
        <h2>{{this.company_offer}}</h2>
    </div>
</template>
<script>
export default {
    data(){
        return{
            id: '',
            company_name: '',
            company_interview: '',
            company_offer: ''
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
                    console.log(res);
                    this.id = res.id
                    this.company_name = res.company_name
                    this.company_interview = res.company_interview
                    this.company_offer = res.company_offer
                })
        },
}
}
</script>