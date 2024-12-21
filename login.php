<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR["himg"]; ?>">
    <title>mac2m3u</title>
    <link rel="stylesheet" href="style.css" />

    <style>


    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        flex-direction: column;
        min-height: 100vh; 
        margin: 0;
    }

    .footer {
        margin-top: auto; 
        background-color: #333;
        color: #ffffff;
        text-align: center;
        padding: 10px 0;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }


        .log {
            width: 95%;
            height: 50px;
            background: #fff;
            border: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            font-size: 20px;
            color: #333;
            font-weight: 600;
            margin-top: 20px;
        }

        .log:hover {
            background: #f5f5f5;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }
        
        .message-container {
            margin-top: 30px;
            width: 95%;
        }

        .message {
            padding: 10px;
            border-radius: 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;
            margin: 10px 0;
        }

        .success {
            background-color: white;
            color: #47a14a;
        }

        .error {
            background-color: white;
            color: #f44336;
        }
    </style>
</head>

<body>
    <?php
    $jitendraunatti = '';
    $statusMessage = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
        if (isset($_POST['on'])) {
            $result = file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt", "ON");
            if ($result !== false) {
                $statusMessage = "<div class='message success'>Token Sharing mode ON✅</div>";
            } else {
                $statusMessage = "<div class='message error'>Error setting status</div>";
            }
        } elseif (isset($_POST['off'])) {
            $result = file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt", "OFF");
            if ($result !== false) {
                $statusMessage = "<div class='message success'>Token Sharing mode OFF❌</div>";
            } else {
                $statusMessage = "<div class='message error'>Error setting status</div>";
            }
        }

       
        if (!empty($_POST['url']) && !empty($_POST['mac'])) {
            $data = [
                'JITENDRAUNATTI' => [
                    'url' => $_POST['url'],
                    'mac' => $_POST['mac'],
                    'sn' => $_POST['sn'],
                    'd1' => $_POST['d1'],
                    'd2' => $_POST['d2'],
                    'sig' => $_POST['sig']
                ]
            ];

            $jsonData = json_encode($data, JSON_PRETTY_PRINT);

            $filePath = "$JITENDRA_PRO_DEV_X_DARK_SIDE/data.txt";
            if (file_put_contents($filePath,scarlet_witch("encrypt", $jsonData)) !== false) {
                $jitendraunatti = "<div class='message success'>Data saved successfully</div>";
            } else {
                $jitendraunatti = "<div class='message error'>Error saving data</div>";
            }
        }
    }
    ?>

    <div class="frame">
        <div class="login">Login</div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="email">
                <input type="text" id="url" name="url" placeholder="Stalker Portal url" required />
                <img src="" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="mac" name="mac" placeholder="Mac Address" required />
                <img src="" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="sn" name="sn" placeholder="Serial Number" />
                <img src="" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="d1" name="d1" placeholder="Device id 1" />
                <img src="" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="d2" name="d2" placeholder="Device id 2" />
                <img src="" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="sig" name="sig" placeholder="Signature" />
                <img src="" width="23px" />
            </div>
            <button type="submit" class="log">Login</button>
            <div class="message-container">
                <?php echo $jitendraunatti; ?>
            </div>
        </form>
       
        </div>
        <footer>        
    </footer>
</body>

</html>