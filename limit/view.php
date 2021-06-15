<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="limitCont" class="contInner">
		<h2 id="subTitle">가설한도조회</h2>
		<div class="tableOuter">
			<table>
				<thead class="tabMenu">
					<tr>
						<td class="tac select"><a href="javascript:void(0);" onCLick="tabCont('tabCont1',this);">피보험자정보</a></td>
						<td class="tac"><a href="javascript:void(0);" onCLick="tabCont('tabCont2',this);">법인정보</a></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tal" colspan="2">
							<ul id="tabCont1" class="tableInputList">
								<li class="req">이름 : <input type="text" class="long"></li>
								<li class="req">주민번호 : <input type="text" maxlength="6"> - <input type="text" maxlength="7"></li>
								<li class="req">휴대폰번호 : <input type="text" maxlength="3" class="short"> - <input type="text" maxlength="4" class="short"> - <input type="text" maxlength="4" class="short"></li>
								<li class="req">직급 : <input type="text" class="long"></li>
								<li class="req">개인연소득 : <input type="text" class="tar">원</li>
								<li>소유부동산순자산가액 : <input type="text" class="tar">원</li>								
							</ul>
							<ul id="tabCont2" class="tableInputList hide">
								<li class="req">법인명 : <input type="text" class="long"></li>
								<li class="req">사업자번호 : <input type="text" class="long"></li>
								<li class="req">당기순이익 : <input type="text" class="tar">원</li>
								<li class="req">피보험지분율 : <input type="text"</li>
								<li class="req">직전년도순이익: <input type="text" class="tar">원</li>
								<li>3년전 순이익: <input type="text" class="tar">원</li>
								<li>2년전 순이익: <input type="text" class="tar">원</li>				
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
						<td class="tal">기가입보험정보</td>
					</tr>
				</thead>
				<tr>
					<td class="tal">
						<ul class="tableInputList">
							<li>기가입보험사 : 신한경정</li>
							<li>기가입보험가액 : 000,000,000,000원</li>
						</ul>
					</td>
				</tr>
			</table>
		</div>
		<div class="tblHeadText">* 금액단위 만원</div>
		<div class="tableOuter">
			<table class="small">
				<colgroup>
					<col width="35"/>
					<col width="*"/>
					<col width="80"/>
					<col width="80"/>
					<col width="80"/>
				</colgroup>
				<thead>
					<tr class="tac">
						<td>선택</td>
						<td>보험사</td>
						<td>보장금액</td>
						<td>보험료 한도</td>
						<td>월보험료</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tac"><input type="checkbox" class="addStyle" id="acc1"><label for="acc1"></label></td>
						<td class="tal">신한경정</td>
						<td class="tar">1,000 </td>
						<td class="tar">1,000 </td>
						<td class="tac"><input type="text" class="tar w90p"></td>
					</tr>
					<tr>
						<td class="tac"><input type="checkbox" class="addStyle" id="acc2"><label for="acc2"></label></td>
						<td class="tal">신한경정</td>
						<td class="tar">1,000 </td>
						<td class="tar">1,000 </td>
						<td class="tac"><input type="text" class="tar w90p"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<span class="btnOuter">
			<a href="list.php" class="bgGreen">청약가설신청</a>
			<a href="list.php" class="bgGray">이전</a>
		</span>
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>