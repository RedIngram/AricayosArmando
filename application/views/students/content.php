

<div class="col-md-4 col-xs-4 col-sm-4 column2">

	<table class="table table-striped table_front">
	<thead>
	<tr class="info">
		<th>ID NO.</th>
		<th>LAST NAME</th>
		<th>FIRST NAME</th>
		<th>MIDDLE NAME</th>
		<th>COURSE</th>
		<th>SEX</th>
		<th>ACTION</th>
	</tr>
	</thead>
	<tbody>
		<?php
			foreach($students as $s)
			{
				echo ' <tr>
							<td>'.$s['idno'].'</td>
							<td>'.$s['lname'].'</td>
							<td>'.$s['fname'].'</td>
							<td>'.$s['mname'].'</td>
							<td>'.$s['course'].'</td>
							<td>'.$s['sex'].'</td>
							<td>
								<a href="'.base_url('students/profile/'.$s['idno']).'">view</a>   
								<a href="">edit</a>    
								<a href="">delete</a>   
							 </td>
						</tr>';
			}
		?>
	</tbody>
	</table>
	<div class="">
				<a href="boots/add_student" class="btn btn-danger btn-md button">New Student</a>
	</div>
</div>
</div>
