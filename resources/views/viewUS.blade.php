<html>
<body>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>idphongban</th>
<th>idchucdanh</th>
<th>edit</th>
</tr>
 @csrf
@foreach($user as $us)
<tr>
<td>{{$us->id}}</td>
<td>{{$us->name}}</td>
<td>{{$us->email}}</td>
<td>{{$phongban[$us->idphongban]??""}}</td>
<td>{{$chucdanh[$us->idchucdanh]??""}}</td>
	{{$key==$user->phongbanid?"selected"::""}}
<td><a href="{{route('suaU',$us->id)}}">edit</a></td>

</tr>
@endforeach
</table>
</body>
</html>