<template>
    <div>
        <home-announce></home-announce>
   
        <home-why></home-why>

    <section>
        <home-background></home-background>
    </section>
    <section style="border-bottom: 13px solid #5953be;">
        <home-numbers></home-numbers>
    </section>
    
        <!-- <home-comment></home-comment> -->

 
        <home-brand></home-brand>        

    </div>
</template>
<script>
import HomeAnnounce from '../shared/HomeAnnounce';
import HomeWhy from '../shared/HomeWhy';
import HomeBackground from '../shared/HomeBackground';
import HomeNumbers from '../shared/HomeNumbers';
import HomeComment from '../shared/HomeComment';
import HomeBrand from '../shared/HomeBrand';


export default {
    metaInfo: {
        title: 'işmülakatım',
        titleTemplate: '%s - Anasayfa',
        htmlAttrs: {
            lang: 'tr',
            amp: true
        },
        meta: [{
                vmid: 'description',
                name: 'description',
                content: 'Mülakat hakkında gerçek insanlardan gerçek bilgiler, mülakata girmeden önce bilgi sahibi olun.'
            },
            {
                vmid: 'keywords',
                name: 'keywords',
                content: 'ismulakatim,işmülakatım,mülakat sitesi,mülakat tavsiyeleri,mülakat sitesi,mülakat'
            }
        ],

    },
    name: "home",
    components: {
        "home-announce" : HomeAnnounce,
        "home-why" : HomeWhy,
        "home-background" : HomeBackground,
        "home-comment" : HomeComment,
        "home-brand" : HomeBrand
    }
}
</script>