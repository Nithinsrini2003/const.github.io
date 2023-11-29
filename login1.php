<!DOCTYPE html>
<html>
    <head>
    <title>SIGN UP FORM</title>
    <link rel="icon" type="image/png" href="C:\xampp\htdocs\2021506058\mini_project\mini_project_1\img\favicon.png">
         <link rel="stylesheet" href="stylelog.css">
         <script defer src=""></script>
    </head>
    <body>
        <div class="container">
            <form action="login.php " method="post" id="form">
                <h1>Registration</h1>
                <div class="input-control">
                    <label for="username">username</label>
                    <input type="text" id="username" name="username" required>
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required >
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password">Re-Enter Password</label>
                    <input type="password" id="password1" name="password1" required>
                    <div class="error"></div>
                </div>
                <button type="submit">Sing Up</button>
            </form>
        </div>
    </body>
</html>