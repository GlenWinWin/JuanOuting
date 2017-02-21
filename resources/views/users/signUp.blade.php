Sign up!
{!! Form::open(array('action' => 'UserController@signUpProcess' , 'method' => 'post'))!!}
<label for="username">Username:</label>
<input type="input" name="username" required style="margin-bottom:5px;">
<br>
<label for="password">Password:</label>
&nbsp;<input type="password" name="password" required style="margin-bottom:5px;">
<br>
<label for="password">Email:</label>
&emsp;&nbsp;&nbsp;&nbsp;<input type="email" required name="email">
<br>
<input type="submit" value="Create Account">
{!! Form::close()!!}
