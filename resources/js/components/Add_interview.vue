<template>
<div>
        <h1 class="text-center m-4">Mülakatınız</h1>
          <form @submit.prevent="addInterview" class="mb-3">
            <div class="form-group">
                <input  type="text" 
                        class="form-control" 
                        placeholder="şirket ismi"
                        v-model="interview.company_name">
            </div>
            <div class="form-group">
                <textarea
                        class="form-control" 
                        placeholder="Mülakatınız hakkında bilgiler"
                        v-model="interview.company_interview" />
            </div>
             <div class="form-group">
                <select class="form-control" v-model="interview.company_offer" @change="selected()">
                    <option  v-for="offer in offers" :value="offer">{{ offer }}</option>
                </select>
            </div>
            <button type="submit" class="btn btn-light"> <i class=""></i> Gönder</button>
        </form>
</div>
</template>
<script>
export default {
    data(){
        return{
            interview : {
                id: '',
                company_name: '',
                company_interview: '',
                company_offer: ''
            },
            edit: false,
            offers: ["Teklif yapıldı","Teklif Yapılmadı","Mülakat Yakın Zamanda Gerçekleşti"]
        }
    },
    methods:{
        addInterview(){
        if(this.edit === false){
            //add
            fetch('api/mulakat' , {
                method: 'post',
                body: JSON.stringify(this.interview),
                headers: {
                    'content-type' : 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                this.interview.company_name = '',
                this.interview.company_interview = ''
                this.interview.company_offer = ''
            })
            .catch(err = console.log(err)
            )
            }
        },
        selected(){
            this.interview.company_offer = this.offers.indexOf(this.interview.company_offer)
        }
    }
}
</script>