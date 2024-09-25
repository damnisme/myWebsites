<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="./submit.php" method="post">
            <label for ="firstname">Firstname?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">
            <br>  <label for=" lastname">Lastname?</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname...">
            <br> <label for="favouritepet">Favourite Pet?</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            
            <br>  <button type="submit" >Submit</button>
        </form>
    </main>
    <!-- 
    /*  echo $_SERVER["DOCUMENT_ROOT"];
      echo "<br>";
      echo $_SERVER["PHP_SELF"];
      echo "<br>";
      echo $_SERVER["SERVER_NAME"];
      echo "<br>";
      echo $_SERVER["REQUEST_METHOD"]; 

    echo $_GET["name"];
    echo $_GET["eyecolor"];*/



    ?> -->
</body>

</html>