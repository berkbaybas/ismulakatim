<template>
<div class="wrapper-add-interview container">
    <h1 class="text-center">Mülakatınız</h1>
    <form @submit.prevent="addInterview()" class="mb-3">
        <div class="field tnb">
            <label for="company_name">Şİrketİn İsmİ</label>
            <input @input="$v.interview.company_name.$touch()" type="company_name" class="" v-model="interview.company_name">
            <small v-if="!$v.interview.company_name.required" class="text-danger">Bu alan zorunludur.</small>
        </div>
        <div class="field tnb">
            <label for="company_job">Başvurulan İş</label>
            <input @input="$v.interview.company_job.$touch()" type="company_job" class="" v-model="interview.company_job">
            <small v-if="!$v.interview.company_job.required" class="text-danger">Bu alan zorunludur.</small>
        </div>
        <div class="field tnbp">
            <label for="interview">Mülakatınız</label>
            <textarea @textarea="$v.interview.company_interview.$touch()" name="interview" class="" v-model="interview.company_interview" />
            <small v-if="!$v.interview.company_interview.required" class="text-danger">Bu alan zorunludur.</small>
        <small v-if="!$v.interview.company_interview.minLength" class="text-danger">Mülakatınız en az  {{120-interview.company_interview.length}} karakter daha olmalıdır.</small>

        </div>
        <div class="field-li field tnbp">
            <label for="company_question">Şİrketİn Mülakat Soruları <a @click="newQuestion" class="btn btn-success">soru ekle</a></label>
            <ul>
                <li
                v-for="(question,index) in questions" :key="index"
                >
                <span>{{index+1}}-</span>
                <input 
                type="text"
                name="company_question"
                v-model="question.value"> 
                <button @click="questions.pop(index,1)" class="btn btn-danger">SİL</button></li>
            </ul>
            <small class="text-success">Bu alan zorunlu değildir. Dilerseniz soru ekle kısmı ile istediğiniz kadar soru ekleyebilirsiniz.</small>
        </div>
         <div class="field tnb">
            <label for="offer">Teklİf</label>
            <select 
               @select="$v.interview.company_offer.$touch()"
               name="offer" 
               class="" 
               v-model="interview.company_offer" 
               @change="selected()">
                <option  v-for="(offer,key) in offers" :value="offer" :key="key">{{ offer }}</option>
            </select>
            <small v-if="!$v.interview.company_offer.required" class="text-danger">Bu alan zorunludur.</small>

        </div>
        <button :disabled="$v.$invalid" type="submit" class="btn btn-interview text-center">Gönder</button>
    </form>

</div>
</template>

<script>
import {
    required,
    minLength
} from 'vuelidate/lib/validators'
import Swal from 'sweetalert2/dist/sweetalert2.js'
export default {
    data() {
        return {
            interview: {
                id: '',
                company_name: '',
                company_job: '',
                company_interview: '',
                company_questions: '',
                company_offer: ''
            },
            edit: false,
            offers: ["Teklif yapıldı", "Teklif Yapılmadı", "Mülakat Yakın Zamanda Gerçekleşti"],
            offerIndex: '',
            questions: []
        }
    },
    validations: {
        interview: {
            company_name: {
                required
            },
            company_job: {
                required
            },
            company_job: {
                required
            },
            company_interview: {
                required,
                minLength: minLength(120)
            },
            company_offer: {
                required
            }
        }
    },
    methods: {
        addInterview() {

            this.interview.company_offer = this.offerIndex;

            // questions arrayindeki elemanları stringe birleştiriyor
            this.questions.forEach(value => {
                this.interview.company_questions += (value.value + '+')
            });
            if (this.edit === false) {
                //add
                fetch('/api/mulakat', {
                        method: 'post',
                        body: JSON.stringify(this.interview),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then((res) => {
                        if (res.status == 201) {
                            this.$swal({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                icon: 'success',
                                title: 'Form Başarıyla Gönderildi'
                            })
                        } else {
                            
                        }
                    })
                    // .then(res => res.json())
                    .then(data => {
                        this.interview.company_name = ''
                        this.interview.company_job = ''
                        this.interview.company_interview = ''
                        this.interview.company_offer = ''
                        this.interview.company_questions = ''
                        this.questions = []
                        console.log('burdayım');
                        
                    })
                    .catch(err => {
                        console.log(err);
                    })
            }

        },
        selected() {
            this.offerIndex = this.offers.indexOf(this.interview.company_offer)
        },
        newQuestion() {
            this.questions.push({})

        },
    }

}
</script>

<style scoped>
.wrapper-add-interview {
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
    /* height: 500px; */
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

.btn-interview {
    margin-top: 7px;
    background-image: linear-gradient(45deg, #b15fde 0%, #5c47ed 100%);
    color: white;
}

li {
    display: flex;
    align-items: center;
    list-style-type: none;
    border-bottom: 1px solid #999999;
}

form .field-li input {
    padding: 1rem 1.5rem 1rem 1rem;
}

form .field-li ul {
    padding-inline-end: 40px;
}

.btn-success:hover {
    color: #fff;
    background-color: #0cf33f;
}

.btn:disabled {
    cursor: not-allowed
}
</style>
