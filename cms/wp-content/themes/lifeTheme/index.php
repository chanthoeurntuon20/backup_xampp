<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset ="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo("name");?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
    <header>
        <div class="container">
            <h1>
                <!-- get name of title -->
                <?php bloginfo('name'); ?>
                <!-- get information -->
                <span><?php bloginfo('description'); ?></span>
            </h1>
        </div>
    </header>
    <div class="container">
    <!-- get data from post -->
        <?php if(have_posts()): ?>
            <?php the_post(); ?>
            <h3><?php the_title();?></h3>
        <div class="main">  
        <!-- <p><?phtp> the_excerpt() or content();?> -->
            <p><?php the_excerpt();?></p>
        <?php else:?>
        <?php echo "the post no found";
        endif
        ?>
        </div>
    </div>
    <!-- display image to screen -->
    <?php if(has_post_thumbnail()):?>
    <div class="post-thumb">
    <?php the_post_thumbnail();?>
    </div>
    <?php else: echo "No post found";?>
    <?php endif;?>
    
</body>
</html>