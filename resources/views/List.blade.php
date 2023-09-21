<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('cdn')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Member List</title>
</head>
<body>
    <h1 class = "text-center"> Member List </h1>
    <table border = "1" class = "table" >
        <tr>
            <td> ID </td>
            <td> Name </td>
            <td> Email </td>            
            <td> Adress </td>            
        </tr>
         @foreach($members as $member)    <!--  members is the key that we have passed inside  the controller  -->
        <tr>
            <td> {{$member['id']}} </td>             
            <td> {{$member['name']}} </td>
            <td> {{$member['email']}} </td>                                     
            <td> {{$member['address']}} </td>                                     
            <td> <a class="btn btn-outline-danger" href = "{{"delete/".$member['id']}}"> Delete </a> </td>            
            <td> <a class="btn btn-outline-primary" href = {{"edit/".$member['id']}}> Edit </a> </td>                        
        </tr> 
        @endforeach

    </table> 

<a href="/add">
    <button class="btn btn-primary"> Add more data </button>
</a>
</body>
<style>
    .w-5{
        display: none;
    }
</style>
</html>