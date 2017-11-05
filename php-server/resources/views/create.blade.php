<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	@if ($tag != null)
		<form method="GET" action="tags/{{$tag->rfid}}/cpf">
			<input type="text" name="cpf" value="" placeholder="">
			<button type="submit">Submit</button>
		</form>
	@else
		<p></p>
	@endif
	
</body>
</html>