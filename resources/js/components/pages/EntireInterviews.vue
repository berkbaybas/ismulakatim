<template>
<div class="interview-wrapper" style="background: #f1f5f8;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <filter-interview></filter-interview>
            </div>
            <div class="col-md-9">
                <interviews></interviews> 
            </div>
        </div>
    </div>
</div>
</template>
<script>
import Interviews from '../shared/Interviews';
import FilterInterview from '../shared/FilterInterview';

export default {
    metaInfo: {
        title: 'işmülakatım',
        titleTemplate: '%s - Tüm mülakatlar',
        htmlAttrs: {
            lang: 'tr',
            amp: true
        },
        meta: [{
                vmid: 'description',
                name: 'description',
                content: 'Mülakata girmeden önce giriceğiniz mülakat hakkında bilgi sahibi olun!'
            },
            {
                vmid: 'keywords',
                name: 'keywords',
                content: 'mülakatlar,mülakat tavsiyeleri,iş mülakatı, mülakatlar hakkında,mülakat'
            }
        ],

    },
    name: "EntireInterviews",
    components: {
        Interviews,
        FilterInterview,
    }
      
}
</script>