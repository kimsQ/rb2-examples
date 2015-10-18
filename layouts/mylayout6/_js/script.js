function layoutLogCheck(f)
{
	if (f.id.value == '')
	{
		alert('아이디나 이메일주소를 입력해 주세요.');
		f.id.focus();
		return false;
	}
	if (f.pw.value == '')
	{
		alert('패스워드를 입력해 주세요.');
		f.pw.focus();
		return false;
	}
	getIframeForAction(f);
	return true;
}


/*!
 * IE10 viewport hack for Surface/desktop Windows 8 bug
 * http://getbootstrap.com/getting-started/#support-ie10-width
 */

(function () {
  'use strict';

  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
      document.createTextNode(
        '@-ms-viewport{width:auto!important}'
      )
    )
    document.querySelector('head').appendChild(msViewportStyle)
  }

})();
