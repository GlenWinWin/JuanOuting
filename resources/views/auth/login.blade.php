{!! Form::open(array('route' => 'user.store'))!!}
@if(Session::has('flash_message'))
  <h1>Successfully Created Account!!</h1>
@endif
<h3>Login</h3>
<label for="username">Username:</label>
<input type="input" required name="username" style="margin-bottom:5px;">
<br>
<label for="password">Password:</label>
<input type="password" required name="password">
<br>
<input type="submit" value="Login">
{!! Form::close()!!}
<a href="signUp">Create Account!</a>
