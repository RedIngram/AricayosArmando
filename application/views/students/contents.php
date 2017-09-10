<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">	
			<h1> Hello Bootstrap </h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4 bg-primary">
			<p class="lead">Menu</p>
		</div>

		<table border="1">
	<thead>
	<tr>
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

</div>
</div>
<div class="row">
<div class="col-md-12 text-center footer">
		Copyright
</div>
</div>	
</div>





