<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>LOGIN</title>
    <style>
        body{
            margin: 0;
            font-family: arial, sans-serif;
            display: flex;
            height: 100hv;
        }
        h1{
            margin-bottom: 10px;
        }
        p{
            margin-bottom: 20px;
        }
        form{
            width: 100%;
            max-width: 300px;
            display: flex;
            flex-direction: column;
        }
        label{
            margin: 10px 0 5px;
            font-size: 14px;
        }
        input{
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="left">
        <div class="logo">Kelompok 11</div>
        <h1>LOG IN</h1>
        <p>lorem ipsum dolor sit amet</p>

        <form action="proseslogin.php" method="POST">
            <label for="">Email*</label>
            <input type="text" name ="email" required>
            <label for="">Password*</label>
            <input type="password" name ="password"required>
            <div class="forgot"><a href="#">forgot your password?</a></div>
            <button class="btn-primary" type="submit">log in</button>
            <button class="btn-google" type="button" >
                <i class='bx bxl-google'></i>
                <div>log in with google</div>
            </button>
        </form>
        <div class="signup">don't have a account?<a href="#">Sign up</a></div>
        <div class="footer">©kelompok11</div>
    </div>
    <div class="right">
        <div class="section-img">
            <div class="section-img">
                <img src="../assets/images/logo11.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>