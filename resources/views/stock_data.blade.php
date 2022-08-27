<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<input type="text" name="stock_indices" id="stock_indices">
<button id="stock">Get data</button>
<div id="table_dt">
	
</div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#stock').on('click',function(){
		var stock = $('#stock_indices').val();
    $.ajax({
  url: "{{url('/get_data')}}",
  type:"post",
  data: {stock : stock,_token : "{{ csrf_token() }}"},
  success: function(html){
    $('#table_dt').html(html.stock);
  }
});
});
  
});
</script>