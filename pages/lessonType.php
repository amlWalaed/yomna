<?php
require '../config/session.php';
$_SESSION['current_question'] = 0;
$_SESSION['degree']  = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Type</title>
    <link href="../css/tailwind.css" rel="stylesheet" />
</head>

<body>
    <main class="justify-between h-dvh flex flex-col">
        <h2 class="bg-black text-center py-6 text-white text-5xl font-bold">TEST</h2>
        <div class="max-w-sm w-full mx-auto text-center space-y-6">
            <p class="bg-gray-100 p-4">Welcome,<?= $_SESSION['student_name'] ?> </p>
            <p>Choose the lesson</p>
            <div class="p-2 border-2 border-black space-y-2">
                <div class="p-6 border">
                    <a class="underline" href="./questions.php?lesson_type=1">
                        Html
                    </a>
                </div>
                <div class="p-6 border">
                    <a class="underline" href="./questions.php?lesson_type=1">
                        Css
                    </a>

                </div>
            </div>
        </div>
        <?php
        require '../components/footer.html';
        ?>
    </main>
</body>

</html>