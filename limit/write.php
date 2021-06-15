<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="limitCont" class="contInner">
		<h2 id="subTitle">가설한도조회 - 신청</h2>
		<div class="tableOuter">
			<table>
				<thead>
					<tr>
						<td class="tal">피보험자정보 <small class="tcOrange">( <img src="<?=$rootDir?>/images/iconReqDot.png" alt="필수입력">  필수입력 )</small></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tal">
							<ul class="tableInputList">
								<li class="req">이름 : <input type="text" class="long"></li>
								<li class="req">주민번호 : <input type="text" maxlength="6"> - <input type="text" maxlength="7"></li>
								<li class="req">휴대폰번호 : <input type="text" maxlength="3" class="short"> - <input type="text" maxlength="4" class="short"> - <input type="text" maxlength="4" class="short"></li>
								<li class="req">직급 : <input type="text" class="long"></li>
								<li class="req">개인연소득 : <input type="text" class="tar">원</li>
								<li>소유부동산순자산가액 : <input type="text" class="tar">원</li>								
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
						<td class="tal">법인정보 <small class="tcOrange">( <img src="<?=$rootDir?>/images/iconReqDot.png" alt="필수입력">  필수입력 )</small></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tal">
							<ul class="tableInputList">
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
						<td class="tal">신청불가사유 <small class="tcOrange">( 한도조회를 할 수 없는 경우 )</small></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tal">
							피보험자 주민번호가 정확하지 않습니다.
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