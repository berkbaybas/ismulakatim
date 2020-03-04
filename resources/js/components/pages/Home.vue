<template>
    <div>
        <home-announce></home-announce>
   
        <home-why></home-why>

    <section>
        <home-background></home-background>
    </section>
    <section>
        <home-numbers></home-numbers>
    </section>
    
        <home-comment></home-comment>

 
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
    name: "home",
    components: 
        HomeAnnounce,
        HomeWhy,
        HomeBackground,
        HomeComment,
        HomeBrand
}
</script>