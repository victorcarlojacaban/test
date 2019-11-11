 /**
  * Set cookie
  */
function setCookie(cookieName,cookieValue, cookieExpire) {
    var exdate = new Date()

    exdate.setDate(exdate.getDate()+cookieExpire)
    document.cookie = cookieName + "=" + escape(cookieValue)+
    ((cookieExpire==null) ? "" : ";expires=" + exdate.toGMTString())
	location.reload()
}