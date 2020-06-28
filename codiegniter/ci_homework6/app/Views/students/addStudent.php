
<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<div class="container">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
    <br>
    <p class = "text-danger">
        <?php if(isset($validation)) :?>
            <?= $validation->listErrors()?>
        <?php endif ;?> 
    </p>
    <div class="card ">
      <div class="card-header"><h1 class="text-warning text-center"> Add new student</h1></div>
      <div class="card-body">
            <form  action="save" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control" placeholder="Enter name"  name="name">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email"  name="email">
            </div>
            
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" placeholder="Enter age" name="age">
            </div>
            <div class="form-group">
                <label for="profile">Profile:</label>
                <input type="file" class="form-control" placeholder="Enter profile"  name="profile">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Register New</button>
            </form>
      </div>
    </div>
    </div>
    <div class="col-3"></div>
   </div>
    </div>
<?= $this->endSection() ;?>
