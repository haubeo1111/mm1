<html>
<body>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>mapb</th>
<th>add</th>
<th>edit</th>
<th>delete</th>
</tr>
 @csrf
@foreach($phongban as $pb)
<tr>
<td>{{$pb->id}}</td>
<td>{{$pb->name}}</td>
<td>{{$pb->mapb}}</td>
<td><a href="{{route('dangkyPB')}}">add</a></td>
<td><a href="{{route('suaPB',$pb->id)}}">edit</a></td>
<td><a href="{{route('deletePB',$pb->id)}}">delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>