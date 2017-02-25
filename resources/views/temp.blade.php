<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registered Users</title>
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <body>
    <div id="app">
      <users></users>
    </div>
    <template id="users-template">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Encrypted Password</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users">
            <td>@{{ user.id }}</td>
            <td>@{{ user.username }}</td>
            <td>Password</td>
            <td>@{{ user.email }}</td>
          </tr>
        </tbody>
      </table>
    </template>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script type="text/javascript">
      Vue.component('users',{
        template : '#users-template',

        data: function(){
          return {
            users: []
          }
        },

        created: function(){
          this.getUsers();
        },

        methods:{
          getUsers: function(){
            $.getJSON("{{ route('registered-users') }}",function(users){
              this.users = users;
            }.bind(this));

            setTimeout(this.getUsers,1000);
          }
        }
      });
      new Vue({
        el : '#app',
      });
    </script>

  </body>
</html>
