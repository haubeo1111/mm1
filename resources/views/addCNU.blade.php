<form method="post" action="{{route('addCNU')}}">
<input type="number" name="iduser" >
<input type="number" name="idchucnang" >

 @csrf
<input type="submit" value="submit">
<a href="{{route('danhsachCNU')}}">view</a>
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