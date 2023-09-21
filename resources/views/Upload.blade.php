<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h2> Upload your file </h2>
   <form action="uploadfile" method = "POST" enctype = "multipart/form-data" >
    @csrf
  <input type="file" name = "doc">
  <button type = "submit" > Upload </button>


   </form>
</body>
</html>