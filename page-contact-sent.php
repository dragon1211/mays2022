<?php
switchLanguage();
get_header();

/*
if (!empty($_POST) && $_POST['forms']) {
  $data = json_decode( stripslashes($_POST['forms']) ,true);
  //$to ='nakano@hyge.co.jp';
  //$to2 ='nakano@hyge.co.jp';
  $to = 'info@mays.co.jp';
  $to2 = 'info@mays.co.jp';
  if ($data['type']['option']==='インテリアプランおよびお見積り依頼') $to = $to2;

  $header = "MIME-Version: 1.0\n"
    . "Content-Transfer-Encoding: BASE64\n"
    . "Content-Type: text/plain; charset=\"UTF-8\"\n"
    . "From: $to\n";
  $type = $data['type']['option'];
  $way = $data['mail']['way'];
  $planname = $data['plan']['option'];
  $plan = str_replace('\n',"\n",$data['mail']['plan']);
  $time = $data['mail']['time'];
  $you = str_replace('\n',"\n",$data['mail']['you']);
  $trigger = $data['mail']['trigger'];
  $wayplan = '';
  if ($type==='インテリアプランおよびお見積り依頼') {
    $wayplan = <<< EOM

■ ご利用方法
$way

■ プラン
【 $planname 】
$plan

■ 納入希望時期
$time

EOM;
  }
  $content = <<< EOM
■ お問合せ種別
$type
$wayplan
■ お客様情報
$you

■当社を知ったきっかけ
$trigger
EOM;

  $message = <<< EOM
※ 本メールは問い合わせフォームよりお送り頂いた方宛に自動で送信しております。
===

この度はお問合せをいただき、ありがとうございます。

下記内容にて、お問合せを受け付けました。
弊社にて確認後、順次ご返信しております。
ご迷惑をおかけいたしますが、今しばらくお待ちください。

お問合せ内容
===============================================================
$content

===============================================================
株式会社メイズ
〒105-0001　東京都港区虎ノ門3-2-2　虎ノ門30森ビル1F
ＴＥＬ：03-5402-4600
ＦＡＸ：03-5402-4660
URL:  http://www.mays.co.jp
===============================================================
EOM;

  mb_send_mail($data['you']['email'], "株式会社メイズ（自動返信メール）", $message, $header,"");
  $message = <<< EOM
お問合せ内容
===============================================================
$content

===============================================================
株式会社メイズ
〒105-0001　東京都港区虎ノ門3-2-2　虎ノ門30森ビル1F
ＴＥＬ：03-5402-4600
ＦＡＸ：03-5402-4660
URL:  https://www.mays.co.jp
===============================================================
EOM;

  mb_send_mail($to, "WEBサイトよりお問い合わせがございました", $message, $header,"");
  // debug
  switch (json_last_error()) {
    case JSON_ERROR_NONE:
      break;
    default:
      mb_send_mail($to, "デコード失敗", $_POST['forms'], $header,"");
      break;
  }
  // -debug
}
*/

?>
<div class="page-header" style="background-image: url(/images/contact/header.jpg)">
  <h1><i>Contact</i><strong>お問い合わせ</strong></h1>
</div><!-- .page-header -->
<div id="contact2">
  <section id="contact23">
    <div id="contact231">お問合せ内容が送信されました</div>
    <div id="contact232">
      <p>この度はお問合せ頂きましてありがとうございます。</p>
      <p>折り返し、お問合せ内容のご確認メールをお送りしております。<br />
        万一、メールが届かない場合、送信が完了していないことがございます。<br />
        その場合は、恐れ入りますが<span class="spcenter">メール（info@mays.co.jp）<br class="sp" />または<br class="sp" />お電話(03-5402-4600)</span>にてご連絡いただけますと幸いです。</p>
      <p>又、その他、何かご不明な点等ございましたら、お気軽にお問合せ下さい。</p>
      <p>株式会社メイズ</p>
    </div>
    <div id="contact233"><a href="/" class="svg"><img src="/images/contact5_3.svg" width="290" height="70" alt="OK トップページに戻る" /></a></div>
  </section>
  <?php /* </form> */ ?>
</div>
<?php get_footer(); ?>