<?php error_reporting(0);?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
	<form action="" method="post">
		<?php $n=1;?>
		<input type="text" name="name[]" placeholder='<?php echo "Name of Teacher No ".$n;?>' />
		<input type="text" name="email[]" placeholder='<?php echo "Email of Teacher No ".$n++;?>'/><br/>

		<input type="text" name="name[]" placeholder='<?php echo "Name of Teacher No ".$n;?>' />
		<input type="text" name="email[]" placeholder='<?php echo "Email of Teacher No ".$n++;?>' /><br/>

		<input type="text" name="name[]" placeholder='<?php echo "Name of Teacher No ".$n;?>' />
		<input type="text" name="email[]" placeholder='<?php echo "Email of Teacher No ".$n++;?>' /><br/>
		<input type="submit" name="submit" />
	</form>
	<?php
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];

			foreach( $name as $v ) {
				print $v."<br/>";
			}

			foreach( $email as $v ) {
				print $v."<br/>";
			}
		}
	?>
	<form method="post" action="">
	  <input id="target" type="number" name="number" min="0" placeholder="Enter Teacher Number">
	  <div id="destination"></div>
	  <input type="number" name="tb" placeholder="Enter Total Batch Number" /><br/>
	  <input type="number" name="mst" placeholder="Enter Most Senior Batch No" /><br/>
	  <input type="submit" name="tnumber" value="Add Teacher" />
	</form>
	<?php 
		if(isset($_POST['teachers'])){
			$teachers=$_POST['teachers'];
			foreach($teachers as $t)
				echo "<p>".$t."</p>";
		}
	?>
	<script type="text/javascript">
		$( "#target" ).change(function() {
			var n=$('#target').val();
			$("#destination").empty();
			for(i=0;i<n;i++)
				$("#destination").append("<label>Teacher No - "+i+" : </label><input type='text' name='teachers[]' placeholder='Enter Name' required='' /><br/>");  
		});
	</script>
</body>
</html>