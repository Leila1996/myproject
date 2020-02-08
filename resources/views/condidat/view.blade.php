
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>liste des articles</h1>
 <table border=1>
 @foreach($condidat as $condidats)
 <tr>
 <td>{{$condidats->id}}</td>
 <td>{{$condidats->email}}</td>
 <td>{{$condidats->lieu}}</td>
  <td>{{$condidats->avatar}}</td>
 </tr>
 @endforeach
 </table>

</body>
</html>



 