<!DOCTYPE html>
<html lang="<?php echo $lang=get_bloginfo("language"); ?>">
    <head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
    </head>
<body>
<!-- ブログタイトルがh1タグに表示されます。 -->
    <h1><?php echo get_bloginfo( 'name' ); ?></h1>
    <?php 
    $found_posts = get_posts( 'numberposts=10' );

    foreach($found_posts as $post){
    echo '<hr>';
    echo '<h2>' . $post->post_title . '</h2>';
    echo '<h5>'. '&nbsp;作成日時:&nbsp;' . $post->post_date . '</h5>';
    echo '<div class="posts">'. $post->post_content . '</div>';
}
?>
</body>
    </html>