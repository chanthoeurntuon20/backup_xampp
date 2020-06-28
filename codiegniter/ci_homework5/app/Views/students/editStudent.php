
<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
    <div class="container mt-5">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <div class="card">
                <div class="card-header text-center text-success "><h2>Update student</h2></div>
                <div class="card-body">
                    <form action="/student/update" method = "post"enctype="multipart/form-data">
                        <div class="form-group">
                            <label >Username :</label>
                            <input type="text" class="form-control"  name="name" value = "<?= $student['name']?>">
                        </div>
                        <div class="form-group">
                            <label >Email :</label>
                            <input type="email" class="form-control"  name="email" value = "<?= $student['email']?>">
                        </div>
                        <div class="form-group">
                            <label >Age:</label>
                            <input type="text" class="form-control" name="age" value = "<?= $student['age']?>">
                        </div>
                        
                        <div class="form-group">
                            <label >Profile:</label>
                            <input type="text" class="form-control"  name="province"value = "<?= $student['profile']?>">
                        </div>
                        <input type="hidden" name = "id" value = "<?= $student['id']?>">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
                
            </div>
            <div class="col-3"></div>
       </div>
    </div>
<?= $this->endSection() ?>