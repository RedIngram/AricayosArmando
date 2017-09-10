<div class="col-md-4 col-xs-4 col-sm-4 column2">

	<table class="table table-striped table_front">
	<thead>
	<tr class="info">
		<th>Course Id no.</th>
		<th>Course Name</th>
		<th>Course description</th>
		<th>ACTION</th>
	</tr>
	</thead>
	<tbody>
		<?php	
			foreach($course as $s)
			{
				echo ' <tr>
							<td>'.$s['idno'].'</td>
							<td>'.$s['lname'].'</td>
							<td>'.$s['fname'].'</td>
							<td>
								<a href="'.('students/profile/'.$s['idno']).'">view</a>   
								<a href="">edit</a>    
								<a href="">delete</a>   
							 </td>
						</tr>';
			}
		?>
	</tbody>
	</table>
	<div class="">
				<a href="add_course" class="btn btn-danger btn-md button">Add Course</a>
	</div>
</div>
</div>
