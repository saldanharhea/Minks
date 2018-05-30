<template>





        <div class="col-xl-7">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Incoming Transactions
                                <!--
                                <div v-for="post in posts">
                                    <div v-for="item in post">
                                        <p>{{item.id}}</p>
                                    </div>
                                </div>
                                -->
                            </h3>
                        </div>
                    </div>

                </div>


                <div class="m-portlet__body table-responsive">
                    <!--begin: Datatable -->


                    <table id="example2" class="m_datatable table table-striped table-bordered">
                        <thead>
                        <tr class="hds">

                            <th>Order Id</th>
                            <th>Transaction Type</th>
                            <th>Transaction Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tr>

                        <tr v-for="item in transactionItems">

                            <td>{{item.orderid}}</td>
                            <td>{{item.type}}</td>
                            <td>{{item.amount}}</td>
                            <td>{{item.date}}</td>
                            <td> <span class="m-badge badges ">{{item.status}}</span>
                            </td>
                        </tr>

                        </tbody>

                    </table>

                    <button>Add row</button>
                    <!--end: Datatable -->
                </div>

            </div>
        </div>




















    </div>
</template>

<script>




    export default {

        data() {
            return {


                transactionItems: [
                    { orderid:'ss10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
                    { orderid:'es10',type:'cash',amount:'2000',date:'21/1/23',status:'failed'},
                    { orderid:'sq10',type:'online',amount:'2000',date:'21/1/23',status:'pending'},
                    { orderid:'sq10',type:'cash',amount:'2000',date:'21/1/23',status:'sucessfull'},
                    { orderid:'ssw10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},


                ]
            }
        },

    }






    $(document).ready(function() {



        $('button').click(function() {
            $('<tr class="anim highlight"><td>new text</td>'+
                '                         <td>new text</td>' +
                '                         <td>new text</td>' +
                '                         <td>new text</td>' +
                '                         <td>new text</td>' +
                '                           </tr>')
                .hide()
                .prependTo('table tbody')
                .fadeIn("slow")
                .addClass('normal');
        });

    });








</script>




<style>
    table{
        overflow-x: auto;
        min-width:660px;
        font-size: 18px;
        font-family: 'Source Sans Pro', sans-serif;

    }


    .badges{
        color:white;
        font-size:13px;
        padding:3px 15px 3px 15px;
        font-weight:700;

    }




    .hds{
        font-family: 'Source Sans Pro', sans-serif;
        font-weight: 800;

    }

</style>