
<?= $this->extend('layouts/layout')?>

<?= $this->section('container')?>
<div class="container mt-3">
<h3 class = "text-center text-success">Add Mobile</h3>

<div class="col-md-12">
    <form method = "POST" action="<?= site_url('mobile/insert')?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name = "name" class = "form-control">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name = "price" class = "form-control">
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <input type="checkbox" name = "status">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description"  cols="20" rows="5" class = "form-control">
                </textarea>
            </div>
            <input type="submit" value = "Add " class = "btn btn-warning ">
            <a href="<?= site_url('mobile/')?>" class = "btn btn-dark ">Cancel</a>
           
    </form>
</div>

</div>

<?= $this->endSection()?>