<div>
	
	<div class="student-profile">
		<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
		<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
		<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
		<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('#btn').click(function(){
		$('#para').slideUp();
	});
});
</script>
