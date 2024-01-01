<?php
require '../controllers/ResultController.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/tailwind.css" rel="stylesheet" />
    <title>Result | Test App</title>

</head>

<body>
    <main class="grid h-screen bg-indigo-200 place-content-center">
        <div class="grid grid-cols-[1fr_2fr] gap-2 bg-black/10 border p-6 place-items-center animate-flip-down">
            <span class="text-xl font-bold text-indigo-800">Student Name</span>
            <span class=""><?= $_SESSION['student_name'] ?></span>
            <span class="text-xl font-bold text-indigo-800">Degree</span>
            <span> <?= $_SESSION['degree'] ?> / <?= $_SESSION['questions_count'] ?> Degree</span>
            <span class="text-xl font-bold text-indigo-800">Time</span>
            <span> <?php
                    $created_at = new DateTime($_SESSION['created_at']);
                    $exit_at = new DateTime();
                    echo ($created_at->diff($exit_at)->format('%i minutes %s seconds'))
                    ?></span>
            <form method="post" action="../controllers/logoutController.php" class="col-span-full">
                <button type="submit" class="block px-4 py-1 mx-auto text-white transition-colors bg-indigo-700 border rounded hover:bg-indigo-800 hover:outline hover:outline-indigo-300 w-fit">Exit</button>
            </form>
        </div>
    </main>
</body>

</html>