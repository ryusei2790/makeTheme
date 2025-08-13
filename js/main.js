/*===========================================================*/
/* 5-1-26 追従メニューの現在地ハイライト */
/*===========================================================*/

// ページ内のスクロール位置とセクション位置を管理する配列
var elemTop = [];

// 各セクションの位置を取得し、headerの高さ分を引いて調整する関数
function PositionCheck(){
    // WordPressテーマで「#header」の高さを取得
	var headerH = $("#header").outerHeight(true);

    // .scroll-pointクラスのついた各エリアのトップ位置を計算し配列に保存
	$(".scroll-point").each(function(i) {
		// 各セクションの上端位置からheader高さ＋10px分を引いて少し早めに現在地判定
		elemTop[i] = Math.round(parseInt($(this).offset().top - headerH - 10));
	});
}

// スクロール位置に合わせてナビメニューの「現在地」クラスを切り替える関数
function ScrollAnime() {
	// 現在のスクロール位置を取得
	var scroll = Math.round($(window).scrollTop());

	// WordPressテーマのナビメニュー例：#pc-nav の li要素を取得
	var NavElem = $("#pc-nav li");

	// 全てのliから「current」クラスを除去（リセット）
	$("#pc-nav li").removeClass('current');

	// 現在のスクロール位置がどのセクションにいるか判定し、「current」を付与
	if(scroll >= elemTop[0] && scroll < elemTop[1]) {
     $(NavElem[0]).addClass('current');
    } 
    else if(scroll >= elemTop[1] && scroll < elemTop[2]) {
     $(NavElem[1]).addClass('current');
    } 
    else if(scroll >= elemTop[2] && scroll < elemTop[3]) {
     $(NavElem[2]).addClass('current');
    } 
    else if(scroll >= elemTop[3] && scroll < elemTop[4]) {
     $(NavElem[3]).addClass('current');
    } 
    else if(scroll >= elemTop[4]) {
      $(NavElem[4]).addClass('current');
    } 
}

/*===========================================================*/
/* 5-1-12 クリックしたらナビが下から上に出現 */
/*===========================================================*/

// ハンバーガーボタンのクリックでメニュー表示・非表示切替
$(".openbtn").click(function () {
	$(this).toggleClass('active');            // ボタン自身に active クラス切替
    $("#g-nav").toggleClass('panelactive');  // ナビに panelactive クラス切替
});

// メニュー内リンクをクリックしたらメニュー閉じる処理
$("#g-nav a").click(function () {
    $(".openbtn").removeClass('active');     // ボタンの active クラス削除
    $("#g-nav").removeClass('panelactive');  // ナビの panelactive クラス削除
});

/*===========================================================*/
/* 9-1-5 スクロールに合わせてエリアの高さに比例して線が伸びる */
/*===========================================================*/

// WordPressテーマ内でプログレスバーを出すプラグイン（例：scrollgress）利用時の設定
$('body').scrollgress({
	height: '5px',      // 線の高さ
	color: '#eb6100',   // 線の色
});

/*===========================================================*/
/* 8-1-3 ページのスクロール位置に応じて「トップへ戻る」ボタンが右から出現 */
/*===========================================================*/

// スクロール位置を監視し、「#page-top」ボタンの表示切替
function PageTopAnime() {
	var scroll = $(window).scrollTop();

	if (scroll >= 200) {    // 200px以上スクロールしたら
		$('#page-top').removeClass('RightMove').addClass('LeftMove');
	} else {
		if ($('#page-top').hasClass('LeftMove')) {
			$('#page-top').removeClass('LeftMove').addClass('RightMove');
		}
	}
}

// 「#page-top」をクリックするとページトップへスムーススクロール
$('#page-top').click(function () {
    $('body,html').animate({scrollTop: 0}, 500);
    return false; // aタグのデフォルト動作をキャンセル
});

/*===========================================================*/
/* 9-2-2 アコーディオン動作（クリックで開閉、1つだけ開く） */
/*===========================================================*/

// .title 要素をクリックしたら対応する .box を開閉
$('.title').on('click', function() {
	$('.box').slideUp(500);   // 全て閉じる

	var findElm = $(this).next(".box");  // クリックしたタイトル直後のbox取得

	if ($(this).hasClass('close')) {
		$(this).removeClass('close');  // すでに開いていたら閉じる
	} else {
		$('.close').removeClass('close'); // 他のタイトルからcloseを外し
		$(this).addClass('close');         // 今回クリックしたタイトルにcloseをつける
		$(findElm).slideDown(500);        // 対応boxを開く
	}
});

/*===========================================================*/
/* 9-4-1 ニュースティッカー（画面幅でスライダー切替） */
/*===========================================================*/

var slider;
var sliderFlag = false;
var breakpoint = 768; // 768px以下で切替

function sliderSet() {
    var windowWidth = window.innerWidth;
    if (windowWidth >= breakpoint && !sliderFlag) {
        // PC表示で縦スライド自動再生
        slider = $('.slider').bxSlider({
			mode: 'vertical',
			controls: false,
			auto: true,
			pager: false
		});
        sliderFlag = true;
    } else if (windowWidth < breakpoint && sliderFlag) {
        // スマホ表示でスライダー解除
        slider.destroySlider();
        sliderFlag = false;
    }
}

/*===========================================================*/
/* 4 最低限おぼえておきたい動き（フェード・スライドなど） */
/*===========================================================*/

function fadeAnime(){
	// 左から背景が伸びるアニメーション
	$('.bgLRextendTrigger').each(function(){
		var elemPos = $(this).offset().top - 50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('bgLRextend');
		}else{
			$(this).removeClass('bgLRextend');
		}
	});
	// 背景がフェードインして出現
	$('.bgappearTrigger').each(function(){
		var elemPos = $(this).offset().top - 50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if(scroll >= elemPos - windowHeight){
			$(this).addClass('bgappear');
		}else{
			$(this).removeClass('bgappear');
		}
	});
	// 下からふわっと出現
	$('.fadeUpTrigger').each(function(){
		var elemPos = $(this).offset().top - 50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if(scroll >= elemPos - windowHeight){
			$(this).addClass('fadeUp');
		}else{
			$(this).removeClass('fadeUp');
		}
	});
	// 左にパタッと倒れるアニメーション
	$('.flipLeftTrigger').each(function(){
		var elemPos = $(this).offset().top - 50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if(scroll >= elemPos - windowHeight){
			$(this).addClass('flipLeft');
		}else{
			$(this).removeClass('flipLeft');
		}
	});
}

/*===========================================================*/
/* 関数の呼び出しをまとめる */
/*===========================================================*/

// 画面リサイズ時にスライダーの表示切替判定を行う
$(window).on('resize', function() {
    sliderSet();
});

// スクロール時に各種アニメーションや追従メニューの判定を実行
$(window).scroll(function () {
	PageTopAnime();
	PositionCheck();
	ScrollAnime();
	fadeAnime();
});

// ページロード直後に一度だけ実行する処理
$(window).on('load',function(){
    // ローディング画面のロゴを1.2秒後にフェードアウト
    $("#splash-logo").delay(1200).fadeOut('slow');

    // ローディング画面全体を1.5秒後にフェードアウトした後にアニメーション開始
	$("#splash").delay(1500).fadeOut('slow',function(){
        $('body').addClass('appear'); // 背景伸びる系アニメーション開始クラス
        sliderSet();
        PositionCheck();
        ScrollAnime();
        PageTopAnime();

        // アコーディオン初期状態で全開にする処理
        $(".open").each(function(index, element){
			var Title = $(element).children('.title');
			$(Title).addClass('close');
			var Box = $(element).children('.box');
			$(Box).slideDown(500);
		});
    });

    // 背景伸びるアニメーションが終了したらfadeAnimeを実行
    $('.splashbg').on('animationend', function() {        
        fadeAnime();
    });
});
