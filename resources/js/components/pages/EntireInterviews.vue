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
    name: "EntireInterviews",
    components: 
        Interviews,
        FilterInterview,
      
}
</script>