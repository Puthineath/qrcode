<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
</head>
<body>
	 <div class="jumbotron text-center">
    

        <h2>
            {{ $employee->last_name }}
            {{ $employee->first_name }}

        </h2>
        <p>
            <strong>Email:</strong> {{ $employee->email }}<br>
            <strong>Position:</strong> {{ $employee->position }}
            <strong>Department:</strong> {{ $employee->department }}
            <strong>Phone Number:</strong> {{ $employee    ->phone_number }}
        </p>

    </div>

</body>
</html>