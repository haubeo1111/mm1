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
@foreach($chucdanh as $cd)
<tr>
<td>{{$cd->id}}</td>
<td>{{$cd->name}}</td>
<td>{{$cd->macd}}</td>
<td><a href="{{route('dangkyCD')}}">add</a></td>
<td><a href="{{route('suaCD',$cd->id)}}">edit</a></td>
<td><a href="{{route('deleteCD',$cd->id)}}">delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>