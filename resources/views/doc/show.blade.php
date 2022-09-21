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
            #first_horizontal_div {	
                display: flex;
                height: 70%;
            }
            #first_vertical_div {
                width: 30%;	
                padding: 10px;
                margin-left: 600px;
                border-radius: 10px;
                border: 2px solid grey;
                margin-top: auto;
                margin-bottom: auto;

            }
            #second_vertical_div {
                width: 40%;
               
                justify-self: right;
                
                padding: 10px;
            }
        </style>
		
	</head>
    <body>
            <div class="container">
            <div id="first_horizontal_div">
                     
             <div id="second_vertical_div">
             <h2> Patient Information </h2>
             <p>
             <b>Patient_id: </b> {{$patientinf->id}} <br>
             <b>Full name: </b> {{$patientinf->name}} {{$patientinf->middle_name}} {{$patientinf->surname}} <br>
             <b>Gender: </b> {{$patientinf->gender}} <br>
             <b>Age: </b> {{$patientinf->age}} <br>
             <b>Job: </b> {{$patientinf->job}} <br>
             <b>Phone number: </b> {{$patientinf->phone_number}} <br>
             <b>Address: </b> {{$patientinf->place_of_residence}} <br>
             </p>
             </div> 

             <div id="first_vertical_div">
             <ul>
            <li> <button onclick="window.location.href='/doc/{{$patientinf->id}}/edit'">update patient record</button></li><br>

            <li>   <button onclick="window.location.href='/treat/{{$patientinf->id}}'">update treatment plan</button> </li><br>
            
            <li>  <button onclick="window.location.href='/dead/{{$patientinf->id}}'">Did the patient die?</button></li><br>
            <li><button onclick="window.location.href='/result/{{$patientinf->id}}'">Lab Results</button></li><br>
            <li> <button onclick="window.location.href='/showxray/{{$patientinf->id}}'">Xray Results</button></li>
            </ul>
            </div>   
            </div>
             
        @foreach ($patients as $patient)
             <h1 style="text-align: center;">  {{$patient->visit_id}} </h1>
             <h1 style="text-align: center;"> Patient Interviewing </h1>
             <p><b>Chief Complaint: </b> {{$inter->chief_complaint}} </p>
             <p><b>History of Present Illness: </b> {{$inter->history_of_present_illness}} </p>
             <p><b>Past Medical History: </b> {{$inter->past_medical_history}} </p>
             <p><b>Habits: </b> {{$inter->habits}} </p>
             <p><b>Family History: </b> {{$inter->family_history}} </p>
             <h1 style="text-align: center;"> Clinical Examination </h1>
             <h2> inspection </h2>
             <p><b>General Appearance: </b> {{$patient->general_appearance}} </p>
             <p><b>Skin Observation: </b> {{$patient->skin_observation}} </p>
             <h2> Vital Signs </h2>
             <p><b>Pulse: </b> {{$patient->pulse}} </p>
             <p><b>Respiratory Rate: </b> {{$patient->respiratory_rate}} </p>
             <p><b>Temperature: </b> {{$patient->temperature}} </p>
             <p><b>Blood Pressure: </b> {{$patient->blood_pressure}} </p>
             <h2>Systemic Examination</h2>
             <p><b>Cardio Vascular System: </b> {{$patient->cardio_vascular_system}} </p>
             <p><b>Respiratory System: </b> {{$patient->respiratory_system}} </p>
             <p><b>Neurological System: </b> {{$patient->neurological_system}} </p>
             <p><b>Digestive System: </b> {{$patient->digestive_system}} </p>
            <h1 style="text-align: center;"> Treatment Plan </h1>
            @if($treat!=null)
             <p><b>Treatment Plan: </b> {{$treat->treat_plan}} </p>
            @else
             <p><b>No Treatment Plan Yet! </b> </p>
            @endif
                
            </div>
        @endforeach
        {{$patients->links()}} 

    
    </body>       
</x-doc-layout>
