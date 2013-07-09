<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dev - php</title>
    <link href="css/config.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>   
    <script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.mouse.js"></script>
	<script src="ui/jquery.ui.sortable.js"></script>
	<script src="ui/jquery.ui.tabs.js"></script>
	<link rel="stylesheet" href="js/jquery-ui-1.10.3.custom/development-bundle/demos/demos.css">  
    <script type="text/javascript" src="js/jquery.a-tools-1.4.1.js"></script>
    <script type="text/javascript" src="js/jquery.asuggest.js"></script>
	<script type="text/javascript" src="js/cod.js"></script> 
      	<script>
	$(function() {
		var tabs = $( "#tabs" ).tabs();
		tabs.find( ".ui-tabs-nav" ).sortable({
			axis: "x",
			stop: function() {
				tabs.tabs( "refresh" );
			}
		});
	});
	</script>
      	<script>
	$(function() {
		var tabs = $( "#tabs1" ).tabs();
		tabs.find( ".ui-tabs-nav" ).sortable({
			axis: "x",
			stop: function() {
				tabs.tabs( "refresh" );
			}
		});
	});
	</script>
        
<script type='text/javascript'>
    $(document).ready(function(){
        $(".jscode").each(function(){
            eval($(this).text());
        });
    });
</script>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2">    </td>
  </tr>
  <tr>
    <td colspan="2" valign="top">
    
    
    <div id="tabs">
<ul>
<li><a href="#base">Basico</a></li>
<li><a href="#form">forms</a></li>
<li><a href="#html">html</a></li>
</ul>
<div id="base">
<p>

		<a href="#b" class="buttons">[b]</a>
</p>
</div>
<div id="html">
<p>
			<a href="#b" class="buttons">[b]</a>
            <a href="#i" class="buttons">[i]</a>
            <a href="#u" class="buttons">[u]</a>
            <a href="#p" class="buttons">[p]</a>
            <a href="#h1" class="buttons">[h1]</a>
            <a href="#h2" class="buttons">[h2]</a>
            <a href="#h3" class="buttons">[h3]</a>
            <a href="#br" class="buttons">[br]</a>
            <a href="#hr" class="buttons">[hr]</a>
            <a href="#img" class="buttons">[img]</a>
            <a href="#url" class="buttons">[url]</a>
            <a href="#div" class="buttons">[div]</a></p>
</div>
<div id="form">
<p>
<a href="#input" class="buttons">[input]</a>

</p>
</div>
</div>    </td>
  </tr>
  <tr>
    <td width="11%"><?php include'query.php'; ?></td>
    <td width="89%" valign="top">  
    
     <div id="tabs1">
<ul>
<li><a href="#db"><img src="icons/database_lightning.png" border="0" align="absmiddle" /> DB</a></li>
<li><a href="#qr">Query</a></li>
<li><a href="#conf">Conf</a></li>
</ul>
<div id="db">
<p></p>
</div>
<div id="qr">
<p>

</p>
</div>
<div id="conf">
<p>
<a href="#input" class="buttons">[input]</a>

</p>
</div>
</div>   </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>