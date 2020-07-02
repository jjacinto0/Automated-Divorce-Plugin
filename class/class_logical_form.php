<?php
/*
 * @package           Automated Divorce
 */

class class_logicalForm
{

	public function general_forms(){

	$echo= '';
	$echo.='<form method="post" action="/consultancy/general-consultation-result">';
	$echo.='<label>Your full name</label><br><input type="text" name="yourname" id="yourname" /><br>';
	$echo.='<label>Spouse\' full name</label><br><input type="text" name="spousename" name="spousename" /><br><br>';

	$echo.='<label>Did you and your spouse a permanent resident of Hong Kong</label><br>';
	$echo.='<select name="Q1Q1" id="Q1Q1" onchange="q1_result();" /><option value="" > - Select - </option>';
	$echo.='<option value="yes" >Yes</option>';
	$echo.='<option value="no" >No</option></select>';

	$echo.='<div id="Q2-div" style="display:none;">';
	$echo.='<label>Have you and your spouse lived in Hong Kong for more than three years?</label><br>';
	$echo.='<select name="Q2" id="Q2" onchange="q2_result();" /><option value=""> - Select - </option>';
	$echo.='<option value="yes">Yes</option>';
	$echo.='<option value="no">No</option></select>';
	$echo.='</div>';

	$echo.='<div id="Q3-div" style="display:none;">';
	$echo.='<label>Any _____ connection in Hong Kong?</label><br>';
	$echo.='<select name="Q3" id="Q3" onchange="q3_result();" /><option value=""> - Select - </option>';
	$echo.='<option value="yes">Yes</option>';
	$echo.='<option value="no">No</option></select>';
	$echo.='</div>';

	$echo.='<div id="Q4-div" style="display:none;">';
	$echo.='<label>How long do you get married?</label><br>';
	$echo.='<input type="text" name="Q4" id="Q4" onchange="q4_result();" />';
	$echo.='</div>';


	$echo.='<div id="Q5-div" style="display:none;">';
	$echo.='<label>Do you have child(ren) in you marriage?</label><br>';
	$echo.='<select name="Q5" id="Q5" onchange="q5_result();" /><option value=""> - Select - </option>';
	$echo.='<option value="yes">Yes</option>';
	$echo.='<option value="no">No</option></select>';
	$echo.='</div>';

	$echo.='<div id="Q6-div" style="display:none;">';
	$echo.='<h1>Child #1</h1><br>';
	$echo.='<label>Name</label><br>';
	$echo.='<input type="text" name="Q6-name" id="Q6-name"  /><br><br>';
	$echo.='<label>age</label><br>';
	$echo.='<input type="text" name="Q6-age" id="Q6-age" /><br><br>';
	$echo.='<button name="Q6Btn" id="Q6Btn" onclick="q6_result();">Next</button><br><br>';
	$echo.='</div>';

	$echo.='<div id="Sumbit-div">';
	$echo.='<button type="submit" name="sumbit-btn" id="sumbit-btn" >Submit</button><br><br>';
	$echo.='</div>';
	$echo.='</form>';


	return $echo; 
	
	}
}
