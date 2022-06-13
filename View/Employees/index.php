<?php 
    while($row = mysqli_fetch_array($data)){
        echo $row['name'];
    }
?>
<div class="panel-heading">
	<h3 class="panel-title">Employees List</h3>
</div>
<div class="panel-body">
  <table class="table table-striped table-hover ">
    <thead>
		    <tr>
		      <th>Name</th>
		      <th>Category</th>
          <th>Edit</th>
          <th>Delete</th>
		    </tr>
		  </thead>
      <tbody>
      <?php while($row = mysqli_fetch_array($data)){ ?>
		  	<tr>
			    	<td><?php echo $row['name']; ?></td>
			    	<td><?php echo $row['category']; ?></td>
			    	<td><a class="btn btn-warning" href="<?php echo URL; ?>Employees/edit/<?php echo $row['id']; ?>">Edit</a>
						<a class="btn btn-danger" href="<?php echo URL; ?>Employees/delete/<?php echo $row['id']; ?>">Delete</a>
			    	</td>
			</tr>
			<?php } ?>
		  </tbody>
  </table>
</div>
