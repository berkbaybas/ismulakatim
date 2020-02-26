import home from './components/pages/Home.vue';
import EntireInterviews from './components/pages/EntireInterviews.vue';
import AddInterview from './components/pages/AddInterview.vue';
import interviewId from './components/pages/interviewId.vue';
import FilteredInterview from './components/pages/FilteredInterview.vue';
export const routes = [
    {path: '' , component: home},
    {path: '/mulakatlar' , component: EntireInterviews},
    {path: '/mulakatekle' , component: AddInterview},
    {path: '/mulakat/:id' , component: interviewId},
    {path: '/mulakatlar/:company' , component: FilteredInterview},
    // {path: '/isler/:job' , component: jobfilteringInterview}
    
]