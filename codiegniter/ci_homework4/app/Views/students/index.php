<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
    <div class="container mt-4">
    <a href="student/add" class = "btn btn-info btn-sm">Add Student</a>
    <hr>
        <h1 class = "text-center text-info">List All Students</h1>
       <div class="row">
            <div class="col-3 "></div>
            <div class="col-6 ">
             <?php  foreach( $students as $student) :?>
                <div class="card mt-4">
                    <div class="card-header">
                        <?= $student['name']; ?>
                    </div>
                    <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $student['email']; ?>
                            <span class="badge badge-success badge-pill">Email</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $student['age']; ?>
                            <span class="badge badge-warning badge-pill">Age</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $student['province']; ?>
                            <span class="badge badge-primary badge-pill">Province</span>
                        </li>
                    </ul>
                    <hr>
                    <a href="student/remove/<?= $student['id']?>"  class = "text-danger">
                        <i class="fas fa-trash" aria-hidden="true"></i>
                    </a>
                    <a href="student/edit/<?= $student['id']?>"  class = "text-info">
                        <i class="fas fa-pen" aria-hidden="true"></i>
                    </a>
                    </div>
                </div>
                <?php endforeach?>
            </div>
            <div class="col-3"></div> 
       </div>
    </div>
<?= $this->endSection() ?>