<h1> Add New Member </h1>
@if(Session::has('user'))
<h3> Data saved for {{session('user')}} </h3>
@endif;
<form action="storecontroller" method = "post" >
    @csrf
    <input type="text" name = "user"  placeholder = "enter the user name"><br><br>
    <input type="password" name = "password"  placeholder = "enter password"><br><br>
    <input type="email" name = "email"  placeholder = "enter the user email"><br><br>
    <button type = "submit"  > Add User </button>

</form>