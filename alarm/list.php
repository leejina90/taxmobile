<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_top.php'; ?>

	<div id="alarmCont" class="contInner">
		<h2 id="subTitle">스마트 알림</h2>
		<div class="formOuter" class="clear">
			<div class="inner">
				<span class="setDate">
					<input type="date" value="<?=date("Y-m-d")?>"> ~ <input type="date" value="<?=date("Y-m-d")?>">
				</span>
				<span class="setKeyword">
					<input type="search" placeholder="검색키워드 입력">
				</span>
				<span class="btnOuter n1">
					<a href="" class="bgBlue">조회</a>
				</span>
			</div>
		</div><!-- formOuter -->
		<div class="tableOuter">
			<table>
				<colgroup>
					<col width="100" />
					<col width="*" />
				</colgroup>
				<thead>
					<tr>
						<td class="tac">일자</td>
						<td class="tac">내용</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="tac">20-12-01<br/>15:30</td>
						<td class="tal allShow"><a href=""><b>[홍길동]</b>님 가설한도생성이 완료되었습니다.</a></td>
					</tr>
					<tr>
						<td class="tac">20-12-01<br/>15:30</td>
						<td class="tal allShow"><a href=""><b>[홍길동]</b>님 청약가설이 완료되었습니다.</a></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2" class="more"><a href="">more<small>▼</small></td>
					</tr>
				</tfoot>
			</table>
		</div><!-- tableOuter -->
	</div><!-- contInner -->

<?php require $_SERVER["DOCUMENT_ROOT"].'/mobile/common/inc/inc_bottom.php'; ?>