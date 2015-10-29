$(document).ready(function () {
    _tabClick();
    _regClick();
    _loginClick();
    _forgotForm();
});

var _customSelect = function () {
    var _select = $(".customSelect select");
    $(_select).on("change", function () {
        console.log($(this).value());
    });
}

var _tabClick = function () {
    var _tabWrap = $(".tabWrap");
    var _slide = $(".tabWrap .tabList li");
    var _tabContentWrap = $('.tabContentWrap');
    $(_slide).on('click', function (e) {
        if (!$(this).hasClass("active")) {
            $(_tabWrap).find(".tabList li").removeClass('active');
            $(this).addClass("active");
            $(_tabContentWrap).find(".tabContent").removeClass('active');
            $($(this).data('tab')).addClass('active');


        }
    });
}

var _regClick = function () {
    $("#userReg").validate({
        wrapper: 'div',
        errorElement: 'div',
        rules: {
            "fullname": {
                required: true,
                rangelength: [4, 20]
            },
            "stateId": {
                required: true,
            },
            "districId": {
                required: true,
            },
            "email": {
                required: true,
                email: true
            },
            "mobileNo": {
                number: true
            },
            "accept": {
                required: true
            },
            "username": {
                required: true
            },
            "password": {
                required: true,
            },
            "cPassword": {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            "fullname": {
                required: 'Please enter your name.',
                rangelength: 'Enter name in valid range'
            },
            "stateId": {
                required: 'Please select state.',
            },
            "userCity": {
                required: "Please select city."
            },
            "email": {
                required: "Plase enter email",
                email: "Enter a valid email"
            },
            "mobileNo": {
                number: "Enter valid number"
            },
            "accept": {
                required: "Please agree"
            },
            "username": {
                required: "Enter username"
            },
            "password": {
                required: "Enter the password",
            },
            "cPassword": {
                required: "Please confirm password",
                equalTo: "Password didn't match"
            }
        },
        submitHandler: function (form) {
            /*var formElem = $(form).serializeArray(), i, formObj = {};
             var jsonEle = JSON.stringify(formElem);
             $.each(formElem, function () {
             formObj[this.name] = this.value;
             });
             
             $.ajax({
             type: 'POST',
             url: 'saveRegisterForm',
             data: formObj,
             datatype: 'json',
             encode: true
             })
             .done(function (data) {
             if (data == 'Success') {
             $('#userReg')[0].reset();
             $('#messageBox').removeClass('alert-danger');
             $('#messageBox').addClass('alert-success');
             $('#messageBox').html('Your Registred Successfully.');
             } else {
             $('#userReg')[0].reset();
             $('#messageBox').removeClass('alert-success');
             $('#messageBox').addClass('alert-danger');
             $('#messageBox').html('Your Registred Failed.');
             }
             })
             .fail(function (data) {
             console.log(data);
             });
             return false;*/
            form.submit();
        }
    });
}

var _loginClick = function () {
    $("#loginForm").validate({
        wrapper: 'div',
        errorElement: 'div',
        rules: {
            "username": {
                required: true,
                rangelength: [4, 20]
            },
            "password": {
                required: true,
            }
        },
        messages: {
            "username": {
                required: 'Please enter your name.',
                rangelength: 'Enter name in valid range'
            },
            "password": {
                required: "Enter the password",
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
}

var _forgotForm = function () {

    $("#loginForm").validate({
        wrapper: 'div',
        errorElement: 'div',
        rules: {
            "userName": {
                required: true,
                rangelength: [4, 20]
            }
        },
        messages: {
            "userName": {
                required: 'Please enter your name.',
                rangelength: 'Enter name in valid range'
            }

        },
        submitHandler: function (form) {
            var formElem = $(form).serializeArray(), i, formObj = {};
            var jsonEle = JSON.stringify(formElem);
            $.each(formElem, function () {
                formObj[this.name] = this.value;
            });

            $.ajax({
                type: 'POST',
                url: 'http://www.facebook.com',
                data: formObj,
                datatype: 'json',
                encode: true
            })
                    .done(function (data) {
                        console.leg(data);
                    })
                    .fail(function (data) {
                        console.log(data);
                    });
            return false;
        }
    });
}