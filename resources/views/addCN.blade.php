<form method="post" action="{{route('addCN')}}">
<input type="text" name="name" >
<input type="text" name="macn" >
<input type="text" name="routename" >
 @csrf
<input type="submit" value="submit">
<a href="{{route('danhsachCN')}}">view</a>
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