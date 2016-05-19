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
            
            <?PHP
		
		//全て受信
		extract($_POST);

		//エラー用フラグ 未記入の場合１
		$flag=0;

		//名前チェック
		if(empty($name)){
			echo '<p><span>必須</span>お名前を入力してください。<p>';
			$flag=1;
		}
		if(empty($tel)){
			$tel="不明";
		}
		//メールアドレス確認用チェック
		if(empty($mail2)){
			echo '<p><span>必須</span>メールアドレス確認用を入力してください。</p>';
			$flag=1;
		}
		
		//メールアドレスチェック
		if(empty($mail1)){
			echo '<p><span>必須</span>メールアドレスを入力してください。</p>';
			$flag=1;
		}
		//２つのアドレスが合致しているかチェック
		elseif($mail1!=$mail2){
			echo '<p><span>必須</span>メールアドレスが一致していません。</p>';
			$flag=1;
		}
		
		//問い合わせ内容チェック
		if(empty($content)){
			echo '<p><span>必須</span>お問い合わせ内容を入力してください。</p>';
			$flag=1;
		}

		//エラー画面 flag=1
		if($flag==1){
			echo '<div class="button"><input type="button" onClick="self.history.back()" value="入力画面に戻る"/></div>';
		}
		
		//必須項目が全て記入されていれば
		else{
			
			echo'
		
		<h2>送信確認</h2>
		<form action="contact3.php" method="post">
			<table>
				<tr>
					<th>お名前</th>
					<td>'.$name.'</td>
				</tr>
				<tr>
					<th>電話番号</th>
					<td>'.$tel.'</td>
				</tr>
				<tr>
					<th>メールアドレス</th>
					<td>'.$mail1.'</td>
				</tr>
				<tr>
                	<th>お問い合わせ内容</th>
                	<td>'.$content.'</td>
            	</tr>
			</table>
		
			<!-- Button -->	
    	    <div class="button">
				<input type="submit" value="送信する" /><input type="button" onClick="self.history.back()" value="入力画面に戻る" />
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
