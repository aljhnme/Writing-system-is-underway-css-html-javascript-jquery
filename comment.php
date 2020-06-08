<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").keyup(function(){
  	  var input=$(this).val();
      $("#text").html(input);
  });
});
</script>
</head>
<body>

Enter your name: <input type="text">
<div id="text">
	
</div>
</body>
</html>