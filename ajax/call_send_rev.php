<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					url : "call_send_rev_server.php",
					type : "post",
					success : function(rec){
						// alert(rec);
						$("#tab").html(rec);
						$("#name").val("");
						$("#fee").val("");
					}
				})

			});
		});

		function getAll()
		{
			$.ajax({
				url : "call_rev_server.php",
				type : "get",
				success : function(rec){
					$("#tab").html(rec);
				}
			})
		}

		getAll();

	</script>
</head>
<body>
<div style="margin: 50px auto; width:400px; text-align: center; background-color: #CCC; padding: 10px;">
	Name <input type="text" id="name" />
	<br />
	<Br />
	Fee <input type="text" id="fee"/>
	<Br />
	<Br />
	<button>Save</button>
	<br />
	<table id="tab" border="1" cellspacing="0" align="center"></table>
</div>
</body>
</html>