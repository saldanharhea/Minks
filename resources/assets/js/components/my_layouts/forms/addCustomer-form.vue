<template>
    <div class="m-content " >
        <div class="m-portlet m-portlet--full-height" style="margin-bottom:0px;">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Adding API Partners
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
                                <i class="flaticon-info m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body pb-5 " style="min-height:70vh">
                <!--begin: Form Wizard-->

                <div class="m-wizard m-wizard--4 m-wizard--brand" id="m_wizard">
                    <div class="row m-row--no-padding" >



                        <!--begin: Form Wizard Form-->

                        <form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
                            <!--begin: Form Body -->

                            <div v-if="step === 1">
                                <div class="row m-row--no-padding">
                                    <div class="col-xl-3 col-lg-12 m--padding-top-20 m--padding-bottom-15" >
                                        <!--begin: Form Wizard Head -->
                                        <div class="m-wizard__head">
                                            <!--begin: Form Wizard Nav -->
                                            <div class="m-wizard__nav">
                                                <div class="m-wizard__steps">
                                                    <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1" style="background-color:#716aca;color:white">
                                                        <div class="m-wizard__step-info" >
                                                            <a href="#" class="m-wizard__step-number" >
                                                    <span style="background-color:#411b8e
">
                                                        <span class="icn-txt">
                                                            1
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label icn-txt " >
                                                                Personal Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span>
                                                        <span>
                                                            2
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label">
                                                                Scheme Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span>
                                                        <span>
                                                            3
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label">
                                                                Server Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span>
                                                        <span>
                                                            4
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label">
                                                                Confirmation
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Nav -->
                                        </div>
                                        <!--end: Form Wizard Head -->
                                    </div>


                                    <div class="col-xl-9 col-lg-12 m--padding-top-20 m--padding-bottom-20 " >
                                        <h4 class="m--font-brand m--font-boldest h4 ">Personal Details</h4>
                                        <div class="form-group m-form__group row mt-3">
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Buisness Name:
                                                </label>
                                                <input type="text" class="form-control m-input" placeholder="Enter full name" v-model="bname">
                                                <span class="m-form__help">
                                        Please enter your buisness name
                                    </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Customer Name:
                                                </label>
                                                <input type="text" class="form-control m-input" placeholder="Enter full name" v-model="cname">
                                                <span class="m-form__help">
                                        Please enter your customer name
                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Email address:
                                                </label>
                                                <div class="m-input-icon m-input-icon--right">
                                                    <input type="email" class="form-control m-input" placeholder="Enter email" v-model="email">
                                                    <span class="m-input-icon__icon m-input-icon__icon--right">
                                            <span>
                                                <i class="fa fa-envelope icn" style="color:white;" ></i>
                                            </span>
                                        </span>
                                                </div>
                                                <span class="m-form__help">
                                        We'll never share your email with anyone else.
                                    </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Contact Number:
                                                </label>
                                                <div class="m-input-icon m-input-icon--right">
                                                    <input type="text" class="form-control m-input" placeholder="Enter your contact number:" v-model="no">
                                                    <span class="m-input-icon__icon m-input-icon__icon--right">
                                            <span>
                                                <i class="fa fa-chain icn" style="color:white;"></i>
                                            </span>
                                        </span>
                                                </div>
                                                <span class="m-form__help">
                                        Please enter your contact number
                                    </span>
                                            </div>
                                        </div>


                                        <div class="form-group m-form__group row">
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Address:
                                                </label>
                                                <div class="m-input-icon m-input-icon--right">
                                                    <input type="text" class="form-control m-input" placeholder="Enter your address" v-model="address">
                                                    <span class="m-input-icon__icon m-input-icon__icon--right">
                                            <span>
                                                <i class="fa fa-map-marker icn" style="color:white;"></i>
                                            </span>
                                        </span>
                                                </div>
                                                <span class="m-form__help">
                                        Please enter your address
                                    </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Postcode:
                                                </label>
                                                <div class="m-input-icon m-input-icon--right">
                                                    <input type="text" class="form-control m-input" placeholder="Enter your postcode" v-model="zip">
                                                    <span class="m-input-icon__icon m-input-icon__icon--right">
                                            <span>
                                                <i class="fa fa-bookmark-o icn" style="color:white;"></i>
                                            </span>
                                        </span>
                                                </div>
                                                <span class="m-form__help">
                                        Please enter your postcode
                                    </span>
                                            </div>
                                        </div>


                                        <button @click.prevent="next()" type="button" class="btn m-btn--pill   btn-brand m-btn m-btn--custom top-btn" style="font-weight:900;font-size:16.8px;">
                                            Next Step</button>
                                    </div>
                                </div>
                            </div>

                            <div v-if="step === 2">
                                <div class="row m-row--no-padding">
                                    <div class="col-xl-3 col-lg-12 m--padding-top-20 m--padding-bottom-15" >
                                        <!--begin: Form Wizard Head -->
                                        <div class="m-wizard__head">
                                            <!--begin: Form Wizard Nav -->
                                            <div class="m-wizard__nav">
                                                <div class="m-wizard__steps">
                                                    <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1" >
                                                        <div class="m-wizard__step-info" >
                                                            <a href="#" class="m-wizard__step-number" >
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            1
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label " >
                                                                Personal Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4" style="background-color:#716aca;color:white">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            2
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label icn-txt">
                                                                Scheme Details
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span>
                                                        <span>
                                                            3
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label">
                                                                Server Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span>
                                                        <span>
                                                            4
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label">
                                                                Confirmation
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Nav -->
                                        </div>
                                        <!--end: Form Wizard Head -->
                                    </div>

                                    <div class="col-xl-9 col-lg-12 m--padding-top-20 m--padding-bottom-15" >
                                        <h4 class="m--font-brand m--font-boldest h4 ">Scheme Details</h4>

                                        <div class="m-form__group form-group mt-3">

                                            <label style="font-weight:900;font-size:16.8px;">
                                                Services Required:
                                            </label>
                                            <div class="">
                                                <label class="m-checkbox space">
                                                    <input type="checkbox" id="myCheck" value="Money Transfers" v-model="checkedNames"  @click="myFunction()" style="font-size:20.8px;">
                                                    Money Transfers
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox space ">
                                                    <input v-model="checkedNames"type="checkbox"
                                                           id="water" value="Water Bill Payment" @click="waterFunction()" style="font-weight:900;font-size:16.8px;">
                                                    Water Bill Payment
                                                    <span></span>
                                                </label>
                                                <label class="m-checkbox space">
                                                    <input v-model="checkedNames"type="checkbox"
                                                           id="electricity" value="Electricity Bill Payment" @click="electricityFunction()" style="font-weight:900;font-size:16.8px;">
                                                    Electricity Bill Payment
                                                    <span></span>
                                                </label>

                                                <label class="m-checkbox space">
                                                    <input v-model="checkedNames" type="checkbox"
                                                           id="myCheck2" value="Bus Bookings" @click="myFunction2()" style="font-weight:900;font-size:16.8px;">
                                                    Bus Bookings
                                                    <span></span>
                                                </label>


                                            </div>
                                            <span class="m-form__help">
                                                                    Please select the services you require.
                                                                </span>
                                        </div>


                                        <div class="form-group m-form__group row">

                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Money Schemes:
                                                </label>

                                                <select class="sel col-lg-12 col-md-12 col-sm-12 clasic" style="" disabled id="mySelect">
                                                    <option>
                                                        Money
                                                    </option>
                                                    <option>
                                                        Bus
                                                    </option>

                                                </select>

                                                <span class="m-form__help">
                                        Please select a scheme.
                                    </span>
                                            </div>


                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Bus Schemes:
                                                </label>

                                                <select class="sel col-lg-12 col-md-12 col-sm-12 clasic" style="" disabled id="mySelect2">
                                                    <option>
                                                        Money
                                                    </option>
                                                    <option>
                                                        Bus
                                                    </option>

                                                </select>

                                                <span class="m-form__help">
                                        Please select a scheme.
                                    </span>
                                            </div>





                                        </div>



                                        <div class="form-group m-form__group row">

                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Water Bill Payment:
                                                </label>

                                                <select class="sel col-lg-12 col-md-12 col-sm-12 clasic" style="" disabled id="waterSelect">
                                                    <option>
                                                        Money
                                                    </option>
                                                    <option>
                                                        Bus
                                                    </option>

                                                </select>

                                                <span class="m-form__help">
                                        Please select a scheme.
                                    </span>
                                            </div>


                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Electricity Bill Payment:
                                                </label>

                                                <select class="sel col-lg-12 col-md-12 col-sm-12 clasic" style="" disabled id="electricitySelect">
                                                    <option>
                                                        Money
                                                    </option>
                                                    <option>
                                                        Bus
                                                    </option>

                                                </select>

                                                <span class="m-form__help">
                                        Please select a scheme.
                                    </span>
                                            </div>





                                        </div>



                                        <button style="font-weight:900;font-size:16.8px;" @click.prevent="prev()" type="button" class="btn m-btn--pill  mt-5  btn-success m-btn m-btn--custom top-btn">

                                            Previous Step</button>

                                        <button  style="  font-weight:900;font-size:16.8px;" @click.prevent="next()" type="button" class="btn m-btn--pill  mt-5  btn-brand m-btn m-btn--custom top-btn side-btn">
                                            Next Step</button>

                                    </div>
                                </div>
                            </div>


                            <div v-if="step === 3">
                                <div class="row m-row--no-padding">
                                    <div class="col-xl-3 col-lg-12 m--padding-top-20 m--padding-bottom-15" >
                                        <!--begin: Form Wizard Head -->
                                        <div class="m-wizard__head">
                                            <!--begin: Form Wizard Nav -->
                                            <div class="m-wizard__nav">
                                                <div class="m-wizard__steps">
                                                    <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1" >
                                                        <div class="m-wizard__step-info" >
                                                            <a href="#" class="m-wizard__step-number" >
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            1
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label " >
                                                                Personal Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2" >
                                                        <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1" >
                                                            <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            2
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label ">
                                                                Scheme Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4" style="background-color:#716aca;color:white">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            3
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label icn-txt">
                                                                Server Details
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span>
                                                        <span>
                                                            4
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label">
                                                                Confirmation
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Nav -->
                                        </div>
                                        <!--end: Form Wizard Head -->
                                    </div>
                                    <div class="col-xl-9 col-lg-12 m--padding-top-20 m--padding-bottom-15" >
                                        <h4 class="m--font-brand m--font-boldest h4 ">Server Details</h4>

                                        <div class="form-group m-form__group row mt-4">
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Server IP:
                                                </label>
                                                <input type="email" class="form-control m-input" placeholder="Enter IP address" v-model="ip">
                                                <span class="m-form__help">
                                        Please enter your IP address
                                    </span>
                                            </div>

                                        </div>
                                        <div class="form-group m-form__group row mt-3">
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Web Url 1:
                                                </label>
                                                <div class="m-input-icon m-input-icon--right">
                                                    <input type="text" class="form-control m-input" placeholder="Enter url 1" v-model="url1">
                                                    <span class="m-input-icon__icon m-input-icon__icon--right">
                                            <span>
                                                <i class="fa fa-globe icn" style="color:white;"></i>
                                            </span>
                                        </span>
                                                </div>
                                                <span class="m-form__help">
                                       Please enter the url
                                    </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label style="font-weight:900;font-size:16.8px;">
                                                    Web Url 2:
                                                </label>
                                                <div class="m-input-icon m-input-icon--right">
                                                    <input type="text" class="form-control m-input" placeholder="Enter url 2" v-model="url2">
                                                    <span class="m-input-icon__icon m-input-icon__icon--right">
                                            <span>
                                                <i class="fa fa-globe icn" style="color:white;"></i>
                                            </span>
                                        </span>
                                                </div>
                                                <span class="m-form__help">
                                        Please enter an optional url
                                    </span>
                                            </div>
                                        </div>


                                        <button style="font-weight:800;font-size:16.8px; position:relative;top:70px" @click.prevent="prev()" type="button" class="btn m-btn--pill  mt-5  btn-success m-btn m-btn--custom top-btn">

                                            Previous Step</button>

                                        <button style="font-weight:800;font-size:16.8px;position:relative;top:70px" @click.prevent="next()" type="button" class="btn m-btn--pill  mt-5  btn-brand m-btn m-btn--custom top-btn side-btn">
                                            Next Step</button>
                                    </div>
                                </div>
                            </div>




                            <div v-if="step === 4">
                                <div class="row m-row--no-padding">
                                    <div class="col-xl-3 col-lg-12 m--padding-top-20 m--padding-bottom-15" >
                                        <!--begin: Form Wizard Head -->
                                        <div class="m-wizard__head">
                                            <!--begin: Form Wizard Nav -->
                                            <div class="m-wizard__nav">
                                                <div class="m-wizard__steps">
                                                    <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1" >
                                                        <div class="m-wizard__step-info" >
                                                            <a href="#" class="m-wizard__step-number" >
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            1
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label " >
                                                                Personal Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__steps" data-wizard-target="#m_wizard_form_step_2" >
                                                        <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1" >
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            2
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label ">
                                                                Scheme Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check" ></i>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3" >
                                                        <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1" >
                                                            <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            3
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label ">
                                                                Server Details
                                                            </div>
                                                            <div class="m-wizard__step-icon">
                                                                <i class="la la-check"></i>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4" style="background-color:#716aca;color:white">
                                                        <div class="m-wizard__step-info">
                                                            <a href="#" class="m-wizard__step-number">
                                                    <span style="background-color:#411b8e">
                                                        <span class="icn-txt">
                                                            4
                                                        </span>
                                                    </span>
                                                            </a>
                                                            <div class="m-wizard__step-label icn-txt">
                                                                Confirmation
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Nav -->
                                        </div>
                                        <!--end: Form Wizard Head -->
                                    </div>
                                    <div class="col-xl-9 col-lg-12 m--padding-top-20 m--padding-bottom-15" >
                                        <h4 class="m--font-brand m--font-boldest h4 ">Summary </h4>
                                        <div id="accordion">
                                            <div class="card mt-5">
                                                <div class="card-header" style="background-color:white">
                                                    <a class="card-link" data-toggle="collapse" href="#collapseOne" >
                                                        <h5 class="m--font-brand"  style="font-weight:800">1. Personal Details</h5>
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <h5>Buisness Name:&nbsp<span class="m--font-brand">{{bname}}</span></h5>
                                                        <h5>Customer Name:&nbsp<span class="m--font-brand">{{cname}}</span></h5>
                                                        <h5>Email Address:&nbsp<span class="m--font-brand">{{email}}</span></h5>
                                                        <h5>Contact Number:&nbsp<span class="m--font-brand">{{no}}</span></h5>
                                                        <h5>Address:&nbsp<span class="m--font-brand">{{address}}</span></h5>
                                                        <h5>Postcode:&nbsp<span class="m--font-brand">{{zip}}</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" style="background-color:white" >
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" >
                                                        <h5 class="m--font-brand " style="font-weight:800">2. Scheme Details</h5>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <h5>Services Selected:&nbsp<span class="m--font-brand">{{checkedNames}}</span></h5>
                                                        <h5>Schemes Selected:&nbsp<span class="m--font-brand">{{checkedNames}}</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" style="background-color:white">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" >
                                                        <h5 class="m--font-brand"  style="font-weight:800">3. Server Details</h5>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <h5>IP Address:&nbsp<span class="m--font-brand">{{ip}}</span></h5>
                                                        <h5>Web Url 1:&nbsp<span class="m--font-brand">{{url1}}</span></h5>
                                                        <h5>Web Url 2::&nbsp<span class="m--font-brand">{{url2}}</span></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <button style="font-weight:900;font-size:16.8px;" @click.prevent="prev()" type="button" class="btn m-btn--pill    btn-success m-btn m-btn--custom top-btn">

                                            Previous Step</button>

                                        <button style="font-weight:900;font-size:16.8px;" @click.prevent="submit()" type="button" class="btn m-btn--pill    btn-brand m-btn m-btn--custom top-btn side-btn">
                                            Save Details</button>
                                    </div>
                                </div>
                            </div>





                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

    var bname="Mink";


    export default {

        data() {

            return {
                checkedNames: [],
                ip:"",
                url1:"",
                url2:"",
                bname:"",
                cname:"",
                no:"",
                email:"",
                address:"",
                zip:"" ,
                step:1,
                registration:{
                    name:null,
                    email:null,
                    street:null,
                    city:null,
                    state:null,
                    numtickets:0,
                    shirtsize:'XL'
                }
            }},
        methods:{
            prev() {
                this.step--;
            },
            next() {
                this.step++;


            },
            submit() {
                alert('Thank You!');
            },
            myFunction(){
                var checkBox = document.getElementById("myCheck");

                if (checkBox.checked == true){
                    document.getElementById("mySelect").disabled=false;
                } else {
                    document.getElementById("mySelect").disabled=true;
                }
            },
            myFunction2(){
                var checkBox2 = document.getElementById("myCheck2");

                if (checkBox2.checked == true){
                    document.getElementById("mySelect2").disabled=false;
                } else {
                    document.getElementById("mySelect2").disabled=true;
                }
            },
            waterFunction(){
                var checkBox = document.getElementById("water");

                if (checkBox.checked == true){
                    document.getElementById("waterSelect").disabled=false;
                } else {
                    document.getElementById("waterSelect").disabled=true;
                }
            },
            electricityFunction(){
                var checkBox = document.getElementById("electricity");

                if (checkBox.checked == true){
                    document.getElementById("electricitySelect").disabled=false;
                } else {
                    document.getElementById("electricitySelect").disabled=true;
                }
            },
            landlineFunction(){
                var checkBox = document.getElementById("landline");

                if (checkBox.checked == true){
                    document.getElementById("landlineSelect").disabled=false;

                } else {
                    document.getElementById("landlineSelect").disabled=true;
                }
            },

        },



    }



</script>


<style>
    body
    {
        font-family: 'Source Sans Pro', sans-serif;
    }
    .tests{
        display: none;
    }
    .sel{
        font-size: 16px;padding-top:10px;background: #fff;
        border: 1px solid #ccc;
        border-radius: 6px;color: #888888;-webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 5px;
    }

    .icn{
        background-color:#5867dd;
        color:white;
        border-radius:5px
    }
    .space{
        padding-right:20px;
    }
    .top-btn{
        margin-top:20px;
    }
    .side-btn{
        margin-left:20px;
    }

    .clasic{
        background-image:
                linear-gradient(45deg, transparent 50%, white 50%),
                linear-gradient(135deg, white 50%, transparent 50%),
                linear-gradient(to right, #5867dd, #5867dd);
        background-position:
                calc(100% - 20px) calc(1em + 2px),
                calc(100% - 15px) calc(1em + 2px),
                100% 0;
        background-size:
                5px 5px,
                5px 5px,
                2.5em 2.5em;
        background-repeat: no-repeat;
    }
    .icn-txt{
        color:white !important;
        font-weight:600!important;
    }

    .ttl{
        font-weight:900;
        font-size:16.8px;
    }


</style>

