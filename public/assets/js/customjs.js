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

    // for applicant
    $(".app-sn").hide();
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
    $(".japp-sn").hide();
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

    // for applicant parents
    $(".prapp-sn").hide();
    $("#prnamelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".prapp-sn").show();
            $(".prapp-lm").hide();
        } else {
            $(".prapp-sn").hide();
            $(".prapp-lm").show();
        }
    });

    $(".pr2app-sn").hide();
    $("#pr2namelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".pr2app-sn").show();
            $(".pr2app-lm").hide();
        } else {
            $(".pr2app-sn").hide();
            $(".pr2app-lm").show();
        }
    });


    // for joint applicant parents
    $(".prjapp-sn").hide();
    $("#prjnamelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".prjapp-sn").show();
            $(".prjapp-lm").hide();
        } else {
            $(".prjapp-sn").hide();
            $(".prjapp-lm").show();
        }
    });

    $(".pr2japp-sn").hide();
    $("#pr2jnamelastfirst").click(function () {
        if ($(this).is(":checked")) {
            $(".pr2japp-sn").show();
            $(".pr2japp-lm").hide();
        } else {
            $(".pr2japp-sn").hide();
            $(".pr2japp-lm").show();
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
