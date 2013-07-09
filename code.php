<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Editor de codigo</title>
    </head>
<body> 
    <code class='jscode'>
    <script>
    var suggests = ["hello", "world", "styler", "font", "color=''", "world", "<div"];
    $("#exemplo").asuggest(suggests);
	</script>
</code>
	<br />
       <div style="font-size:9px;">Codigo</div>
<pre ><textarea id="exemplo" style="width: 700px; height: 200px;"></textarea></pre>         
<li>
   <div id="realTime">
   <iframe id="result"></iframe>
   </div>
</li>      
	</body>
</html>
