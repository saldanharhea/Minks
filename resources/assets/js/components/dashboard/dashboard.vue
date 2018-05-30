<template>

        <div class="container2 ">
         <h3>Header</h3> 
            <list></list>

            <transaction></transaction>
            <user></user>

            <formRe></formRe>
            <div class="row">
                <chart></chart>
            </div>
       
          
            
        </div>
</template>

<script>
    import list from './dashboard-list.vue'
    import transaction from './dashboard-transaction.vue'
    import chart from './dashboard-chart-doughnut.vue'
    import formRe from './dashboard-form.vue'
    import dashboard from './dashboard.vue'
    import user from './dashboard-user.vue'
   
    export default {
     name: 'app',
     components:{
        list,
        transaction,
        chart,
        formRe,
        dashboard,
        user,
       
        


     }
    }

</script>