<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

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

     <form action="login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

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