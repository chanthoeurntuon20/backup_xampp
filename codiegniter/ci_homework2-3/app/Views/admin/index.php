    
    <?= $this->extend('layouts/layout');?>
    <?= $this->section('content')?>
    <h1 class = "text-info"> Admin default views </h1> 
      <div class="container">
            <table class = "table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($userData as $user) :?>
                        <tr>
                            <td><?= $user['name']?></td>
                            <td><?= $user['age']?> </td>
                            <td><?= $user['email']?></td>
                            <td>
                                <a href="/admin/delete/<?= $user['id']?>" class = "text-danger"><i class="fa fa-trash" aria-hidden="true"></i></i></i></a>
                            </td>
                        </tr>
                    <?php endforeach?>
                   
                </tbody>
            </table>
      </div>
    <?= $this->endSection() ?>
    