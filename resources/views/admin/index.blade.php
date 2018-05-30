@extends('layouts.master')

@section('header')
    @include('layouts.admin.header')
@endsection

@section('breadcrum')
    @include('layouts.admin.breadcrum')
@endsection

@section('footer')
    @include('layouts.admin.footer')
@endsection

@section('content')



    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">
                            <i class="fa fa-cc-visa  m--font-brand title-icon "></i>
                            <h4 class="m-widget24__title">
                                Money Transfers
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
													Sucessfull
												</span>
                            <span class="m-widget24__stats m--font-brand">
													&#8377;&nbsp;1834
												</span>
                            <div class="m--space-10"></div>



                            <div class="progress m-progress--sm">
                                <div class="progress-bar  money " role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
													90%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													8%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">
                            <i class="fa fa-tint  m--font-info title-icon "></i>
                            <h4 class="m-widget24__title">
                                Water Bills
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
													Customer Review
												</span>
                            <span class="m-widget24__stats m--font-info">
													&#8377;&nbsp;134
												</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar   water" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
													70%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													20%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">
                            <i class="fa fa-tty   m--font-danger title-icon "></i>
                            <h4 class="m-widget24__title">
                                Landline Bills
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
													Fresh Order Amount
												</span>
                            <span class="m-widget24__stats m--font-danger">
													&#8377;&nbsp;567
												</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar  moving-progress-bar landline" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
													98%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													2%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">
                            <i class="fa fa-lightbulb-o  m--font-success title-icon "></i>
                            <h4 class="m-widget24__title">
                               Electricity Bills
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
													Joined New User
												</span>
                            <span class="m-widget24__stats m--font-success">
													&#8377;&nbsp;276
												</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar  elec" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
                                    20%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													20%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>







    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">
                            <i class="fa fa-train  m--font-brand title-icon "></i>
                            <h4 class="m-widget24__title">
                               Train Bookings
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
													All Customs Value
												</span>
                            <span class="m-widget24__stats m--font-brand">
													&#8377;&nbsp;187
												</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar  moving-progress-bar purple lpurple" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
													84%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													20%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">
                            <i class="fa fa-bus  m--font-info title-icon "></i>
                            <h4 class="m-widget24__title">
                               Bus Bookings
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
													Customer Review
												</span>
                            <span class="m-widget24__stats m--font-info">
													&#8377;&nbsp;1349
												</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar  moving-progress-bar blue lblue" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
													84%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													20%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">
                            <i class="fa fa-plane  m--font-danger title-icon "></i>
                            <h3 class="m-widget24__title">
                                Flight Bookings
                            </h3>
                            <br>
                            <span class="m-widget24__desc">
													Fresh Order Amount
												</span>
                            <span class="m-widget24__stats m--font-danger">
													&#8377;&nbsp;567
												</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar  moving-progress-bar red lred" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
													84%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													20%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="m-widget24 progress-change">
                        <div class="m-widget24__item">

                            <i class="fa fa-hotel m--font-success title-icon "></i>
                            <h4 class="m-widget24__title">
                                Hotel Bookings
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
													Joined New User
												</span>
                            <span class="m-widget24__stats m--font-success">
													&#8377;&nbsp;276
												</span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar  hotel" role="progressbar"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="details-sucess">
                                <span class="m-widget24__change ">
													Sucessful Transactions
												</span>
                                <span class="m-widget24__number">
													54%
												</span>
                            </div>
                            <div class="details-pending">
                                <span class="m-widget24__change ">
													Pending Transactions
												</span>
                                <span class="m-widget24__number">
													46%
												</span>
                            </div>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>





 

    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet m-portlet--mobile ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Incoming Transactions
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                     data-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
																				<span class="m-nav__section-text">
																					Quick Actions
																				</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">
																						Create Post
																					</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">
																						Send Messages
																					</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                <span class="m-nav__link-text">
																						Upload File
																					</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__section">
																				<span class="m-nav__section-text">
																					Useful Links
																				</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">
																						FAQ
																					</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">
																						Support
																					</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                        <li class="m-nav__item m--hide">
                                                            <a href="#"
                                                               class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                Submit
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="m-portlet__body">
                    <!--begin: Datatable -->
                    <div class="m_datatable" id="m_datatable_latest_orders_23"></div>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>




   





















    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Support Cases-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Support Cases
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget16">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="m-widget16__head">
                                    <div class="m-widget16__item">
															<span class="m-widget16__sceduled">
																Type
															</span>
                                        <span class="m-widget16__amount m--align-right">
																Amount
															</span>
                                    </div>
                                </div>
                                <div class="m-widget16__body">
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																EPS
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																+78,05%
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																PDO
															</span>
                                        <span class="m-widget16__price m--align-right m--font-accent">
																21,700
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																OPL Status
															</span>
                                        <span class="m-widget16__price m--align-right m--font-danger">
																Negative
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																Priority
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																+500,200
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																Net Prifit
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																$18,540,60
															</span>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="m-widget16__stats">
                                    <div class="m-widget16__visual">
                                        <div id="m_chart_support_tickets" style="height: 180px"></div>
                                    </div>
                                    <div class="m-widget16__legends">
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-info"></span>
                                            <span class="m-widget16__legend-text">
																	20% Margins
																</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-accent"></span>
                                            <span class="m-widget16__legend-text">
																	80% Profit
																</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                            <span class="m-widget16__legend-text">
																	10% Lost
																</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Support Stats-->
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Finance Stats-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Finance Stats
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget1 m-widget1--paddingless">
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        IPO Margin
                                    </h3>
                                    <span class="m-widget1__desc">
															Awerage IPO Margin
														</span>
                                </div>
                                <div class="col m--align-right">
														<span class="m-widget1__number m--font-accent">
															+24%
														</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        Payments
                                    </h3>
                                    <span class="m-widget1__desc">
															Yearly Expenses
														</span>
                                </div>
                                <div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															+$560,800
														</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        Logistics
                                    </h3>
                                    <span class="m-widget1__desc">
															Overall Regional Logistics
														</span>
                                </div>
                                <div class="col m--align-right">
														<span class="m-widget1__number m--font-warning">
															-10%
														</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        Expenses
                                    </h3>
                                    <span class="m-widget1__desc">
															Balance
														</span>
                                </div>
                                <div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">
															$345,000
														</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Finance Stats-->
        </div>
    </div>

@endsection

@section('right-sidebar')
    @include('layouts.admin.right-sidebar')
@endsection

@section('script')

    <script>
        let options = {
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'https://keenthemes.com/metronic/preview/inc/api/datatables/demos/default.php'
                    }
                },
                pageSize: 10,
                saveState: {
                    cookie: false,
                    webstorage: true
                },
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true
            },

            layout: {
                theme: 'default',
                class: '',
                scroll: true,
                height: 380,
                footer: false
            },

            sortable: true,

            filterable: false,

            pagination: true,

            columns: [{
                field: "RecordID",
                title: "#",
                sortable: false,
                width: 40,
                selector: {
                    class: 'm-checkbox--solid m-checkbox--brand'
                },
                textAlign: 'center'
            }, {
                field: "OrderID",
                title: "Order ID",
                sortable: 'asc',
                filterable: false,
                width: 150,

            }, {
                field: "ShipName",
                title: "Ship Name",
                width: 150,
                responsive: {
                    visible: 'lg'
                }
            }, {
                field: "ShipDate",
                title: "Ship Date"
            }, {
                field: "Status",
                title: "Status",
                width: 100,
                // callback function support for column rendering
                template: function(row) {
                    var status = {
                        1: {
                            'title': 'Pending',
                            'class': 'm-badge--brand'
                        },
                        2: {
                            'title': 'Delivered',
                            'class': ' m-badge--metal'
                        },
                        3: {
                            'title': 'Canceled',
                            'class': ' m-badge--primary'
                        },
                        4: {
                            'title': 'Success',
                            'class': ' m-badge--success'
                        },
                        5: {
                            'title': 'Info',
                            'class': ' m-badge--info'
                        },
                        6: {
                            'title': 'Danger',
                            'class': ' m-badge--danger'
                        },
                        7: {
                            'title': 'Warning',
                            'class': ' m-badge--warning'
                        }
                    };
                    return '<span class="m-badge ' + status[row.Status].class + ' m-badge--wide">' + status[row.Status].title + '</span>';
                }
            },
                {
                field: "Type",
                title: "Type",
                width: 100,
                // callback function support for column rendering
                template: function(row) {
                    var status = {
                        1: {
                            'title': 'Online',
                            'state': 'danger'
                        },
                        2: {
                            'title': 'Retail',
                            'state': 'primary'
                        },
                        3: {
                            'title': 'Direct',
                            'state': 'accent'
                        }
                    };
                    return '<span class="m-badge m-badge--' + status[row.Type].state + ' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-' + status[row.Type].state + '">' + status[row.Type].title + '</span>';
                }
            },
                {
                field: "Actions",
                width: 110,
                title: "Actions",
                sortable: false,
                overflow: 'visible',
                template: function(row) {
                    var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : '';

                    return '\
                        <div class="dropdown ' + dropup + '">\
                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">\
                                <i class="la la-ellipsis-h"></i>\
                            </a>\
                            <div class="dropdown-menu dropdown-menu-right">\
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
                            </div>\
                        </div>\
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\
                            <i class="la la-edit"></i>\
                        </a>\
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\
                            <i class="la la-trash"></i>\
                        </a>\
                    ';
                }
            }]
        };

        let datatable = $('.m_datatable').mDatatable(options);
       
    </script>

@endsection