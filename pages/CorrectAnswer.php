<?php
require '../config/session.php';
if ($_SESSION['current_question'] >= $_SESSION['questions_count']) {
    header("location: ../pages/result.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css" />
    <link rel="stylesheet" href="../css/tailwind.css" />
    <title>Correct Answer</title>
</head>

<body class="h-dvh flex flex-col justify-between">
    <main class="grid place-items-center bg-green-50 h-dvh">
        <div class="border border-white bg-white/70 p-6 max-w-sm w-full text-center space-y-3 animate-fade">
            <div class="animate-jump animate-delay-500 animate-duration-700">
                <span class="i-heroicons-check-circle size-16 text-green-500 inline-block" />
            </div>
            <h1 class="text-lg font-bold">The Answer is Correct</h1>
            <a href="./questions.php?lesson_type=<?= $_GET['lesson_type'] ?>" class="bg-green-500 text-white hover:bg-green-700 transition-colors duration-500 mx-auto px-2 py-1 rounded focus:outline focus:outline-green-200 inline-block">Go To Next</a>
        </div>
    </main>
    <?php
    require '../components/footer.html';
    ?>
</body>

</html>