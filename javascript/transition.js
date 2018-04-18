function suivant(id){
				
	if(id == '1x2'){
		document.getElementsByClassName("Q1x1")[0].style.display = 'none';
		document.getElementsByClassName("Q1x2")[0].style.display = 'none';
		document.getElementsByClassName("P1x2")[0].style.display = 'none';
		document.getElementsByClassName("B1x2")[0].style.display = 'none';
		document.getElementsByClassName("Q1x3")[0].style.display = 'block';
		document.getElementsByClassName("P1x3")[0].style.display = 'block';
		document.getElementsByClassName("B1x3")[0].style.display = 'block';
	}
	
	if(id == '1x3'){
		document.getElementsByClassName("Q1x3")[0].style.display = 'none';
		document.getElementsByClassName("Q1x4")[0].style.display = 'block';
	}
}
				
function precedent(id){
									
}