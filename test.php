<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>伸缩形的菜单</TITLE>
</HEAD>
<BODY>
<table width="100%">
<tr id="main"><td  bgcolor="#F6FFEC"><strong><a  style="cursor:hand;"title="etststst">网站源码</a></strong></td>
</tr>
<tr id="sub" style="display:none;"><td><table width="300" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><ul>
<li><a href="#">ASP</a></li>
</ul></td>
</tr>
<tr>
<td><ul>
<li><a href="#">PHP</a></li>
</ul></td>
</tr>
<tr>
<td><ul>
<li><a href="#">ASP.NET</a></li>
</ul></td>
</tr>
</table></td>
</tr>
<tr id="main"><td><a href="#">编程源码</a></td>
</tr>
<tr id="sub" style="display:none;"><td><table width="300" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>vb</td>
</tr>
<tr>
<td>VC</td>
</tr>
<tr>
<td>DELPHI</td>
</tr>
<tr>
<td>PB</td>
</tr>
</table>
</td>
</tr>
<tr id="main"><td><a href="#">前端脚本</a></td>
</tr>
<tr id="sub" style="display:none;"><td>
<table width="300" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>jQuery</td>
</tr>
<tr>
<td>prototype</td>
</tr>
<tr>
<td>ext</td>
</tr>
</table>
<tr id="main"><td><a href="#">网页素材</a></td>
</tr>
<tr id="sub" style="display:none;"><td>
<table width="300" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>Tab</td>
</tr>
<tr>
<td>Menu</td>
</tr>
</table>
</td>
</tr>
</table>
<script for="main" event="onclick">
for(var i=0; i<sub.length; i++){
if (main[i] == this) sub[i].style.display = sub[i].style.display == '' ? 'none' : '';
else sub[i].style.display = 'block';
}
</script>
</BODY>
</HTML><br /><center>如不能显示效果，请按Ctrl+F5刷新本页，更多网页代码：<a href='http://www.veryhuo.com/' target='_blank'>http://www.veryhuo.com/</a></center>