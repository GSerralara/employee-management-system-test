<?php $categories = $employees->currentCategories(); ?>
<div class="panel panel-success">
    <div class="panel-heading">
    <h3 class="panel-title">Add a new Employee</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputName" class="control-label">Employe Name</label>
                <input class="form-control" name="name" type="text" required>
            </div>
            <div class="form-group">
                <label for="inputCategory" class="control-label">Category</label>
                <select name="id_category" class="form-control">
                    <?php while($row = mysqli_fetch_array($categories)){ ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                    <?php } ?>
		        </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>
    </div>
</div>