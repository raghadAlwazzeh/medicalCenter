<x-recp-layout>
<head>
	<style>
	
	input[type=text] {
  width: 35%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
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

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  padding: 20px;
  margin-left: 48px;
}

	
	</style>
</head>
<body>

    <div class="container">
  <form method="post" action="/recp">
  @csrf

    <label for="fname">First Name</label> <br>
    <input type="text" id="fname" name="name" placeholder="Enter patient's name.." required> <br>
		
		<label for="lname">Middle Name</label> <br>
    <input type="text" id="lname" name="middle_name" placeholder="Enter patient's middle name.." required> <br>

    <label for="mname">Last Name</label> <br>
    <input type="text" id="mname" name="surname" placeholder="Enter patient's surname.." required> <br>

    <p style="margin-bottom: 12px;">Gender </p>
		<input type="radio" id="male" name="gender" value="male" required> <label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label><br><br>

		<label for="age">Age</label> <br>
    <input type="text" id="age" name="age" placeholder="Enter patient's age.." required><br>
		
		<label for="job">Job</label> <br>
    <input type="text" id="job" name="job" placeholder="Enter patient's job.." required> <br>
		
		<label for="phone">Phone Number</label> <br>
    <input type="text" id="phone" name="phone_number" placeholder="Enter patient's phone number.." required> <br>
		
		<label for="address">Address</label> <br>
    <input type="text" id="address" name="place" placeholder="Enter patient's address.." required> <br> <br>



    <input type="submit" value="Submit">

  </form>
</div>
</body>

</x-recp-layout>