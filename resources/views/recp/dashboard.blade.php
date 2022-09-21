<x-recp-layout>
<head>
		<style>
			#myInput{
				width: 100%; /* Full-width */
				font-size: 16px; /* Increase font-size */
				padding: 12px 20px 12px 40px; /* Add some padding */
				border: 1px solid #ddd; /* Add a grey border */
				margin-bottom: 12px; /* Add some space below the input */
				}

			#myTable {
				border-collapse: collapse; /* Collapse borders */
				width: 100%; /* Full-width */
				border: 1px solid #ddd; /* Add a grey border */
				font-size: 18px; /* Increase font-size */
				}
			#myTable th, #myTable td {
				text-align: center; /* Left-align text */
				padding: 12px; /* Add padding */
			}
			#myTable tr {
				/* Add a bottom border to all table rows */
				border-bottom: 1px solid #ddd;
			}
			#myTable tr.header, #myTable tr:hover {
				/* Add a grey background color to the table header and on hover */
				background-color: #f1f1f1;
}
		</style>
	</head>
    <body>

        <button style="margin-left: 38px; margin-top: 48px;" onclick="window.location.href='/recp/create'">create a new patient record</button>
		<br> <br> <br>



		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for id or name..">


         
        <table id="myTable">
		<tr class="header">
			<th style="width:15%;">id</th>
			<th style="width:15%;">name</th>
			<th style="width:15%;">surname</th>
			<th style="width:15%;">age</th>
			<th style="width:15%;">job</th>
			<th style="width:25%;">place of residence</th>

		</tr>
		@if (count($patients)>= 1)
			@foreach ($patients as $patient)
				<tr>
					<td><a href="/recp/{{$patient->id}}">{{$patient->id}}</a></td>
					<td>{{$patient->name}}</td>
					<td>{{$patient->surname}}</td>
					<td>{{$patient->age}}</td>
					<td>{{$patient->job}}</td>
					<td>{{$patient->place_of_residence}}</td>
				</tr>
			@endforeach
		@endif
		</table>
    <body>
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

/*function myFunction1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}*/
</script>
</x-recp-layout>
