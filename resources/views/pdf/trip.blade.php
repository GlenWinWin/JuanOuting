<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <img src="assets/images/profile_pictures/glen.jpg" width="150" height="150">
    <table border="1">
      <tr>
        <th>Username</th>
        <th>Email</th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </table>
    <p>Gleniwn</p>
  </body>
</html>
