<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="subscripCont" class="contInner">
		<h2 id="subTitle">청약가설 조회</h2>
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
		
		<span class="btnOuter">
			<a href="list.php" class="bgGreen">신청</a>
			<a href="list.php" class="bgGray">이전</a>
		</span>
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>