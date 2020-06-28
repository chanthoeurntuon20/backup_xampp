<?= $this->extend('layouts/header')?>
<?= $this->section('content') ?>
    <div class="container mt-5">
         <div class="row">
            <div class="col-12   col-md-6 offset-md-3 mt-5 pt-3 bg-white from-wrapper">
                <div class="container">
                    <h3 class = "text-info text-center">Login</h3>
                    <hr>
                    <form action="<?php site_url('account/index')?>" method= "post">
                        <div class="form-group">
                            <label for="email">Username:</label>
                            <input type="text" class="form-control" placeholder="Enter username" name = "username" >
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name = "password" >
                        </div>
                        
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <input type="submit" class = "btn btn-danger" value = "Login">
                            </div>
                            <div class="col-12 col-sm-8 text-right">
                                <a href="/account/signup">Sign up</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
         </div>
    </div>
<?= $this->endSection() ?>
