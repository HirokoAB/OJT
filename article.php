<!DOCTYPE html>
<html lang="en">
<head>
  <title>archive</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/article.css">
</head>
<body>


<div id="blog_archive" >

  <main class="articles">
    <h1>Latest Articles</h1>


    <!-- ボタン表示の条件 -->
  <?php if( $postnum > 6  ):?>

  <!-- 表示件数を指定するための配列 -->
  <?php $args =  array('posts_per_page' => 3 );?>
  <!-- postsの中に表示件数で指定した数の投稿を代入 --> 　　
  <?php $posts = get_posts($args);?>


  <!-- 投稿があれば以下の処理をしてください -->
  <?php if (have_posts()): ?>
      <ul class="img-box">
  <!-- 表示件数の件数分foreach文を回します -->    
          <?php foreach ( $posts as $post ): ?>
          <?php setup_postdata($post);?>
      <li>
    <!-- 以下サムネイルがあれば画像表示なければサンプル画像のif文 --> 
    <!-- サムネイルがあればサムネイル表示 -->     
          <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('thumbnail'); ?>
    <!-- なければサンプル画像表示 -->
          <?php else: ?>
          <img src="https://placehold.jp/150x150.png" alt="" height="150", width="150">
    <!-- サムネイルの表示if文終わり -->
      <?php endif; ?>
    <!-- 日付 -->
        <p class="date"><?php the_time('Y/m/d');?></p>
    <!-- タイトル -->    
        <p class="article"><?php the_title();?></p>
    <!-- 記事詳細へのリンク -->    
        <div class="read">
        <a href="<?php the_permalink();?>">
            <p class="next">READ MORE</p></a>
        </div>
      </li>
    <!-- 記事一覧の１コマ完了 -->  
      <?php endforeach; ?>
    <!-- 記事一覧の全体を囲う囲い -->        
      </ul>
    <!-- 投稿があればの処理終了 -->  
      <?php endif; ?>


    <!-- 記事の投稿件数を取得してもっと見るボタンを表示 -->
    <?php $count_posts = wp_count_posts();?><!-- 記事の数を取得 -->
    <?php $postnum = $count_posts->publish;?><!-- 変数に格納 -->

    <?php if( $postnum > 6  ):?>
    <div class="btn_fix">  
    <button class="next">もっと見る</button>  
    </div>
    <?php endif; ?>





















</main>
  
</div>



  <!-- 記事の投稿件数を取得してもっと見るボタンを表示 -->
  <?php $count_posts = wp_count_posts();?><!-- 記事の数を取得 -->
<?php $postnum = $count_posts->publish;?><!-- 変数に格納 -->

  <?php if( $postnum > 6  ):?>
  <div class="btn_fix">  
  <button class="next">もっと見る</button>  
  </div>
  <?php else:?>

  <?php endif; ?>
 

























  
</body>
</html>