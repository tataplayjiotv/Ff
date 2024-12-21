<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR['himg']; ?>">
    <title>mac2m3u</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(135deg, #667eea, #764ba2);
            background-size: cover; 
            background-attachment: fixed; 
            background-position: center; 
            color: #f3f3f3;
            text-align: center;
            padding: 0;
            margin: 0;
            min-height: 100vh; 
        }

        .container {
            padding: 100px 20px;
        }

        .pro-user {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            padding: 30px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
            transition: all 0.4s ease;
            transform: translateY(0);
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            0% { transform: translateY(20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .pro-user:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.9);
        }

        .pro-user h1 {
            font-size: 28px;
            margin: 30px 0;
            color: #ffffff;
        }

        .pro-user .link-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .pro-user .link-container a {
            margin: 10px;
            display: inline-block;
            padding: 15px 30px;
            font-size: 20px;
            background: linear-gradient(135deg, #9e50f2, #2575fc); /* Elegant blue-purple gradient */
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px; /* Softer rounded edges */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15); /* Subtle shadow for elegance */
            transition: all 0.3s ease;
        }

        .pro-user .link-container a:hover {
            background: linear-gradient(135deg, #2575fc, #9e50f2); /* Reversed gradient for hover */
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25); /* Slightly enhanced shadow */
        }



        footer {
            margin-top: 40px;
            color: #f3f3f3;
            font-size: 18px;
        }

        .footer-text {
            display: block;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="pro-user">
        <h1>Explore Our Features</h1>
        <div class="link-container">
            <a class="playlist-link" href="login.php">Login</a>
            <a class="playlist-link" href="web.php">Web</a>
            <a class="playlist-link" href="config.php?key=mac2m3u">Token</a>
            <a class="playlist-link" href="playlist.php">Playlist</a>
            <a class="playlist-link" href="admin.php">Admin</a>
            <a class="playlist-link" href="app/playlist">Previous Dump Playlist</a>
            
        </div>
        <h1><?php echo $ASUR["error"]; ?></h1>
        <h1><?php echo $ASUR["message1"];  ?></h1>
        <h1><?php echo $ASUR["message2"]; ?></h1>
        <h1><?php echo $ASUR["message3"];?></h1>
        <h1><?php echo $ASUR["message4"]; ?></h1>
       
    </div>
</div>
</body>
</html>
