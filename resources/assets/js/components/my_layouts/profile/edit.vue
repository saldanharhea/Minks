<template>
    <body>
    <div class="container topers" >

        <main >
            <div class="row">
                <div class="left col-lg-4">
                    <div class="photo-left">
                       <img class="photo "  id="tops" src="https://image.noelshack.com/fichiers/2017/38/2/1505775062-1505606859-portrait-1961529-960-720.jpg"/> 
                            <div class="image-preview " v-if="imageData.length > 0">
                                <img class="preview photo" :src="imageData" >
                            </div>
                        

                       <a href="#" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill m-btn--air" style="position:relative;right:30px" id="camp">

                                                            <i class="fa fa-camera"></i> <input type="file" @change="previewImage" accept="image/*" id="cam">
                                                        </a>

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

                    
                </div>
                <div class="right col-lg-8 " >

                    <h3 class="font-new m--font-primary pt-5   pb-3  " style="margin-top: -10px;">  EDIT PROFILE</h3>

                    <span class="follow btn m-btn--pill m-btn m-btn--gradient-from-info m-btn--gradient-to-accent font-new" >Save Changes</span>
                    <div class="row gallery">

                    </div>
                    <div class=" row form-group " style="margin-top: -20px">
                        <fieldset class="the-fieldset pl-5 ">
                            <legend class="the-legend"><h5 class="font-new m--font-brand pad"> Personal Info</h5></legend>
                            <div class="row">
                                <div class="text-input col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                First Name
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Sangeta">
                                    </div>
                                </div>

                                <div class="col-lg-2"></div>

                                <div class="col-lg-5 font-new h5 tst" >
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                Last Name
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Shetkar">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="text-input col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                Phone No
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="7875223880">
                                    </div>
                                </div>

                                <div class="col-lg-2"></div>

                                <div class="text-input col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                Email Id
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="test@gmail.com">
                                    </div>
                                </div>
                            </div>



                            <div class="row mt-4">

                                <div class="text-input col-lg-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                Address
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="H.no 199/2 Karaywada Aldona Goa , 403107">
                                    </div>
                                </div>

                                <div class="col-lg-2"></div>


                            </div>
                        </fieldset>
                    </div>



                    <div class=" row form-group mt-3  ">
                        <fieldset class="the-fieldset pl-5 ">
                            <legend class="the-legend"><h5 class="font-new m--font-brand pad"> Buisness Info</h5></legend>
                            <div class="row">

                                <div class="text-input col-lg-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                Buisness Name
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Samsung Plaza">
                                    </div>
                                </div>



                            </div>

                            <div class="row mt-4">
                                <div class="text-input col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                Office No
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="7875223880">
                                        </div>
                                </div>



                                <div class="col-lg-2"></div>

                                <div class="text-input col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                Email Id
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="test@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="text-input col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                City
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Mapusa">
                                    </div>
                                </div>


                                <div class="col-lg-2"></div>

                                <div class="text-input col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                                State
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Goa">
                                    </div>
                                </div>


                            </div>

                            <div class="row mt-4">

                                <div class="text-input col-lg-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-info tst" type="button">
                                               Full Address
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Shop No. 1, 2, 3, Rio Building, Morod, Mapusa, Goa, 403507">
                                    </div>
                                </div>

                                <div class="col-lg-2"></div>


                            </div>
                            <div>
                          <div>

                            

                            
                        </div>

</div>
                        </fieldset>
                    </div>




                </div>
            </div>
        </main>
    </div>

    <canvas id="animation" width="1300" height="500"></canvas>


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





    </body>
</template>


<style>

    .tests{
        display: none;
    }

    #animation {
        background-color:white;
        position: fixed;
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
        font-size: 14px;
        color:white;
        font-weight:800;
    }
</style>


<script src="../../../three/particles.js" ></script>




<script>
    export default {
        name: "edit",
         data ()
         {
             return {
        imageData: ""  // we will store base64 format of image in this string
    }},
    methods: {
        previewImage: function(event) {
            // Reference to the DOM input element
            var input = event.target;
            // Ensure that you have a file before attempting to read it
            if (input.files && input.files[0]) {
                // create a new FileReader to read this image and convert to base64 format
                var reader = new FileReader();
                // Define a callback function to run, when FileReader finishes its job
                reader.onload = (e) => {
                    // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                    // Read image as base64 and set to imageData
                    this.imageData = e.target.result;
                }
                // Start the reader job - read file as a data url (base64 format)
                reader.readAsDataURL(input.files[0]);

            }

            var img = document.getElementById('tops');
            img.style.display = 'none';

            var div = document.getElementById('camp');
            div.style.left = '190px';
            div.style.bottom = '160px';
            div.style.zIndex =500;
        }
    }
    }
</script>

<style >

.file-upload-form, .image-preview {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    padding: 20px;
}
img.preview {
    width: 200px;
    background-color: white;
    border: 1px solid #DDD;
    padding: 5px;
}

#cam{
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;   
    cursor: inherit;
    display: block;
}
</style>