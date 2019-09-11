<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				
				$.ajax({
					url : "call_rev_server.php",
					type : "get",
					success : function(rec){
						$("#tab").html(rec);
					}
				});

			});
		});
	</script>
</head>
<body>

<button>Save</button>
<table id="tab" border="1" cellspacing="0" align="center">
	
</table>
</body>
</html>