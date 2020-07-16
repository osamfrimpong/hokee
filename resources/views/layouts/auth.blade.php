<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>{{config('app.name')}} - {{$title}}</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="User Profile Form A Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="{{asset('auth/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('auth/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
<link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('auth/css/style1.css')}}" rel='stylesheet' type='text/css' media="all">

<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--//online-fonts -->


</head>
<body>
	
@yield('contents')


<footer>
&copy; {{date('Y')}} {{config('app.name')}} 
</footer>
	<!--js working-->
	<script src='js/jquery-2.2.3.min.js'></script>
	<!--//js working-->
	<script>
	   $('input[type="file"]').each(function(){
		 // Refs
		 var $file = $(this),
			 $label = $file.next('label'),
			 $labelText = $label.find('span'),
			 labelDefault = $labelText.text();
	   
		 // When a new file is selected
		 $file.on('change', function(event){
		   var fileName = $file.val().split( '\\' ).pop(),
			   tmppath = URL.createObjectURL(event.target.files[0]);
		   //Check successfully selection
		   if( fileName ){
			 $label
			   .addClass('file-ok')
			   .css('background-image', 'url(' + tmppath + ')');
			 $labelText.text(fileName);
		   }else{
			 $label.removeClass('file-ok');
			 $labelText.text(labelDefault);
		   }
		 });
	   
	   // End loop of file input elements
	   });
	</script>
</body>
</html>