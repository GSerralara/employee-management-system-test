<?php $categories = $employees->currentCategories(); ?>
<div class="panel-heading">
	<h3 class="panel-title">Edit Employee <?php echo $data['name']; ?><hr></h3>
</div>
<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputName" class="control-label">Employee Name</label>
        <input class="form-control" value="<?php echo $data['name']; ?>" name="name" type="text" required>
    </div>
    <div class="form-group">
        <label for="inputCategory" class="control-label">Category (Current: <?php echo $data['category']; ?> )</label>
        <select name="id_category" class="form-control">
            <?php while($row = mysqli_fetch_array($categories)){ ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
            <?php } ?>
		</select>
    </div>
    <input value="<?php echo $data['id']; ?>" name="id" type="hidden" required>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Editar</button>
        <button type="reset" class="btn btn-warning">Borrar</button>
    </div>
</form>