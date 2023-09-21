@include('cdn');
<h1 class = " text-center">  Update member </h1>
<div class="container mt-5 ">

     <form action="/edit" method = "POST" class = "form-group w-50 m-auto">
        @csrf
        <input type="number" name = "id" value = "{{$data['id']}}" class = "input-group input-group-text">     <br><br> 
         <input type="text" name = "name" value = "{{$data['name']}}" class = "input-group">     <br><br> 
        <input type="text" name = "email" value = "{{$data['email']}}" class = "input-group" > <br> <br>
        <input type="text" name = "address" value = "{{$data['address']}}" class = "input input-group" > <br> <br>
         <button type = "sumbit"  class = "btn btn-outline-success"> Update </button>
    </form>
    </div>    