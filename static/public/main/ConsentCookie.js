const abc = 'def';
window.dayscookieConsent = (function() {
    const consentCookieValue = 'argee';

    function consentWithCookies() {
        setCookie('days_cookie_consent', consentCookieValue, 7300);
        hideCookieDialog();
    }

    function hideCookieDialog() {
        $(".consent__cookie--panel").hide();
    }
    if (checkCookie('days_cookie_consent') == true) {
        hideCookieDialog();
    }
    $(".consent__cookie--accept").on('click', function() {
        consentWithCookies();
    });
    return {
        consentWithCookies: consentWithCookies,
        hideCookieDialog: hideCookieDialog
    };
})();