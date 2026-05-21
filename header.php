<?php
/**
 * Theme header.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<header>
	<nav class="nav">
		<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration:none;color:inherit;">Free<span>Group</span>2<span class="for-sales">for Sales</span></a></div>
		<div class="nav-links">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#features">機能</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#how">使い方</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#support">サポート</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>#roadmap">ロードマップ</a>
			<a href="https://docs.freegroup.work/" target="_blank">マニュアル</a>
			<div class="nav-dropdown">
			  <a href="#" class="nav-dropdown-toggle">ライセンス ▾</a>
			  <div class="nav-dropdown-menu">
			    <a href="https://docs.freegroup.work/license/#1-1" target="_blank">コミュニティライセンス</a>
			    <a href="https://docs.freegroup.work/license/#1-2" target="_blank">商用ライセンス</a>
			  </div>
			</div>
			<a href="https://github.com/IwataYoshifumi/freegroup2" class="nav-cta" target="_blank" rel="noopener">GitHub</a>
		</div>
	</nav>
</header>
