

function q1_result(){
	$j=jQuery.noConflict();

	var Q1 = $j('#Q1Q1').val();

	if(Q1 == "yes"){
		$j('#Q2-div').css("display", "none");
		$j('#Q4-div').css("display", "block");
	}
	else{
		$j('#Q2-div').css("display", "block");
		$j('#Q4-div').css("display", "none");
	}

}

function q2_result(){

	$j=jQuery.noConflict();

	var Q2 = $j('#Q2').val();

	if(Q2 == "yes"){
		$j('#Q3-div').css("display", "none");
		$j('#Q4-div').css("display", "block");
	}
	else{
		$j('#Q3-div').css("display", "block");
		$j('#Q4-div').css("display", "none");
	}

}

function q3_result(){

	$j=jQuery.noConflict();

	var Q3 = $j('#Q3').val();

	if(Q3 == "yes"){
		$j('#Q4-div').css("display", "block");
	}
	else{
		$j('#Q4-div').css("display", "none");
	}
}

function q4_result(){

	$j=jQuery.noConflict();

	var Q4 = $j('#Q4').val();

	if(Q4 > 1){
		$j('#Q5-div').css("display", "block");
	}
	else{
		$j('#Q5-div').css("display", "none");
	}
}

function q5_result(){

	$j=jQuery.noConflict();

	var Q5 = $j('#Q5').val();

	if(Q5 == "yes"){
		$j('#Q6-div').css("display", "block");
	}
	else{
		$j('#Q6-div').css("display", "none");
		$j('#Sumbit-div').css("display", "block");
	}
}

function q6_result(){

	$j=jQuery.noConflict();

	var Q6name = $j('#Q6-name').val();
	var Q6age = $j('#Q6-age').val();

	if(Q6name == "" || Q6age ==""){
		$j('#Sumbit-div').css("display", "none");
		alert("Please complete all forms");
	}
	else{
		$j('#Sumbit-div').css("display", "block");
	}
}


function sumbitBtn(){

	

}