const clearLoaderBar = () => {
    $("#loader-mainBar").hide('fast');
    $("#load-progress-mainbar").hide('slow');
}
const privacyPageClear = () => {
    clearLoaderBar();
    clearBlackScreen();
}
const privacyMainClear = () => {
    clearLoaderBar();
    addClassAfterClear();
    clearBlackScreen();
}
const addClassAfterClear = () => {
    $(".privacy_policy_list_chart").addClass('mt-3');
}
const clearBlackScreen = () => {
    $(".pfill1").hide('slow');
    $(".pfill2").hide('fast');
}

(function() {
    const path = window.document.location.pathname;
    const arrayprivacypage = [
        "/days/readableContent/policy/term/read",
        "/days/readableContent/policy/privacy/read",
        "/days/readableContent/policy/cookie/read",
        "/days/readableContent/policy/disclaimer/read",
        "/days/readableContent/policy/returnrefund/read",
        "/days/readableContent/policy/eula/read"
    ];
    const arrayprivacyMain = "/days/readableContent/policy/read";
    if (testprivacyURL() == true) {
        privacyPageClear();
    } else if (path == arrayprivacyMain) {
        privacyMainClear();
    } else {

    }

    function testprivacyURL() {
        let a = false;
        arrayprivacypage.findIndex(function(i) { if (i == window.document.location.pathname && a == false) { a = true; } })
        return a;
    }
})();