<form method="post" action="{{route('updateCN')}}">
<input type="hidden" name="id" value={{$chucnang->id}}>
<input type="text" name="name" value={{$chucnang->name}} >
<input type="text" name="macn" value={{$chucnang->macn}}>
<input type="text" name="routename" value={{$chucnang->routename}}>
 @csrf
<input type="submit" value="submit">
</form>