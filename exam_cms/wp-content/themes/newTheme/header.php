<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="header ">
        <div class="name ">
            <h3 class = "text-white "><?php  bloginfo('name')?></h3>
        </div>
        <div class="menus bg-info mt-5">
            <h3 class = "mt-2 text-white"><?php wp_nav_menu();?></h3> 
            <div class="search mt-4 ">
            <form action="<?php esc_url(home_url('/')); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="s" placeholder="Search..." style="width:400px;padding:5px;border-radius:5px;">
                    <button type="submit" class="btn btn-success">Search</button>
                </div>
                
            </form>
            </div>    
        </div>
    </div>

