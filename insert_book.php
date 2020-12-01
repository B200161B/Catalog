<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
    // TODO 1: Create short variable names.
    
    if($conn->connect_error) die("Fatal Error");
    $isbn = $_POST['isbn'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    
    
   
    
    // TODO 2: Check and filter data coming from the user.
    //check the data whether is empty or not
    if(isset($ibsn)) && isset($author)&&isset($title)&&isset($price){

    }

    // TODO 3: Setup a connection to the appropriate database.
    $conn=new mysqli('localhost','root','','publications');

    // TODO 4: Query the database.
    $query="INSERT INTO catologs VALUES($isbn,$author,$title,$price)";
    $result=$conn->query($query);

    // TODO 5: Display the feedback back to user.
    if(!$result) {
        echo"Fail to insert the book.Please try again.";
    }else{
        echo"Success.";
    }

    // TODO 6: Disconnecting from the database.


    ?>
</body>
</html>