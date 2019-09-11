<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
     $("button").click(function(){

     	alert();
     });
    $("#box").mouseover(function(){

      $("#box").css({"background-color":"blue","height":"200px","width":"200px"});
      $("body").css({"background-color":"red"});
    })




    });	





	</script>
</head>
<body>
 <button>OK</button>
 <div id="box" style="height:100px; width:100px; background-color: yellow;"></div>
 <h1>Hello</h1>
</body>
</html>