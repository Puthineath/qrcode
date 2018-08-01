<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
	<title>
		
	</title>
</head>
<body>
	
	{!! Form::open(array('url' => 'employee')) !!}
	

    <div class="form-group">
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name') !!}
    </div>
    <div class="form-group">
        {!! Form::label('last_name', 'Last Name') !!}
        {!! Form::text('last_name') !!}
    </div>
    <div class="form-group">
        {!! Form::label('department', 'Department') !!}
        {!! Form::text('department') !!}
    </div>
    <div class="form-group">
        {!! Form::label('position', 'Position') !!}
        {!! Form::text('position') !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone_number', 'Phone Number') !!}
        {!! Form::text('phone_number') !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email') !!}
    </div>


    

    {!! Form::submit('Create Employee Profile!', array('class' => 'btn btn-success')) !!}
    

{!! Form::close() !!}

</div>

</body>
</html>