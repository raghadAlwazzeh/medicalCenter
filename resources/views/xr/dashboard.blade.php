<x-xr-layout>
<style>
        input[type=text], textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 16px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
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

        .container {
            border-radius: 5px;
            padding: 20px;
            margin-left: 48px;
        }
        #myTable {
				border-collapse: collapse; /* Collapse borders */
				width: 100%; /* Full-width */
				border: 1px solid #ddd; /* Add a grey border */
				font-size: 18px; /* Increase font-size */
				}
			#myTable th, #myTable td {
				text-align:center; /* Left-align text */
				padding: 12px; /* Add padding */
			}
			#myTable tr {
				/* Add a bottom border to all table rows */
				border-bottom: 1px solid #ddd;
			}
			#myTable tr.header, #myTable tr:hover {
				/* Add a grey background color to the table header and on hover */
				background-color: #f1f1f1;}
		</style>
	</head>
<body>
<!--div class="container">
<form method="post" action={{url('/xr')}}   enctype="multipart/form-data">
     @csrf
             <h1> Treatment Plan</h1> 
             <label for="patient_id">Patient_Id</label> <br>
             <input type="text" id="patient_id" name="patient_id"> <br>

             <label for="img">Select image</label> <br><br>
            <input type="file" name="user_image" />


             <input type="submit" value="Submit">
</div-->

<br> <br>

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for id or name..">


         
    <table id="myTable">
		<tr class="header">
			<th style="width:25%;">patient_id</th>
			<th style="width:25%;">name</th>
			<th style="width:25%;">surname</th>
			<th style="width:25%;">age</th>
		</tr>
		@if (count($demands)>= 1)
			@foreach ($demands as $demand)
                  
				<tr>
					<td><a href="/xr/{{$demand->info1->id}}">{{$demand->info1->id}}</a></td>
					<td>{{$demand->info1->name}}</td>
					<td>{{$demand->info1->surname}}</td>
					<td>{{$demand->info1->age}}</td>
				</tr>
			@endforeach
		@endif
		</table>
	<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, td1, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
	td1 = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if ((td.innerHTML.toUpperCase().indexOf(filter) > -1) || (td1.innerHTML.toUpperCase().indexOf(filter) > -1)) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>

</x-xr-layout>