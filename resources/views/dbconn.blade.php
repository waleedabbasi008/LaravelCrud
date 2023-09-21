<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB connection practice</title>
</head>
<body>
<div>
    <?php  if(DB::connection()->getpdo()){
        echo "Successfully connected to the database";
    }
    else{
        echo "Connection not estabilished";
    }
    ?>
</div>
</body>
</html>