@extends('layouts.master')

@section('header')
    @include('layouts.admin.header')
@endsection

@section('breadcrum')
    {{--@include('layouts.admin.breadcrum')--}}
@endsection

@section('footer')
    @include('layouts.admin.footer')
@endsection

@section('content')

    <div id="app">
        <admin-add-partner></admin-add-partner>
    </div>

@endsection

@section('right-sidebar')
    @include('layouts.admin.right-sidebar')
@endsection

@section('script')

    <!--begin::Page Resources -->
    <script src="{{URL('login_assets/demo/default/custom/components/forms/wizard/wizard.js')}}" type="text/javascript"></script>
    <!--end::Page Resources -->

    <script src="{{ URL('assets/js/app.js') }}"></script>
@endsection