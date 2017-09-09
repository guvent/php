<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">

 function yap() {	document.getElementById('ffile').click() }
function kap(gid) {	 var ggid = document.getElementById(gid).value;	alert (ggid); 	}
</script>
</head>

<body>

<input onchange="kap(this.id)" style="position:absolute;visibility:hidden;" id="ffile" type="file" />

<br/>

<textarea onclick="yap()" id="txtr" cols="70" rows="20"></textarea>
</body>
</html>