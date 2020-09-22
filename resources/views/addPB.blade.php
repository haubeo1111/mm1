<form method="post" action="{{route('addPB')}}">
<input type="text" name="name" >
<input type="text" name="mapb" >
 @csrf
<input type="submit" value="submit">
<a href="{{route('danhsachPB')}}">view</a>
</form>
<?php 
//for($i=0;$i<count($data);$i++){
//echo	$data[$i]["id"]."  ";
//echo	$data[$i]["name"]."  ";
//echo	$data[$i]["mapb"];
//echo "<a href="{{route("dangsua") }}"></a>";
//echo "<br>";
	
//}
?>