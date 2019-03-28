<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>アメリカンビレッジ</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<body>

  <header>
    <!-- ヘッダーメニュー -->
    <ul class="header-menu">
      <li>Menu01</li>
      <li>Menu02</li>
      <li>Menu03</li>
      <li>Menu04</li>
    </ul>
    <!-- ヘッダー画像 -->
    <div class="header-img">
      <!-- PC用画像 -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo">
      <div class="slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="" class="topImg-pc">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="" class="logoText-pc">
      <!-- スマホ用画像 -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="" class="topImg-sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="" class="logoText-sp">
    </div>
    <!-- ヘッダーテキスト部分 -->
    <div class="header-text">
      <!-- PC用テキスト -->
      <span class="pc">進化し続ける「街」アメリカンビレッジマガジン</span>
      <!-- スマホ用テキスト -->
      <span class="sp">進化し続ける「街」<br>アメリカンビレッジマガジン</span>
    </div>
  </header>


  <div id="blog_archive">
    <!-- 記事一覧 -->
    <main class="articles">
      <h1>Latest Articles</h1>
      <!-- 表示件数を指定するための配列 -->
      <?php $args =  array('posts_per_page' => 6 );?>
      <!-- postsの中に表示件数で指定した数の投稿を代入 --> 　　
      <?php $posts = get_posts($args);?>
      <?php if (have_posts()): ?>
        <ul class="img-box">
        <?php foreach ( $posts as $post ): ?>
          <?php setup_postdata($post);?>
          <li>
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail('thumbnail'); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_1.png" alt="">
            <?php endif; ?>
            <p class="date"><?php the_time('Y/m/d');?></p>
            <p class="article"><?php the_title();?></p>
            <div class="read">
              <a href="<?php the_permalink(); ?>" class="next">READ MORE</a>
            </div>
          </li>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </main>
  </div>
  
  <!-- フッター -->
  <footer>
    <div class="footer">
      <p>Copyright © Shinohara. ALL RIGHTS RESERVED.</p>
    </div>
  </footer>

</body>
</html>