<?php require_once "../tables/create_table.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/inform.css">
</head>  
<body>
    <?php 

        $user_name = htmlspecialchars ($_POST['user_name']);
        $user_email = htmlspecialchars ($_POST['user_email']);
        $subject_msg = htmlspecialchars ($_POST['subject_msg']);
        $user_msg = htmlspecialchars ($_POST['user_msg']);
     ?>
    <div class="inform">
        <div class="block-inform">
            <p class="item"><span>Здравствуйте,</span> <?php echo $user_name ?> </p>
            <p class="item"><span>Ваш email:</span> <?php echo $user_email ?> </p>
            <p class="item"><span>Subject:</span> <?php echo $subject_msg ?> </p>
            <p class="item"><span>Message:</span> <?php echo $user_msg ?> </p>
            <p class="item"><?php echo "<hr>" ?></p>
            <p class="item"><span><?php echo "Спасибо, ваша заявка принята! Мы свяжемся с вами в ближайшее время" ?></span></p>
        </div>
    </div>

    <?php // Insert data

        $sql_insert = "INSERT INTO `$guests` (`id`, `user_name`, `user_email`, `subject_msg`, `user_msg`, `reg_date`) VALUES (NULL, '$user_name', '$user_email', '$subject_msg', ' $user_msg', CURRENT_TIMESTAMP)";

        $connect->query($sql_insert);

     ?>
    
</body>
</html>
