<!DOCTYPE html>
<html>
<head>
	<title>Pilihan</title>
</head>
<body>
Daftar : <b>{{$jenis}}</b> 
   @foreach($anyar as $data)
    <li>{{$data}}</li>
   @endforeach

</body>
</html>