<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS only -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container">
		<div class="row">
		    <div class="col-12">
		        <h4>Expected Result</h4>
		        <div>&nbsp;</div>
		    </div>
		    <div class="col-md-4">
		        <form action="http://localhost/factorial/" method="POST" class="form-material">

		            <div class="form-group form-default form-static-label">
		                <input type="text" name="txt_num" class="form-control" placeholder="Enter Number">
		                <span class="form-bar"></span>
		                <label class="float-label">Number</label>
		            </div>


		            <div class="text-right">
		                <button type="submit" class="btn btn-success">
		                    calculate
		                </button>
		            </div>
		        </form>
		    </div>
		    <div class="col-md-4">
		        :: Result ::
		        <div id="factorial_result" style="font-size: 30px; font-weight: bold;">
		            0                        </div>
		    </div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	(function($){
		$(document).ready(function(){
			$('form').submit(function(e){
				e.preventDefault();
				var num = $(this).find('input[name=txt_num]').val(),
					output = 1;

				if(num <= 0){
					output = 1;
				}else{
					for(i=1;i<=num;i++){
						output = output*i;
					}
				}

				$('#factorial_result').text(output);
			});
		});
	})(jQuery);
</script>
</html>