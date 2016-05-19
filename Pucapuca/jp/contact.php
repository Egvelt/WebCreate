<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

			<br />
			
			<p>ご意見・ご要望は下記フォームをご利用ください。</p>
			<p><font size="2"><font color="red">※</font>印の項目は必ずご記入ください。</font></p>

			<form action="contact2.php" method="post">
			<div>
				<label for="name">お名前<span>*</span></label><br />
				<input id="name" type="text" name="name" />
			</div><br />
			<div>
				<label for="tel">電話番号</label><br />
				<input id="tel" type="text" name="tel" />
			</div><br />
			<div>
				<label for="mail1">メールアドレス<span>*</span></label><br />
				<input id="mail1" name="mail1" type="text" />
			</div><br />
			<div>
				<label for="mail2">メールアドレス確認用<span>*</span></label><br />
				<input id="mail2" name="mail2" type="text" />
			</div><br />
			<div>
				<label for="content">メッセージ<span>*</span></label><br />
				<textarea id="content" name="content" cols="*" rows="*"></textarea>
			</div><br />
				<!-- <table>
					<tr>
						<th><label for="name">お名前<span>*必須</span></label></th>
						<td><input id="name" type="text" name="name" /></td>
					</tr>

					<tr>
						<th><label for="tel">電話番号</label></th>
						<td><input id="tel" type="text" name="tel" /></td>
					</tr>

					<tr>
						<th><label for="mail1">メールアドレス<span>*必須</span></label></th>
						<td><input id="mail1" name="mail1" type="text" /></td>
					</tr>
	         	   
					<tr>
						<th><label for="mail2">メールアドレス確認用<span>＊必須</span></label></th>
						<td><input id="mail2" name="mail2" type="text" /></td>
					</tr>

					<tr>
	                	<th><label for="content">お問い合わせ内容<span>＊必須</span></label></th>
	                	<td><textarea id="content" name="content" cols="*" rows="*"></textarea></td>
	                </tr>
				</table> -->
				
	        <div class="button">
	            <input type="submit" value="内容を確認する" /><input type="reset" value="内容をリセットする" />　　*は必須項目です
	        </div>
	        
			</form>
		<br />
		</div>
		
		<div id="footer">
			<p>Copyright&copy; 2016 Smabi LLC All Right Reserved.</p>
		</div>
	</div>	
</body>
</html>
