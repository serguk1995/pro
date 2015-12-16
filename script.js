function setDynCSS(url)
{
if (!arguments.length)
{
url = (url = document.cookie.match(/\bdyncss=([^;]*)/)) && url[1];
if (!url) return '';
}
document.getElementById('dyncss').href = url;
var d = new Date();
d.setFullYear(d.getFullYear() + 1);
document.cookie = ['dyncss=', url, ';expires=', d.toGMTString(), ';path=/;'].join('');
return url;
}
setDynCSS();