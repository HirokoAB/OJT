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
      <ul class="img-box">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_1.png" alt="">
          <h3 class="date"><?php the_time('Y/m/d');?></h3>
          <p class="article"><?php the_title();?></p>
          <div class="read">
            <a href="" class="next">READ MORE</a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_2.png" alt="">
          <h3 class="date"><?php the_time('Y/m/d');?></h3>
          <p class="article"><?php the_title();?></p>
          <div class="read">
            <a href="" class="next">READ MORE</a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_3.png" alt="">
          <h3 class="date"><?php the_time('Y/m/d');?></h3>
          <p class="article"><?php the_title();?></p>
          <div class="read">
            <a href="" class="next">READ MORE</a>
          </div>
        </li>
      </ul>
      <ul class="img-box">
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_4.png" alt="">
          <h3 class="date"><?php the_time('Y/m/d');?></h3>
          <p class="article"><?php the_title();?></p>
          <div class="read">
            <a href="" class="next">READ MORE</a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_5.png" alt="">
          <h3 class="date"><?php the_time('Y/m/d');?></h3>
          <p class="article"><?php the_title();?></p>
          <div class="read">
            <a href="" class="next">READ MORE</a>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/post_img_6.png" alt="">
          <h3 class="date"><?php the_time('Y/m/d');?></h3>
          <p class="article"><?php the_title();?></p>
          <div class="read">
            <a href="" class="next">READ MORE</a>
          </div>
        </li>
      </ul>
    </main>
  </div>
  <!-- フッター -->
  <footer>
    <div class="footer">
      <p>Copyright © Shinohara.All RIGHTS RESERVED.</p>
    </div>
  </footer>

  <script src="app.js"></script>
</body>
</html>