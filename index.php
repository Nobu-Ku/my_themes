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
<body <?php body_class(); ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article <?php post_class(); ?>
    <h1><?php the_title(); ?></h1>
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
      </div>
  </article>
<?php endwhile; endif; ?>
</body>
</html>
