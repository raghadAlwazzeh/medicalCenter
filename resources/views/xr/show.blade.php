<x-xr-layout>
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
<div class="container">
<form method="post" action={{url('/xr')}}   enctype="multipart/form-data">
     @csrf
             <h1>X-RAY image</h1> 
             <label for="patient_id">Patient_Id</label> <br>
             <input type="text" id="patient_id" name="patient_id" value={{$id}} required> <br>

             <label for="img">Select image</label> <br><br>
            <input type="file" name="user_image" required/><br><br>


             <input type="submit" value="Submit">
</div>

</body>

</x-xr-layout>