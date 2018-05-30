
<template>
    <body>
    <div>
    <div class="container topers" >

        <main >
            <div class="row">
                <div class="left col-lg-4">
                    <div class="photo-left">
                        <img class="photo" src="https://image.noelshack.com/fichiers/2017/38/2/1505775062-1505606859-portrait-1961529-960-720.jpg"/>
                        <div class="active"></div>
                    </div>
                    <h4 class="name">Sangeta Shetkar</h4>
                    <p class="info">Samsung rhdf</p>

                    <div class="stats row">
                        <div class="stat col-xs-4" style="padding-right: 50px;">
                            <p class="number-stat m--font-primary">&#8377;&nbsp;3,619</p>
                            <p class="desc-stat font-new">Bus API</p>
                        </div>
                        <div class="stat col-xs-4">
                            <p class="number-stat m--font-info">&#8377;&nbsp;42000</p>
                            <p class="desc-stat font-new">API 2</p>
                        </div>
                        <div class="stat col-xs-4" style="padding-left: 50px;">
                            <p class="number-stat m--font-accent">&#8377;&nbsp;38</p>
                            <p class="desc-stat font-new">API 3</p>
                        </div>
                    </div>

                    <div class="mt-5">
                        <button type="button" class="font-new ml-5 btn m-btn--pill m-btn m-btn--gradient-from-info m-btn--gradient-to-accent" data-toggle="modal" data-target="#m_modal_6">Update Balance</button>
                        <button type="button" class="font-new ml-5 btn m-btn--pill m-btn m-btn--gradient-from-info m-btn--gradient-to-accent" data-toggle="modal" data-target="#m_modal_6">Revert Balance</button>
                    </div>

                    <div class="desc mt-5 mb-5">
                        <span style="display:block">Ph No :7875223880</span>
                        <span class="mt-3" style="display:block">Email Id :test@gmail.com</span>
                    </div>

                    <div class="social">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                        <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="right col-lg-8 " >

                    <h3 class="font-new m--font-primary pt-5   pb-3  " style="margin-top: -10px;">  VIEW PROFILE</h3>

                    <span class="follow btn m-btn--pill m-btn m-btn--gradient-from-info m-btn--gradient-to-accent font-new" onclick="location.href='/edit';">Update Profile</span>
                    <div class="row gallery">

                    </div>
                    <div class=" row form-group " style="margin-top: -20px">
                        <fieldset class="the-fieldset pl-5 ">
                            <legend class="the-legend"><h5 class="font-new m--font-brand pad"> Personal Info</h5></legend>
                            <div class="row">
                                <div class="col-lg-4  font-new h5 tst" >First Name:<span class="pl-3 m--font-info"> Sangeta</span></div>


                                <div class="col-lg-3"></div>

                                <div class="col-lg-4 font-new h5 tst" >Last Name:<span class="pl-3 m--font-info"> Shetkar</span></div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-4 font-new h5 tst">Phone No:<span class="pl-3 m--font-info"> 7875223880</span></div>


                                <div class="col-lg-3"></div>

                                <div class="col-lg-4  font-new h5 tst">Email Id:<span class="pl-3 m--font-info"> test@gmail.com</span></div>

                            </div>



                            <div class="row mt-4 tst">
                                <div class="col-lg-10 font-new h5">Full Address:<span class="pl-3 m--font-info" > H.no 199/2 Karaywada Aldona Goa , 403107</span></div>



                            </div>
                        </fieldset>
                    </div>



                    <div class=" row form-group mt-5  ">
                        <fieldset class="the-fieldset pl-5 ">
                            <legend class="the-legend"><h5 class="font-new m--font-brand pad"> Buisness Info</h5></legend>
                            <div class="row">
                                <div class="col-lg-5 font-new h5 tst">Buisness Name:<span class="pl-3 m--font-info"> Samsung Plaza</span></div>


                                <div class="col-lg-2"></div>

                                <div class="col-lg-4 font-new h5 tst">Reg No:<span class="pl-3 m--font-info"> 1290-1198790</span></div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-4 font-new h5 tst">Office No:<span class="pl-3 m--font-info"> 7875223880</span></div>


                                <div class="col-lg-3"></div>

                                <div class="col-lg-4 font-new h5 tst">Email Id:<span class="pl-3 m--font-info"> test@gmail.com</span></div>

                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-4 font-new h5 tst">City:<span class="pl-3 m--font-info">Mapusa</span></div>


                                <div class="col-lg-3"></div>

                                <div class="col-lg-4 font-new h5 tst">State:<span class="pl-3 m--font-info"> Goa</span></div>


                            </div>

                            <div class="row mt-4 tst">
                                <div class="col-lg-10 font-new h5">Full Address:<span class="pl-3 m--font-info"> Shop No. 1, 2, 3, Rio Building, Morod, Mapusa, Goa, 403507</span></div>



                            </div>
                        </fieldset>
                    </div>


                    <div class=" row form-group mt-5 ">
                        <fieldset class="the-fieldset pl-5 ">
                            <legend class="the-legend"><h5 class="font-new m--font-brand pad"> Permissions</h5></legend>

                            <div class="row">
                                <div class="col-lg-2 font-new h5 tst">Bus API:</div>
                                <div class="col-lg-2  h5">

                      <span class="m-switch m-switch--outline  m-switch--primary ml-2">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>

                                </div>

                                <div class="col-lg-4"></div>
                                <div class="col-lg-2 font-new h5 tst">Bus API:</div>
                                <div class="col-lg-2  h5">

                      <span class="m-switch m-switch--outline  m-switch--info ml-2 ">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>

                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-lg-2 font-new h5 tst">Bus API:</div>
                                <div class="col-lg-2  h5">

                      <span class="m-switch m-switch--outline  m-switch--accent ml-2">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>

                                </div>

                                <div class="col-lg-4"></div>
                                <div class="col-lg-2 font-new h5 tst">Bus API:</div>
                                <div class="col-lg-2  h5">

                      <span class="m-switch m-switch--outline  m-switch--success ml-2">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>

                                </div>
                            </div>





                        </fieldset>
                    </div>

                </div>
            </div>
        </main>
    </div>



    <div class="modal fade show" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title btns m--font-primary" id="exampleModalLongTitle" style="font-size:18px;font-weight:700">
                        Revert Balance
                    </h3>
                    <span   data-dismiss="modal">
                      X
                    </span>
                </div>
                <div class="modal-body">


                    <div class="row d-flex justify-content-center">

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-brand active btns">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked>Bus API
                            </label>
                            <label class="btn btn-brand btns">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Money Transfer API
                            </label>
                            <label class="btn btn-brand btns">
                                <input type="radio" name="options" id="option3" autocomplete="off"> API 3
                            </label>
                            <label class="btn btn-brand btns">
                                <input type="radio" name="options" id="option3" autocomplete="off"> API 4
                            </label>
                        </div>


                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4 mt-2 btns size">Enter the Amount:</div>
                        <div class="col-lg-8">
                            <div class="input-group ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text btns" style="background-color:#5867dd;color:white">&nbsp;&#8377;&nbsp;</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="background-color:#5867dd;color:white">.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4 mt-2 btns size">Enter Password:</div>
                        <div class="col-lg-8">
                            <div class="input-group ">

                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btns" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary btns">
                        Save changes
                    </button>
                </div>
            </div>
        </div>




    </div>


    <graph style="z-index: 800"></graph>
    </div>

    </body>
</template>


<style>

    .tests{
        display: none;
    }

    body {
        background-image: url("../../../../images/bg1.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }


    .container {
        max-width: 1250px;
        margin: 10vh auto 30px;
        padding: 0 !important;
        width: 90%;
        background-color: #fff;
        box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
    }

    header {
        background: #eee;
        background-image: url("https://image.noelshack.com/fichiers/2017/38/2/1505775648-annapurnafocus.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-color: red;
        height: 250px;
    }

    header i {
        position: relative;
        cursor: pointer;
        right: -96%;
        top: 25px;
        font-size: 18px !important;
        color: #fff;
    }

    @media (max-width:800px) {
        header {
            height: 150px;
        }

        header i {
            right: -90%;
        }
    }

    main {
        padding: 0px 20px 20px 20px;
        height: 80vh;


    }


    @media (max-width:980px) {

        .right{
            height: 25vh;

        }



    }
    .left {
        overflow:hidden;
        display: flex;
        margin-top: -10vh;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    @media (max-height: :750px) {
        .left{
            margin-top: 3vh;
        }


    }


    .photo {
        width: 200px;
        height: 200px;

        border-radius: 100px;
        border: 4px solid #fff;
    }



    @media (max-width:990px) {
        .active {
            right: calc(50% - 60px);
            top: 50px;

        }

        main{
            height: 170vh;
            margin-top: 10vh;
        }



    }

    @media (max-width:380px) {

        main{
            height: 180vh;
        }
    }
    .name {
        margin-top: 20px;
        font-family: "Open Sans";
        font-weight: 600;
        font-size: 18pt;
        color: #777;
    }

    .info {
        margin-top: -5px;
        margin-bottom: 5px;
        font-family: 'Montserrat', sans-serif;
        font-size: 11pt;
        color: #aaa;
    }

    .stats {
        margin-top: 25px;
        text-align: center;
        padding-bottom: 20px;
        border-bottom: 1px solid #ededed;
        font-family: 'Montserrat', sans-serif;
    }

    .number-stat {
        padding: 0px;
        font-size: 14pt;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        color: #aaa;
    }

    .desc-stat {
        margin-top: -15px;
        font-size: 10pt;
        color: #bbb;
    }

    .desc {
        text-align: center;
        margin-top: 25px;
        margin: 25px 40px;
        color: #999;
        font-size: 11pt;
        font-family: "Open Sans";
        padding-bottom: 25px;
        border-bottom: 1px solid #ededed;
    }

    .social {
        margin: 5px 0 12px 0;
        text-align: center;
        display: inline-block;
        font-size: 20pt;
    }

    .social i {
        cursor: pointer;
        margin: 0 15px;
    }

    .social i:nth-child(1)  { color: #4267b2; }
    .social i:nth-child(2)  { color: #1da1f2; }
    .social i:nth-child(3)  { color: #bd081c; }
    .social i:nth-child(4)  { color: #36465d; }

    .right {
        padding: 0 25px 0 25px !important;
        height:78vh;
        overflow: scroll;
    }

    .nav {
        display: inline-flex;
    }

    .nav li {
        margin: 40px 30px 0 10px;
        cursor: pointer;
        font-size: 13pt;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        color: #888;
    }

    .nav li:hover, .nav li:nth-child(1)  {
        color: #999;
        border-bottom: 2px solid #999;
    }

    .follow {
        position: absolute;
        right: 8%;
        top: 35px;
        font-size: 11pt;
        background-color: #42b1fa;
        color: #fff;
        padding: 8px 15px;
        cursor: pointer;
        transition: all .4s;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
    }

    .follow:hover {
        box-shadow: 0 0 15px rgba(0,0,0,0.2), 0 0 15px rgba(0,0,0,0.2);
    }

    @media (max-width:990px) {
        .nav {
            display: none;
        }

        .follow {
            width: 50%;
            margin-left: 25%;
            display: block;
            position: unset;
            text-align: center;
        }
    }
    .gallery  {
        margin-top: 35px;
    }

    .gallery div {
        margin-bottom: 30px;
    }

    .gallery img {
        box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
        width: auto;
        height: auto;
        cursor: pointer;
        max-width: 100%;
    }
    .gallery img {
        box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
        width: auto;
        height: auto;
        cursor: pointer;
        max-width: 100%;
    }


    .font-new{
        font-family: 'Source Sans Pro', sans-serif;
        font-weight: 800;
    }


    .the-legend {
        border-style: none;
        border-width: 0;
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 0;
        width: auto;
        padding: 0 10px;
        border: 2px solid #5867dd;
    }
    .the-fieldset {
        border: 1px solid  #5867dd;
        padding: 20px;
        width: 93%;
    }

    .pad{
        padding:5px ;
    }
    .topers{
        z-index: 5;

    }


    .tst{
        font-family: 'Abel', sans-serif;
        font-size: 19px;
        color:#777;
    }
</style>


<script type="text/javascript">

    import graph from './charts'
    
    //import formRe from './dashboard-form.vue'
    //import dashboard from './dashboard.vue'
    //import user from './dashboard-user.vue'
   
    export default {

     components:{
        graph

       
        


     }
    }
</script>
