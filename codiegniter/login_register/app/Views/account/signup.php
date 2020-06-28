<?= $this->extend('layouts/header')?>
<?= $this->section('content') ?>
    <div class="container mt-5">
         <div class="row">
            <div class="col-12   col-md-6 offset-md-3 mt-5 pt-3 bg-white from-wrapper">
                <div class="container">
                    <h3> Sign up</h3>
                    <hr>
                    <form action="<?php site_url('account/save')?>" method = "post">
                        <div class="form-group">
                            <label for="email">Username:</label>
                            <input type="text" class="form-control"  name = "username" >
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name = "password" >
                        </div>
                        <div class="form-group">
                            <label for="pwd">Fullname:</label>
                            <input type="text" class="form-control" placeholder="Enter fullname" name = "fullname" >
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <input type="submit" class = "btn btn-warning" value = "Save">
                            </div>
                            <div class="col-12 col-sm-4">
                            <a href="account/index" >Login</a>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
         </div>
    </div>
<?= $this->endSection() ?>
