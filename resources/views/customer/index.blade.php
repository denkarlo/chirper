

<html>
<head>
	<title></title>
</head>
<body>
    <h1>Customers</h1>

@foreach ($customers as $customer)
<br>
{{$customer->firstName}}
<br>
@endforeach

</body>
</html> 