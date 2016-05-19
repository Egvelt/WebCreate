<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>ASk - PucaPuca</title>
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
			
			<p>Please give us your opinion cheerfully.</p>

			<form action="egcontact2.php" method="post">
			<div>
				<label for="name">name<span>*</span></label><br />
				<input id="name" type="text" name="name" />
			</div><br />
			<div>
				<label for="tel">phone</label><br />
				<input id="tel" type="text" name="tel" />
			</div><br />
			<div>
				<label for="mail1">e-mail<span>*</span></label><br />
				<input id="mail1" name="mail1" type="text" />
			</div><br />
			<div>
				<label for="mail2">confirm e-mail<span>*</span></label><br />
				<input id="mail2" name="mail2" type="text" />
			</div><br />
			<div>
				<label for="content">message<span>*</span></label><br />
				<textarea id="content" name="content" cols="*" rows="*"></textarea>
			</div><br />
				<!-- <table>
					<tr>
						<th><label for="name">お名前<span>*必須</span></label></th>
						<td><input id="name" type="text" name="name" /></td>
					</tr>

					<tr>
						<th><label for="tel">電話番号</label></th>
						<td><input id="tel" type="text" name="tel" /></td>s
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
	            <input type="submit" value="Submit" /><input type="reset" value="Reset" />　　* essential required Thank you
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
