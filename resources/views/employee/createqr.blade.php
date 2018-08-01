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
	<h2>YEEEEEEE</h2>
this is qr code
{{-- yeah?save copy from doc code for making qr --}}


{{ QRCode::vCard($firstName, $lastName, $title, $email, $addresses, $phones)
                ->setErrorCorrectionLevel('H')
                ->setSize(4)
                ->setMargin(2)
                ->svg() }}
	
@endforeach



</body>
</html>