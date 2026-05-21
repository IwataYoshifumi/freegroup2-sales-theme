<?php
/**
 * Theme footer.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$footer_desc      = fg2_meta(
	'fg2_footer_desc',
	'営業のための、無料で使えるオープンソース名刺管理。あなたの会社の人脈を、自由に、安全に、資産化する。'
);
$footer_copyright = fg2_meta(
	'fg2_footer_copyright',
	'© 2026 FreeGroup2 — Open Source under MIT License'
);
$home_url         = home_url( '/' );
?>
<footer>
	<div class="container">
		<div class="footer-grid">
			<div class="footer-brand">
				<h3>FreeGroup2 <span style="opacity:0.6; font-weight:500; font-size:14px;">for Sales</span></h3>
				<p><?php echo nl2br( esc_html( $footer_desc ) ); ?></p>
			</div>
			<div class="footer-col">
				<h4>製品</h4>
				<ul>
					<li><a href="<?php echo esc_url( $home_url ); ?>#features">機能</a></li>
					<li><a href="<?php echo esc_url( $home_url ); ?>#how">使い方</a></li>
					<li><a href="<?php echo esc_url( $home_url ); ?>#support">サポート</a></li>
					<li><a href="<?php echo esc_url( $home_url ); ?>#roadmap">ロードマップ</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>リソース</h4>
				<ul>
					<li><a href="#">ドキュメント</a></li>
					<li><a href="#">インストール</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="<?php echo esc_url( home_url( '/license/' ) ); ?>">商用ライセンス</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>コミュニティ</h4>
				<ul>
					<li><a href="https://github.com/IwataYoshifumi/freegroup2" target="_blank" rel="noopener">GitHub</a></li>
					<li><a href="https://github.com/IwataYoshifumi/freegroup2/issues" target="_blank" rel="noopener">Issue Tracker</a></li>
					<li><a href="<?php echo esc_url( $home_url ); ?>contact/">お問い合わせ</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<?php echo esc_html( $footer_copyright ); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
