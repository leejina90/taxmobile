<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="main" class="contInner">
		<div id="mainMenuBtn" class="clear">
			<ul>
				<li id="limit"><a href="<?=$rootDir?>/limit/list.php"><span>가설한도 조회</span></a></li>
				<li id="order"><a href="<?=$rootDir?>/subscription/list.php"><span>청약가설 조회</span></a></li>
				<li id="print"><a href="<?=$rootDir?>/print/list.php"><span>청약서출력</span></a></li>
				<li id="alarm"><a href="<?=$rootDir?>/alarm/list.php"><span>스마트 알림</span></a></li>
			</ul>
		</div><!-- mainMenuBtn -->
		<div class="tableOuter">
			<table>
				<thead>
					<tr>
						<td class="tal">스마트 알림</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tal allShow"><a href=""><b>[홍길동]</b>님 가설한도생성이 완료되었습니다.</a></td>
					</tr>
					<tr>
						<td class="tal allShow"><a href=""><b>[홍길동]</b>님 청약가설이 완료되었습니다.</a></td>
					</tr>
				</tbody>
			</table>
		</div><!-- tableOuter -->
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>