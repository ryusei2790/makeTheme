<?php
/**
 * 固定フロントページ
 */
get_header();
?>

<section id="faq" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">FAQ</span></span></h2>
    <ul class="accordion-area">
			<li class="fadeUpTrigger">
					<section class="open">
						<h3 class="title">お見積もりの目安を教えてください。</h3>
						<div class="box">
							<p>内容によって変化いたしますのでまずはお問い合わせフォームよりご相談ください。</p>
						</div>
					</section>
				</li>
				<li class="fadeUpTrigger">
					<section>
						<h3 class="title">地方ですが発注は可能でしょうか</h3>
						<div class="box">
							<p>可能です。お気軽にご相談ください。</p>
						</div>
					</section>
				</li>
				<li class="fadeUpTrigger">
					<section>
						<h3 class="title">セミナーやイベントの出演を依頼したいのですが</h3>
						<div class="box">
							<p>お問い合わせフォームより日時や内容などをご記入いただきご相談ください。</p>
						</div>
					</section>
					
				</li>
				<li class="fadeUpTrigger">
					<section>
						<h3 class="title">WEBメディアに記事を書いて頂くことは可能でしょうか？</h3>
						<div class="box">
							<p>ご相談内容によっては可能です。まずはお気軽にお問い合わせフォームよりご相談ください。</p>
						</div>
					</section>
					
				</li>

			</ul>
			<form id="faq-form">
				<input type="text" id="faq-query" placeholder="質問を入力..." required>
				<button type="submit">検索</button>
			</form>
			<div id="faq-result"></div>
</section>

<?php get_footer(); ?>