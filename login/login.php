<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/header.php'; ?>

<div class="contOuter">
	<div id="login">
		<div id="loginTopLogo">
			<div id="logoText">
				<span>RainbowTax AI</span>
				<strong>Smart Manager</strong>
			</div>
		</div>
		<div id="loginForm">
			<div class="obj">
				<label for="userId">ID</label>
				<input type="text" id="userId" placeholder="사용자 아이디" />
			</div>
			<div class="obj">
				<label for="userPW">PASSWORD</label>
				<input type="password" id="userPW" placeholder="사용자 비밀번호" />
			</div>
			<div class="btnOuter n1">
				<a href="<?=$rootDir?>/default.php" class="bgBlue">LOGIN</a>
			</div>
			<div id="forgotText">
				<a href="findCode.php?c=id">아이디 찾기</a>
				<a href="findCode.php?c=pw">비밀번호 찾기</a>
			</div>
		</div>
	</div>
</div>

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/footer.php'; ?>