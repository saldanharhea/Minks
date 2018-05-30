<template>
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin"
             id="m_login">
            <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                <div class="m-stack m-stack--hor m-stack--desktop">
                    <div class="m-stack__item m-stack__item--fluid">
                        <div class="m-login__wrapper">
                            <div class="m-login__logo">
                                <a href="#">
                                    <img src="assets/app/media/img//logos/logo-2.png">
                                </a>
                            </div>
                            <div class="m-login__signin">
                                <div class="m-login__head">
                                    <h3 class="m-login__title">
                                        Sign In To Admin
                                    </h3>
                                </div>
                                <form v-on:submit.prevent class="m-login__form m-form" id="admin-login" action="">

                                    <div v-if="error"
                                         class="m-alert m-alert--outline alert alert-danger alert-dismissible fadeIn animated"
                                         role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"></button>
                                        <span>Incorrect username or password. Please try again.</span>
                                    </div>

                                    <div class="form-group m-form__group">
                                        <input v-model="username" class="form-control m-input" type="email"
                                               placeholder="Email"
                                               name="username" autocomplete="off">
                                    </div>
                                    <div class="form-group m-form__group">
                                        <input v-model="password"
                                               class="form-control m-input m-login__form-input--last" type="password"
                                               placeholder="Password" name="password">
                                    </div>
                                    <div class="row m-login__form-sub">
                                        <div class="col m--align-left">
                                            <label class="m-checkbox m-checkbox--focus">
                                                <input type="checkbox" name="remember" v-model="remember_me">
                                                Remember me
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col m--align-right">
                                            <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                                Forget Password ?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="m-login__form-action">
                                        <button v-if="signin_button" v-on:click="login" id="m_login_signin_submit"
                                                class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                            Sign In
                                        </button>
                                        <div v-if="loading" class="m-loader m-loader--lg m-loader--success"
                                             style="width: 30px; display: inline-block;"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content"
                 style="background-image: url(assets/app/media/img//bg/bg-4.jpg)">
                <div class="m-grid__item m-grid__item--middle">
                    <h3 class="m-login__welcome">
                        Minkspay APIs Portal
                    </h3>
                    <p class="m-login__msg">
                        Multiple MoneyTransfer, Bus Booking,
                        <br>
                        Electricity Bill, Water Bill, & More
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "admin-login",
        data() {
            return {
                signin_button: true,
                loading: false,
                error: false,
                username: '',
                password: '',
                remember_me: ''
            }
        },
        methods: {
            login() {
                this.loading = true;
                this.signin_button = false;
                axios.post('/perform-admin-login', {
                    username: this.username,
                    password: this.password,
                    remember_me: this.remember_me
                }).then(response => {

                    console.log(response);

                    if (response.data.error === false) {
                        this.loading = false;
                        window.location.href = 'admin-dashboard';
                    } else {
                        this.loading = false;
                        this.signin_button = true;
                        this.showLoginError();
                    }
                })
                    .catch(error => {
                        console.log(error)
                    });
                /*.finally(() => this.loading = false)*/
            },

            showLoginError() {

                this.error = true
            }
        }
    }
</script>