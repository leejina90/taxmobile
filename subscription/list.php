<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="subscripCont" class="contInner">
		<h2 id="subTitle">청약가설 조회</h2>
		<div class="formOuter" class="clear">
			<div class="inner">
				<span class="setSelKeyword">
					<select name="" id="">
						<option value="">법인명</option>
					</select>
					<input type="search" placeholder="검색키워드 입력">
				</span>
				<span class="btnOuter">
					<a href="" class="bgBlue">조회</a>
					<a href="" class="bgGreen">신청</a>
				</span>
			</div>
		</div><!-- formOuter -->
		<div class="tableOuter">
			<table>
				<colgroup>
					<col width="90" />
					<col width="*" />
					<col width="80" />
					<col width="90" />
				</colgroup>
				<thead>
					<tr>
						<td class="tac">신청일</td>
						<td class="tac">법인명</td>
						<td class="tac">피보험자</td>
						<td class="tac">상태</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tac">2020-11-28</td>
						<td class="tal">선경</td>
						<td class="tac">이순신</td>
						<td class="tac"><a href="<?=$rootDir?>/limit/view.php" class="btn bgLorange">가설접수</a></td>
					</tr>
					<tr>
						<td class="tac">2020-11-10</td>
						<td class="tal">경원</td>
						<td class="tac">이기자</td>
						<td class="tac"><a href="view.php" class="btn bgLblue">가설조회</a></td>
					</tr>
					<tr>
						<td class="tac">2020-11-10</td>
						<td class="tal">경원</td>
						<td class="tac">이기자</td>
						<td class="tac"><a href="<?=$rootDir?>/limit/view.php" class="btn bgLgray">가설신청</a></td>
					</tr>
					<tr>
						<td class="tac">2020-11-10</td>
						<td class="tal">경원</td>
						<td class="tac">이기자</td>
						<td class="tac"><a href="<?=$rootDir?>/limit/view.php" class="btn bgLred">신청반려</a></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4" class="more"><a href="">more<small>▼</small></td>
					</tr>
				</tfoot>
			</table>
		</div><!-- tableOuter -->
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>