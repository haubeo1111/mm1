<form method="post" action="{{route('updatePB')}}">
<input type="hidden" name="id" value={{$phongban->id}}>
<input type="text" name="name" value={{$phongban->name}} >
<input type="text" name="mapb" value={{$phongban->mapb}}>
 @csrf
<input type="submit" value="submit">
</form>