<!-- 	comments.php
		コメント一覧 および コメント投稿フォーム -->
<div id="comment_area">
	<?php if(have_comments()): ?>
	
	<!-- タイトル -->
	<h3 id="comments">コメント一覧</h3>
	
	<!-- コメントリストの表示 -->
	<ol class="comments-list">
		<?php wp_list_comments('avatar_size=48'); ?>
	</ol>
	<?php endif; ?>
	
	<!-- 投稿フォームの再定義 -->
	<?php $args = array(
		'title_reply' => 'コメントを残す',
		'label_submit' => 'コメントを投稿する',
		'comment_notes_after'  => '', //<p class="commentNotesAfter">内容をご確認の上、投稿してください。</p>',
		'comment_notes_before' => '',	//メールアドレスは公開されませんの表示
		'logged_in_as' => '',			//管理者ログインしている旨の表示
		'comment_field' => '<p class="comment-form-comment">' .
							'<textarea id="comment" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . 
							' placeholder="コメントを入力してくれよな！" /></textarea></p>',
		/* 名前、メールアドレス、ウェブサイトの項目設定 */
		'fields' => array(
			'author' => '<p class="comment-form-author">名前' .
						'<input id="author" name="author" type="text" placeholder="名無しのガチホモ "value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . '  /></p>',),
			'email'  => '',
			'url'    => '',
		);
	comment_form( $args ); ?>
	
	<!-- 記述バックアップ
	'comment_notes_before' => '<p class="commentNotesBefore">入力エリアすべてが必須項目です。メールアドレスが公開されることはありません。</p>',
	'email'  => '<p class="comment-form-email">' .
	'<input id="email" name="email" ' . 
	( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . 'placeholder="＊your email" /></p>',
	-->
</div>