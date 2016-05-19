<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>お問い合わせ - Pucapuca</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="../images/favicon.ico" rel="shortcut icon" /> 
</head>

<body id="contact">

	<div id="header">
	
		<p><a href="index.html"><img src="../images/logo.png" width="290px" height="49px" /></a></p>
		
		<!-- <div id="globalMenu">
			<ul>				
				<li id="col2"><a class="showf" href="http://www.pucapuca.co.jp/shop/"><span class="front">SHOP</span>
				<span class="back">ショップ</span></a></li>
				
				<li id="col3"><a class="showf" href="http://www.pucapuca.co.jp/info/"><span class="front">INFO</span>
				<span class="back">最新情報</span></a></li>
				
				<li id="col4"><a class="showf" href="company.html"><span class="front">COMPANY</span>
				<span class="back">会社概要</span></a></li>

				<li id="col5"><a class="showf" href="contact.php"><span class="front">ASK</span>
				<span class="back">問い合わせ</span></a></li>
			</ul>
		</div> -->
	</div>
	
	<div id="wrapper">

		<div id="main">
		
			<h1>お問い合わせ</h1>

			<?PHP
		
		//全て受信
		extract($_POST);

		//宛先作成
		$to="info@pucapuca.co.jp";

		//タイトル作成
		$title="お問い合わせ";

		//本文を作成
		$text="お名前：$name

性別：$sex

生年月日：$yyyy 年 $mm 月 $dd 日

メールアドレス：$mail1

お問い合わせ内容：$content";

		$title=mb_convert_encoding($title,"EUC-JP","UTF-8");
		$text=mb_convert_encoding($text,"EUC-JP","UTF-8");

		//メール送信
		if(mb_send_mail($to,$title,$text,"FROM:$mail1")){
			echo "<h2>送信完了</h2><p>メールを送信いたしました。<br />
			このたびはお問い合わせいただき、誠にありがとうございました。</p><br />";
		}
		else{
			echo "<h2>送信失敗<h2><p>メールの送信に失敗しました。<br />
			再度お問い合わせいただくか、お電話にてご連絡ください。</p><br />";
		}

		//返信用メール作成

		//タイトル作成
		$title2="お問い合わせありがとうございます。";

		//本文を作成
		$replyText="このメールは自動送信です。
このたびはお問い合わせいただき、誠にありがとうございます。
今一度ご入力内容をご確認いただきますよう、よろしくお願いいたします。

お名前：$name

性別：$sex

生年月日：$yyyy 年 $mm 月 $dd 日

メールアドレス：$mail1

お問い合わせ内容：$content

以上

担当者より、ご連絡をさせていただきますので、今しばらくお待ちいただきますよう、よろしくお願いいたします。

";
		
		$title2=mb_convert_encoding($title2,"EUC-JP","UTF-8");
		$replyText=mb_convert_encoding($replyText,"EUC-JP","UTF-8");
		
		//送信
		mb_send_mail($mail1,$title2,$replyText,"FROM:$to");
		
		
		?>

		<br />
			
			
		</div>
		
		<div id="footer">
			<p>Copyright&copy; 2016 Smabi LLC All Right Reserved.</p>
		</div>
	</div>	
</body>
</html>
