$(document).ready(function(){
    $("#licence-app").validate({
        rules: {
            intented_city: "required",
            intented_mar_date: "required",
            intended: "required",
            //
            // password: {
            //     required: true,
            //     minlength: 5
            // },
            // confirm_password: {
            //     required: true,
            //     minlength: 5,
            //     equalTo: "#password"
            // },
            // email: {
            //     required: true,
            //     email: true
            // },
            // topic: {
            //     required: "#newsletter:checked",
            //     minlength: 2
            // },
            // agree: "required"
        },
    });
});
