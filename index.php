<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset=“utf-8”>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel=“stylesheet” href=“<?php echo get_stylesheet_uri(); ?>”>
</head>
<body <?php body_class(); ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article <?php post_class(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>
<?php endwhile; endif; ?>
</body>
</html>
