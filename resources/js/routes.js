import Interview from './components/Interview.vue';
import addInterview from './components/Add_interview.vue';
import interviewId from './components/interviewId.vue';
import filterInterview from './components/filterInterview.vue';
import filteringInterview from './components/filteringInterview.vue';

export const routes = [
    {path: '' , component: Interview},
    {path: '/mulakat/:id' , component: interviewId},
    {path: '/mulakatlar/:company' , component: filteringInterview}
    
]