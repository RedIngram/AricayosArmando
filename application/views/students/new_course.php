
		<div class="col-md-8 content">
		<p class="lead">Add new student</p>
				<form role="form" method="POST">
					<div class="form-group">
						<label for="idno">Course id:</label>
						<input type="text" class="form-control" id="idno" name="idno"/>
					</div>
						
					<div class="form-group">
						<label for="lname">Course Name:</label>
						<input type="text" class="form-control" id="lname" name="lname"/>
					</div>

						<div class="form-group">
						<label for="fname">Description:</label>
						<input type="text" class="form-control" id="fname" name="fname"/>
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



