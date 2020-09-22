<form method="post" action="{{route('updateU')}}">
<input type="hidden" name="id" value={{$user->id}}>
<p>{{$user->name}} </p></br>
<p>{{$user->email}} </p></br>
  <select name="idphongban">
  @foreach($phongban as $key=>$pb)

     <option value={{$key}} {{$key==$user->idphongban?"selected":""}}>{{$pb}}</option>
    @endforeach
   </select>
 <select name="idchucdanh">
  @foreach($chucdanh as $key=>$cn)

     <option value={{$key}} {{$key==$user->idchucdanh?"selected":""}}  >{{$cn}}</option>
    @endforeach
   </select>
 @csrf
<input type="submit" value="submit">
</form>