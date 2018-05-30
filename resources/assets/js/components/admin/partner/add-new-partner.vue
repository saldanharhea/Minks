<template>
    <div class="row">
        <div class="col col-xl-10 offset-xl-1">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text"> Partner Registration
                                <small> Please fill all the details</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-wizard m-wizard--1 m-wizard--danger" id="m_wizard">
                    <div class="m-portlet__padding-x"></div>
                    <div class="m-wizard__head m-portlet__padding-x">
                        <div class="m-wizard__progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="m-wizard__nav">
                            <div class="m-wizard__steps">
                                <div class="m-wizard__step m-wizard__step--current"
                                     data-wizard-target="#m_wizard_form_step_1">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number"> <span> <span> 1 </span> </span>
                                        </a>
                                        <div class="m-wizard__step-line"><span></span>
                                        </div>
                                        <div class="m-wizard__step-label">Basic Info</div>
                                    </div>
                                </div>
                                <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number"> <span> <span> 2 </span> </span>
                                        </a>
                                        <div class="m-wizard__step-line"><span></span>
                                        </div>
                                        <div class="m-wizard__step-label">Services</div>
                                    </div>
                                </div>
                                <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number"> <span> <span> 3 </span> </span>
                                        </a>
                                        <div class="m-wizard__step-line"><span></span>
                                        </div>
                                        <div class="m-wizard__step-label">Server Details</div>
                                    </div>
                                </div>
                                <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_4">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number"> <span> <span> 4 </span> </span>
                                        </a>
                                        <div class="m-wizard__step-line"><span></span>
                                        </div>
                                        <div class="m-wizard__step-label">Confirmation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-wizard__form">
                        <form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
                            <div class="m-portlet__body">
                                <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title"> Partner Details</h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">*Business
                                                        Name:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <input type="text"
                                                               v-model="user_inputs.basic_info.business_name"
                                                               name="name" class="form-control m-input"
                                                               placeholder="" value="Nick Stone"> <span
                                                            class="m-form__help"> Please enter your first and last names </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">*Contact
                                                        Name:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <input type="text" v-model="user_inputs.basic_info.contact_name"
                                                               name="name"
                                                               class="form-control m-input"
                                                               placeholder="" value="Nick Stone"> <span
                                                            class="m-form__help"> Please enter your first and last names </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">* Email:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <input type="email" v-model="user_inputs.basic_info.user_email"
                                                               name="email"
                                                               class="form-control m-input"
                                                               placeholder="" value="nick.stone@gmail.com"> <span
                                                            class="m-form__help"> We'll never share your email with anyone else </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">* Mobile No</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"> <i
                                                                    class="la la-phone"></i> </span>
                                                            </div>
                                                            <input type="text" v-model="user_inputs.basic_info.mobileno"
                                                                   name="phone"
                                                                   class="form-control m-input"
                                                                   placeholder="" value="8975409886">
                                                        </div>
                                                        <span class="m-form__help"> Enter your valid phone in US phone format. E.g: 1-541-754-3010 </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                            <div class="m-form__section">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title"> Mailing Address</h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">* Address Line
                                                        1:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <input type="text"
                                                               v-model="user_inputs.mailing_address.address_line_one"
                                                               name="address1"
                                                               class="form-control m-input"
                                                               placeholder=""
                                                               value="Headquarters 1120 N Street Sacramento 916-654-5266">
                                                        <span class="m-form__help"> Street address, P.O. box, company name, c/o </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Address Line
                                                        2:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <input type="text"
                                                               v-model="user_inputs.mailing_address.address_line_two"
                                                               name="address2"
                                                               class="form-control m-input"
                                                               placeholder=""
                                                               value="P.O. Box 942873 Sacramento, CA 94273-0001"> <span
                                                            class="m-form__help"> Appartment, suite, unit, building, floor, etc </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Pin Code:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <input type="text"
                                                               v-model="user_inputs.mailing_address.pin_code"
                                                               name="address2"
                                                               class="form-control m-input"
                                                               placeholder=""
                                                               value="P.O. Box 942873 Sacramento, CA 94273-0001"> <span
                                                            class="m-form__help"> Appartment, suite, unit, building, floor, etc </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">* City:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <select name="country" v-model="user_inputs.mailing_address.user_city"
                                                                class="form-control m-input">
                                                            <option value="">Select</option>
                                                            <option v-for="city in system_cities" :value="city.value">{{ city.text }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">* State:</label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <select name="country" v-model="user_inputs.mailing_address.user_state"
                                                                v-on:change="getCities" class="form-control m-input">
                                                            <option value="">Select</option>
                                                            <option v-for="state in system_states" :value="state.value">
                                                                {{ state.text }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title"> Schemes Details</h3>
                                                </div>

                                                <div class="form-group m-form__group row">
                                                    <div class="col-lg-6 m-form__group-sub">
                                                        <label class="form-control-label">* Money Transfer
                                                            Scheme:</label>

                                                        <select name="country" v-model="user_inputs.scheme_details.mt_scheme"
                                                                class="form-control m-input">
                                                            <option value="">Select</option>
                                                            <option v-for=" mt_schemes in money_transfer_schemes" :value="mt_schemes.value">{{ mt_schemes.text }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 m-form__group-sub">
                                                        <label class="form-control-label">* BBPS Scheme:</label>

                                                        <select name="country" v-model="user_inputs.scheme_details.bbps_scheme"
                                                                class="form-control m-input">
                                                            <option value="">Select</option>
                                                            <option v-for=" bbps_scheme_list in bbps_schemes" :value="bbps_scheme_list.value">{{ bbps_scheme_list.text }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                            <div class="m-form__section">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title"> Client Settings</h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <div class="col-lg-12 m-form__group-sub">
                                                        <label class="form-control-label">* Services Required:</label>
                                                        <div class="m-checkbox-inline d-flex justify-content-around">
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                <input type="checkbox"
                                                                       v-model="user_inputs.services_required"
                                                                       name="account_communication[]"
                                                                       checked value="email">Money Transfer
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                <input type="checkbox"
                                                                       v-model="user_inputs.services_required"
                                                                       name="account_communication[]"
                                                                       value="sms"> BBPS <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                <input type="checkbox"
                                                                       v-model="user_inputs.services_required"
                                                                       name="account_communication[]"
                                                                       value="phone"> Travel <span></span>
                                                            </label>
                                                        </div>
                                                        <span class="m-form__help"> Please select user communication options </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title"> Server Info</h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <div class="col-lg-12">
                                                        <label class="form-control-label">* Server IP:</label>
                                                        <input type="url" v-model="user_inputs.server_info.server_ip"
                                                               name="account_url"
                                                               class="form-control m-input" placeholder=""
                                                               value="http://sinortech.vertoffice.com"> <span
                                                            class="m-form__help"> Please enter your preferred URL to your dashboard </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <div class="col-lg-6 m-form__group-sub">
                                                        <label class="form-control-label">* MT Response URL:</label>
                                                        <input type="text"
                                                               v-model="user_inputs.server_info.mt_response_url"
                                                               name="account_username"
                                                               class="form-control m-input" placeholder=""
                                                               value="nick.stone"> <span class="m-form__help"> Your username to login to your dashboard </span>
                                                    </div>
                                                    <div class="col-lg-6 m-form__group-sub">
                                                        <label class="form-control-label">* Bus Response URL:</label>
                                                        <input type="text" v-model="user_inputs.server_info.bus_url"
                                                               name="account_password"
                                                               class="form-control m-input" placeholder=""
                                                               value="qwerty"> <span class="m-form__help"> Please use letters and at least one number and symbol </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                            <div class="m-form__section">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title"> Authentication Delivery
                                                        Methods</h3>
                                                </div>
                                                <div class="form-group m-form__group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label class="m-option"> <label class="m-option__control">
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                    <input type="checkbox" name="billing_delivery"
                                                                           value=""> <span></span> </label>
                                                            </label> <span class="m-option__label"> <span
                                                                    class="m-option__head"> <span
                                                                    class="m-option__title"> Send Email </span>  <span
                                                                    class="m-option__focus"> Free </span> </span> <span
                                                                    class="m-option__body"> When sending email it will be Queued for faster creation of the user & it will be delivered within 1 - 5 Min</span> </span>
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label class="m-option"> <label class="m-option__control">
                                                                <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                    <input type="checkbox" name="billing_delivery"
                                                                           value=""> <span></span> </label>
                                                            </label> <span class="m-option__label"> <span
                                                                    class="m-option__head"> <span
                                                                    class="m-option__title"> Send SMS </span>  <span
                                                                    class="m-option__focus"> Rs.0.25 </span> </span> <span
                                                                    class="m-option__body"> When sending SMS it will be Queued for faster creation of the user & it will be delivered within 1 - 5 Min </span> </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="m-form__help"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-wizard__form-step" id="m_wizard_form_step_4">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-accordion m-accordion--default" id="m_accordion_1"
                                                 role="tablist">
                                                <div class="m-accordion__item active">
                                                    <div class="m-accordion__item-head" role="tab"
                                                         id="m_accordion_1_item_1_head" data-toggle="collapse"
                                                         href="#m_accordion_1_item_1_body" aria-expanded=" false"><span
                                                            class="m-accordion__item-icon"> <i
                                                            class="fa flaticon-user-ok"></i> </span> <span
                                                            class="m-accordion__item-title"> 1. Basic Information </span>
                                                        <span class="m-accordion__item-mode"></span>
                                                    </div>
                                                    <div class="m-accordion__item-body collapse show"
                                                         id="m_accordion_1_item_1_body" role="tabpanel"
                                                         aria-labelledby="m_accordion_1_item_1_head"
                                                         data-parent="#m_accordion_1">
                                                        <div class="tab-content m--padding-30">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title"> Partner
                                                                        Details</h4>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Business
                                                                        Name:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.basic_info.business_name}} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Contact
                                                                        Name:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.basic_info.contact_name}} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Email:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.basic_info.user_email}} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Mobile
                                                                        No:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.basic_info.mobileno}} </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                            <div class="m-form__section">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title">Office
                                                                        Address</h4>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Address
                                                                        Line 1:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.mailing_address.address_line_one }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Address
                                                                        Line 2:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.mailing_address.address_line_two }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">City:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.mailing_address.user_city }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">State:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.mailing_address.user_state }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">ZIP:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.mailing_address.pin_code }} </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-accordion__item">
                                                    <div class="m-accordion__item-head collapsed" role="tab"
                                                         id="m_accordion_1_item_2_head" data-toggle="collapse"
                                                         href="#m_accordion_1_item_2_body" aria-expanded=" false"><span
                                                            class="m-accordion__item-icon"> <i
                                                            class="fa flaticon-placeholder"></i> </span> <span
                                                            class="m-accordion__item-title"> 2. Services Required </span>
                                                        <span class="m-accordion__item-mode"></span>
                                                    </div>
                                                    <div class="m-accordion__item-body collapse"
                                                         id="m_accordion_1_item_2_body" role="tabpanel"
                                                         aria-labelledby="m_accordion_1_item_2_head"
                                                         data-parent="#m_accordion_1">
                                                        <div class="tab-content m--padding-30">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title"> Scheme
                                                                        Details</h4>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Money
                                                                        Transfer:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.scheme_details.mt_scheme }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">BBPS
                                                                        Scheme:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.scheme_details.bbps_scheme }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Travel
                                                                        Scheme:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.scheme_details.travel_scheme }} </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                            <div class="m-form__section">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title"> Services
                                                                        Required</h4>
                                                                </div>


                                                                <div v-for="service in user_inputs.services_required"
                                                                     class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">{{ service }}</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> YES </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-accordion__item">
                                                    <div class="m-accordion__item-head collapsed" role="tab"
                                                         id="m_accordion_1_item_3_head" data-toggle="collapse"
                                                         href="#m_accordion_1_item_3_body" aria-expanded=" false"><span
                                                            class="m-accordion__item-icon"> <i
                                                            class="fa flaticon-alert-2"></i> </span> <span
                                                            class="m-accordion__item-title"> 3. Server Details </span>
                                                        <span class="m-accordion__item-mode"></span>
                                                    </div>
                                                    <div class="m-accordion__item-body collapse"
                                                         id="m_accordion_1_item_3_body" role="tabpanel"
                                                         aria-labelledby="m_accordion_1_item_3_head"
                                                         data-parent="#m_accordion_1">
                                                        <div class="tab-content m--padding-30">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title"> Server Info</h4>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Server
                                                                        IP::</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.server_info.server_ip }} </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">Money
                                                                        Transfer URL:</label>
                                                                    <div class="col-xl-8 col-lg-8"><span
                                                                            class="m-form__control-static"> {{ user_inputs.server_info.mt_response_url }} </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                            <div class="form-group m-form__group m-form__group--sm row">
                                                <div class="col-xl-12">
                                                    <div class="m-checkbox-inline">
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                            <input type="checkbox" name="accept" value="1">Click here to
                                                            indicate that you have read and agree to the terms presented
                                                            in the Terms and Conditions agreement <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                                <div class="m-form__actions m-form__actions">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4 m--align-left">
                                            <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon"
                                               data-wizard-action="prev"> <span> <i class="la la-arrow-left"></i> &nbsp;&nbsp; <span> Back </span> </span>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 m--align-right">
                                            <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon"
                                               data-wizard-action="submit"> <span> <i class="la la-check"></i> &nbsp;&nbsp; <span> Submit </span> </span>
                                            </a>
                                            <a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--icon"
                                               data-wizard-action="next"> <span> <span>  Continue </span> &nbsp;&nbsp; <i
                                                    class="la la-arrow-right"></i>
											</span>
                                            </a>
                                        </div>
                                        <div class="col-lg-2"></div>
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
    export default {
        name: "add-new-partner",
        data() {
            return {
                user_inputs: {
                    basic_info: {
                        business_name: '',
                        contact_name: '',
                        user_email: '',
                        mobileno: ''
                    },
                    mailing_address: {
                        address_line_one: '',
                        address_line_two: '',
                        pin_code: '',
                        user_city: '',
                        user_state: ''
                    },
                    scheme_details: {
                        mt_scheme: '',
                        bbps_scheme: '',
                        travel_scheme: ''
                    },
                    services_required: [],
                    server_info: {
                        server_ip: '',
                        mt_response_url: '',
                        bus_url: ''
                    }
                },

                system_states: [],
                system_cities: [],
                money_transfer_schemes : [],
                bbps_schemes: []
            }
        },
        methods: {

            getStates() {

                axios.post('/get-states').then(response => {

                    response.data.payload.map((value, key) => {
                        this.system_states.push({text: value.state, value: value.id})
                    });

                }).catch(error => {
                    console.log(error)
                });
            },

            getCities(e){

                axios.post('/get-cities',{
                    'states_id' : e.target.value
                }).then(response => {

                    this.system_cities.length = 0;

                    response.data.payload.map((value, key) => {
                        this.system_cities.push({text: value.city, value: value.id})
                    });

                }).catch(error => {
                    console.log(error)
                });

            },

            getMTScheme(){

                axios.post('admin-get-money-transfer-scheme-list').then(response => {

                    response.data.payload.map((value, key) => {
                        this.money_transfer_schemes.push({text: value.scheme_name, value: value.id})
                    });

                }).catch(error => {
                    console.log(error)
                });

            },

            getBBPSScheme(){

                axios.post('admin-get-bbps-scheme-list').then(response => {

                    response.data.payload.map((value, key) => {
                        this.bbps_schemes.push({text: value.scheme_name, value: value.id})
                    });

                }).catch(error => {
                    console.log(error)
                });

            }
        },
        created() {
            this.getStates();

            //Fetch Schemes
            this.getMTScheme();
            this.getBBPSScheme();
        }
    }

</script>