<?= $this->extend('layouts/layout')?>
<?php $this->section('content')?>

<div class="container">
    <div class="col-sm-8 ">
        <h1 class = "text-success text-center">Sign up</h1>

        <form action="/account/save" method = "post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name = "username" class= "form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name = "password" class= "form-control">
        </div>
        <div class="form-group">
            <label for="">Fullname</label>
            <input type="text" name = "fullname" class= "form-control">
        </div>
        <input type="submit" value = "Save" class = "btn btn-primary">
        <a href="/account">Login</a>
    </form>
    </div>
</div>
<?php $this->endSection();?>
