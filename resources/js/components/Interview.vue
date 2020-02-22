<template>
    <div class="container">
        <h2 class="text-center">Mülakatlar</h2>
  
        <div class="row">
            <div class="col-sm-6" v-for="interview in interviews" v-bind:key="interview.id">
                <div class="card card-body p-4 m-4">
                    <h2>{{ interview.id }}</h2>
                    <h3>{{ interview.company_name }}</h3>
                    <p>{{ interview.company_interview }}</p>
                    <button class="btn btn-mulakatim" @click="examineInterview(interview.id)">incele</button>
                </div>
            </div>
        </div>
       
    </div>
</template>

<script>
export default {
    data(){
        return{
            interviews: [],
            interview : {
                id: '',
                company_name: '',
                company_interview: ''
            },
            pagination: {},
            edit: false
        }
    },
    created(){
        this.fetchInterviews();
    },
    methods: {
        fetchInterviews(){
            fetch("api/mulakatlar")
                .then(res => res.json())
                .then(res => {
                    this.interviews = res.data
                })
        },
        examineInterview(id){
           console.log(id);
        }
    
    }
}
</script>