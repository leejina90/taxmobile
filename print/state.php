<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="printCont" class="contInner">
		<h2 id="subTitle">청약서</h2>
		<div class="tableOuter">
			<table>
				<thead>
					<tr>
						<td class="tal">출력신청정보</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tal">
							<ul class="tableInputList">								
								<li class="req">법인주소 : <input type="text" class="long"><a href="" class="btnPostnum">우편번호</a></li>
								<li class="req">주소상세 : <input type="text" class="long"></li>
								<li class="req">전화번호 : <input type="text" maxlength="3" class="short"> - <input type="text" maxlength="4" class="short"> - <input type="text" maxlength="4" class="short"></li>
								<li class="req">대표자명 : <input type="text" class="long"></li>
								<li class="req">연락처 : <input type="text" maxlength="3" class="short"> - <input type="text" maxlength="4" class="short"> - <input type="text" maxlength="4" class="short"></li>
								<li class="req">설계사명 : <input type="text" class="long"></li>
								<li class="req">설계사주민번호 <input type="text" maxlength="6" class="short2"> - <input type="text" maxlength="7" class="short2"></li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tableOuter">
			<table>
				<thead>
					<tr>
						<td class="tal">반려사유</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tal">
							법인정보(주소,대표자명)가 정확하지 않습니다.
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="tableOuter">
			<table>
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
		<span class="btnOuter n1">
			<a href="list.php" class="bgGray">이전</a>
		</span>
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>