<?= $this->extend('layouts/layout')?>
<?php $this->section('content')?>

<div class="container">
    <div class="col-sm-8 ">
        <h1 class = "text-success text-center">Login from</h1>
        <?= isset($message) ? $message : ''?>
        <form action="/account/login" method = "post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name = "username" class= "form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name = "password" class= "form-control">
        </div>
        
        <input type="submit" value = "Login" class = "btn btn-info">
        <a href="account/signup">Sign up</a>
    </form>
    </div>
</div>
<?php $this->endSection();?>
