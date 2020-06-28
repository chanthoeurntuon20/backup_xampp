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
        <a href=""><?php wp_nav_menu();?></a>
    </header>
    <?php if(have_posts()):?>
        <?php while(have_posts()):?>
            <?php the_post();?>
            <a href="<?php the_permalink()?>"><?php the_title();?></a>
                <h4><?php the_author();?></h4>
                <?php the_excerpt();?>
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail();?><br>
                    <?php else : echo "Not found!!"?>
                    <?php endif?>
        <?php endwhile?>
    <?php endif?>
    <?php ?>
</body>
</html>