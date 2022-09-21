<x-doc-layout>
 
    <head>
        <style>
            h1{
                font-size: 2em; font-weight: bolder;
                margin-top: 16px; margin-bottom: 15px;
                margin-left: 68px;
            }
            h2{
                font-size: 1.5em; font-weight: bolder;
                margin-bottom: 15px;
            }
            p{
                
                padding: 10px;
            }
            .container {
                border-radius: 5px;
                padding: 20px;
                margin-left: 48px;
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
        </style>
		
	</head>
    <body>

<h1 style="text-align: center;"> Lab Results </h1>
             @if($labs==null)
              <p><b>No Result </b></p>
@else
@foreach ($labs as $lab)
    
 <table id="myTable">
		        <tr class="header">
                    <th style="width:25%;"><b>Test description</b></th>
                    <th style="width:25%;"><b>Observed value</b></th>
                    <th style="width:25%;"><b>Unit</b></th>
                    <th style="width:25%;"><b>Reference range</b></th>
		        </tr>
                <tr>
                    <td>WBC</td>
                    <td> {{$lab->WBC}}</td>
                    <td>x10^9/L</td>
                    <td>3.5-10.0</td>
		        </tr>
                 <tr>
                    <td>LYM%</td>
                    <td> {{$lab->LYMp}}</td>
                    <td>%</td>
                    <td>20.0-40.0</td>
		        </tr>
                <tr>
                    <td>MID%</td>
                    <td> {{$lab->MIDp}}</td>
                    <td>%</td>
                    <td>1.0-15.0</td>
		        </tr>
                <tr>
                    <td>GRAN%</td>
                    <td> {{$lab->GRANp}}</td>
                    <td>%</td>
                    <td>50.0-70.0</td>
		        </tr>
                <tr>
                    <td>LYM#</td>
                    <td> {{$lab->LYMn}}</td>
                    <td>x10^9/L</td>
                    <td>0.6-4.1</td>
		        </tr>
                <tr>
                    <td>MID#</td>
                    <td> {{$lab->MIDn}}</td>
                    <td>x10^9/L</td>
                    <td>0.1-1.8</td>
		        </tr>
                <tr>
                    <td>GRAN#</td>
                    <td> {{$lab->GRANn}}</td>
                    <td>x10^9/L</td>
                    <td>2.0-7.8</td>
		        </tr>
                <tr>
                    <td>RBC</td>
                    <td> {{$lab->RBC}}</td>
                    <td>x10^12/L</td>
                    <td>3.5-6.0</td>
		        </tr>
                <tr>
                    <td>HGB</td>
                    <td> {{$lab->HGB}}</td>
                    <td>g/dL</td>
                    <td>11.5-17.5</td>
		        </tr>
                <tr>
                    <td>HCT</td>
                    <td> {{$lab->HCT}}</td>
                    <td>%</td>
                    <td>35.0-54.0</td>
		        </tr>
                <tr>
                    <td>MCV</td>
                    <td> {{$lab->MCV}}</td>
                    <td>fL</td>
                    <td>80.0-100.0</td>
		        </tr>
                <tr>
                    <td>MCH</td>
                    <td> {{$lab->MCH}}</td>
                    <td>pg</td>
                    <td>28.0-34.0</td>
		        </tr>
                <tr>
                    <td>MCHC</td>
                    <td> {{$lab->MCHC}}</td>
                    <td>g/dL</td>
                    <td>31.5-36.0</td>
		        </tr>
                <tr>
                    <td>RDW_CV</td>
                    <td> {{$lab->RDW_CV}}</td>
                    <td>%</td>
                    <td>11.0-16.0</td>
		        </tr>
                <tr>
                    <td>RDW_SD</td>
                    <td> {{$lab->RDW_SD}}</td>
                    <td>fL</td>
                    <td>35.0-56.0</td>
		        </tr>
                <tr>
                    <td>PLT</td>
                    <td> {{$lab->PLT}}</td>
                    <td>x10^9/L</td>
                    <td>100-350</td>
		        </tr>
                <tr>
                    <td>MPV</td>
                    <td> {{$lab->MPV}}</td>
                    <td>fL</td>
                    <td>6.5-12.0</td>
		        </tr>
                <tr>
                    <td>PDW</td>
                    <td> {{$lab->PDW}}</td>
                    <td>fL</td>
                    <td>9.0-17.0</td>
		        </tr>
                <tr>
                    <td>PCT</td>
                    <td> {{$lab->PCT}}</td>
                    <td>%</td>
                    <td>0.1-0.28</td>
		        </tr>
                <tr>
                    <td>P_LCR</td>
                    <td> {{$lab->P_LCR}}</td>
                    <td>%</td>
                    <td>11.0-45.0</td>
		        </tr>
                <tr>
                    <td>P_LCC</td>
                    <td> {{$lab->P_LCC}}</td>
                    <td>x10^9/L</td>
                    <td>11.0-135.0</td>
		        </tr>
                <tr>
                    <td>GLUCOSE</td>
                    <td> {{$lab->GLUCOSE}}</td>
                    <td>mg/dL</td>
                    <td>90.0-120.0</td>
		        </tr>
                 <tr>
                    <td>CREAT</td>
                    <td> {{$lab->CREAT}}</td>
                    <td>mg/dL</td>
                    <td>0.5-1.3</td>
		        </tr>
                 <tr>
                    <td>UREA</td>
                    <td> {{$lab->Urea}}</td>
                    <td>mg/dL</td>
                    <td>15.0-40.0</td>
		        </tr>
            </table>
            <br><br>
            <p><b>blood_test_date:</b> {{$lab->created_at}}</p>
@endforeach
            {{$labs->links()}}
            @endif
            </body>
            </x-doc-layout>
