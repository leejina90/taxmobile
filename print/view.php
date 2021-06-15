<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="printCont" class="contInner">
		<h2 id="subTitle">청약서</h2>
		<div class="tableOuter">
			<table>
				<thead>
					<tr>
						<td class="tal">청약서 PDF파일 다운로드</td>
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
			<a href="write.php" class="bgGreen">다운로드</a>
			<a href="list.php" class="bgGray">이전</a>
		</span>
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>