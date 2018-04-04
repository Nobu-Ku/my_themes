<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset=“utf-8”>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
 <link rel=“stylesheet” href="<?php echo get_stylesheet_uri(); ?>">
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
      <?php if( is_single() ): ?>
        <h1><?php the_title(); ?></h1>
      <?php else: ?>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php endif; ?>
        <div class="postinfo">
          <time datetime="<?php echo get_the_date('Y-m-d') ?>">
            <i class="fas fa-clock"></i>
           <?php echo get_the_date() ;?>
          </time>
          <span class="postcat">
           <i class="fas fa-folder-open"></i>
           <?php the_category(); ?>
          </span>
          <?php the_content(','); ?>
          <div class="pagenav">
            <?php if( is_single() ): ?>
            <span class="old">
              <?php previous_post_link('%link','<i class="fa fa-chevron-circle-left"></i> %title'); ?>
            </span>
            <span class="new">
              <?php next_post_link('%link','%title <i class="fa fa-chevron-circle-right"></i>' ); ?>
            </span>
          </div>
        <?php endif; ?>
      </div><!--postinfo-->
    </article>
    <?php endwhile; endif; ?>
    <?php if ( $wp_query ->max_num_pages > 1): ?>
    <div class="pagenav">
      <span class="old">
        <?php next_posts_link('<i class="fa fa-chevron-circle-left"></i>古い記事'); ?>
      </span>
      <span class="new">
        <?php previous_posts_link('新しい記事<i class="fa fa-chevron-circle-right"></i>'); ?>
      </span>
    </div>
    <?php endif; ?>
    <ul>
      <?php dynamic_sidebar(); 
    </ul>
  </div><!--container-->
</body>
</html>
