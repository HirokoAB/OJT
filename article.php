<!DOCTYPE html>
<html lang="en">
<head>
	<title>archive</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/archive.css">
</head>
<body>

<div id="blog_archive" >

  <main class="articles">
    <h1>Latest Articles</h1>
  <!-- 表示件数を指定するための配列 -->
  <?php $args =  array('posts_per_page' => 6 );?>
  <!-- postsの中に表示件数で指定した数の投稿を代入 --> 　　
  <?php $posts = get_posts($args);?>
  <?php if (have_posts()): ?>
    <div class="container">
      <?php foreach ( $posts as $post ): ?>
        <?php setup_postdata($post);?>
    <ul class="img-box">
      <li>
                <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('thumbnail'); ?>
          <?php else: ?>
            <img src="https://placehold.jp/150x150.png" alt="" height="150", width="150">
      <?php endif; ?>

        <p class="date"><?php the_time('Y/m/d');?></p>
        <p class="article"><?php the_title();?></p>
        


        <div class="read">
          <a href="<?php the_permalink();?>">
            <p class="next">READ MORE</p>
          </a>
        </div>
      </li>
    </ul>
            <?php endforeach; ?>
    </div>
    <?php endif; ?>

</main>
  
</div>
































	
</body>
</html>