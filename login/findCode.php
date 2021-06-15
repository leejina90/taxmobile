<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/header.php'; ?>

<div class="contOuter">
	<div id="login">
		<div id="loginTopLogo">
			<div id="logoText">
				<span>RainbowTax AI</span>
				<strong>Smart Manager</strong>
			</div>
		</div>
		<div id="loginForm" class="findCode">
		<?php
			if($_REQUEST["c"] == "id"){
		?>
			<div class="findOuter">
				<div class="findWhat">사용자 ID를 잊으셨습니까?</div>			
				<div class="obj">
					<label for="">성명</label>
					<input type="text" />
				</div>
				<div class="obj">
					<label for="">전화번호</label>
					<input type="text" placeholder="숫자만 입력" />
				</div>
				<div class="obj result">
					<label for="">사용자ID</label>
					<input type="text" />
				</div>
				<div class="btnOuter n1">
					<a href="<?=$rootDir?>/default.php" class="bgBlue">사용자 ID 확인</a>
				</div>
			</div>
		<?php
			}else if($_REQUEST["c"] == "pw"){
		?>
			<div class="findOuter">
				<div class="findWhat">비밀번호를 잊으셨습니까?</div>			
				<div class="obj">
					<label for="">성명</label>
					<input type="text" />
				</div>
				<div class="obj">
					<label for="">전화번호</label>
					<input type="text" placeholder="숫자만 입력" />
				</div>
				<div class="obj">
					<label for="">사용자ID</label>
					<input type="text" />
				</div>
				<div class="obj result">
					<label for="">비밀번호</label>
					<input type="password" />
				</div>
				<div class="obj result">
					<label for="">비밀번호확인</label>
					<input type="password" />
				</div>
				<div class="btnOuter n1">
					<a href="<?=$rootDir?>/default.php" class="bgBlue">비밀번호 재설정</a>
				</div>
			</div>
		<? } ?>
		</div>
	</div>
</div>

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/footer.php'; ?>