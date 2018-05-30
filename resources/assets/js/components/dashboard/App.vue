<template>
    <div >

      
        <router-view></router-view>
     
        


<!--

        <p>
            <router-link :to="{ name: 'dashboard-list' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link>
        </p>

        <div class="container">
            
        </div>
-->

    </div>

</template>



 <script>
    import list from './dashboard-list.vue'
    import transaction from './dashboard-transaction.vue'
    import chart from './dashboard-chart-doughnut.vue'
    import formRe from './dashboard-form.vue'
    import dashboard from './dashboard.vue'
    import doc from './Hello.vue'
    
    
    export default {
     name: 'app',
     components:{
        list,
        transaction,
        chart,
        formRe,
        dashboard,



     }
    }

</script>



<style src="../../../styles/style-template.css">
</style>

