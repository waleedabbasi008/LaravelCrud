<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include("cdn");
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add members</title>
</head>
<body>
    <h1 class = 'text-center'> Add members </h1>
    <div class="container ">
        <form action="" method = "POST" class = "form-group w-50 m-auto mt-5">
            @csrf
            <input type="number" name = 'id' placeholder = "Enter the id" class = "input-group"> <br><br>
            <input type="text" name = "name" placeholder = "enter name"  class = "input-group"> <br> <br>
            <input type="email" name = "email" placeholder = "enter email" class = "input-group" > <br> <br>    
            <input type="text" name = "address" placeholder = "enter address"  class = "input-group"> <br> <br>               
            <button type = "submit" class = "btn  btn-outline-primary" > Add member </button>
            <a href="/list" class = " btn btn-outline-secondary"> Check out  the list </a>
    
        </form>
    </div>
</body>
</html>