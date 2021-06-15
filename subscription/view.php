<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="subscripCont" class="contInner">
		<h2 id="subTitle">청약가설 조회</h2>
		<div class="tableOuter">
			<table>
				<thead>
					<tr>
						<td class="tal">수수료 지급예정 안내문 </td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tac">
							<span class="maxImg">
								<img src="<?=$rootDir?>/images/print_sample.jpg" alt="청약서 샘플">
							</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<span class="btnOuter">
			<a href="write.php" class="bgGreen">청약서출력신청</a>
			<a href="list.php" class="bgGray">이전</a>
		</span>
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>