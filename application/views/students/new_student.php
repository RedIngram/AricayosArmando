
		<div class="col-md-8 content">
		<p class="lead">Add new student</p>
				<form role="form" method="POST">
					<div class="form-group">
						<label for="idno">ID No.:</label>
						<input type="text" class="form-control" id="idno" name="idno"/>
					</div>
						
					<div class="form-group">
						<label for="lname">Last Name:</label>
						<input type="text" class="form-control" id="lname" name="lname"/>
					</div>

						<div class="form-group">
						<label for="fname">First Name:</label>
						<input type="text" class="form-control" id="fname" name="fname"/>
					</div>
		
						<div class="form-group">
						<label for="mname">Middle Name:</label>
						<input type="text" class="form-control" id="mname" name="mname"/>
					</div>

						<div class="form-group">
						<label for="course">course:</label>
						<select class="form-control" id="course" name="course">
						<option>Please select</option>
						<option value="BSIT">BSIT</option>
						<option value="BSCS">BSCS</option>
					</div>
					
					<div class="form-group">
						<label for="sex">Sex:</label>
						<input type="radio" class="" id="sex" name="sex" value="M"/>Male
						<input type="radio" class="" id="sex" name="sex" value="F"/>Female
					</div>
					
					<div class="form-group">
					<a href="../boots" >
					<button type="submit" class="btn btn-primary">
						SAVE
					<span class="glyphicon glyphicon-save"></span>
					</button>
					</a>
						
				</form>
					
			<a href="../boots" class="btn btn-danger btn-md">Back</a>
		</div>
		</div>
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star na si CHAY.
		</div>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = '<?php echo '../boots' ?>';
</script>
<?php
}

?>



