<?php
	include('conn.php');
	if(isset($_POST['fetch']))
	{
		?>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
			<tbody>
            <?php
				$query=$conn->query("select * from `member`");
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><span id="first<?php echo $row['memberid']; ?>"><?php echo $row['firstname']; ?></span></td>
						<td><span id="last<?php echo $row['memberid']; ?>"><?php echo $row['lastname']; ?></span></td>
						<td>
							<a style="cursor:pointer;" class="btn btn-warning edit" data-id="<?php echo $row['memberid']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['memberid']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						</td>
					</tr>
					<?php
				}
 
			?>
			</tbody>
		</table>
		<?php
	}
    ?>