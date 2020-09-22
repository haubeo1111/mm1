<html>
<body>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>macd</th>
<th>add</th>
<th>edit</th>
<th>delete</th>
</tr>
 @csrf
@foreach($chucnanguser as $cnu)
<tr>
<td>{{$cnu->id}}</td>
<td>{{$cnu->iduser}}</td>
<td>{{$cnu->idchucnang}}</td>

<td><a href="{{route('dangkyCNU')}}">add</a></td>
<td><a href="{{route('suaCNU',$cnu->id)}}">edit</a></td>
<td><a href="{{route('deleteCNU',$cnu->id)}}">delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>