
<template>
<div >
		<button class="pdf" v-on:click="createPDF">Save Document as PDF </button>
  <div class="container-fluid border" style="" >

  <div class="row hgt " >
    <div class=" col-lg-2 col-sm-12 grey pt-4 pl-4"  >
      <nav id="navbar-example3" class="navbar  float-right pt-4" > 
      <nav class="nav nav-pills font-menu">
  
        <a class="nav-link   font-weight-bold" href="#menu-1" >INTRODUCTION</a>
        <nav class="nav  " >
          <a  class="nav-link ml-4  new" href="#menu-1-1"  >menu 1-1</a>
          <a class="nav-link ml-4 new" href="#menu-1-2"   >menu 1-2</a>
        </nav>
  
        <a class="nav-link font-weight-bold" href="#menu-2" >API REFRENCES</a>
          <nav class="nav ">
            <a class="nav-link ml-4 new" href="#menu-2-1" >menu 2-1</a>
          </nav>
        <a class="nav-link   font-weight-bold" href="#menu-3">WIDGETS</a>
        <nav class="nav ">
          <a class="nav-link ml-4 new" href="#menu-3-1" >menu 3-1</a>
          <a class="nav-link ml-4 new" href="#menu-3-2" >menu 3-2</a>
        </nav>
      </nav>
    </nav>  
    </div>

    <div class=" col-lg-10 col-sm-12 col-md-12  " id="content" style="">
    	<div data-spy="scroll" data-target="#navbar-example3" data-offset="0" class="nav-desc">
		      <div class="row end " id="menu-1" style="background-color:white">

				<div class="col-lg-6 col-sm-12 pt-5 pb-4 pl-5 pr-5" style="background-color:white">
					<h4 ><strong>API for Developers</strong></h4>
          			<span class="font-weight-bold" style="color:#696969">A brief overview of Eko's services, applications and API stack for developers</span>
          			<hr>
          			<p class=" mb-3">Welcome to Eko Developer Portal!</p>
          			<div class="mb-3">Eko has developed a varied stack of app, services, and APIs that enable you to:</div>
          			<ol>
					  <li>Process small value financial transactions via IMPS/NEFT</li>
					  <li>Verify bank account details of a customer instantly</li>
					  <li>Enable cash collection for third-party application via acceptance of Eko merchant's eValue</li>
					  <li>Enable third-party lending organizations to leverage Eko's network of merchants and customers to increase their loan portfolio</li>
					</ol>
		            <p class="pt=4">
		              The Eko API is organized around REST. JSON is returned by all API responses, including errors. We allow you to interact securely with our API from a client-side web application but you should never expose your secret API key in any public website's client-side code.
		            </p>
		            <span class="pt-4 float-right"><i class="fa fa-save pr-3"></i>Save Document</span>
        		</div>

			
			<div class="col-lg-6 col-sm-12 dark-purple pl-5 pr-3" ></div>
		</div> 

		<div class="row" id="menu-1-1">

				<div class="col-lg-6 pt-4 align-items-center pl-5 pr-5" style="background-color:white">
					<h4 ><strong>Authentication</strong></h4>
          			<span class="font-weight-bold" style="color:#696969">API Security Protocol</span>
          			<hr>
          			<p class=" mb-3">All API requests must be authenticated with a <span class="font-weight-bold">developer_key</span> in the request. Your API keys carry many privileges, so be sure to keep them secret!</p>
          			<div class="mb-3">You authenticate to the Eko API by providing your API key in the request.</div>
          			<h4 class="pb-3 pt-2"><strong>How to generate the secret key?</strong></h4>
		            <hr>

		            <ol class="pt-4 pb-4">
		            	<li>Encode key using base64 encoding technique</li>
		            	<li>Generate current date in milliseconds which will work as salt i.e. secret-key-timestamp</li>
		            	<li>Compute the signature by hashing salt and base64 encoded key using Hash-based message authentication code HMAC and SHA256</li>
		            	<li>Encode the signature using base64 encoding technique and use this as secret-key</li>
		            </ol>

		            <span class="font-weight-bold pl-5" style="color:#605cdb">Code Snippet to generate secret-key (PHP)</span>
		           <div class="mb-5" >

		           	<a onMouseOver="this.style.color='#00F'"
   onMouseOut="this.style.color='#696969'" class="float-right link"     v-clipboard="code1"
    @success="handleSuccess">
		           		<i class="fa fa-pencil"></i>Copy code
		           	</a>
		           	
		           	

		           </a></div>


		            <div class=" mt-4 codes" >

		            	<pre>
		            		<code class="codes" v-model="code1" id="test">
  // Initializing key in some variable 
  $key = "key";

  // Encode it using base64
  $encodedKey = base64_encode($key);

  // Generate timestamp in long which works as a salt
  $secret_key_timestamp = generate_timestamp();

  // Computes the signature by hashing the salt with the encoded key 
  $signature = hash_hmac('SHA256', $secret_key_timestamp, $encodedKey, true);

  // Encode it using base64
  $secret_key = base64_encode($signature);

  echo $secret_key;

		            		</code>
		            	</pre>


		           </div>


		      	<div class="info pt-4  pb-4 mt-5 pl-4 ">
		      		<p class="info-title font-weight-bold"><i class="fa fa-info-circle pr-2"></i>How will you get the key for generating secret key?</p>
		      		<p>The key will be provided to you by Eko via email.</p>
				  <p class="pt-1"><strong>Sample key
					<br>
					key = f74c50a1-f705-4634-9cda-30a477df91b7</strong> </p>
				</div>

				<div class="danger pt-4 pb-4 mt-5 pl-4">
		      		<p class="danger-title font-weight-bold"><i class="fa fa-warning pr-2"></i>Note</p>
		      		
				  <p class="pt-1">
				  	If you are using .NET, you should not send overly specific time stamps, due to differing interpretations of how extra time precision should be dropped. To avoid overly specific time stamps, manually construct dateTime objects with no more than millisecond precision.
				 </p>
				</div>
<div class="ml-5 mr-5 mt-5 pt-3 " >
				 <table class="table table-bordered" id="table">
    <thead>
      <tr>
        <th class="font-weight-bold ">Attribute</th>
        <th class="font-weight-bold ">Type </th>
        <th class="font-weight-bold ">Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>id</td>
        <td>string</td>
        <td>value of customer id</td>
      </tr>
      <tr>
        <td>customer_id_type</td>
        <td>string</td>
        <td>type of customer id</td>
      </tr>
      <tr>
        <td>state</td>
        <td>integer</td>
        <td>a value which signifies the current state of the customer</td>
      </tr>
      <tr>
        <td>state_desc</td>
        <td>string</td>
        <td>description of the current state of customer</td>
      </tr>
      <tr>
        <td>limit</td>
        <td>array</td>
        <td>signifies the amount available for the customer to transact in the month</td>
      </tr>
      <tr>
        <td>balance</td>
        <td>integer</td>
        <td>current balance of the customer</td>
      </tr>                  
    </tbody>
  </table>
</div>
        		</div>

			
			<div class="col-lg-6 dark-purple pr-3"></div>
		</div> 

		<div class="row" id="menu-1-2">

				<div class="col-lg-6 pt-5 pl-5 pr-5" style="background-color:white" >
					<h4 ><strong>API for Developers</strong></h4>
          			<span style="font-weight:200;color:#696969">A brief overview of Eko's services, applications and API stack for developers</span>
          			<hr>
          			<p class=" mb-3">Welcome to Eko Developer Portal!</p>
          			<div class="mb-3">Eko has developed a varied stack of app, services, and APIs that enable you to:</div>
          
		            <p >
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		            </p>
        		</div>

			
			<div class="col-lg-6 dark-purple pl-5 pr-3"></div>
		</div> 

		<div class="row" id="menu-2">

				<div class="col-lg-6 pt-5 pl-5 pr-5" style="background-color:white">
					<h4 ><strong>API for Developers</strong></h4>
          			<span style="font-weight:200;color:#696969">A brief overview of Eko's services, applications and API stack for developers</span>
          			<hr>
          			<p class=" mb-3">Welcome to Eko Developer Portal!</p>
          			<div class="mb-3">Eko has developed a varied stack of app, services, and APIs that enable you to:</div>
          
		            <p >
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		            </p>
        		</div>

			
			<div class="col-lg-6 dark-purple pt-5 pl-5 pr-3"></div>
		</div> 

		<div class="row" id="menu-2-1">

				<div class="col-lg-6 pt-5 pl-5 pr-5" style="background-color:white">
					<h4 ><strong>API for Developers</strong></h4>
          			<span style="font-weight:200;color:#696969">A brief overview of Eko's services, applications and API stack for developers</span>
          			<hr>
          			<p class=" mb-3">Welcome to Eko Developer Portal!</p>
          			<div class="mb-3">Eko has developed a varied stack of app, services, and APIs that enable you to:</div>
          
		            <p >
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		            </p>
        		</div>

			
			<div class="col-lg-6 dark-purple pt-5 pl-5 pr-3"></div>
		</div> 

		<div class="row" id="menu-3">

				<div class="col-lg-6 pt-5 pl-5 pr-5" style="background-color:white">
					<h4 ><strong>API for Developers</strong></h4>
          			<span style="font-weight:200;color:#696969">A brief overview of Eko's services, applications and API stack for developers</span>
          			<hr>
          			<p class=" mb-3">Welcome to Eko Developer Portal!</p>
          			<div class="mb-3">Eko has developed a varied stack of app, services, and APIs that enable you to:</div>
          
		            <p >
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		            </p>
        		</div>

			
			<div class="col-lg-6 dark-purple pt-5 pl-5 pr-3"></div>
		</div> 

		<div class="row" id="menu-3-1">

				<div class="col-lg-6 pt-5 pl-5 pr-5" style="background-color:white">
					<h4 ><strong>API for Developers</strong></h4>
          			<span style="font-weight:200;color:#696969">A brief overview of Eko's services, applications and API stack for developers</span>
          			<hr>
          			<p class=" mb-3">Welcome to Eko Developer Portal!</p>
          			<div class="mb-3">Eko has developed a varied stack of app, services, and APIs that enable you to:</div>
          
		            <p >
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		            </p>
        		</div>

			
			<div class="col-lg-6 dark-purple pt-5 pl-5 pr-3"></div>
		</div> 

		<div class="row" id="menu-3-2">

				<div class="col-lg-6 pt-5 pl-5 pr-5" style="background-color:white">
					<h4 ><strong>API for Developers</strong></h4>
          			<span style="font-weight:200;color:#696969">A brief overview of Eko's services, applications and API stack for developers</span>
          			<hr>
          			<p class=" mb-3">Welcome to Eko Developer Portal!</p>
          			<div class="mb-3" >Eko has developed a varied stack of app, services, and APIs that enable you to:</div>
          
		            <p >
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		              
		            </p>
        		</div>

			
			<div class="col-lg-6 dark-purple pt-5 pl-5 pr-3"></div>
		</div> 


	</div>

        
   </div>
</div>
</div>
    

</div>
  </div>  
</template>


<style>

    body{
    	font-family: 'Andika';
    	line-height: 1.6;

    }
    .hgt{
    	height: 100%;
    	width: 100vw;
    	background-color: #1c2672;;

    	border-top:5px solid #3f51db;

    }

    @media (max-width: 998px) {
    	.hgt{
    		background-color: #f5f5f5;
    	}
    }

   .new{
   
   	display: inline;
   }
    @media (max-width: 950px) {
    	.new{
    		display: none;
    	}
    }


    .nav-desc{
	height:100vh;
	overflow-x:scroll;
	overflow-x:hidden;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
	background-color:#f5f5f5 !important;
	color:#605cdb !important;
}
.right-content{
	background-color:pink;
	color:white;
}

.border{
	margin-top:3vh;

	
}
.grey{
	background-color: #f5f5f5;
	color:#292929 !important;
	box-shadow: -4px -4px 34px -9px rgba(224,211,224,1);
	
	margin-left:-20px;
	font-family: 'Andika';
	font-weight:800;
}
.clr{
	background-color: white;
}
.size{
	height:96.5vh;
	
}
.purple{
	color:#605cdb;
}
::-webkit-scrollbar { 
    display: none; 
}
a{
	color:#616161;
}

.dark-purple{
	background-color:#1c2672;
}

.end{
	border-bottom: 1px solid #565587;
}

.codes{
	background-color: #2d2c47;
	color:#eaeaef;
	font-size:14px;
}
.info {
    background-color: #eff5f9;
    border-left: 5px solid #43a9f9;
}

.info-title{
	color:#2196F3;
}

.danger {
    background-color: #f9e3e3;
    border-left: 6px solid #dd4237;
}

.danger-title{
	color:#dd4237;
}

.pdf{
position: fixed;
 top: 50%;
  right: 0vw;
  z-index:10;
  background-color : #636199;
  font-weight:800;
  color:white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #636199;
}

.hgt> [class*='col-'] {
    padding-right:0px;
    padding-left: 0px;
}

.font-menu{
	font-family: 'Cabin', sans-serif;
	font-size:15px;
}
    </style>


<script type="text/javascript">
import jsPDF from 'jsPDF';


const test ='$key = "key";$encodedKey = base64_encode($key); $secret_key_timestamp = generate_timestamp();$secret_key = base64_encode($signature); echo $secret_key;'

export default {
       
        data() {

            return {

            	 code1: test,
            	 cutData: 'hello worldsss',

            }
        },
            methods: {
            	handleSuccess(e) {
            alert('Code Copied');

        },
        createPDF () {
		    let pdfName = 'api'; 
    var doc = new jsPDF( );



    doc.setTextColor(0, 0, 255);
    doc.setFontSize(20); 
    doc.setFont("helvetica");
doc.setFontType("bold");
    doc.text(50, 20, 'Documentation Of the API');  
    doc.setTextColor(100);
    doc.addFont('ArialMS', 'Arial', 'bold');
    doc.fromHTML($('#content').html(), 20, 30,{
        'width': 170,
    });
   

  doc.lineHeightProportion = 2;


    doc.autoPrint(); //makes auto printing
    


    doc.save(pdfName + '.pdf');
		  },

        
    },
    }
</script>