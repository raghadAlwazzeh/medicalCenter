<x-doc-layout>
 
    <head>
	<style>
        input[type=text], textarea {
            width: 80%; 
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
            padding: 20px;
            margin-left: 48px;
        }
		</style>
	</head>
<body>
    @if($treat==null)
     <div class="container">
     <form method="post" action="/treat">
     @csrf
        <h1> Treatment Plan </h1>
        
        <label for="patient_id">Patient_Id</label> <br>
        <input type="text" id="patient_id" name="patient_id" value="{{$patient_id}}" required> <br>
        <label for="treat">Treatment plan</label> <br>
        <textarea id="treat" name="treat" style="height:100px" required> </textarea> <br>

         <p style="margin-bottom: 12px;">The Diagonsis</p>
		<input type="radio" id="covid" name="dia" value="covid" required> <label for="covid">Covid-19 patient</label> <br>
		<input type="radio" id="cured" name="dia" value="cured"> <label for="cured">Cured of Covid-19</label><br><br>


        <input type="submit" value="Submit">
     </form>

     </div>

     @else

     <div class="container">
    <form method="post" action="/treat">
     @csrf
             <h1> Treatment Plan</h1> 
             <label for="patient_id">Patient_Id</label> <br>
             <input type="text" id="patient_id" name="patient_id" value="{{$patient_id}}" required> <br>
             <label for="treat1">Treatment plan</label> <br>
             <textarea id="treat1" name="treat1" style="height:100px" required> {{$treat->treat_plan}} </textarea> <br>
             <p style="margin-bottom: 12px;">The Diagonsis:</p>
		<input type="radio" id="covid" name="dia" value="covid" required> <label for="covid">Covid-19 patient</label> <br>
		<input type="radio" id="cured" name="dia" value="cured"> <label for="cured">Cured of Covid-19</label><br><br>
             <input type="submit" value="Submit">
             
     </div>
     

     @endif
    </body>
     
</x-doc-layout>
