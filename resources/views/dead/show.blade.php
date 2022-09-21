<x-doc-layout>
 
    <head>
	<style>
        input[type=text], textarea {
            width: 80%; /* Full width */
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
		</style>
	</head>
<body>
    @if($dead==null)
     <div class="container">
     <form method="post" action="/dead">
     @csrf
        <h1> Death details </h1>
        <label for="patient_id">Patient_Id</label> <br>
        <input type="text" id="patient_id" name="patient_id" value="{{$patient->id}}" required> <br>

        <label for="cause">Cause Of Death</label> <br>
        <textarea id="cause" name="cause" placeholder="Enter the cause of death.." style="height:100px" required> </textarea> <br>

        <label for="date">Date of Death</label><br>
        <input type="date" id="date" name="date" style="margin-top: 16px;" required><br><br>

        <label for="time" >Time of Death</label><br>
        <input type="time" id="time" name="time" style="margin-top: 16px;" required><br> <br> <br>

        <input type="submit" value="Submit">
     </form>

     </div>

     @else

     <div class="container">
             <h1> Death Details</h1>
  
            <b> Full Name: </b> {{$dead->info->name}} {{$dead->info->middle_name}} {{$dead->info->surname}}<br> <br>
            <b> Gender: </b> {{$dead->info->gender}}<br> <br>
            <b> Age: </b> {{$dead->info->age}}<br> <br>
            <b> Gender: </b> {{$dead->info->gender}}<br> <br>
            <b> Job: </b> {{$dead->info->job}}<br> <br>
            <b> Address: </b> {{$dead->info->place_of_residence}}<br> <br>
            <b> Cause of death: </b> {{$dead->cause_of_death}} <br> <br>
            <b> Date of Death: </b> {{$dead->date_of_death}} <br> <br> 
            <b> Time of death: </b> {{$dead->time_of_death}} <br> <br>  
   
             
     </div>
     

     @endif
    </body>
     
</x-doc-layout>
