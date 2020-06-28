
<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
    <div class="container mt-5">
       <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <div class="card">
                <div class="card-header text-center text-success "><h2>Add new student</h2></div>
                <div class="card-body">
                    <form action="save" method = "post">
                        <div class="form-group">
                            <label >Username :</label>
                            <input type="text" class="form-control" placeholder="Enter username"name="name">
                        </div>
                        <div class="form-group">
                            <label >Email :</label>
                            <input type="email" class="form-control" placeholder="Enter email"name="email">
                        </div>
                        <div class="form-group">
                            <label >Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password"name="password">
                        </div>
                        <div class="form-group">
                            <label >Age:</label>
                            <input type="number" class="form-control" placeholder="Enter age"name="age">
                        </div>
                      
                        <div class="form-group">
                            <label >Province:</label>
                            <input type="text" class="form-control" placeholder="Enter province"name="province">
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block">Add student</button>
                    </form>
                </div>
            </div>
                
            </div>
            <div class="col-3"></div>
       </div>
    </div>
<?= $this->endSection() ?>