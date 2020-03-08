<template>
<div class="interview-wrapper">
    <div class="container">
        <h2 class="text-center filtering-interviews-tittle">{{company_name | toCamelCase}} şirketi {{company_job | toCamelCase}} mülakatı</h2>
        <div class="card card-body p-4">
            <!-- <h2>{{ interview.id }}</h2> -->
            <h2> <span class="company-name">Şirketin Adı:</span> {{ company_name | toCamelCase}}</h2>
            <hr>
            <p> <span class="company-desc">Başvurulan İş:</span> {{ company_job  | toCamelCase}}</p>
            <p> <span class="company-desc">Şirket Mülakatı:</span> {{ company_interview  | toFirstLetterCamelCase}}</p>
            <div>
                <p> <span class="company-desc">Şirket Soruları:</span></p>
                <div>
                    <p v-for="(question,key) in company_question" :key="key">{{key+1}} : {{ question | toFirstLetterCamelCase}} ?</p>
                </div>
            </div>
            <p :style="{color : fontColor}"> <span :style="{color : fontColor}" class="company-desc">Şirketin Teklifi:</span> {{ interviews_offer[company_offer] | toCamelCase}}</p>
        </div>
        <router-link to="/mulakatlar">
            <button class="btn btn-mulakatim">Geri</button>
        </router-link>
    </div>
</div>
</template>

<script>
export default {
    metaInfo() {
        return {
            title: {c : this.company_name , j : this.company_job},
            titleTemplate: ({c,j}) => {
                // If undefined or blank then we don't need the hyphen
                return `${c} şirketi ${j} mülakatı`;
            },
            htmlAttrs: {
                lang: 'tr',
                amp: true
            },
            meta: [{
                    vmid: 'description',
                    name: 'description',
                    content: `${this.company_name} şirketi ${this.company_job} mesleği mülakatı hakkında paylaşılan mülakatlar ve ${this.company_name} şirketi mülakatları`
                },
                {
                    vmid: 'keywords',
                    name: 'keywords',
                    content: `${this.company_name} şirketi mülakarları,${this.company_job} mülakatları,${this.company_name} mülakat soruları,${this.company_name} mülakat hazırlık`
                }
            ]
        }

    },
    data() {
        return {
            id: this.$route.params.id,
            company_name: '',
            company_interview: '',
            company_job: '',
            company_question: [],
            company_offer: '',
            interviews_offer: ["Teklif yapıldı", "Teklif Yapılmadı", "Mülakat Yakın Zamanda Gerçekleşti"],
        }
    },
    created() {
        this.fetchInterviews();
    },
    methods: {
        fetchInterviews() {
            fetch(`/api/mulakat/${this.id}`)
                .then(res => res.json())
                .then(res => {
                    this.id = res.id
                    this.company_name = res.company_name
                    this.company_interview = res.company_interview
                    this.company_job = res.company_job
                    this.company_offer = res.company_offer
                    this.company_question = res.company_questions.split("+")
                    this.company_question.pop() // sondaki + yüzünden bir boş eleman silme kodu
                })
        },
    },
    computed: {
        fontColor() {
            if (this.company_offer == 0) {
                return "green"
            } else if (this.company_offer == 1) {
                return "red"
            } else if (this.company_offer == 2) {
                return "orange"
            }
        }
    }
}
</script>

<style scoped>
.filtering-interviews-tittle {
    padding-top: 30px;
    padding-bottom: 30px;
    color: #002a5b;
    font-size: 42px;
}

.card {
    border-radius: 14px;
    border: 0;
    background: #fff;
    margin-bottom: 1.5rem;
    box-shadow: 0 6px 8px -4px rgba(0, 42, 91, .1);
    padding: 0 2rem 1.2rem;
}

span.company-desc {
    display: inline;
    color: #002a5b;
    font-size: 18px;
    font-weight: bold;
}

span.company-name {
    display: inline;
    color: #002a5b;
    font-size: 32px;
    font-weight: bold;
}

.card h2 {
    color: #002a5b;
}

.card p {
    color: #002a5b;
}
</style>
