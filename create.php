<!DOCTYPE html>
<html>
<head>
	<title>Create New Progress Reporot</title>
	<style>body{font-family:Arial}</style>
</head>
<body>

	<h1>Create New Progress Report</h1>
	<form action="_create.php" method="post" onchange="computeTotalActualCost()">


	Quarter  
	<select name="quarter">
		<option value="1">1st</option>
		<option value="2">2nd</option>
		<option value="3">3rd</option>
		<option value="4">4th</option>
	</select>

	as of
	<input name="quarter" type="date"> <br /><br />

	Project Title
	<input name="projectTitle" type="text"> <br />

	Project Beneficiary
	<input name="projectBen" type="Text"> <br />

	Refund Period
	<input name="refundPerStart" type="date">
	to
	<input name="refundPerEnd" type="date"><br />

	Province<br />
	<select>
		<option selected disabled>---</option>
		<option>Bukidnon</option>
		<option>Camiguin</option>
		<option>Lanao del Norte</option>
		<option>Misamis Oriental</option>
		<option>Misamis Occidental</option>		
	</select>


	<h2>Expected Output vs Actual Accomplishment</h2>
	<table border="0" id="ExpectedVSActual">
		<thead>
		<td>Expected Output</td>
			<td>Actual Accomplishment</td>
			<td>Remarks/Justification</td>
		</thead>

		<tr>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td><input type="text"></td>
		</tr>

	</table>
	<a href="#" onclick="addExpectedVSActual()">Add More</a>
	





	<h2>List of equipment/ facilities purchased/ fabricated with corresponding cost/ value</h2>
	Not Applicable
	<input type="checkbox" id="NA_EquipmentFacilities" onclick="hideEquip()"><br />

	<div id="DIV_EquipmentFacilities">
		<table id="EquipmentFacilities" border="0">
			<thead>
				<td colspan="3"><b>Approved S&T Intervention Related Equipment</b></td>
				<td colspan="3"><b>Actual S&T Intervention Related Equipment Acquired</b></td>
				<td rowspan="2">With ARE</td>
				<td rowspan="2">Remarks/ Justification</td>
			</thead>

			<thead>
				<td>Qty</td>
				<td>Particulars</td>
				<td>Cost</td>
				<td>Qty</td>
				<td>Particulars</td>
				<td>Cost</td>
			</thead>

			<tr>
				<td><input type="number" style="width: 60px"></td>
				<td><input type="text"></td>
				<td><input type="number" step="0.01"></td>
				<td><input type="number" style="width: 60px"></td>
				<td><input type="text"></td>
				<td><input id="costEquip" type="number" step="0.01"></td>
				<td><input type="checkbox"></td>
				<td><input type="text"></td>
			</tr>
		</table>
		<a href="#" onclick="addEquipmentFacilities()">Add More</a>
	</div><br />





	<h2>Non-Equipment items provided (packaging, etc.)</h2>
	Not Applicable
	<input type="checkbox" id="NA_NonEF" onclick="hideNonEF()"><br />

	<div id="DIV_NonEF">
		<table id="NonEF" border="0">
			<thead>
				<td colspan="3"><b>Approved Items of Expenditure</b></td>
				<td colspan="3"><b>Actual Expenditure</b></td>
				<td rowspan="2">Remarks/ Justification</td>
			</thead>

			<thead>
				<td>Qty</td>
				<td>Particulars</td>
				<td>Cost</td>
				<td>Qty</td>
				<td>Particulars</td>
				<td>Cost</td>
			</thead>

			<tr>
				<td><input type="number" style="width: 60px"></td>
				<td><input type="text"></td>
				<td><input type="number" step="0.01"></td>
				<td><input type="number" style="width: 60px"></td>
				<td><input type="text"></td>
				<td><input type="number" step="0.01"></td>
				<td><input type="text"></td>
			</tr>
		</table>
		<a href="#" onclick="addNonEF()">Add More</a>
	</div>



	<h2>Status of Liquidation</h2>
	Total Actual Project Cost<br />
	<input id="TotalActualCost" type="number" step="0.01" disabled><br><br>

	Amount Utilized per Financial Report<br />
	<input type="number"><br><br>

	Remarks on Status of Liquidation<br />
	<input type="text">







	<h2>Status of Refund</h2>

	Total amount to be refunded<br />
	<input type="number" step="0.01"><br /><br />

	Approved Refund Schedule<br />
	<input type="date"> - <input type="date"><br /><br />

	Total Amount already due (as of March 21, 2017)<br />
	<input type="number" step="0.01"><br /><br />

	Total Amount refunded<br />
	<input type="number" step="0.01"><br /><br />

	Unsettled Refund<br />
	<input type="number" step="0.01"><br /><br />

	Refund delayed since (Month and Year)<br />
	<input type="date"><br /><br />

	Remarks on Status of Refund<br />
	<input type="text"><br /><br />


	<h2>Volume and value of production including sales generated</h2>

	<div id="DIV_Volume">
		<table>
			<thead>
				<td>Name of Product</td>
				<td>Volume of Production</td>
				<td>Quarter</td>
				<td>Gross Sales</td>
				<td>Cost of Sales</td>
			</thead>
			<tr>
				<td><input type="text"></td>
				<td><input type="number"></td>
				<td>
				<select name="quarter">
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
				</select>
				</td>
				<td><input type="number" step="0.01"></td>
				<td><input type="number" step="0.01"></td>
			</tr>
		</table>
		<a href="#">Add more</a>
	</div>


	<h2>Number of new employment generated from the project</h2>

	Number of Employees (man months)<br />
	<input type="number"><br /><br />

	Number of Males<br />
	<input type="number"><br /><br />

	Number of Females<br />
	<input type="number"><br /><br />

	Number of Persons with Disability<br />
	<input type="number"><br /><br />




	<h2>Number of new indirect employment from the project</h2>

	Number of Indirect Employment<br />
	<input type="number"><br /><br />

	<b>Forward</b><br />
	Male<br />
	<input type="number"><br /><br />

	Female<br />
	<input type="number"><br /><br />

	Total<br />
	<input type="number"><br /><br />

	<b>Backward</b><br />
	Male<br />
	<input type="number"><br /><br />

	Female<br />
	<input type="number"><br /><br />

	Total<br />
	<input type="number"><br /><br />

	<h2>List of Market Penetrated</h2>
	
	<b>Existing Market</b><br />
	<input type="text"><br />
	<a href="#">Add more</a><br /><br />

	<b>New Market</b><br />
	<table>
		<thead>
			<td>Specify Place</td>
			<td>Effective Date</td>
		</thead>
		<tr>
			<td><input type="text"></td>
			<td><input type="text"></td>
		</tr>
	</table><br />
	<a href="#">Add more</a>
	<br /><br />


	<b>Narrative Remarks</b><br />
	<input type="text">



	<br /><br /><br /><br />
	<input type="submit">
	</form>


	<script>
		var ExpectedVSActual = "<tr><td><input type='text'></td><td><input type='text'></td><td><input type='text'></td></tr>";

		var EquipmentFacilities = "<tr><td><input type='number' style='width: 60px'></td><td><input type='text'></td><td><input type='number' step='0.01'></td><td><input type='number' style='width: 60px'></td><td><input type='text'></td><td><input type='number' step='0.01'></td><td><input type='checkbox'></td><td><input type='text'></td></tr>";

		var NonEF = "<tr><td><input type='number' style='width: 60px'></td><td><input type='text'></td><td><input type='number' step='0.01'></td><td><input type='number' style='width: 60px'></td><td><input type='text'></td><td><input type='number' step='0.01'></td><td><input type='text'></td></tr>";

		function addExpectedVSActual(){
			document.getElementById("ExpectedVSActual").innerHTML += ExpectedVSActual;
		}

		function addEquipmentFacilities(){
			document.getElementById("EquipmentFacilities").innerHTML += EquipmentFacilities;
		}

		function addNonEF(){
			document.getElementById("NonEF").innerHTML += NonEF;
		}

		function hideEquip() {
			var choice = document.getElementById("NA_EquipmentFacilities").checked;
			if (choice) {
				document.getElementById("DIV_EquipmentFacilities").style.display = "none";
			} else {
				document.getElementById("DIV_EquipmentFacilities").style.display = "inline";
			}
		}

		function hideNonEF() {
			var choice = document.getElementById("NA_NonEF").checked;
			if (choice) {
				document.getElementById("DIV_NonEF").style.display = "none";
			} else {
				document.getElementById("DIV_NonEF").style.display = "inline";
			}
		}

		function computeTotalActualCost(){
			var x = document.getElementById("costEquip").value;
			document.getElementById("TotalActualCost").value = x;
		}
	</script>
</body>
</html>