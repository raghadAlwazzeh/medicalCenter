<x-min-layout>
<head>
	<style>        
        h1{
            font-size: 2em; font-weight: bolder;
            text-align: center; margin-top: 16px; margin-bottom: 25px; 
        }

        .container {
            border-radius: 5px;
            padding: 20px;
            margin-left: 48px;
        }
		</style>
	</head>
    <body>
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
     </body>
<x-min-layout>