<form method="post" action="{{route('updateCNU')}}">
<input type="hidden" name="id" value={{$chucnanguser->id}}>
<input type="number" name="iduser" value={{$chucnanguser->iduser}} >
<input type="number" name="idchucnang" value={{$chucnanguser->idchucnang}}>

 @csrf
<input type="submit" value="submit">
</form>