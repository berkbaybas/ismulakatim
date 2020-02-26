<template>
<div class="wrapper-add-interview container">
    <h1 class="text-center">Mülakatınız</h1>
      <form @submit.prevent="addInterview" class="mb-3">
        <div class="field tnb">
            <label for="company_name">Şirketin İsmi</label>
            <input
                type="company_name" 
                class="" 
                v-model="interview.company_name">
        </div>
           <div class="field tnb">
            <label for="company_job">Başvurulan İş</label>
            <input
                type="company_job" 
                class="" 
                v-model="interview.company_job">
        </div>
        <div class="field tnbp">
            <label for="interview">Mülakatınız</label>
            <textarea
                name="interview"
                class="" 
                v-model="interview.company_interview" />
        </div>
         <div class="field tnb">
            <label for="offer">Teklif</label>
            <select name="offer" class="" v-model="interview.company_offer" @change="selected()">
                <option  v-for="offer in offers" :value="offer">{{ offer }}</option>
            </select>
        </div>
        <button type="submit" class="btn btn-light btn-interview text-center">Gönder</button>
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
                company_job: '',
                company_interview: '',
                company_offer: ''
            },
            edit: false,
            offers: ["Teklif yapıldı","Teklif Yapılmadı","Mülakat Yakın Zamanda Gerçekleşti"],
            offerIndex:''
        }
    },
    methods:{
        addInterview(){
        this.interview.company_offer = this.offerIndex;
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
                this.interview.company_job = '',
                this.interview.company_interview = ''
                this.interview.company_offer = ''
            })
            .catch(err = console.log(err)
            )
            }
        },
        selected(){
            this.offerIndex = this.offers.indexOf(this.interview.company_offer)
        }
    }
}
</script>

<style scoped>
.wrapper-add-interview{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;  
  background-repeat: no-repeat, repeat;

}
form {
  margin: 2rem 0;
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 500px;
}
form:after {
  content: '';
  display: table;
  clear: both;
}
form .field {
  display: block;
  border: 1px solid #BDBDBD;
  float: left;
  width: 100%;
  margin-bottom: 5px;
}
form .field label {
    display: block;
    font-size: 1.2rem;
    padding: 1.5rem 2rem 0.5rem;
    text-transform: uppercase;
    color: #999;
    font-weight: 700;
    letter-spacing: 1px;
    background-color: white;
    margin-bottom: 0;
}
form .field input,
form .field textarea,
form .field select {
  display: block;
  width: 100%;
  padding: .5rem 2rem 1.5rem;
  font-size: 1rem;
  border: 0;
  color: #212121;
  outline: 0;
}
form .field textarea {
  min-height: 150px;
  resize: vertical;
}
.btn-interview{
    margin-top: 7px;
    background-image: linear-gradient(45deg, #fa73d1 0%, #5b47ed 100%);
    color: white;
    
}
</style>