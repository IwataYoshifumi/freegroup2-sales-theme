<?php
/**
 * Front Page template.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// -----------------------------------------------------------------------------
// Hero.
// -----------------------------------------------------------------------------
$hero_badge        = fg2_meta( 'fg2_hero_badge',        'ユーザー数無制限・営業のためのオープンソース名刺管理' );
$hero_title_before = fg2_meta( 'fg2_hero_title_before', '名刺の山、' );
$hero_title_accent = fg2_meta( 'fg2_hero_title_accent', '宝の山' );
$hero_subtitle     = fg2_meta( 'fg2_hero_subtitle',     '机の中で眠っている名刺は、会社の大切な資産。AI-OCRで入力作業を大幅削減、検索できる人脈データベースへ。無料で使えるオープンソース名刺管理、FreeGroup2。' );
$hero_btn1_text    = fg2_meta( 'fg2_hero_btn1_text',    'GitHubで見る →' );
$hero_btn1_url     = fg2_meta( 'fg2_hero_btn1_url',     'https://github.com/IwataYoshifumi/freegroup2' );
$hero_btn2_text    = fg2_meta( 'fg2_hero_btn2_text',    '機能を見る' );
$hero_btn2_url     = fg2_meta( 'fg2_hero_btn2_url',     '#features' );

// -----------------------------------------------------------------------------
// Features.
// -----------------------------------------------------------------------------
$features_title    = fg2_meta( 'fg2_features_title',    '選ばれる、3つの理由' );
$features_subtitle = fg2_meta( 'fg2_features_subtitle', '面倒な名刺管理から解放される、新しい選択肢' );

$features = array(
	array(
		'icon'  => fg2_meta( 'fg2_feature1_icon',  '🤖' ),
		'title' => fg2_meta( 'fg2_feature1_title', 'AI-OCRで入力作業を大幅削減' ),
		'desc'  => fg2_meta( 'fg2_feature1_desc',  '名刺を撮影するだけで、AIが会社名・氏名・役職・連絡先などを自動抽出。読み取り結果は確認・修正できるので、誤認識があってもすぐ整えられます。' ),
	),
	array(
		'icon'  => fg2_meta( 'fg2_feature2_icon',  '🔒' ),
		'title' => fg2_meta( 'fg2_feature2_title', 'データはあなたのもの' ),
		'desc'  => fg2_meta( 'fg2_feature2_desc',  '自社サーバーで運用できるから、大切な顧客情報を外部クラウドに預ける必要はありません。情報漏洩リスクを抑え、プライバシーポリシーにも対応しやすい設計です。' ),
	),
	array(
		'icon'  => fg2_meta( 'fg2_feature3_icon',  '💰' ),
		'title' => fg2_meta( 'fg2_feature3_title', 'ずっと無料で使える' ),
		'desc'  => fg2_meta( 'fg2_feature3_desc',  'オープンソースだからライセンス料は一切不要。月額課金も、利用人数制限もありません。コードはすべて公開されているので透明性も安心。' ),
	),
);

// -----------------------------------------------------------------------------
// Support.
// -----------------------------------------------------------------------------
$support_title    = fg2_meta( 'fg2_support_title',    '導入から運用まで、まるごとお任せ' );
$support_subtitle = fg2_meta( 'fg2_support_subtitle', '「OSSを使いたいけど、自社で運用するのは不安」そんな企業のために、プロのサポートをご用意しています' );
$support_intro    = fg2_meta( 'fg2_support_intro',    'FreeGroup2 for Sales は無料・オープンソースですが、サーバー構築・運用・保守には専門知識が必要です。導入支援から日常運用まで、専門チームがサポートいたします。' );

$support_items = array(
	array(
		'icon'  => fg2_meta( 'fg2_support1_icon',  '🚀' ),
		'title' => fg2_meta( 'fg2_support1_title', '導入支援' ),
		'desc'  => fg2_meta( 'fg2_support1_desc',  'サーバー構築、初期セットアップ、既存名刺データの移行までをワンストップで。お客様の環境に最適化して導入します。' ),
	),
	array(
		'icon'  => fg2_meta( 'fg2_support2_icon',  '🛠️' ),
		'title' => fg2_meta( 'fg2_support2_title', '保守・運用' ),
		'desc'  => fg2_meta( 'fg2_support2_desc',  '定期メンテナンス、バックアップ、アップデート適用、セキュリティパッチ対応など、安定運用を継続的に支援します。' ),
	),
	array(
		'icon'  => fg2_meta( 'fg2_support3_icon',  '🎧' ),
		'title' => fg2_meta( 'fg2_support3_title', 'ヘルプデスク' ),
		'desc'  => fg2_meta( 'fg2_support3_desc',  '操作の問い合わせ、トラブル対応など、日々の運用で発生する困りごとを電話・メールで迅速にサポートします。' ),
	),
	array(
		'icon'  => fg2_meta( 'fg2_support4_icon',  '⚙️' ),
		'title' => fg2_meta( 'fg2_support4_title', 'カスタマイズ開発' ),
		'desc'  => fg2_meta( 'fg2_support4_desc',  '自社の業務フローに合わせた機能追加や改修、外部システムとの連携など、ご要望に応じて柔軟に対応します。' ),
	),
);

// -----------------------------------------------------------------------------
// Provider.
// -----------------------------------------------------------------------------
$provider_name     = fg2_meta( 'fg2_provider_name',     '株式会社ネットワーク東海' );
$provider_desc     = fg2_meta( 'fg2_provider_desc',     '愛知県豊田市を拠点に、ITインフラ構築・保守、ビジネスホン、グループウェア開発を専門とする技術会社。長年の現場経験で培った専門知識で、お客様の安定運用を支えます。' );
$provider_tel      = fg2_meta( 'fg2_provider_tel',      '0565-30-2155' );
$provider_tel_note = fg2_meta( 'fg2_provider_tel_note', '24時間365日 留守電対応' );
$provider_web_text = fg2_meta( 'fg2_provider_web_text', 'network-tokai.jp' );
$provider_web_url  = fg2_meta( 'fg2_provider_web_url',  'https://www.network-tokai.jp/' );
$provider_form_url = fg2_meta( 'fg2_provider_form_url', '/contact/' );

// -----------------------------------------------------------------------------
// Roadmap.
// -----------------------------------------------------------------------------
$roadmap_title    = fg2_meta( 'fg2_roadmap_title',    '名刺管理から営業支援、そして全社で手放せないツールへ' );
$roadmap_subtitle = fg2_meta( 'fg2_roadmap_subtitle', 'FreeGroup2 for Sales は、ビジネスの基盤を担う総合グループウェアへと進化していきます' );

$roadmap_defaults = array(
	1 => array( 'icon' => '📇', 'tag' => '開発中', 'title' => '名刺管理（コンタクトDB）',   'desc' => 'AI-OCRによる名刺の自動データ化と、多言語対応のコンタクト管理', 'current' => true ),
	2 => array( 'icon' => '📧', 'tag' => '予定',   'title' => 'メールマーケティング',       'desc' => '名刺データを活用した、お知らせメールの一斉配信機能',           'current' => false ),
	3 => array( 'icon' => '📋', 'tag' => '予定',   'title' => '案件管理',                   'desc' => '顧客との商談・プロジェクトを案件単位で管理',                   'current' => false ),
	4 => array( 'icon' => '📅', 'tag' => '予定',   'title' => 'スケジュール管理',           'desc' => 'チームでの予定共有・会議室予約と連携',                         'current' => false ),
	5 => array( 'icon' => '🏢', 'tag' => '予定',   'title' => '設備予約',                   'desc' => '会議室・社用車などの社内リソースを一元管理',                   'current' => false ),
);

$roadmap_items = array();
foreach ( $roadmap_defaults as $i => $defaults ) {
	$item_title = fg2_meta( "fg2_road{$i}_title", $defaults['title'] );
	if ( '' === $item_title ) {
		continue;
	}
	$is_current_meta = rwmb_meta( "fg2_road{$i}_current" );
	$is_current      = ( null === $is_current_meta || '' === $is_current_meta ) ? $defaults['current'] : (bool) $is_current_meta;

	$roadmap_items[] = array(
		'icon'    => fg2_meta( "fg2_road{$i}_icon",  $defaults['icon'] ),
		'tag'     => fg2_meta( "fg2_road{$i}_tag",   $defaults['tag'] ),
		'title'   => $item_title,
		'desc'    => fg2_meta( "fg2_road{$i}_desc",  $defaults['desc'] ),
		'current' => $is_current,
	);
}

// -----------------------------------------------------------------------------
// CTA.
// -----------------------------------------------------------------------------
$cta_title     = fg2_meta( 'fg2_cta_title',     '名刺管理を、自由に。' );
$cta_desc      = fg2_meta( 'fg2_cta_desc',      'FreeGroup2でオープンソースの恩恵を、あなたのビジネスに。' );
$cta_btn1_text = fg2_meta( 'fg2_cta_btn1_text', 'GitHubで見る →' );
$cta_btn1_url  = fg2_meta( 'fg2_cta_btn1_url',  'https://github.com/IwataYoshifumi/freegroup2' );
$cta_btn2_text = fg2_meta( 'fg2_cta_btn2_text', 'ドキュメント' );
$cta_btn2_url  = fg2_meta( 'fg2_cta_btn2_url',  '#' );
?>

<!-- Hero -->
<section class="hero" id="hero">
	<div class="container hero-content">
		<span class="badge"><?php echo esc_html( $hero_badge ); ?></span>
		<h1>
			<?php echo esc_html( $hero_title_before ); ?><br>
			<span class="accent"><?php echo esc_html( $hero_title_accent ); ?></span>。
		</h1>
		<p class="hero-sub"><?php echo nl2br( esc_html( $hero_subtitle ) ); ?></p>
		<div class="cta-row">
			<a href="<?php echo esc_url( $hero_btn1_url ); ?>" class="btn btn-primary"<?php echo ( 0 === strpos( $hero_btn1_url, 'http' ) ) ? ' target="_blank" rel="noopener"' : ''; ?>><?php echo esc_html( $hero_btn1_text ); ?></a>
			<a href="<?php echo esc_url( $hero_btn2_url ); ?>" class="btn btn-outline"><?php echo esc_html( $hero_btn2_text ); ?></a>
		</div>

		<div class="hero-visual">
			<div class="demo-card">
				<div class="demo-header">
					<div class="dot"></div>
					<div class="dot"></div>
					<div class="dot"></div>
				</div>
				<div class="demo-body">
					<div class="meishi">
						<div>
							<div class="meishi-company">株式会社サンプル</div>
							<div class="meishi-name">山田 太郎</div>
							<div class="meishi-title">営業部 部長</div>
						</div>
						<div class="meishi-info">
							〒100-0001 東京都千代田区...<br>
							TEL: 03-1234-5678<br>
							yamada@example.com
						</div>
						<div class="scan-line"></div>
					</div>
					<div class="demo-arrow">→</div>
					<div class="data-out">
						<div class="data-row">
							<div class="data-label">会社</div>
							<div class="data-value">株式会社サンプル</div>
						</div>
						<div class="data-row">
							<div class="data-label">氏名</div>
							<div class="data-value">山田 太郎</div>
						</div>
						<div class="data-row">
							<div class="data-label">役職</div>
							<div class="data-value">営業部 部長</div>
						</div>
						<div class="data-row">
							<div class="data-label">電話</div>
							<div class="data-value">03-1234-5678</div>
						</div>
						<div class="data-row">
							<div class="data-label">Email</div>
							<div class="data-value">yamada@example.com</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Features -->
<section class="features" id="features">
	<div class="container">
		<div class="section-head">
			<span class="section-label">Features</span>
			<h2><?php echo esc_html( $features_title ); ?></h2>
			<p><?php echo esc_html( $features_subtitle ); ?></p>
		</div>
		<div class="feature-grid">
			<?php foreach ( $features as $feature ) : ?>
				<div class="feature-card">
					<div class="feature-icon"><?php echo esc_html( $feature['icon'] ); ?></div>
					<h3><?php echo esc_html( $feature['title'] ); ?></h3>
					<p><?php echo nl2br( esc_html( $feature['desc'] ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- How it works -->
<section class="how" id="how">
	<div class="container">
		<div class="section-head">
			<span class="section-label">How it works</span>
			<h2>3ステップで、名刺がデータになる</h2>
			<p>むずかしい設定や操作は必要ありません</p>
		</div>
		<div class="steps">
			<div class="step">
				<div class="step-num">1</div>
				<div class="step-icon">📷</div>
				<h3>名刺を撮る</h3>
				<p>スマホやPCのカメラで名刺を撮影、または画像ファイルをアップロード</p>
			</div>
			<div class="step">
				<div class="step-num">2</div>
				<div class="step-icon">✨</div>
				<h3>AIが読み取る</h3>
				<p>項目を自動で抽出。読み取り結果はその場で確認・修正できます</p>
			</div>
			<div class="step">
				<div class="step-num">3</div>
				<div class="step-icon">💾</div>
				<h3>データベースに保存</h3>
				<p>検索・絞り込みもラクラク。CSVエクスポートにも対応予定</p>
			</div>
		</div>
	</div>
</section>

<!-- Trust -->
<section class="trust" id="trust">
	<div class="container">
		<div class="trust-wrap">
			<div class="trust-text">
				<span class="section-label">Open Source</span>
				<h2>あなたのデータは、あなたのサーバーに。</h2>
				<p>名刺情報は、あなたの会社の大切な資産。だからこそ、外部のクラウドサービスに預けず、自分たちの環境で安全に管理する選択肢を提供します。</p>
				<ul class="check-list">
					<li><span><strong>完全無料：</strong>ライセンス料・月額費用は一切なし</span></li>
					<li><span><strong>データ主権：</strong>顧客情報を社外に出さずに運用可能</span></li>
					<li><span><strong>カスタマイズ自由：</strong>ソースコード公開、自社向けに改造OK</span></li>
					<li><span><strong>透明性：</strong>すべてのコードがGitHubで公開</span></li>
				</ul>
			</div>
			<div class="trust-visual">
				<div class="trust-visual-content">
					<div class="lock-icon">🔐</div>
					<h3>セルフホスト型だから安心</h3>
					<p>あなたのインフラ上で動作するため、第三者にデータを覗かれる心配がありません。クラウドサービス停止のリスクとも無縁です。</p>
					<div class="stats-grid">
						<div>
							<div class="stat-num">¥0</div>
							<div class="stat-label">ライセンス料</div>
						</div>
						<div>
							<div class="stat-num">100%</div>
							<div class="stat-label">オープンソース</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Roadmap -->
<section class="roadmap" id="roadmap">
	<div class="container">
		<div class="section-head">
			<span class="section-label">Roadmap</span>
			<h2><?php echo nl2br( esc_html( $roadmap_title ) ); ?></h2>
			<p><?php echo esc_html( $roadmap_subtitle ); ?></p>
		</div>
		<div class="roadmap-list">
			<?php foreach ( $roadmap_items as $item ) : ?>
				<div class="roadmap-item<?php echo $item['current'] ? ' current' : ''; ?>">
					<div class="roadmap-marker"><?php echo esc_html( $item['icon'] ); ?></div>
					<div class="roadmap-content">
						<span class="roadmap-tag"><?php echo esc_html( $item['tag'] ); ?></span>
						<h4><?php echo esc_html( $item['title'] ); ?></h4>
						<p><?php echo esc_html( $item['desc'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Support -->
<section class="support" id="support">
	<div class="container">
		<div class="section-head">
			<span class="section-label">Professional Support</span>
			<h2><?php echo esc_html( $support_title ); ?></h2>
			<p><?php echo nl2br( esc_html( $support_subtitle ) ); ?></p>
		</div>

		<div class="support-intro">
			<p><?php echo nl2br( esc_html( $support_intro ) ); ?></p>
		</div>

		<div class="support-grid">
			<?php foreach ( $support_items as $index => $item ) : ?>
				<div class="support-card">
					<div class="support-num"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></div>
					<div class="support-icon-wrap"><?php echo esc_html( $item['icon'] ); ?></div>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo nl2br( esc_html( $item['desc'] ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="support-provider">
			<div class="provider-head">
				<div class="provider-icon">🏢</div>
				<div class="provider-text">
					<h4><?php echo esc_html( $provider_name ); ?></h4>
					<p><?php echo nl2br( esc_html( $provider_desc ) ); ?></p>
				</div>
			</div>

			<div class="provider-info">
				<div class="info-item">
					<div class="info-icon">📞</div>
					<div class="info-content">
						<div class="info-label">電話（留守電受付）</div>
						<div class="info-value"><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $provider_tel ) ); ?>"><?php echo esc_html( $provider_tel ); ?></a></div>
						<div class="info-note"><?php echo esc_html( $provider_tel_note ); ?></div>
					</div>
				</div>
				<div class="info-item">
					<div class="info-icon">🌐</div>
					<div class="info-content">
						<div class="info-label">ウェブサイト</div>
						<div class="info-value"><a href="<?php echo esc_url( $provider_web_url ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $provider_web_text ); ?></a></div>
						<div class="info-note">会社概要・お問合せフォーム</div>
					</div>
				</div>
			</div>

			<div class="provider-cta-row">
				<a href="<?php echo esc_url( $provider_form_url ); ?>" class="provider-cta"<?php echo ( 0 === strpos( $provider_form_url, 'http' ) ) ? ' target="_blank" rel="noopener"' : ''; ?>>お問い合わせフォーム →</a>
				<a href="<?php echo esc_url( $provider_web_url ); ?>" target="_blank" rel="noopener" class="provider-cta-outline">公式サイト</a>
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<section class="cta-section">
	<div class="container">
		<div class="cta-box">
			<div class="cta-box-content">
				<h2><?php echo esc_html( $cta_title ); ?></h2>
				<p><?php echo nl2br( esc_html( $cta_desc ) ); ?></p>
				<div class="cta-row">
					<a href="<?php echo esc_url( $cta_btn1_url ); ?>" class="btn btn-white"<?php echo ( 0 === strpos( $cta_btn1_url, 'http' ) ) ? ' target="_blank" rel="noopener"' : ''; ?>><?php echo esc_html( $cta_btn1_text ); ?></a>
					<a href="<?php echo esc_url( $cta_btn2_url ); ?>" class="btn btn-ghost"><?php echo esc_html( $cta_btn2_text ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
