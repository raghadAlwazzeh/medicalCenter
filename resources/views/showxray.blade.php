<x-doc-layout>
<head>
 <style>
            h1{
                font-size: 2em; font-weight: bolder;
                text-align:center;
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
            .center{
                display:block;
                margin-left: auto;
                margin-right: auto;
            }
    </style>

</head>
<body>
<h1> Xray Result </h1>
@foreach ($xrays as $xray)
<p style="text-align: center;"><a href="fetch/{{$xray->id}}"> <img src="fetch/{{$xray->id}}" class="center"/></a></p> <br>
<p><b>xray_date:</b> {{$xray->created_at}}</p>
@endforeach
{{$xrays->links()}} 
</body>
</x-doc-layout>