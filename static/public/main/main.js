//Days Web App
"use strict";
let isLogin; //isLogged
let loginCred = ""; //login Credential
let apiUrl = "./api/"; //Apiurl
//Change Countdown type | ended in the past(Previous) | not ended or repeat every specified time(Upcoming)
$("#currentType").on('click', function() {
    if ($(this).attr("data-current") == "previous") {
        $(this).attr("data-current", "upcoming");
        $(this).empty().append("Upcoming");
    } else if ($(this).attr("data-current") == "upcomping") {
        $(this).attr("data-current", "previous");
        $(this).empty().append("Previous");
    } else {
        $(this).attr("data-current", "previous");
        $(this).empty().append("Previous");
    }
});
$(document).ready(function() {
    loadMain();
});

function addWidthLoaderBar(data) {
    let start_wdh = parseFloat(data);
    document.getElementById('loader-mainBar').style.width = start_wdh + "%";
    $("#loader-mainBar").attr('aria-valuenow', start_wdh);
}
const autoAddSlideLoaderBar = (toValue) => {
    $("#loader-mainBar").show();
    $("#load-progress-mainbar").show('fast');
    addWidthLoaderBar(toValue);
    setTimeout(function() {
        clearLoaderBar();
    }, 1000);
}
const loadMain = async() => {
    await onLoadDoc();
    // await $(".outtercardMargin").addClass('mt-3');
    await $(".pfill1").hide('slow');
    await $(".pfill2").hide('fast');
    await autoAddSlideLoaderBar(100);
}

//First Load Function
function onLoadDoc() {
    let current_type = $("#currentType");
    current_type.empty().append(current_type.attr("data-current"));
    checkLogin();
    afterCheckLogin();
    switchsisuto($('#signPrefer').attr('data-prefer'));
    autoAddSlideLoaderBar(50);
}
//Check User logged in or not. Return Boolean True or False.
const checkLogin = () => {
        if (checkCookie("is_login") == true) { //checkCookie Function from cookie.js
            isLogin = true;
            loginCred = getCookie('credentialLogin'); //getCookie Function from cookie.js
        } else {
            isLogin = false;
        }
    }
    //Doing after Logins
const loggedPermanent = $("#header-permanent-days");
const notloggedFormTitle = $("#header-permanent-notlogin");
const headerDays = $(".header-days");
const formWork = $("#form_login");
const applicationWork = $("#application");
const titleformType = $(".form_application_type");
const typingForm = $(".form_classApplication");
const afterCheckLogin = () => {
    if (isLogin == true) {
        loggedPermanent.show();
        notloggedFormTitle.hide();
        applicationWork.show();
        formWork.hide();
    } else {
        headerDays.addClass("activeTabLogin");
        applicationWork.hide();
        formWork.show();
    }
}

//signin signup current page
let currentsisuPage = 'signin';
//Signin signup switch
const sisuCollection = [$(".navLoginClick").children("li.nav-item").children("a.sign-in-tab"), $(".navLoginClick").children("li.nav-item").children("a.sign-up-tab")];
sisuCollection[0].on('click', function() {
    sisuConverter(sisuCollection[0], 0);
}).parent().on("click", function() {
    sisuConverter(sisuCollection[0], 0);
});
sisuCollection[1].on("click", function() {
    sisuConverter(sisuCollection[1], 1);
}).parent().on("click", function() {
    sisuConverter(sisuCollection[1], 1);
});
const termDisplaySwitch = (eleCount) => {
    if (eleCount == 0) {
        $(".termDisplay").hide();
        $(".underterm").removeClass('mt-2');
    } else {
        $(".termDisplay").show();
        $(".underterm").addClass('mt-2');
    }
}
const idonthaveAeleSwitch = (eleCount) => {
    if (eleCount == 0) {
        $('.signup_aele').hide();
        $(".signin_aele").show();
    } else {
        $('.signup_aele').show();
        $(".signin_aele").hide();
    }
}
const actionFormFirstSwitch = (eleCount) => {
    let si = $(".action_first_form[data-form-type=signin]");
    let su = $(".action_first_form[data-form-type=signup]");
    if (eleCount == 0) {
        su.hide();
        si.show();
    } else {
        su.show();
        si.hide();
    }
}

function sisuConverter(thisElement, eleCount) {
    idonthaveAeleSwitch(eleCount);
    termDisplaySwitch(eleCount);
    actionFormFirstSwitch(eleCount);
    if (thisElement.hasClass('active')) {} else {
        thisElement.addClass('active');
        if (eleCount == 0) {
            sisuCollection[1].removeClass('active');
            currentsisuPage = "signin";
            titleformType.empty().append("Sign In");
            window.history.replaceState('"https://nawin.com"', 'Days Web App', '/days/main!signin');
            $(".form_application_type_btn").empty().append("<i class='fal fa-sign-in'></i> Sign In");
        } else {
            sisuCollection[0].removeClass('active');
            currentsisuPage = "signup";
            titleformType.empty().append('Sign Up');
            window.history.replaceState('"https://nawin.com"', 'Days Web App', '/days/main!signup');
            $(".form_application_type_btn").empty().append("<i class='fal fa-user-plus'></i> Sign Up");
        }
    }
    $(".form_application_type_btn_trash").attr("data-type-action", currentsisuPage);
    $(".form_application_type_btn").attr("data-type-action", currentsisuPage);
}

const switchsisuto = (type) => {
        if (type == "signin") {
            sisuConverter(sisuCollection[0], 0);
        } else if (type == 'signup') {
            sisuConverter(sisuCollection[1], 1);
        }
    }
    //End Signin signup switch

//Signin Signup Act
$(".form_application_type_btn").on("click", function() {
    let formDetail = {};
    $('.action_first_form[data-form-type=' + $(this).attr('data-type-action') + ']').children('form').serialize().split('&').forEach(function(i, k) {
        let splitDetail = i.split("=");
        formDetail[splitDetail[0]] = splitDetail[1];
    });
    if ($(this).attr('data-form-type') == 'signin') {
        sisuRun('signin', formDetail, new Date().getTime());
    } else if ($(this).attr('data-form-type') == 'signup') {
        sisuRun('signup', formDetail, new Date().getTime());
    }
});
const checkProfileAvailable = async(eleval, ele) => {
    let value = await eleval;
    let co = false;
    await $.post({
        url: "users/" + value + "/check",
        data: {},
        success: function(data) {
            if (data == "NOT_EXIST") {
                co = true;
            } else {
                co = false;
            }
        }
    });
    return await [co, ele];
}

let respCheck = {};
respCheck.profile = false;
respCheck.username = false;
respCheck.email = false;
respCheck.chkpassword = false;
respCheck.password = false;

//CheckProfileAvailable
$("#profile-url").on("input", function() {
    checkProfileAvailable($(this).val(), $(this)).then(res => res).then(function(res) {
        if (res[0] == true) {
            respCheck.profile = true;
            res[1].removeClass("is-invalid").addClass("is-valid");
        } else if (res[0] == false) {
            respCheck.profile = false;
            res[1].removeClass("is-valid").addClass("is-invalid");
        }
    });
});

//Check Username Length
$("#username_input_signup").on("input", function() {
    if ($(this).val().split("").length >= 3) {
        respCheck.username = true;
        $(this).addClass("is-valid").removeClass("is-invalid");
    } else {
        respCheck.username = false;
        $(this).removeClass("is-valid").addClass("is-invalid");
    }
});

//Email Validate
$("#email_input_signup").on("input", function() {
    let emailVal = $(this).val();
    if (emailVal.match(regexpTestEmail) != null) {
        if (emailVal == emailVal.match(regexpTestEmail)[0]) {
            respCheck.email = true;
            $(this).addClass("is-valid").removeClass("is-invalid");
        } else {
            respCheck.email = false;
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    } else {
        respCheck.email = false;
        $(this).removeClass("is-valid").addClass("is-invalid");
    }
});
//Password validate
$("#password_input_signup").on('input', function() {
    let passwordVal = $(this).val();
    if (passwordVal.match(regexpTestPassword) != null) {
        if (passwordVal == passwordVal.match(regexpTestPassword)[0]) {
            respCheck.password = true;
            $(this).addClass("is-valid").removeClass("is-invalid");
        } else {
            respCheck.password = false;
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    } else {
        respCheck.password = false;
        $(this).removeClass("is-valid").addClass("is-invalid");
    }
});
//ChkPassword Validate
$("#passwordconfirm_input_signup").on("input", function() {
    if ($(this).val() == $("#password_input_signup")) {
        respCheck.chkpassword = true;
        $(this).addClass("is-valid").removeClass("is-invalid");
    } else {
        respCheck.chkpassword = false;
        $(this).removeClass("is-valid").addClass("is-invalid");
    }
})