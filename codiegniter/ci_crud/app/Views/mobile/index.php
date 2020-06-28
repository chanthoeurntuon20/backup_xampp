<?= $this->extend('layouts/layout')?>

<?= $this->section('container')?>
<div class="container mt-3">
<h3 class = "text-info text-center h1 mt-5">Mobile List</h3>
<!-- mobile/add = route on broswer -->
<a href="<?= site_url('mobile/add')?>" class = "btn btn-primary btn-sm">Add new</a>
<table class = "table table-bordered mt-3">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Status</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php if($mobiles): ?>
           <?php foreach($mobiles as $mobile) : ?>
            <tr>
                <td><?= $mobile['id']?></td>
                <td><?= $mobile['name']?></td>
                <td><?= $mobile['price']?></td>
                <td><?= $mobile['status'] ? 'show' : 'hide' ?></td>
                <td><?= $mobile['description']?></td>
                <td>
                <a href="<?= site_url('mobile/edit/'.$mobile['id'])?>" class = "btn btn-info btn-sm">Update</a>
                <!-- it will call to function if remove are the same function name -->
                <a href="<?= site_url('mobile/remove/'.$mobile['id'])?>" class = "btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach?>
    <?php endif?>
    
</table>
</div>

<?= $this->endSection()?>