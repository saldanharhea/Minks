<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        Metronic | Login Page - 1
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Web font -->
    <script src="{{ URL('assets/app/js/webfont.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="{{ URL('login_assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL('login_assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="login_assets/demo/default/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->

<div id="app">
    <admin-login></admin-login>
</div>


<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="{{ URL('login_assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ URL('login_assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->

<script src="{{ URL('assets/js/app.js') }}"></script>


{{--<script>
    $('#admin-login').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: '',
            method: 'POST',
            dataType: 'json',
            data: '',
            beforeSend : function () {

            },
            success: function () {
                
            },
            error: function () {
                
            }
        });

    });
</script>--}}

<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
