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
                    <div class="card-body">
                        <img src="images/<?= $student['profile']?>"  width="500" height="300">
                        <h4><?= $student['name']; ?></h4><br>
                        <?= $student['email']; ?>/ 
                        <span class = "badge badge-danger">Age =<?= $student['age']; ?></span>
                    <hr>
                    <div class="action" style = "">
                        <a href="student/remove/<?= $student['id']?>"  class = "text-danger">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                        </a>
                        <a href="student/edit/<?= $student['id']?>"  class = "text-info">
                            <i class="fas fa-pen" aria-hidden="true"></i>
                        </a>
                    </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
            <div class="col-3"></div> 
       </div>
    </div>
<?= $this->endSection() ?>