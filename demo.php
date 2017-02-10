<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
	<button class="id" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Click</button>
	<span class="del" class="glyphicon-minus">xoa</span>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
	<script type="text/javascript" src='js/jquery-3.1.1.min.js'></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.id').on("click", "button.id", function(){          
		        $(this).fadeOut(1000);      
		    }); 
		});
	</script>

</body>
</html>