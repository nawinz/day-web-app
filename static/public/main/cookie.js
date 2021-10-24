//Cookie Management V.1
const COOKIE_DOMAIN = 'domain=nawin.com'
const setCookie = (cookie, cookieVal, Expdays) => {
    let d = new Date();
    d.setTime(d.getTime() + (Expdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cookie + "=" + cookieVal + ";" + expires + ";" + COOKIE_DOMAIN + ";path=/";
    return checkCookie(cookie);
}
const getCookie = (cookie) => {
    let ckn = cookie + "=";
    let DocCookie = document.cookie.split(";");
    for (var i = 0; i < DocCookie.length; i++) {
        let c = DocCookie[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(ckn) == 0) {
            return c.substring(ckn.length, c.length);
        }
    }
    return "";
}
const removeCookie = (cookie) => {
    let isRemoved = false;
    let r = checkCookie(cookie);
    if (r == true) {
        isRemoved = false;
    } else {
        isRemoved = true;
    }
    if (isRemoved == true) {
        return isRemoved;
    }
    let cr = checkCookie(cookie);
    if (cr == true) {
        setCookie(cookie, "", -1000);
    }
    let rc = checkCookie(cookie);
    if (rc == true) {
        isRemoved = false;
    } else {
        isRemoved = true;
    }
    return isRemoved;
}
const deleteCookie = (cookie) => {
    return removeCookie(cookie);
}
const checkCookie = (cookie) => {
    var responseCookie = "";
    responseCookie = getCookie(cookie);
    if (responseCookie != "") {
        return true;
    } else {
        return false;
    }
}