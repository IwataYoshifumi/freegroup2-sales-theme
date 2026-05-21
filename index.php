<?php
// このファイルはWordPressのフォールバックテンプレートです。
// フロントページはfront-page.phpが使用されます。
get_header();
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
endif;
get_footer();
