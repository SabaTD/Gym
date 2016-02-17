<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <title>Ajax</title>

<script type="text/javascript">
 //sdsdsd
 function get_text()
{

	var xmlhttp;
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("div1").innerHTML=xmlhttp.responseText;
        }
	  }
	xmlhttp.open("GET","ajax_action.php",true);
	xmlhttp.send();
}

</script>

</head>

<body>
<div id="div1">Static Text</div>
<input type="button" value="Go" onclick="get_text();" />
</body>
</html>