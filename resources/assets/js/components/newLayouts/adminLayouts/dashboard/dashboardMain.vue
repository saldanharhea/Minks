<template>





    <div class="container2 mt-5">

        <list></list>

        <div class="row">
           <transaction></transaction>

        </div>



    </div>

</template>

<script>


    import list from './card'
    import transaction from './transactionTable'
    //import formRe from './dashboard-form.vue'
    //import dashboard from './dashboard.vue'
    //import user from './dashboard-user.vue'

    export default {

        components:{
            list,
            transaction






        }
    }


</script>


