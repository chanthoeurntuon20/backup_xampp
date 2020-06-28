
<?= $this->extend('layouts/layout')?>

<?= $this->section('container')?>
<div class="container mt-3">
<h3 class = "text-center text-success">Add Mobile</h3>

<div class="col-md-12">
    <form method = "POST" action="<?= site_url('mobile/update')?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name = "name" class = "form-control" value = "<?= $mobile['name']?>">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name = "price" class = "form-control" value = "<?= $mobile['price']?>">
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <input type="checkbox" name = "status" <?= $mobile['status']? 
                'checked = "checked"' : ''?>>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description"  cols="20" rows="5" class = "form-control"><?= $mobile['description']?>
                </textarea>
            </div>
            <input type="submit" value = "Save" class = "btn btn-warning ">
            <a href="<?= site_url('mobile/')?>" class = "btn btn-dark ">Cancel</a>
            <input type="hidden" name = "id" value = "<?= $mobile['id']?>">
           
    </form>
</div>

</div>

<?= $this->endSection()?>