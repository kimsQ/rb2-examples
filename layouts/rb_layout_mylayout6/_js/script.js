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
