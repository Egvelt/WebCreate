<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>ASK - Pucapuca</title>
<link href="css/eglayout.css" rel="stylesheet" type="text/css" />
<link href="../images/favicon.ico" rel="shortcut icon" /> 
</head>

<body id="contact">

	<div id="header">
	
		<p><a href="index.html"><img src="../images/logo.png" width="290px" height="49px" /></a></p>
		<div id="globalMenu">
			<ul>
				<li id="col1"><a href="egwholesale.html">DISTRIBUTOR</a></li>
			
				<li id="col3"><a href="http://puca24eg.jimdo.com/shop/">SHOP</a></li>

				<li id="col4"><a href="http://www.pucapuca.co.jp/info/">INFO</a></li>

				<li id="col5"><a href="egcompany.html">COMPANY</a></li>

				<li id="col6"><a href="egcontact.php">ASK</a></li>
			</ul>
		</div>
	</div>
	
	<div id="wrapper">

		<div id="main">
		
			<h1>ASK</h1>

			<?PHP
		
		//全て受信
		extract($_POST);

		//宛先作成
		$to="info@pucapuca.co.jp";

		//タイトル作成
		$title="ASK";

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
			echo "<h2>send complete,Thank you.</h2>";
		}
		else{
			echo "<h2>send fail<h2><p>please check again.<br />
			</p><br />";
		}

		//返信用メール作成

		//タイトル作成
		$title2="Thank you for your message.";

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
