<html><body>
<form method="post" action="{{route('add')}}">
<input type="text" name="name" >
<input type="text" name="mapb" >
 @csrf
<input type="submit" value="submit">
</form>
</body></html>