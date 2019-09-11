<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$("button").click(function(){
				$.ajax({
					url	: "call_recieve_server.php",
					type : "get",
					success : function(res){
						$("#tab").html(res);
					}
				})
			})
		})


	
	</script>
</head>
<body>
  <button>Save</button>
  <table id="tab" border="1" cellspacing="0"></table>
</body>
</html>