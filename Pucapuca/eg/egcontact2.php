<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

		//エラー用フラグ 未記入の場合１
		$flag=0;

		//名前チェック
		if(empty($name)){
			echo '<p><span>*</span>Name is essential requirements<p>';
			$flag=1;
		}
		if(empty($tel)){
			$tel="不明";
		}
		//メールアドレス確認用チェック
		if(empty($mail2)){
			echo '<p><span>*</span>comfirm e-mail is essential requirements</p>';
			$flag=1;
		}
		
		//メールアドレスチェック
		if(empty($mail1)){
			echo '<p><span>*</span>e-mail is essential requirements</p>';
			$flag=1;
		}
		//２つのアドレスが合致しているかチェック
		elseif($mail1!=$mail2){
			echo '<p><span>*</span>No match your email address</p>';
			$flag=1;
		}
		
		//問い合わせ内容チェック
		if(empty($content)){
			echo '<p><span>*</span>message is essential requirements</p>';
			$flag=1;
		}

		//エラー画面 flag=1
		if($flag==1){
			echo '<div class="button"><input type="button" onClick="self.history.back()" value="previous"/></div>';
		}
		
		//必須項目が全て記入されていれば
		else{
			
			echo'
		
		<h2>Sent</h2>
		<form action="egcontact3.php" method="post">
			<table>
				<tr>
					<th>name</th>
					<td>'.$name.'</td>
				</tr>
				<tr>
					<th>tel</th>
					<td>'.$tel.'</td>
				</tr>
				<tr>
					<th>e-mail</th>
					<td>'.$mail1.'</td>
				</tr>
				<tr>
                	<th>message</th>
                	<td>'.$content.'</td>
            	</tr>
			</table>
		
			<!-- Button -->	
    	    <div class="button">
				<input type="submit" value="Submit" /><input type="button" onClick="self.history.back()" value="previous" />
			</div>
			<!-- Button End -->
			<input type="hidden" value="'.$name.'" name="name"/>
			<input type="hidden" value="'.$tel.'" name="tel"/>
			<input type="hidden" value="'.$mail1.'" name="mail1"/>
			<input type="hidden" value="'.$content.'" name="content"/>
		</form> ';
	}
	?>

		<br />
		</div>
		
		<div id="footer">
			<p>Copyright&copy; 2016 Smabi LLC All Right Reserved.</p>
		</div>
	</div>	
</body>
</html>
