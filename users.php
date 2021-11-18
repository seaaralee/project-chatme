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
        <section class = "users">

            <header>
                <div class = "content">
                    <img src = "jpg.jpg" alt = "">
                    <div class = "details">
                        <span> seaara </span>
                        <p> Active Now </p>
                    </div>
                </div>
                <a href = "index.php" class = "logout"> Logout </a>
            </header>

            <div class = "search">
                <span class = "text"> Select an Users to start Chat! </span>
                <input type = "text" placeholder = "Enter name to search . . .">
                <button> <i class = "fas fa-search"></i> </button>
            </div>
            <div class = "users-list">
                <a href = "chat.php">
                    <div class = "content">
                        <img src = "alr.jpg" alt = "">
                        <div class = "details">
                            <span> Alrefa </span>
                            <p> This is test messege! </p>
                        </div>
                    </div>
                    <div class = "status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href = "chat.php">
                    <div class = "content">
                        <img src = "alr.jpg" alt = "">
                        <div class = "details">
                            <span> Alrefa </span>
                            <p> This is test messege! </p>
                        </div>
                    </div>
                    <div class = "status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>
</body>
</html>