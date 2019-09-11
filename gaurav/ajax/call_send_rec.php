<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
           $("button").click(function(){
           	 var a = $("#name").val();
           	 var b = $("#fee").val();
           	 $.ajax({
           		url : "call_send_rec_server.php",
           		type : "post",
           		data : {demo1: a , demo2 : b },
           		success : function(rec){

           			$("#tabs").html(rec);
           			$("#name").val("");
           			$("#fee").val("");
           		}

           	
           	 })
           	 
           });
		});
		function getAll()
		{
			$.ajax({
				url : "call_recieve_server.php",
				type : "get",
				success : function(rec){
					$("#tabs").html(rec);
					// alert(rec);
				} 
			})
		}

        getAll();
	</script>
</head>
<body>
<div align="center">
Name<input type="text" id="name"/>
<br>
<br>
Fee<input type="text" id="fee"/>
<br>
<br>
<button>Save</button>
<br>
</div>
<div align="center" style=" background-color:green; margin: 0 auto; width: 300px;">
<table border="1" cellspacing="0" cellpadding="10" id="tabs"></table>
</div>
</body>
</html>