<x-lab-layout>
<html>
<head>
    <style>
        input[type=text], textarea {
            width: 60%; /* Full width */
            padding: 4px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
        h1{
            font-size: 2em; font-weight: bolder;
            text-align: center; margin-top: 16px; margin-bottom: 25px; 
        }
        h2{
            font-size: 1.5em; font-weight: bolder;
            margin-bottom: 15px;
        }
        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #3C8BEB;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #2667E0;
        }
        #myTable {
				border-collapse: collapse; /* Collapse borders */
				width: 80%; /* Full-width */
				border: 1px solid #1c1c1c; /* Add a grey border */
				font-size: 18px; /* Increase font-size */
                margin-left: auto;
                margin-right: auto;
				}
			#myTable th, #myTable td {
				text-align: center; /* Left-align text */
				padding: 12px; /* Add padding */
                border-right: 1px solid #1c1c1c;
			}
			#myTable tr {
				/* Add a bottom border to all table rows */
				border-bottom: 1px solid #1c1c1c;
			}
			#myTable tr.header, #myTable tr:hover {
				/* Add a grey background color to the table header and on hover */
				background-color: #CCCCCC;}
            .container {
                border-radius: 5px;
                padding: 20px;
                margin-left: 48px;
                margin-bottom: 16px; /* Bottom margin */ 
            }
    </style>
</head>

<body>
    <h1> Lab Results </h1>
    <form method="post" action="/lab">
    @csrf
        <div class="container">
        <label for="patient_id">Patient_Id</label> <br>
        <input type="text" id="patient_id" name="patient_id" value={{$id}}> <br><br>
        <!--label for="visit_id">Visit_Id</label> <br-->
        <!--input type="text" id="visit_id" name="visit_id" placeholder="Enter patient's visit.."> <br>
        </div><br-->
         <table id="myTable">
		        <tr class="header">
                    <th style="width:25%;"><b>Test description</b></th>
                    <th style="width:25%;"><b>Observed value</b></th>
                    <th style="width:25%;"><b>Unit</b></th>
                    <th style="width:25%;"><b>Reference range</b></th>
		        </tr>
                <tr>
                    <td>WBC</td>
                    <td> <input type="text" name="WBC" required></td>
                    <td>x10^9/L</td>
                    <td>3.5-10.0</td>
		        </tr>
                 <tr>
                    <td>LYM%</td>
                    <td> <input type="text" name="LYM" required></td>
                    <td>%</td>
                    <td>20.0-40.0</td>
		        </tr>
                <tr>
                    <td>MID%</td>
                    <td> <input type="text" name="MIDp" required></td>
                    <td>%</td>
                    <td>1.0-15.0</td>
		        </tr>
                <tr>
                    <td>GRAN%</td>
                    <td> <input type="text" name="GRANp" required></td>
                    <td>%</td>
                    <td>50.0-70.0</td>
		        </tr>
                <tr>
                    <td>LYM#</td>
                    <td> <input type="text" name="LYMn" required></td>
                    <td>x10^9/L</td>
                    <td>0.6-4.1</td>
		        </tr>
                <tr>
                    <td>MID#</td>
                    <td> <input type="text" name="MIDn" required></td>
                    <td>x10^9/L</td>
                    <td>0.1-1.8</td>
		        </tr>
                <tr>
                    <td>GRAN#</td>
                    <td> <input type="text" name="GRANn" required></td>
                    <td>x10^9/L</td>
                    <td>2.0-7.8</td>
		        </tr>
                <tr>
                    <td>RBC</td>
                    <td> <input type="text" name="RBC" required></td>
                    <td>x10^12/L</td>
                    <td>3.5-6.0</td>
		        </tr>
                <tr>
                    <td>HGB</td>
                    <td> <input type="text" name="HGB" required></td>
                    <td>g/dL</td>
                    <td>11.5-17.5</td>
		        </tr>
                <tr>
                    <td>HCT</td>
                    <td> <input type="text" name="HCT" required></td>
                    <td>%</td>
                    <td>35.0-54.0</td>
		        </tr>
                <tr>
                    <td>MCV</td>
                    <td> <input type="text" name="MCV" required></td>
                    <td>fL</td>
                    <td>80.0-100.0</td>
		        </tr>
                <tr>
                    <td>MCH</td>
                    <td> <input type="text" name="MCH" required></td>
                    <td>pg</td>
                    <td>28.0-34.0</td>
		        </tr>
                <tr>
                    <td>MCHC</td>
                    <td> <input type="text" name="MCHC" required></td>
                    <td>g/dL</td>
                    <td>31.5-36.0</td>
		        </tr>
                <tr>
                    <td>RDW_CV</td>
                    <td> <input type="text" name="RDW_CV" required></td>
                    <td>%</td>
                    <td>11.0-16.0</td>
		        </tr>
                <tr>
                    <td>RDW_SD</td>
                    <td> <input type="text" name="RDW_SD" required></td>
                    <td>fL</td>
                    <td>35.0-56.0</td>
		        </tr>
                <tr>
                    <td>PLT</td>
                    <td><input type="text" name="PLT" required></td>
                    <td>x10^9/L</td>
                    <td>100-350</td>
		        </tr>
                <tr>
                    <td>MPV</td>
                    <td> <input type="text" name="MPV" required></td>
                    <td>fL</td>
                    <td>6.5-12.0</td>
		        </tr>
                <tr>
                    <td>PDW</td>
                    <td> <input type="text" name="PDW" required></td>
                    <td>fL</td>
                    <td>9.0-17.0</td>
		        </tr>
                <tr>
                    <td>PCT</td>
                    <td><input type="text" name="PCT" required></td>
                    <td>%</td>
                    <td>0.1-0.28</td>
		        </tr>
                <tr>
                    <td>P_LCR</td>
                    <td> <input type="text" name="P_LCR" required></td>
                    <td>%</td>
                    <td>11.0-45.0</td>
		        </tr>
                <tr>
                    <td>P_LCC</td>
                    <td> <input type="text" name="P_LCC" required></td>
                    <td>x10^9/L</td>
                    <td>11.0-135.0</td>
		        </tr>
                <tr>
                    <td>GLUCOSE</td>
                    <td> <input type="text" name="GLUCOSE" required></td>
                    <td>mg/dL</td>
                    <td>90.0-120.0</td>
		        </tr>
                 <tr>
                    <td>CREAT</td>
                    <td> <input type="text" name="CREAT" required></td>
                    <td>mg/dL</td>
                    <td>0.5-1.3</td>
		        </tr>
                 <tr>
                    <td>UREA</td>
                    <td> <input type="text" name="Urea" required></td>
                    <td>mg/dL</td>
                    <td>15.0-40.0</td>
		        </tr>
            </table> <br>
            <input type="submit" value="Submit"> 
    </form>
</body>

</html>
</x-lab-layout>