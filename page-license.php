<?php
/**
 * License page template.
 *
 * URL: /license/  (a Page with slug "license" must exist)
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<!-- License Hero -->
<section class="license-hero">
	<div class="container">
		<span class="badge">Commercial License</span>
		<h1>商用ライセンス</h1>
		<p>FreeGroup2を第三者向けにご利用の場合は商用ライセンスが必要です</p>
	</div>
</section>

<!-- Pricing -->
<section class="license-pricing">
	<div class="container">
		<div class="section-head">
			<span class="section-label">Pricing</span>
			<h2>料金プラン</h2>
			<p>ユーザーID数に応じて6つのプランをご用意しています</p>
		</div>

		<div class="pricing-table-wrap">
			<table class="pricing-table">
				<thead>
					<tr>
						<th>プラン</th>
						<th>ユーザーID数</th>
						<th>初期ライセンス料</th>
						<th>年間ライセンス料</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span class="plan-name">Small</span></td>
						<td data-label="ユーザーID数">〜10ID</td>
						<td data-label="初期ライセンス料"><strong>$1,000</strong></td>
						<td data-label="年間ライセンス料">$100<span class="unit">/年</span></td>
					</tr>
					<tr>
						<td><span class="plan-name">Business</span></td>
						<td data-label="ユーザーID数">〜30ID</td>
						<td data-label="初期ライセンス料"><strong>$3,000</strong></td>
						<td data-label="年間ライセンス料">$300<span class="unit">/年</span></td>
					</tr>
					<tr>
						<td><span class="plan-name">Enterprise</span></td>
						<td data-label="ユーザーID数">〜100ID</td>
						<td data-label="初期ライセンス料"><strong>$6,000</strong></td>
						<td data-label="年間ライセンス料">$600<span class="unit">/年</span></td>
					</tr>
					<tr>
						<td><span class="plan-name">Large</span></td>
						<td data-label="ユーザーID数">〜300ID</td>
						<td data-label="初期ライセンス料"><strong>$10,000</strong></td>
						<td data-label="年間ライセンス料">$1,000<span class="unit">/年</span></td>
					</tr>
					<tr>
						<td><span class="plan-name">Corporate</span></td>
						<td data-label="ユーザーID数">〜1,000ID</td>
						<td data-label="初期ライセンス料"><strong>$18,000</strong></td>
						<td data-label="年間ライセンス料">$1,800<span class="unit">/年</span></td>
					</tr>
					<tr>
						<td><span class="plan-name">Enterprise+</span></td>
						<td data-label="ユーザーID数">1,001ID〜</td>
						<td data-label="初期ライセンス料"><em>要相談</em></td>
						<td data-label="年間ライセンス料"><em>要相談</em></td>
					</tr>
				</tbody>
			</table>
		</div>
		<p class="pricing-note">※ 表示価格はすべて米ドル建て・税抜です。為替・税制により変動する場合があります。</p>
	</div>
</section>

<!-- Community License -->
<section class="license-community">
	<div class="container">
		<div class="community-box">
			<div class="community-icon">🆓</div>
			<div class="community-content">
				<span class="section-label">Free for Self-Use</span>
				<h2>コミュニティライセンス（無償）</h2>
				<p><strong>自己または自社のみで使用する場合は、ライセンス料は一切かかりません。</strong></p>
				<ul class="check-list">
					<li><span><strong>自社利用は完全無料：</strong>自社のサーバーに構築し、自社の業務にのみ使用する場合</span></li>
					<li><span><strong>第三者向けサービス提供時は商用ライセンスが必要：</strong>顧客・取引先のための構築・保守・サポート等を提供する場合</span></li>
					<li><span><strong>サポートは含まれません：</strong>無償ライセンスではメールサポート等はご利用いただけません</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Contract -->
<section class="license-contract">
	<div class="container">
		<div class="section-head">
			<span class="section-label">License Agreement</span>
			<h2>商用ライセンス契約書</h2>
			<p>下記は商用ライセンス契約の全文です</p>
		</div>

		<article class="contract">
			<header class="contract-header">
				<h3 class="contract-title">FreeGroup2 商用ライセンス契約書</h3>
				<dl class="contract-meta">
					<div><dt>発行者</dt><dd>株式会社ネットワーク東海</dd></div>
					<div><dt>対象ソフトウェア</dt><dd>FreeGroup2</dd></div>
					<div><dt>最終更新</dt><dd>2026年5月</dd></div>
				</dl>
			</header>

			<section class="contract-article">
				<h4>第1条　定義</h4>
				<ol class="contract-ol">
					<li><strong>コミュニティライセンス：</strong>本ソフトウェアを自己のサーバーに構築し、自己または自社のみが使用する場合に適用される無償ライセンス。</li>
					<li><strong>商用ライセンス：</strong>第三者のために本ソフトウェアの構築・設定・保守・運用・サポートその他これに類するサービスを提供する場合に必要な有償ライセンス。</li>
					<li><strong>ユーザーID数：</strong>本ソフトウェアを利用するアカウント数の上限。管理者アカウントを含む。</li>
					<li><strong>ライセンス料：</strong>初期ライセンス料および年間ライセンス料の総称。</li>
				</ol>
			</section>

			<section class="contract-article">
				<h4>第2条　ライセンスの種類</h4>

				<h5>2-1　コミュニティライセンス（無償）</h5>
				<p>次の条件をすべて満たす場合、無償で本ソフトウェアを使用できる。</p>
				<ul class="contract-ul">
					<li>自己または自社のサーバーに構築し、自己または自社の業務にのみ使用する。</li>
					<li>第三者に対して構築・保守・運用・サポート等のサービスを提供しない。</li>
					<li>本ソフトウェアを使用したサービスを第三者に販売しない。</li>
				</ul>

				<h5>2-2　商用ライセンス（有償）</h5>
				<p>次のいずれかに該当する場合、商用ライセンスの取得が必要である。</p>
				<ul class="contract-ul">
					<li>顧客・取引先・関連会社等の第三者のために本ソフトウェアを構築・設定する。</li>
					<li>第三者が運用する本ソフトウェアの保守・サポートサービスを提供する。</li>
					<li>本ソフトウェアを組み込んだサービスを第三者に提供する。</li>
				</ul>
			</section>

			<section class="contract-article">
				<h4>第3条　料金体系</h4>
				<p>上記料金表のとおりとする。</p>
			</section>

			<section class="contract-article">
				<h4>第4条　年間ライセンスに含まれるサポート</h4>
				<ul class="contract-ul">
					<li><strong>Small〜Enterprise：</strong>メールサポート5営業日以内・AIチャットサポート・バグ修正通知</li>
					<li><strong>Large〜Corporate：</strong>メールサポート3営業日以内・AIチャットサポート・バグ修正通知</li>
					<li><strong>コミュニティ（無償）：</strong>サポートなし</li>
				</ul>
			</section>

			<section class="contract-article">
				<h4>第5条　禁止事項</h4>
				<ol class="contract-ol">
					<li>商用ライセンスを取得せずに第三者向けサービスを提供すること。</li>
					<li>本ライセンスを第三者に譲渡・転売・再ライセンスすること。</li>
					<li>本ソフトウェアの著作権表示を削除または改変すること。</li>
				</ol>
			</section>

			<section class="contract-article">
				<h4>第6条　ライセンスの有効期間</h4>
				<ol class="contract-ol">
					<li>商用ライセンスは、初期ライセンス料の支払い完了日から有効となる。</li>
					<li>年間ライセンス料の支払いが確認された日から1年間、サポートおよびアップデート通知を提供する。</li>
					<li>年間ライセンス料の支払いがない場合、サポートは停止するが、ソフトウェアの使用権は継続する。</li>
				</ol>
			</section>

			<section class="contract-article">
				<h4>第7条　免責事項</h4>
				<ol class="contract-ol">
					<li>本ソフトウェアは現状有姿で提供される。ライセンサーは動作の完全性・正確性・特定目的への適合性を保証しない。</li>
					<li>本ソフトウェアの使用により生じた損害について、ライセンサーは責任を負わない。</li>
					<li>ライセンサーの責任は、当該年度に受領した年間ライセンス料を上限とする。</li>
				</ol>
			</section>

			<section class="contract-article">
				<h4>第8条　準拠法・管轄</h4>
				<p>本契約は日本法に準拠し、名古屋地方裁判所を第一審の専属的合意管轄裁判所とする。</p>
			</section>

			<section class="contract-article">
				<h4>第9条　お問い合わせ</h4>
				<p>商用ライセンスの取得・更新・プラン変更については下記までご連絡ください。</p>
				<ul class="contract-ul">
					<li>ウェブ：<a href="https://freegroup.work" target="_blank" rel="noopener">https://freegroup.work</a></li>
				</ul>
			</section>

			<footer class="contract-footer">
				<p class="contract-disclaimer">※ 本契約書は草案であり、正式版は法的確認後に発行します。</p>
			</footer>
		</article>
	</div>
</section>

<!-- CTA -->
<section class="cta-section">
	<div class="container">
		<div class="cta-box">
			<div class="cta-box-content">
				<h2>商用ライセンスのご相談</h2>
				<p>導入規模・プラン選定・お見積りなど、お気軽にお問い合わせください。</p>
				<div class="cta-row">
					<a href="https://www.network-tokai.jp/?page_id=23" target="_blank" rel="noopener" class="btn btn-white">お問い合わせ →</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
