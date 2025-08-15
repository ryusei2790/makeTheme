<?php
/**
 * 固定フロントページ
 */
get_header();
?>

<section id="contact" class="scroll-point">
    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Contact</span></span></h2>
    <form method="post" action="" enctype="multipart/form-data">
        <ul class="form-list fadeUpTrigger">
        <li>
        <dl>
        <dt><label for="division">会社名・部署名</label></dt>
        <dd><input type="text" name="Division" id="division" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="name">ご担当者名</label></dt>
        <dd><input type="text" name="Name" id="name" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="email">メールアドレス</label></dt>
        <dd><input type="email" name="E-mail" id="email" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="tel">電話番号</label></dt>
        <dd><input type="text" name="Tel" id="tel" size="60" value="">
        </dd>
        </dl>
        </li>
        <li>
        <dl>
        <dt><label for="msg">お問い合わせ内容</label></dt>
        <dd><textarea name="Message" id="msg" cols="50" rows="5"></textarea>
        </dd>
        </dl>
        </li>
        </ul>

        <div class="submit-btn fadeUpTrigger"><input type="submit" name="submit" value="確認"></div>
        </form>
    
</section>

<?php get_footer(); ?>