<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
<header>
<div class="container">
<h1>
<?php bloginfo('name');?>
</h1>
<span><?php bloginfo('description');?></span>
</div>
<ul>
    <li>
        <a href=""><?php wp_nav_menu();?></a>
        
    </li>
</ul>
</header>
    <div class="container">
    <?php if(have_posts()) : ?>
            <?php while(have_posts()): ?>
            <!-- array in post (it appear the last post) -->
            <?php the_post();?>
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
            <?php 
                $caters = get_the_category();
                $cate = "";
                if($caters){
                    foreach($caters as $cater){
                        $cate = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                    }
                }
                echo $cate;
            ?>
           
            <?php the_excerpt();?>  
        <?php endwhile; ?>
        <?php else:?>
    <?php echo "the post no found, so please post your information!";
    endif;
    ?>
    </div>
    
       <div class="side">
        <?php if(is_active_sidebar('sidebar')):;?>
                <?php dynamic_sidebar('sidebar'); ?>
                <?php else : "Cannot add widget!!";?>
        <?php endif ; ?>
    </div>
</body>
</html>
