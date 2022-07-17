<!DOCTYPE html>
<html>
<head>

	<title>Student Register management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body class="p-1">

	<form name="Student" method="post" >
		<div class="container">
			<div class="row">
				<table border="10" class="bg-info text-white display-7 font-weight-bold">
					<thead >
						<h3 style="text-align: center; width: 1367px;" class="bg-info text-white display-7 font-weight-bold">
							<b>HRDC</b>
						</h3>
					</thead>
					<tr>
						<td>No.</td> <td>Student</td> <td>Offering</td>
						<td>Mark Register<br><input type="date" id ="imark" name=""></td>
						<td>Mark Register<br><input type="date" id ="imark" name=""></td>
						<td>Mark Register<br><input type="date" id ="imark" name=""></td>
						<td>Mark Register<br><input type="date" id ="imark" name=""></td>
						<td>Mark Register<br><input type="date" id ="imark" name=""></td>
						<td>Mark Register<br><input type="date" id ="imark" name=""></td>
						<td>Mark Register<br><input type="date" id ="imark" name=""></td>
					</tr>

					<tr>
							<td><center>1</center></td>
							<td class="p-2 mb-2 bg-white text-black"><input type="text" name="" placeholder="Enter the name"></td>
							<td class="text-center"><input type="text" name="" placeholder="number" size="3"></td>

							<td><select name="Row1Co1" id="iRow1Co1" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark1(this.value);">
								<option value="space"></option>
								<option value="present1">/</option>
								<option value="absent1">0</option>
								<option value="authorised1">A</option>
								<option value="sick1">S</option>
								<option value="late1">L</option>
								<option value="transfer1">T</option>
							</select></td>

							<td><select name="Row1Co2" id="iRow1Co2" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark2(this.value);">
								<option value="space"></option>
								<option value="present2">/</option>
								<option value="absent2">0</option>
								<option value="authorised2">A</option>
								<option value="sick2">S</option>
								<option value="late2">L</option>
								<option value="transfer2">T</option>
							</select></td>

							<td><select name="Row1Co3" id="iRow1Co3" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark3(this.value);">
								<option value="space"></option>
								<option value="present3">/</option>
								<option value="absent3">0</option>
								<option value="authorised3">A</option>
								<option value="sick3">S</option>
								<option value="late3">L</option>
								<option value="transfer3">T</option>
							</select></td>

							<td><select name="Row1Co4" id="iRow1Co4" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark4(this.value);">
								<option value="space"></option>
								<option value="present4">/</option>
								<option value="absent4">0</option>
								<option value="authorised4">A</option>
								<option value="sick4">S</option>
								<option value="late4">L</option>
								<option value="transfer4">T</option>
							</select></td>

							<td><select name="Row1Co5" id="iRow1Co5" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark5(this.value);">
								<option value="space"></option>
								<option value="present5">/</option>
								<option value="absent5">0</option>
								<option value="authorised5">A</option>
								<option value="sick5">S</option>
								<option value="late5">L</option>
								<option value="transfer5">T</option>
							</select></td>

							<td><select name="Row1Co6" id="iRow1Co6" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark6(this.value);">
								<option value="space"></option>
								<option value="present6">/</option>
								<option value="absent6">0</option>
								<option value="authorised6">A</option>
								<option value="sick6">S</option>
								<option value="late6">L</option>
								<option value="transfer6">T</option>
							</select></td>

							<td><select name="Row1Co7" id="iRow1Co7" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark7(this.value);">
								<option value="space"></option>
								<option value="present7">/</option>
								<option value="absent7">0</option>
								<option value="authorised7">A</option>
								<option value="sick7">S</option>
								<option value="late7">L</option>
								<option value="transfer7">T</option>
							</select></td>
					</tr>


					<tr>
							<td><center>2</center></td>
							<td class="p-2 mb-2 bg-white text-black"><input type="text" name="" placeholder="Enter the name"></td>
							<td class="text-center"><input type="text" name="" placeholder="number" size="3"></td>

							<td><select name="Row2Co1" id="iRow2Co1" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark1(this.value);">
								<option value="space"></option>
								<option value="present1">/</option>
								<option value="absent1">0</option>
								<option value="authorised1">A</option>
								<option value="sick1">S</option>
								<option value="late1">L</option>
								<option value="transfer1">T</option>
							</select></td>

							<td><select name="Row2Co2" id="iRow2Co2" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark2(this.value);">
								<option value="space"></option>
								<option value="present2">/</option>
								<option value="absent2">0</option>
								<option value="authorised2">A</option>
								<option value="sick2">S</option>
								<option value="late2">L</option>
								<option value="transfer2">T</option>
							</select></td>

							<td><select name="Row2Co3" id="iRow2Co3" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark3(this.value);">
								<option value="space"></option>
								<option value="present3">/</option>
								<option value="absent3">0</option>
								<option value="authorised3">A</option>
								<option value="sick3">S</option>
								<option value="late3">L</option>
								<option value="transfer3">T</option>
							</select></td>

							<td><select name="Row2Co4" id="iRow2Co4" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark4(this.value);">
								<option value="space"></option>
								<option value="present4">/</option>
								<option value="absent4">0</option>
								<option value="authorised4">A</option>
								<option value="sick4">S</option>
								<option value="late4">L</option>
								<option value="transfer4">T</option>
							</select></td>

							<td><select name="Row2Co5" id="iRow2Co5" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark5(this.value);">
								<option value="space"></option>
								<option value="present5">/</option>
								<option value="absent5">0</option>
								<option value="authorised5">A</option>
								<option value="sick5">S</option>
								<option value="late5">L</option>
								<option value="transfer5">T</option>
							</select></td>

							<td><select name="Row2Co6" id="iRow2Co6" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark6(this.value);">
								<option value="space"></option>
								<option value="present6">/</option>
								<option value="absent6">0</option>
								<option value="authorised6">A</option>
								<option value="sick6">S</option>
								<option value="late6">L</option>
								<option value="transfer6">T</option>
							</select></td>

							<td><select name="Row2Co7" id="iRow2Co7" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark7(this.value);">
								<option value="space"></option>
								<option value="present7">/</option>
								<option value="absent7">0</option>
								<option value="authorised7">A</option>
								<option value="sick7">S</option>
								<option value="late7">L</option>
								<option value="transfer7">T</option>
							</select></td>
					</tr>


					<tr>
							<td><center>3</center></td>
							<td class="p-2 mb-2 bg-white text-black"><input type="text" name="" placeholder="Enter the name"></td>
							<td class="text-center"><input type="text" name="" placeholder="number" size="3"></td>

							<td><select name="Row3Co1" id="iRow3Co1" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark1(this.value);">
								<option value="space"></option>
								<option value="present1">/</option>
								<option value="absent1">0</option>
								<option value="authorised1">A</option>
								<option value="sick1">S</option>
								<option value="late1">L</option>
								<option value="transfer1">T</option>
							</select></td>

							<td><select name="Row3Co2" id="iRow3Co2" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark2(this.value);">
								<option value="space"></option>
								<option value="present2">/</option>
								<option value="absent2">0</option>
								<option value="authorised2">A</option>
								<option value="sick2">S</option>
								<option value="late2">L</option>
								<option value="transfer2">T</option>
							</select></td>

							<td><select name="Row3Co3" id="iRow3Co3" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark3(this.value);">
								<option value="space"></option>
								<option value="present3">/</option>
								<option value="absent3">0</option>
								<option value="authorised3">A</option>
								<option value="sick3">S</option>
								<option value="late3">L</option>
								<option value="transfer3">T</option>
							</select></td>

							<td><select name="Row3Co4" id="iRow3Co4" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark4(this.value);">
								<option value="space"></option>
								<option value="present4">/</option>
								<option value="absent4">0</option>
								<option value="authorised4">A</option>
								<option value="sick4">S</option>
								<option value="late4">L</option>
								<option value="transfer4">T</option>
							</select></td>

							<td><select name="Row3Co5" id="iRow3Co5" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark5(this.value);">
								<option value="space"></option>
								<option value="present5">/</option>
								<option value="absent5">0</option>
								<option value="authorised5">A</option>
								<option value="sick5">S</option>
								<option value="late5">L</option>
								<option value="transfer5">T</option>
							</select></td>

							<td><select name="Row3Co6" id="iRow3Co6" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark6(this.value);">
								<option value="space"></option>
								<option value="present6">/</option>
								<option value="absent6">0</option>
								<option value="authorised6">A</option>
								<option value="sick6">S</option>
								<option value="late6">L</option>
								<option value="transfer6">T</option>
							</select></td>

							<td><select name="Row3Co7" id="iRow3Co7" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark7(this.value);">
								<option value="space"></option>
								<option value="present7">/</option>
								<option value="absent7">0</option>
								<option value="authorised7">A</option>
								<option value="sick7">S</option>
								<option value="late7">L</option>
								<option value="transfer7">T</option>
							</select></td>
					</tr>


					<tr>
							<td><center>4</center></td>
							<td class="p-2 mb-2 bg-white text-black"><input type="text" name="" placeholder="Enter the name"></td>
							<td class="text-center"><input type="text" name="" placeholder="number" size="3"></td></td>

							<td><select name="Row4Co1" id="iRow4Co1" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark1(this.value);">
								<option value="space"></option>
								<option value="present1">/</option>
								<option value="absent1">0</option>
								<option value="authorised1">A</option>
								<option value="sick1">S</option>
								<option value="late1">L</option>
								<option value="transfer1">T</option>
							</select></td>

							<td><select name="Row4Co2" id="iRow4Co2" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark2(this.value);">
								<option value="space"></option>
								<option value="present2">/</option>
								<option value="absent2">0</option>
								<option value="authorised2">A</option>
								<option value="sick2">S</option>
								<option value="late2">L</option>
								<option value="transfer2">T</option>
							</select></td>

							<td><select name="Row4Co3" id="iRow4Co3" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark3(this.value);">
								<option value="space"></option>
								<option value="present3">/</option>
								<option value="absent3">0</option>
								<option value="authorised3">A</option>
								<option value="sick3">S</option>
								<option value="late3">L</option>
								<option value="transfer3">T</option>
							</select></td>

							<td><select name="Row4Co4" id="iRow4Co4" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark4(this.value);">
								<option value="space"></option>
								<option value="present4">/</option>
								<option value="absent4">0</option>
								<option value="authorised4">A</option>
								<option value="sick4">S</option>
								<option value="late4">L</option>
								<option value="transfer4">T</option>
							</select></td>

							<td><select name="Row4Co5" id="iRow4Co5" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark5(this.value);">
								<option value="space"></option>
								<option value="present5">/</option>
								<option value="absent5">0</option>
								<option value="authorised5">A</option>
								<option value="sick5">S</option>
								<option value="late5">L</option>
								<option value="transfer5">T</option>
							</select></td>

							<td><select name="Row4Co6" id="iRow4Co6" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark6(this.value);">
								<option value="space"></option>
								<option value="present6">/</option>
								<option value="absent6">0</option>
								<option value="authorised6">A</option>
								<option value="sick6">S</option>
								<option value="late6">L</option>
								<option value="transfer6">T</option>
							</select></td>

							<td><select name="Row4Co7" id="iRow4Co7" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark7(this.value);">
								<option value="space"></option>
								<option value="present7">/</option>
								<option value="absent7">0</option>
								<option value="authorised7">A</option>
								<option value="sick7">S</option>
								<option value="late7">L</option>
								<option value="transfer7">T</option>
							</select></td>
					</tr>


					<tr>
							<td><center>5</center></td>
							<td class="p-2 mb-2 bg-white text-black"><input type="text" name="" placeholder="Enter the name"></td>
							<td class="text-center"><input type="text" name="" placeholder="number" size="3"></td>

							<td><select name="Row5Co1" id="iRow5Co1" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark1(this.value);">
								<option value="space"></option>
								<option value="present1">/</option>
								<option value="absent1">0</option>
								<option value="authorised1">A</option>
								<option value="sick1">S</option>
								<option value="late1">L</option>
								<option value="transfer1">T</option>
							</select></td>

							<td><select name="Row5Co2" id="iRow5Co2" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark2(this.value);">
								<option value="space"></option>
								<option value="present2">/</option>
								<option value="absent2">0</option>
								<option value="authorised2">A</option>
								<option value="sick2">S</option>
								<option value="late2">L</option>
								<option value="transfer2">T</option>
							</select></td>

							<td><select name="Row5Co3" id="iRow5Co3" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark3(this.value);">
								<option value="space"></option>
								<option value="present3">/</option>
								<option value="absent3">0</option>
								<option value="authorised3">A</option>
								<option value="sick3">S</option>
								<option value="late3">L</option>
								<option value="transfer3">T</option>
							</select></td>

							<td><select name="Row5Co4" id="iRow5Co4" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark4(this.value);">
								<option value="space"></option>
								<option value="present4">/</option>
								<option value="absent4">0</option>
								<option value="authorised4">A</option>
								<option value="sick4">S</option>
								<option value="late4">L</option>
								<option value="transfer4">T</option>
							</select></td>

							<td><select name="Row5Co5" id="iRow5Co5" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark5(this.value);">
								<option value="space"></option>
								<option value="present5">/</option>
								<option value="absent5">0</option>
								<option value="authorised5">A</option>
								<option value="sick5">S</option>
								<option value="late5">L</option>
								<option value="transfer5">T</option>
							</select></td>

							<td><select name="Row5Co6" id="iRow5Co6" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark6(this.value);">
								<option value="space"></option>
								<option value="present6">/</option>
								<option value="absent6">0</option>
								<option value="authorised6">A</option>
								<option value="sick6">S</option>
								<option value="late6">L</option>
								<option value="transfer6">T</option>
							</select></td>

							<td><select name="Row5Co7" id="iRow5Co7" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark7(this.value);">
								<option value="space"></option>
								<option value="present7">/</option>
								<option value="absent7">0</option>
								<option value="authorised7">A</option>
								<option value="sick7">S</option>
								<option value="late7">L</option>
								<option value="transfer7">T</option>
							</select></td>
					</tr>


					<tr>
							<td><center>6</center></td>
							<td class="p-2 mb-2 bg-white text-black"><input type="text" name="" placeholder="Enter the name"></td>
							<td class="text-center"><input type="text" name="" placeholder="number" size="3"></td>

							<td><select name="Row6Co1" id="iRow6Co1" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark1(this.value);">
								<option value="space"></option>
								<option value="present1">/</option>
								<option value="absent1">0</option>
								<option value="authorised1">A</option>
								<option value="sick1">S</option>
								<option value="late1">L</option>
								<option value="transfer1">T</option>
							</select></td>

							<td><select name="Row6Co2" id="iRow6Co2" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark2(this.value);">
								<option value="space"></option>
								<option value="present2">/</option>
								<option value="absent2">0</option>
								<option value="authorised2">A</option>
								<option value="sick2">S</option>
								<option value="late2">L</option>
								<option value="transfer2">T</option>
							</select></td>

							<td><select name="Row6Co3" id="iRow6Co3" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark3(this.value);">
								<option value="space"></option>
								<option value="present3">/</option>
								<option value="absent3">0</option>
								<option value="authorised3">A</option>
								<option value="sick3">S</option>
								<option value="late3">L</option>
								<option value="transfer3">T</option>
							</select></td>

							<td><select name="Row6Co4" id="iRow6Co4" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark4(this.value);">
								<option value="space"></option>
								<option value="present4">/</option>
								<option value="absent4">0</option>
								<option value="authorised4">A</option>
								<option value="sick4">S</option>
								<option value="late4">L</option>
								<option value="transfer4">T</option>
							</select></td>

							<td><select name="Row6Co5" id="iRow6Co5" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark5(this.value);">
								<option value="space"></option>
								<option value="present5">/</option>
								<option value="absent5">0</option>
								<option value="authorised5">A</option>
								<option value="sick5">S</option>
								<option value="late5">L</option>
								<option value="transfer5">T</option>
							</select></td>

							<td><select name="Row6Co6" id="iRow6Co6" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark6(this.value);">
								<option value="space"></option>
								<option value="present6">/</option>
								<option value="absent6">0</option>
								<option value="authorised6">A</option>
								<option value="sick6">S</option>
								<option value="late6">L</option>
								<option value="transfer6">T</option>
							</select></td>

							<td><select name="Row6Co7" id="iRow6Co7" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark7(this.value);">
								<option value="space"></option>
								<option value="present7">/</option>
								<option value="absent7">0</option>
								<option value="authorised7">A</option>
								<option value="sick7">S</option>
								<option value="late7">L</option>
								<option value="transfer7">T</option>
							</select></td>
					</tr>


					<tr>
							<td><center>7</center></td>
							<td class="p-2 mb-2 bg-white text-black"><input type="text" name="" placeholder="Enter the name"></td>
							<td class="text-center"><input type="text" name="" placeholder="number" size="3"></td>

							<td><select name="Row7Co1" id="iRow7Co1" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark1(this.value);">
								<option value="space"></option>
								<option value="present1">/</option>
								<option value="absent1">0</option>
								<option value="authorised1">A</option>
								<option value="sick1">S</option>
								<option value="late1">L</option>
								<option value="transfer1">T</option>
							</select></td>

							<td><select name="Row7Co2" id="iRow7Co2" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark2(this.value);">
								<option value="space"></option>
								<option value="present2">/</option>
								<option value="absent2">0</option>
								<option value="authorised2">A</option>
								<option value="sick2">S</option>
								<option value="late2">L</option>
								<option value="transfer2">T</option>
							</select></td>

							<td><select name="Row7Co3" id="iRow7Co3" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark3(this.value);">
								<option value="space"></option>
								<option value="present3">/</option>
								<option value="absent3">0</option>
								<option value="authorised3">A</option>
								<option value="sick3">S</option>
								<option value="late3">L</option>
								<option value="transfer3">T</option>
							</select></td>

							<td><select name="Row7Co4" id="iRow7Co4" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark4(this.value);">
								<option value="space"></option>
								<option value="present4">/</option>
								<option value="absent4">0</option>
								<option value="authorised4">A</option>
								<option value="sick4">S</option>
								<option value="late4">L</option>
								<option value="transfer4">T</option>
							</select></td>

							<td><select name="Row7Co5" id="iRow7Co5" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark5(this.value);">
								<option value="space"></option>
								<option value="present5">/</option>
								<option value="absent5">0</option>
								<option value="authorised5">A</option>
								<option value="sick5">S</option>
								<option value="late5">L</option>
								<option value="transfer5">T</option>
							</select></td>

							<td><select name="Row7Co6" id="iRow7Co6" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark6(this.value);">
								<option value="space"></option>
								<option value="present6">/</option>
								<option value="absent6">0</option>
								<option value="authorised6">A</option>
								<option value="sick6">S</option>
								<option value="late6">L</option>
								<option value="transfer6">T</option>
							</select></td>

							<td><select name="Row7Co7" id="iRow7Co7" style="width: 120px; margin: 1px;
							text-align: right;" onchange="myMark7(this.value);">
								<option value="space"></option>
								<option value="present7">/</option>
								<option value="absent7">0</option>
								<option value="authorised7">A</option>
								<option value="sick7">S</option>
								<option value="late7">L</option>
								<option value="transfer7">T</option>
							</select></td>
					</tr>

					<tr>
						<td colspan="3" class="p-2 mb-2 bg-white text-dark" style="background-color: white;
						text-align: center;">Attendance Total</td>

						<td>
							<input type="text" name="txtregister1" id="txt1" style="width: 155px;
							  text-align: right;" value="0" >
						</td>

						<td>
							<input type="text" name="txtregister2" id="txt2" style="width: 155px;
							  text-align: right;" value="0" >
						</td>

						<td>
							<input type="text" name="txtregister3" id="txt3" style="width: 155px;
							  text-align: right;" value="0" >
						</td>

						<td>
							<input type="text" name="txtregister4" id="txt4" style="width: 155px;
							  text-align: right;" value="0" >
						</td>

						<td>
							<input type="text" name="txtregister5" id="txt5" style="width: 155px;
							  text-align: right;" value="0" >
						</td>

						<td>
							<input type="text" name="txtregister6" id="txt6" style="width: 155px;
							  text-align: right;" value="0" >
						</td>

						<td>
							<input type="text" name="txtregister7" id="txt7" style="width: 155px;
							  text-align: right;" value="0" >
						</td>

					</tr>
				</table>
			</div>
			
		</div>
		
		<script >
			function myMark1(element){
				var q =parseInt(document.getElementById("txt1").value);
				document.getElementById("txt1").value = q+1;
			}

			function myMark2(element){
				var q =parseInt(document.getElementById("txt2").value);
				document.getElementById("txt2").value = q+1;
			}

			function myMark3(element){
				var q =parseInt(document.getElementById("txt3").value);
				document.getElementById("txt3").value = q+1;
			}

			function myMark4(element){
				var q =parseInt(document.getElementById("txt4").value);
				document.getElementById("txt4").value = q+1;
			}

			function myMark5(element){
				var q =parseInt(document.getElementById("txt5").value);
				document.getElementById("txt5").value = q+1;
			}

			function myMark6(element){
				var q =parseInt(document.getElementById("txt6").value);
				document.getElementById("txt6").value = q+1;
			}

			function myMark7(element){
				var q =parseInt(document.getElementById("txt7").value);

				document.getElementById("txt7").value = q+1;
			}
		</script>
	</form>

</body>
</html>