<?php include 'C:\wamp64\www\ArmandoAricayos\application\views\include\header1.php' ?>
	
	<div class="col-md-4 col-xs-4 col-sm-4 column2">
		<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
		<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
		<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
		<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
	
	<a href="../../boots" class="btn btn-danger btn-md">Back</a>
	</div>
<?php include 'C:\wamp64\www\ArmandoAricayos\application\views\include\footer.php' ?>
