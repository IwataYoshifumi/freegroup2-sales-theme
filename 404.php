<?php
/**
 * 404 Not Found template.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="page-main">
	<div class="container">
		<div class="not-found">
			<span class="badge">404</span>
			<h1>ページが見つかりません</h1>
			<p>お探しのページは移動・削除されたか、URLが正しくない可能性があります。</p>
			<p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">トップページへ戻る →</a>
			</p>
		</div>
	</div>
</main>

<?php
get_footer();
