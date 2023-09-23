
<form  action="/save" method="post">
{{ csrf_field() }}


<div>
<H1 class="">Login form</H1>
</div>

 
    <label for="email" class="form-label">Email address</label>
    <input type="email"  name="email" value="{{old('email')}}"> 
    @if ($errors->has('email'))
    {{  $errors->first('email') }} 
    @endif
  

 
<br>
<br>

 
    <label for="password" >Password</label>
    <input type="password"  name="password" value="{{old('password')}}">
    @if ($errors->has('password'))
    {{ $errors->first('password')  }}
    @endif
 
        

  <br>

  <button type="submit">Submit</button>
</form>
