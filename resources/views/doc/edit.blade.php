<x-doc-layout>
<html>
    <head>
		<style>
	
  input[type=text], textarea {
  width: 80%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
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

  <form method="post" action="/doc">
  @csrf
	
    <H1> Patient Interviewing </H1>
	<label for="patient_id">Patient_Id</label> <br>
    <input type="text" id="patient_id" name="patient_id" value="{{$patient->id}}" required> <br>

   <label for="visit_id">Visit_Id</label> <br>
    <input type="text" id="visit_id" name="visit_id" placeholder="Enter patient's visit.." required> <br>
    @if($inter != null)
    <label for="complaint">Chief Complaint</label> <br>
    <textarea id="complaint" name="complaint" placeholder="Enter patient's chief complaint.." style="height:200px" required>{{$inter->chief_complaint}}</textarea> <br>
		
	<label for="ihistory">History of Present Illness</label> <br>
    <textarea id="ihistory" name="ihistory" placeholder="Enter patient's history of present illness.." style="height:200px" required> {{$inter->history_of_present_illness}} </textarea> <br>
		
	<label for="mhistory">Past Medical History</label> <br>
    <textarea id="mhistory" name="mhistory" placeholder="Enter patient's Past Medical History.." style="height:200px" required>{{$inter->past_medical_history}}</textarea> <br>
		
	<label for="habits">Habits</label> <br>
    <textarea id="habits" name="habits" placeholder="Enter patient's habits.." style="height:100px" required>{{$inter->habits}}</textarea> <br>
		
	<label for="fhistory">Family History</label> <br>
    <textarea id="fhistory" name="fhistory" placeholder="Enter patient's family history.." style="height:200px" required>{{$inter->family_history}}</textarea> <br> 
	@else
    
    <label for="complaint">Chief Complaint</label> <br>
    <textarea id="complaint" name="complaint" placeholder="Enter patient's chief complaint.." style="height:200px" required></textarea> <br>
		
	<label for="ihistory">History of Present Illness</label> <br>
    <textarea id="ihistory" name="ihistory" placeholder="Enter patient's history of present illness.." style="height:200px" required></textarea> <br>
		
	<label for="mhistory">Past Medical History</label> <br>
    <textarea id="mhistory" name="mhistory" placeholder="Enter patient's Past Medical History.." style="height:200px" required></textarea> <br>
		
	<label for="habits">Habits</label> <br>
    <textarea id="habits" name="habits" placeholder="Enter patient's habits.." style="height:100px" required></textarea> <br>
		
	<label for="fhistory">Family History</label> <br>
    <textarea id="fhistory" name="fhistory" placeholder="Enter patient's family history.." style="height:200px" required></textarea> <br>	 
    @endif		 

<h1 > Clinical Examination </h1>

    <h2> inspection </h2>
	
	<label for="appearance">General Appearance</label> <br>
    <input type="text" id="appearance" name="appearance" placeholder="Enter patient's general appearance.." required> <br>

    <label for="skin">Skin Observation</label> <br>
    <textarea id="skin" name="skin" placeholder="Enter your observations about patient's skin.." style="height:200px" required></textarea> <br>
		
		
		<h2> Vital Signs </h2>
		
	<label for="pulse">Pulse</label><br>
    <input type="text" id="pulse" name="pulse" placeholder="Enter patient's pulse.." required><br>
		
	<label for="respiratory">Respiratory Rate</label><br>
    <input type="text" id="respiratory" name="respiratory" placeholder="Enter patient's respiratory rate.." required><br>
		
	<label for="temperature">Temperature</label><br>
    <input type="text" id="temperature" name="temperature" placeholder="Enter patient's temperature.." required><br>
		
	<label for="pressure">Blood Pressure</label><br>
    <input type="text" id="pressure" name="pressure" placeholder="Enter patient's pressure.." required><br>
		
		<h2> Systemic Examination </h2>
		
	<label for="cardio">Cardio Vascular System</label> <br>
    <textarea id="cardio" name="cardio" placeholder="Enter your observations about patient's cardio vascular system.." style="height:100px" required></textarea> <br>
		
	<label for="respiratorys">Respiratory System</label> <br>
    <textarea id="respiratorys" name="respiratorys" placeholder="Enter your observations about patient's respiratorys system.." style="height:100px" required></textarea> <br>
		
	<label for="neurological">Neurological System</label> <br>
    <textarea id="neurological" name="neurological" placeholder="Enter your observations about patient's neurological system.." style="height:100px" required></textarea> <br>
		
	<label for="digestive">Digestive System</label> <br>
    <textarea id="digestive" name="digestive" placeholder="Enter your observations about patient's digestive system.." style="height:100px" required></textarea> <br>

     <p style="margin-bottom: 12px;">is blood test required? </p>
		<input type="radio" id="yes" name="blood" value="yes" required> <label for="yes">Yes</label>
		<input type="radio" id="no" name="blood" value="no"> <label for="no">NO</label><br><br>
        <p style="margin-bottom: 12px;">is xray required? </p>
		<input type="radio" id="yes" name="xray" value="yes" required> <label for="yes">Yes</label>
		<input type="radio" id="no" name="xray" value="no"> <label for="no">NO</label><br><br>
		
		
		<input type="submit" value="Submit">

  </form>
</div>
    </body>    
    </html>   
</x-doc-layout>