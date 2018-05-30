<template>
	
    <div class="m-content">
        <div class="m-portlet m-portlet--full-height">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                             API User Details
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body table-responsive">
            
			<table id="users" class=" m_datatable table table-striped table-bordered" cellspacing="0" width="100%">
			    <thead id="users_hd">
			        <tr>
			            <th></th>
			            <th>User Name</th>
			            <th>Buisness name</th>
			            <th>Parent</th>
			            <th>Mobile Number</th>
			           
			        </tr>
			    </thead>
			 
			   
			</table>
            </div>
        </div>


        <modalR></modalR>



    </div>


</template>


<script >
   import modalR from './modal-revert.vue'
   
    export default {
     
     components:{
        modalR

     }
 }
function format ( d ) {
    // `d` is the original data object for the row
    return '<div style="background-color:white" >'+
    '<table  cellpadding="5" cellspacing="0"  style="width:100%">'+
        '<tr style="background-color:white" class="sub-table">'+
            '<th style="font-weight: bold;">Full name:</th>'+
            '<td colspan="3" class="m--font-primary">'+d.name+'</td>'+
        '</tr>'+
        '<tr  style="background-color:white">'+
            '<td style="font-weight: bold;">Extension number:</td>'+
            '<td colspan="3" class="m--font-primary">'+d.extn+'</td>'+
            '<td align="center" rowspan="2" style="width:50%;border-top:2px solid white;border-bottom:2px solid white;border-right:2px solid white">'+

            '<a class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-accent " style="font-family:Source Sans Pro;font-size:16px;font-weight:800;padding:14px 60px" href="/profile" >'+

            '<i class="fa fa-user" style="font-size:20px;padding-right:16px"></i>'+

            'PROFILE</a>'+



            '</td>'+
        '</tr>'+
        '<tr style="background-color:white">'+
            '<td style="font-weight: bold;">APIs Purchased:</td>'+
            '<td colspan="3">And any further details here (images etc)...</td>'+
        '</tr>'+

        '<tr  >'+
        
        '<th rowspan="2" style="font-weight: bold;">Balance:</th>'+
        
        '<th style="font-weight: bold;background-color:#f4f5f8">Bus API</th>'+
        '<th style="font-weight: bold;background-color:#f4f5f8">API 2</th>'+
        '<th style="font-weight: bold;background-color:#f4f5f8">API 3</th>'+
       
    '</tr>'+
    '<tr style="background-color:white">'+
        '<th class="m--font-primary" style="font-size:20px;font-weight:600" align="center">&#8377;&nbsp;'+d.api1+'</th>'+
        '<th class="m--font-primary" style="font-size:20px;font-weight:600">&#8377;&nbsp;'+d.api2+'</th>'+
        '<th class="m--font-primary" style="font-size:20px;font-weight:600">&#8377;&nbsp;'+d.api3+'</th>'+
        
    '</tr>'+
    '<tr style="background-color:white" class="sub-table">'+
            '<th style="font-weight: bold;">Update:</th>'+
            '<td colspan="3" class="m--font-primary">'+

            '<button type="button" class="btns ml-5 mt-3 mb-3 btn m-btn--pill m-btn m-btn--gradient-from-info m-btn--gradient-to-accent">Update Balance</button>'


            +
            '<button type="button" class="btns ml-5 btn m-btn--pill m-btn m-btn--gradient-from-info m-btn--gradient-to-accent" data-toggle="modal" data-target="#m_modal_6">Revert Balance</button>'+


            '</td>'+
            
        '</tr>'+
    '</table>'+
	
    '</div>'
    ;
}
 
$(document).ready(function() {
    var table = $('#users').DataTable( {
        "data": [
    {
      "name": "Tiger Nixon",
      "bus_name":"Tiger Retilers",
       "par-name":"none",
       "mobile":9822195714,

      "api1": 60000,
      "api2": 3120,
      "api3": "none",
      "api4": "none",
      "office": "Edinburgh",
      "extn": 5421
    },
    {
      "name": "Garrett Winters",
      "bus_name":"Gar Genral Stores",
       "par-name":"none",
       "mobile":7798198157,
      "api1": "0",
      "api2": "0",
      "api3": 3120,
      "api4": "0",
      "office": "Edinburgh",
      "extn": "8422"
    },
    {
      "name": "Ashton Cox",
      "bus_name":"DTH Service Provider",
       "par-name":"none",
       "mobile":9822195714,
      "api1": 1562,
      "api2": 4800,
      "api3": 3120,
      "api4": 500,
      "office": "San Francisco",
      "extn": 1562
    },
    {
      "name": "Cedric Kelly",
      "bus_name":"Aitel Idea Provider",
       "par-name":"none",
       "mobile":9828955110,
      "api1": 90000,
      "api2": 3600,
      "api3": 3120,
      "api4": 80,
      "office": "Edinburgh",
      "extn": "6224"
    },
    {
      "name": "Jenna Elliott",
      "bus_name":"Mobile For Fun ",
       "par-name":"none",
       "mobile":8830567822,
      "api1": "none",
      "api2": 530,
      "api3": 3120,
      "api4": 2008,
      "office": "Edinburgh",
      "extn": "5407"
    },
  
  {
      "name": "Jenna Elliott",
      "bus_name":"Mobile Service Shop",
       "par-name":"none",
       "mobile":9822195714,
      "api1": "none",
      "api2": "none",
      "api3": 3120,
      "api4": 204,
      "office": "Edinburgh",
      "extn": "5407"
    },
    {
      "name": "Jenna Elliott",
      "bus_name":"Mobile Repair Shop",
       "par-name":"none",
       "mobile":9673141520,
      "api1": 800,
      "api2": 5300,
      "api3": "none",
      "api4": "none",
      "office": "Edinburgh",
      "extn": "5407"
    },
    {
      "name": "Jenna Elliott",
      "bus_name":"Sim and Recharge Shop",
       "par-name":"none",
       "mobile":9822185702,
      "api1": 90,
      "api2": 5300,
      "api3": "none",
      "api4": "none",
      "office": "Edinburgh",
      "extn": "5407"
    },
    {
      "name": "Jenna Elliott",
      "bus_name":"Fishtime Mobile Shop",
       "par-name":"none",
       "mobile":9881679876,
      "api1": "Financial Controller",
      "api2": 5300,
      "api3": "none",
      "api4": "none",
      "office": "Edinburgh",
      "extn": "5407"
    },
    {
      "name": "Jenna Elliott",
      "bus_name":"Mobile Altime Shop",
       "par-name":"none",
       "mobile":9765431778,
      "api1": "none",
      "api2": 5300,
      "api3": 300,
      "api4": 2890,
      "office": "none",
      "extn": "5407"
    },
    {
      "name": "Sim Elliott",
      "bus_name":"Samsung Service Center",
       "par-name":"none",
       "mobile":9881810113,
      "api1": 5300,
      "api2": 5300,
      "api3": "none",
      "api4": "none",
      "office": "Edinburgh",
      "extn": "407"
    },
    {
      "name": "Alice Kom",
      "bus_name":"Idea Docomo Recharge",
       "par-name":"test",
       "mobile":9673174959,
      "api1": 400,
      "api2": 5300,
      "api3": 3120,
      "api4": "none",
      "office": "Edinburgh",
      "extn": "540"
    },
    {
      "name": "Jenna Elliott",
      "bus_name":"Mobile/Tv Service Shop",
       "par-name":"none",
       "mobile":7654345678,
      "api1": "none",
      "api2": "none",
      "api3": "none",
      "api4": 20,
      "office": "Edinburgh",
      "extn": "70"
    },
    {
      "name": "Ram Gopal ",
      "bus_name":"Fancy Altime Mobile",
       "par-name":"none",
       "mobile":7875223880,
      "api1": "none",
      "api2": "none",
      "api3": 3120,
      "api4": 2889,
      "office": "Edinburgh",
      "extn": "5407"
    },
    {
      "name": "Amay Shetkar",
      "bus_name":"Mobile  Repair Shop",
      "par-name":"none",
      "mobile":9822195714,
      "api1": "Financial Controller",
      "api2": "none",
      "api3": "none",
      "api4": 987,
      "office": "Edinburgh",
      "extn": 5407
    },
  ],

  "columnDefs": [ {
    "targets":[0,1],
    
    "createdCell": function (td, cellData, rowData, row, col) {
        
        $(td).css('padding', '15');
        $(td).css('font-size', '16px');
        $(td).css('font-family', 'Source Sans Pro');
        $(td).css('font-weight', '800');
      
    }
  } ,

{
    "targets":[2,3,4],
    //"render": function ( data, type, row ) {
                    //return '&#8377&nbsp'+data;
               // },

    "createdCell": function (td, cellData, rowData, row, col) {
      
      //if(cellData ==='none')
      //{
      
      	//$(td).css('color', 'white');

      //}
        
      
      	$(td).css('font-size', '16px');
  
      	
      	$(td).css('font-family', 'Source Sans Pro');
      	$(td).css('color', '#5867dd');
      	$(td).css('font-weight', '700');
      
}
      
    
  } ,

  ],
        "columns": [
            {
                "class":          'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "bus_name" },
            { "data": "par-name" },
            { "data": "mobile" },
            
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#users tbody').on('click', 'td.details-control', function () {
        var tr = $(this).parents('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );
</script>


<style>
td.details-control {
    background: url('../../../../images/png/mark.png') no-repeat center center;
    cursor: pointer;
}
tr.details td.details-control {
    background: url('../../../../images/png/mark.png') no-repeat center center;
}

table{
    overflow-x: auto;
    min-width:660px;

  
}

#users_hd{
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 17px;
	text-transform: uppercase;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background: none;
  background-color: white!important;
  color: white!important;
  border-radius:4px;
  border: 2px solid white;

}

.btns{
	font-family: 'Source Sans Pro', sans-serif;
	font-weight: 700;
}

.size{
	font-size: 16px;
}
    .tests{
        display: none;
    }

    .foot{
        margin-top:-30px;
    }
</style>
