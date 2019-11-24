@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/smart_wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/smart_wizard_theme_arrows.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush
@section('content')

    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <a class="navbar-brand" href="#">
                        Marriage Licence Application
                    </a>
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item no-arrow">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                            </a>
                        </li>
                        <li class="nav-item no-arrow">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Register</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('saveApplicant') }}" role="form" data-toggle="validator" method="POST">
                    @csrf
                     <div id="smartwizard">
                    <ul>
                        <li><a href="#step-1">Step 1<br /><small>General Information</small></a></li>
                        <li><a href="#step-2">Step 2<br /><small>Applicant's Information</small></a></li>
                        <li><a href="#step-3">Step 3<br /><small>Joint Applicant's Information</small></a></li>
                        <li><a href="#step-4">Step 4<br /><small>Submit Your Application</small></a></li>
                    </ul>

                    <div>
                            <div id="step-1" class="">
                                @include('partials.step1')
                            </div>
                            <div id="step-2" class="">
                                @include('partials.step2')
                            </div>
                            <div id="step-3" class="">
                                @include('partials.step3')
                            </div>
                            <div id="step-4" class="">
                                @include('partials.step4')
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>

@endsection
@push('scripts')
    <script src="{{ asset('assets/js/jquery.smartWizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#smartwizard').smartWizard({
                theme: 'arrows',
                transitionEffect: 'fade',
                transitionSpeed: '400',
                toolbarSettings: {
                    toolbarPosition: 'top'
                }
            });

            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        return false;
                    }
                }
                return true;
            });


            $("#namelastfirst").click(function () {
                if ($(this).is(":checked")) {
                    $(".app-sn").show();
                    $(".app-lm").hide();
                } else {
                    $(".app-sn").hide();
                    $(".app-lm").show();
                }
            });
            $(".court-file").hide();
            $(".divorced-country").hide();
            $("input[name=app_marital_stat]").change(function () {
                if ($("#divorced_canada").is(":checked")) {
                    $(".court-file").show();
                } else {
                    $(".court-file").hide();
                }

                if ($("#canada_outside").is(":checked")) {
                    $(".divorced-country").show();
                } else {
                    $(".divorced-country").hide();
                }
            });

            $(".permanent_val").hide();
            $("#permanentcheck").click(function () {
                if ($(this).is(":checked")) {
                    $(".permanent_val").show();
                } else {
                    $(".permanent_val").hide();
                }
            });

            // For joint applicant
            $("#jnamelastfirst").click(function () {
                if ($(this).is(":checked")) {
                    $(".japp-sn").show();
                    $(".japp-lm").hide();
                } else {
                    $(".japp-sn").hide();
                    $(".japp-lm").show();
                }
            });
            $(".jcourt-file").hide();
            $(".jdivorced-country").hide();
            $("input[name=japp_marital_stat]").change(function () {
                if ($("#jdivorced_canada").is(":checked")) {
                    $(".jcourt-file").show();
                } else {
                    $(".jcourt-file").hide();
                }

                if ($("#jcanada_outside").is(":checked")) {
                    $(".jdivorced-country").show();
                } else {
                    $(".jdivorced-country").hide();
                }
            });

            $(".jpermanent_val").hide();
            $("#jpermanentcheck").click(function () {
                if ($(this).is(":checked")) {
                    $(".jpermanent_val").show();
                } else {
                    $(".jpermanent_val").hide();
                }
            });

        });

        function submitBday() {
            var Q4A = "";
            var Bdate = document.getElementById('app-dob').value;
            var Bday = +new Date(Bdate);
            Q4A += ~~ ((Date.now() - Bday) / (31557600000));
            var theBday = document.getElementById('app-age');
            theBday.value = Q4A;
        }
    </script>
@endpush
