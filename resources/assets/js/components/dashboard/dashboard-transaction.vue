<template>


 

    <div class="row">
        <div class="col-xl-12">
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
                    <div class="m-portlet__head-tools">
                        
                           
                                <select  class="select-style">
                                <option value="Postpaid" selected style="display:none;">Postpaid</option>
                              
                                  <option v-for="item in drop" :value="item.head" >{{ item.head }}</option>
                                </select>
                                
                    </div>
                </div>


                <div class="m-portlet__body table-responsive">
                    <!--begin: Datatable -->
                     

                     <table id="example" class="m_datatable table table-striped table-bordered">
                    <thead>
                        <tr>
                           
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


                    <!--end: Datatable -->
                </div>

            </div>
        </div>
    </div>



								

   













	</div>
</template>

<script>

import axios from 'axios'; 


export default {
       
        data() {
            return {
            drop: [
                { head: 'Postpaid' },
                { head: 'Prepaid' },
                { head: 'DTH'},
                { head: 'All'}
                    ],
            posts:[],
            type:'',
            errors: [],
              transactionItems: [
      { orderid:'ss10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'es10',type:'cash',amount:'2000',date:'21/1/23',status:'failed'},
       { orderid:'sq10',type:'online',amount:'2000',date:'21/1/23',status:'pending'},
       { orderid:'sq10',type:'cash',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'ssw10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'ss10',type:'cash',amount:'2000',date:'21/1/23',status:'pending'},
       { orderid:'ss10',type:'online',amount:'2000',date:'21/1/23',status:'pending'},
       { orderid:'ssr10',type:'online',amount:'2000',date:'21/1/23',status:'pending'},
       { orderid:'sss10',type:'online',amount:'2000',date:'21/1/23',status:'pending'},
       { orderid:'sds10',type:'online',amount:'2000',date:'21/1/23',status:'pending'},
       { orderid:'gfs10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'r10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'g10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'op10',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'tr10',type:'online',amount:'2000',date:'21/1/23',status:'failed'},
       { orderid:'1234',type:'online',amount:'2000',date:'21/1/23',status:'failed'},
       { orderid:'32e',type:'cash',amount:'2000',date:'21/1/23',status:'failed'},
       { orderid:'swe',type:'cash',amount:'2000',date:'21/1/23',status:'failed'},
       { orderid:'23ed',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'34rf',type:'cash',amount:'2000',date:'21/1/23',status:'pending'},
       { orderid:'s3e',type:'cash',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'v543',type:'cash',amount:'2000',date:'21/1/23',status:'sucessfull'},
       { orderid:'htr5',type:'online',amount:'2000',date:'21/1/23',status:'sucessfull'},
      
    ]
            }
            },
            created() {

            axios.post(`http://127.0.0.1:8000/api/get-operators`,{type:'get'})
            .then(response => {
              // JSON responses are automatically parsed.
              this.posts = response.data
            })
            .catch(e => {
              this.errors.push(e)
            })


            },
            }









$(document).ready(function() {
	
	  $("#example td:nth-child(5)").each(function () {
        if ($(this).text() =="failed"){
        
            $(this).children('span').css("background-color", "#f4516c");
        }
        else if ($(this).text() =="pending"){
        
            $(this).children('span').css("background-color", "#ffb822");
        }
                else if ($(this).text() =="sucessfull"){
        
            $(this).children('span').css("background-color", "#34bfa3");
        }
    });



    $('#example').DataTable( {
        "responsive": true,
        

    	"sPaginate": true,
		"sInfo": true,
		"sFilter": true,
		"sLengthChange": true,
		"sPaginationType": "extStyle",
		"sPaginationType": 'ellipses',


        dom: 'Bfrtip',

        buttons: [{
                extend: 'print',
                text:      '<i class="fa fa-print " style="color:white;font-weight:600;font-size:16px;"></i>&nbsp;&nbsp;&nbspPrint',
                
                className: 'print def btn btn-primary m-btn m-btn--icon m-btn--pill m-btn--air'
            },
            {
                extend: 'copyHtml5',
                text:      '<i class="fa fa-files-o " style="color:white;font-weight:600;font-size:16px;"></i>&nbsp;&nbsp;&nbspCopy',
                className: 'def copy btn btn-info m-btn m-btn--icon m-btn--pill m-btn--air '
            },
            {
                extend: 'excelHtml5',
                text:      '<i class="fa fa-file-excel-o " style="color:white;font-weight:600;font-size:16px;"></i>&nbsp;&nbsp;&nbspExcel',
                className: 'def excel btn btn-danger m-btn m-btn--icon m-btn--pill m-btn--air'
            },
            {
                extend: 'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o " style="color:white;font-weight:600;font-size:16px;"></i>&nbsp;&nbsp;&nbspPDF',
                className: 'def pdf btn btn-success m-btn m-btn--icon m-btn--pill m-btn--air '
            },
            
           
        ],

        "columnDefs": [ {
    "targets":[0,1,2,3,4],
    "createdCell": function (td, cellData, rowData, row, col) {
      
        $(td).css('padding', '15')
      
    }
  } ]




    } );

  

    $('.dt-button').addClass('btn btn-default');

} );


</script>

	


<style>
table{
    overflow-x: auto;
    min-width:660px;
  
}
.select-style{
   background-color: white;
   font-size: 16px;
   height: 29px;
   padding: 6px; /* If you add too much padding here, the options won't show in IE */
   color: #5867dd;
   font-weight:800;
   
   height: 29px;
   overflow: hidden;
   width: 240px;
    letter-spacing:1px;
   border-radius: 50px;
   border:none;
}

.select-style:hover{
    background-color:#5867dd;
    color:white;
}
.dt-button.print {
        border-color: #4CAF50;
        background-color: #5867dd;
        
    }

.dt-button.copy{
        bborder-color: #4CAF50;
        background-color: #36a3f7;
        
    }

.dt-button.excel{
        border-color: #4CAF50;
        background-color: #f4516c;
        
    }

.dt-button.pdf{
        border-color: #4CAF50;
        background-color: #34bfa3;
        
    }
.clk{
	color:yellow;
	font-size:20px;
}

 .dt-button.def {
 		color: white;
        font-size:16px;
        border: 0px solid black;
        padding-left:40px;
        padding-right:40px;
        font-family: "Poppins";
        -webkit-box-shadow: none !important ;
        -moz-box-shadow: none !important ;
        box-shadow: none !important ;
        cursor: pointer;
        
        font-weight:600;

 }

.badges{
	color:white;
	font-size:13px;
	padding:3px 15px 3px 15px;
	font-weight:700;

}


.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background: none;
  background-color: #5867dd!important;
  color: white!important;
  border-radius:4px;
  border: 2px solid #5867dd;
}
 
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background: none;
  background-color: #5867dd!important;
  color: white!important;
}



</style>