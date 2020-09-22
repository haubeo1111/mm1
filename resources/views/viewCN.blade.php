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
@foreach($chucnang as $cn)
<tr>
<td>{{$cn->id}}</td>
<td>{{$cn->name}}</td>
<td>{{$cn->macn}}</td>
<td>{{$cn->routename}}</td>
<td><a href="{{route('dangkyCN')}}">add</a></td>
<td><a href="{{route('suaCN',$cn->id)}}">edit</a></td>
<td><a href="{{route('deleteCN',$cn->id)}}">delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>