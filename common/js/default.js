function tabCont(t,o){
	$(o).closest(".tabMenu").find("td").removeClass("select");
	$(o).parent().addClass("select");
	$(o).closest("table").find(".tableInputList").addClass("hide");
	$("#"+t).removeClass("hide");
}