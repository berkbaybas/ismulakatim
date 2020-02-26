<template>
<section>
<div class="container">     
    <div class="row">
        <div class="col-md-9">
            <add-interview-form></add-interview-form> 
        </div>
        <div class="col-md-3">
            <add-interview-info></add-interview-info>
        </div>
    </div>
</div>
</section>
</template>
<script>
import AddInterviewForm from '../shared/AddInterviewForm';
import AddInterviewInfo from '../shared/AddInterviewInfo';

export default {
    name: "AddInterview",
    components: 
        AddInterviewForm,
        AddInterviewInfo,
}
</script>
<style scoped>
    body{
        background: #f1f5f8;
    }
</style>