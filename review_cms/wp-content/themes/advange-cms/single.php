<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review cms</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
    <header>
        <h1 ><?php bloginfo('name');?></h1>
        <?php  bloginfo('description')?>
    </header>
    <?php if(have_posts()):?>
        <?php while(have_posts()):?>
            <?php the_post();?>
               <h1><a href="<?php the_permalink()?>"><?php the_title();?></a></h1>
                <?php the_content();?>
        <?php endwhile?>
    <?php endif?>
    <?php ?>
</body>
</html>