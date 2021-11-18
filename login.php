<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chatme! Now </title>
    <link rel = "stylesheet" href = "style.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class = "wrapper">
        <section class = "form signup">
            <header> Chatme! Now </header>
            <form action = "login.php">
                <div class="error-txt"> This is an error messege! </div>
                    <div class="field input">
                        <label> Email </label>
                        <input type = "text" placeholder = "Enter your Email">
                    </div>
                    <div class="field input">
                        <label> Password </label>
                        <input type = "text" placeholder = "Enter new Password">
                        <i class = "fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type = "submit" value = "Continue to Chatme!">
                    </div>
            </form>
            <div class="link"> Not yet sign up? <a href = "index.php"> Signup now </a>  </div>
        </section>
    </div>
</body>
</html>