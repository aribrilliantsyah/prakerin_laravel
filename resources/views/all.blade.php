<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
Daftar : {{$pilih}} 
   @foreach($baru as $data)
    <li>{{$data}}</li>
   @endforeach
</body>
</html>