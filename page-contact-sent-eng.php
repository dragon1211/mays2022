<?php
get_header('eng');
if (!empty($_POST) && $_POST['forms']) {
	$data = json_decode( stripslashes($_POST['forms']) ,true);
	//$to = 'candy@candychip.net';
	//$to2 = 'candy@ever.ocn.ne.jp';
	//$to ='nakano@hyge.co.jp';
	//$to2 ='nakano@hyge.co.jp';
	$to = 'info@mays.co.jp';
	$to2 = 'info@mays.co.jp';
	if ($data['type']['option']==='Interior plan and quote') $to = $to2;

	$header = "MIME-Version: 1.0\n"
		. "Content-Transfer-Encoding: BASE64\n"
		. "Content-Type: text/plain;\n"
		. "From: $to\n";
$type = $data['type']['option'];
$way = $data['mail']['way'];
$planname = $data['plan']['option'];
$plan = str_replace('\n',"\n",$data['mail']['plan']);
$time = $data['mail']['time'];
$you = str_replace('\n',"\n",$data['mail']['you']);
$trigger = $data['mail']['trigger'];
$wayplan = '';
if ($type==='Interior plan and quote') {
	$wayplan = <<< EOM

* Service type
$way

* Plan
【 $planname 】
$plan

* Date of the furniture delivery
$time

EOM;
}
	$content = <<< EOM
* Type of your inquiry
$type
$wayplan
* Customer information
$you

* How did you hear about us?
$trigger
EOM;

	$message = <<< EOM
This is an automatic email in response to the inquiry form you submitted.
===

Thank you very much for your inquiry.

We have received the following information and will be in contact after we have checked your inquiry.
We apologize for any inconvenience but please wait for our reply.


Your inquiry
===============================================================
$content

===============================================================
May's Corporation inc.
Toranomon 30 Mori Bldg. 1F
3-2-2 Toranomon Minato-ku, Tokyo 105-0001
TEL: +81 (0)3-5402-4600
FAX: +81 (0)3-5402-4660
URL: http://www.mays.co.jp
===============================================================
EOM;

	mb_send_mail($data['you']['email'], "May's Corporation inc.(Automatic reply mail)", $message, $header,"");
	$message = <<< EOM
Your inquiry
===============================================================
$content

===============================================================
May's Corporation inc.
Toranomon 30 Mori Bldg. 1F
3-2-2 Toranomon Minato-ku, Tokyo 105-0001
TEL: +81 (0)3-5402-4600
FAX: +81 (0)3-5402-4660
URL: http://www.mays.co.jp
===============================================================
EOM;

	mb_send_mail($to, "Inquire from the WEB site", $message, $header,"");
	// debug
	switch (json_last_error()) {
		case JSON_ERROR_NONE:
		break;
		default:
			mb_send_mail($to, "decode failure", $_POST['forms'], $header,"");
		break;
	}
	// -debug
}
?>
	<section id="contact0"></section>
	<section id="contact1" class="imgswap"><img src="/images/eng/contact1.svg" width="350" height="180" alt="Contact" /><img src="/images/eng/sp_contact1.svg" width="381" height="193" alt="Contact" /></section>
	<div id="contact2">
		<section id="contact23">
			<div id="contact231">Your inquiry has been submitted.</div>
			<div id="contact232">
				<p>Thank you very much for submitting your inquiry.</p>
				<p>You will shortly receive a confirmation email regarding your inquiry.<br />
					If you do not receive a confirmation email, we may not have received your inquiry.<br />
					In this case, please <span class="spcenter">email us at info@mays.co.jp<br class="sp" /> or <br class="sp" />call us at 03-5402-4600.</span></p>
				<p>If you have any other questions, please feel free to contact us.</p>
				<p>May's Corporation</p>
			</div>
			<div id="contact233"><a href="/eng/" class="svg"><img src="/images/eng/contact5_3.svg" width="290" height="70" alt="Back to the top" /></a></div>
		</section>
		</form>
	</div>

<?php get_footer('eng'); ?>
