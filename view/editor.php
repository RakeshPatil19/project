<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="../assets/global/css/editor_style.css">
    <title>Html editor</title>
</head>
<body>
    <div class="main-editor">
        <button class="btn">Run</button>
        <div class="first" contenteditable>
            <textarea rows="120" cols="90" name="fname">
            <?php
                 $first_name = $_POST['fname'];
                 // echo strval($first_name)
                  echo html_entity_decode($first_name);
            ?>
           </textarea>
        </div>
        <iframe class="second">
        </iframe>
    </div>

    <script src="../assets/global/scripts/editor_script.js"></script>
</body>
</html>