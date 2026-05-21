<?php
/**
 * Meta Box field definitions for FreeGroup2 for Sales.
 *
 * All field groups are intended to be edited on the static front page only.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'rwmb_meta_boxes', 'fg2_register_meta_boxes' );

/**
 * Register meta boxes for the front page.
 *
 * @param array $meta_boxes Existing meta boxes.
 * @return array
 */
function fg2_register_meta_boxes( $meta_boxes ) {
	$common = array(
		'context'    => 'normal',
		'priority'   => 'default',
		'post_types' => array( 'page' ),
	);

	// 1. Hero.
	$meta_boxes[] = array_merge(
		$common,
		array(
			'id'     => 'fg2_hero',
			'title'  => 'FG2 - ヒーロー設定',
			'fields' => array(
				array( 'id' => 'fg2_hero_badge',         'name' => 'バッジ文言',           'type' => 'text',     'desc' => 'ヒーロー上部の小さいラベル' ),
				array( 'id' => 'fg2_hero_title_before',  'name' => 'キャッチコピー前半',     'type' => 'text',     'desc' => 'アクセント色の前の文字' ),
				array( 'id' => 'fg2_hero_title_accent',  'name' => 'キャッチコピー強調部分', 'type' => 'text',     'desc' => 'アクセント色（青）になる部分' ),
				array( 'id' => 'fg2_hero_subtitle',      'name' => 'サブ説明文',           'type' => 'textarea', 'desc' => 'キャッチコピー下の説明文' ),
				array( 'id' => 'fg2_hero_btn1_text',     'name' => 'ボタン1テキスト',      'type' => 'text',     'desc' => 'メインボタンの文字' ),
				array( 'id' => 'fg2_hero_btn1_url',      'name' => 'ボタン1リンク',        'type' => 'url',      'desc' => 'メインボタンのURL' ),
				array( 'id' => 'fg2_hero_btn2_text',     'name' => 'ボタン2テキスト',      'type' => 'text',     'desc' => 'サブボタンの文字' ),
				array( 'id' => 'fg2_hero_btn2_url',      'name' => 'ボタン2リンク',        'type' => 'url',      'desc' => 'サブボタンのURL' ),
			),
		)
	);

	// 2. Three features.
	$meta_boxes[] = array_merge(
		$common,
		array(
			'id'     => 'fg2_features',
			'title'  => 'FG2 - 3つの強み',
			'fields' => array(
				array( 'id' => 'fg2_features_title',    'name' => 'セクション見出し', 'type' => 'text' ),
				array( 'id' => 'fg2_features_subtitle', 'name' => 'セクション説明',   'type' => 'text' ),
				array( 'id' => 'fg2_feature1_icon',     'name' => '強み1：アイコン絵文字', 'type' => 'text' ),
				array( 'id' => 'fg2_feature1_title',    'name' => '強み1：タイトル',     'type' => 'text' ),
				array( 'id' => 'fg2_feature1_desc',     'name' => '強み1：説明',         'type' => 'textarea' ),
				array( 'id' => 'fg2_feature2_icon',     'name' => '強み2：アイコン絵文字', 'type' => 'text' ),
				array( 'id' => 'fg2_feature2_title',    'name' => '強み2：タイトル',     'type' => 'text' ),
				array( 'id' => 'fg2_feature2_desc',     'name' => '強み2：説明',         'type' => 'textarea' ),
				array( 'id' => 'fg2_feature3_icon',     'name' => '強み3：アイコン絵文字', 'type' => 'text' ),
				array( 'id' => 'fg2_feature3_title',    'name' => '強み3：タイトル',     'type' => 'text' ),
				array( 'id' => 'fg2_feature3_desc',     'name' => '強み3：説明',         'type' => 'textarea' ),
			),
		)
	);

	// 3. Support menu.
	$meta_boxes[] = array_merge(
		$common,
		array(
			'id'     => 'fg2_support',
			'title'  => 'FG2 - サポートメニュー',
			'fields' => array(
				array( 'id' => 'fg2_support_title',    'name' => 'セクション見出し', 'type' => 'text' ),
				array( 'id' => 'fg2_support_subtitle', 'name' => 'セクション説明',   'type' => 'text' ),
				array( 'id' => 'fg2_support_intro',    'name' => '導入文',           'type' => 'textarea' ),
				array( 'id' => 'fg2_support1_icon',    'name' => 'メニュー1：アイコン絵文字', 'type' => 'text' ),
				array( 'id' => 'fg2_support1_title',   'name' => 'メニュー1：タイトル',       'type' => 'text' ),
				array( 'id' => 'fg2_support1_desc',    'name' => 'メニュー1：説明',           'type' => 'textarea' ),
				array( 'id' => 'fg2_support2_icon',    'name' => 'メニュー2：アイコン絵文字', 'type' => 'text' ),
				array( 'id' => 'fg2_support2_title',   'name' => 'メニュー2：タイトル',       'type' => 'text' ),
				array( 'id' => 'fg2_support2_desc',    'name' => 'メニュー2：説明',           'type' => 'textarea' ),
				array( 'id' => 'fg2_support3_icon',    'name' => 'メニュー3：アイコン絵文字', 'type' => 'text' ),
				array( 'id' => 'fg2_support3_title',   'name' => 'メニュー3：タイトル',       'type' => 'text' ),
				array( 'id' => 'fg2_support3_desc',    'name' => 'メニュー3：説明',           'type' => 'textarea' ),
				array( 'id' => 'fg2_support4_icon',    'name' => 'メニュー4：アイコン絵文字', 'type' => 'text' ),
				array( 'id' => 'fg2_support4_title',   'name' => 'メニュー4：タイトル',       'type' => 'text' ),
				array( 'id' => 'fg2_support4_desc',    'name' => 'メニュー4：説明',           'type' => 'textarea' ),
			),
		)
	);

	// 4. Roadmap.
	$roadmap_fields = array(
		array( 'id' => 'fg2_roadmap_title',    'name' => 'セクション見出し', 'type' => 'text' ),
		array( 'id' => 'fg2_roadmap_subtitle', 'name' => 'セクション説明',   'type' => 'text' ),
	);
	for ( $i = 1; $i <= 5; $i++ ) {
		$roadmap_fields[] = array( 'id' => "fg2_road{$i}_icon",    'name' => "項目{$i}：アイコン絵文字", 'type' => 'text' );
		$roadmap_fields[] = array( 'id' => "fg2_road{$i}_tag",     'name' => "項目{$i}：タグ文言",       'type' => 'text' );
		$roadmap_fields[] = array( 'id' => "fg2_road{$i}_title",   'name' => "項目{$i}：タイトル",       'type' => 'text' );
		$roadmap_fields[] = array( 'id' => "fg2_road{$i}_desc",    'name' => "項目{$i}：説明",           'type' => 'textarea' );
		$roadmap_fields[] = array( 'id' => "fg2_road{$i}_current", 'name' => "項目{$i}：現在地表示",     'type' => 'checkbox' );
	}
	$meta_boxes[] = array_merge(
		$common,
		array(
			'id'     => 'fg2_roadmap',
			'title'  => 'FG2 - ロードマップ',
			'fields' => $roadmap_fields,
		)
	);

	// 5. Provider info.
	$meta_boxes[] = array_merge(
		$common,
		array(
			'id'     => 'fg2_provider',
			'title'  => 'FG2 - 提供元情報',
			'fields' => array(
				array( 'id' => 'fg2_provider_name',     'name' => '会社名',                 'type' => 'text' ),
				array( 'id' => 'fg2_provider_desc',     'name' => '会社紹介文',             'type' => 'textarea' ),
				array( 'id' => 'fg2_provider_tel',      'name' => '電話番号',               'type' => 'text' ),
				array( 'id' => 'fg2_provider_tel_note', 'name' => '電話補足',               'type' => 'text' ),
				array( 'id' => 'fg2_provider_web_text', 'name' => 'ウェブサイト表示テキスト', 'type' => 'text' ),
				array( 'id' => 'fg2_provider_web_url',  'name' => 'ウェブサイトURL',         'type' => 'url' ),
				array( 'id' => 'fg2_provider_form_url', 'name' => 'お問い合わせフォームURL', 'type' => 'url' ),
			),
		)
	);

	// 6. CTA.
	$meta_boxes[] = array_merge(
		$common,
		array(
			'id'     => 'fg2_cta',
			'title'  => 'FG2 - CTAセクション',
			'fields' => array(
				array( 'id' => 'fg2_cta_title',     'name' => '見出し',         'type' => 'text' ),
				array( 'id' => 'fg2_cta_desc',      'name' => '本文',           'type' => 'textarea' ),
				array( 'id' => 'fg2_cta_btn1_text', 'name' => 'ボタン1テキスト', 'type' => 'text' ),
				array( 'id' => 'fg2_cta_btn1_url',  'name' => 'ボタン1リンク',   'type' => 'url' ),
				array( 'id' => 'fg2_cta_btn2_text', 'name' => 'ボタン2テキスト', 'type' => 'text' ),
				array( 'id' => 'fg2_cta_btn2_url',  'name' => 'ボタン2リンク',   'type' => 'url' ),
			),
		)
	);

	// 7. Footer.
	$meta_boxes[] = array_merge(
		$common,
		array(
			'id'     => 'fg2_footer',
			'title'  => 'FG2 - フッター設定',
			'fields' => array(
				array( 'id' => 'fg2_footer_desc',      'name' => 'ブランド説明文', 'type' => 'textarea' ),
				array( 'id' => 'fg2_footer_copyright', 'name' => '著作権表記',     'type' => 'text' ),
			),
		)
	);

	return $meta_boxes;
}

/**
 * Hide FG2 meta boxes when the current page being edited is not the static front page.
 *
 * @param WP_Post $post Current post object.
 */
function fg2_maybe_remove_meta_boxes( $post ) {
	$front_id = (int) get_option( 'page_on_front' );
	if ( $front_id && (int) $post->ID === $front_id ) {
		return;
	}
	$ids = array( 'fg2_hero', 'fg2_features', 'fg2_support', 'fg2_roadmap', 'fg2_provider', 'fg2_cta', 'fg2_footer' );
	foreach ( $ids as $id ) {
		remove_meta_box( $id, 'page', 'normal' );
	}
}
add_action( 'add_meta_boxes_page', 'fg2_maybe_remove_meta_boxes', 99 );
