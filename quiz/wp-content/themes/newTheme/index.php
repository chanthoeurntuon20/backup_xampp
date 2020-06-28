<!DOCTYPE html>
<html lang="en" <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>
   <header>
        <div class="menu">
                 <div class="menu-above bg-info">
                    <h3 class="text-danger"><?php bloginfo('name');?></h3>
                    <span><?php bloginfo('description');?></span>
                 </div>
                 <div class="menu">
               <ul>
                    <li>
                        <a href="#"><?php wp_nav_menu();?></a>
                    </li>
               </ul>
                 </div>
                <div class="content">
                </div>
         </div>
   </header>
   <?php if(have_posts()):?>
     <?php while(have_posts()):?>
         <?php the_post();?>
        <?php if(has_post_thumbnail()):?>
            <div class="image">
             <?php the_post_thumbnail();?>
            </div>
            <div class="text">  
              <?php the_excerpt();?>
            </div>
            <?php 
              $output = "";
              $caters = get_the_category();
              if($caters){
                foreach($caters as $cater){
                  $output = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'"></a>';
                }
              }
            ?>
        <?php endif?>
        <?php endwhile?>
    <?php else: echo "not found"?>
  <?php endif?>
</body>
</html>