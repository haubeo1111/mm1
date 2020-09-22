<form method="post" action="{{route('updateCD')}}">
<input type="hidden" name="id" value={{$chucdanh->id}}>
<input type="text" name="name" value={{$chucdanh->name}} >
<input type="text" name="macd" value={{$chucdanh->macd}}>
 @csrf
<input type="submit" value="submit">
</form>