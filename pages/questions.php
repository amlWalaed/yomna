<?php
require '../controllers/QuestionsController.php';
if (!isset($_SESSION['student_name'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Student | Test </title>
    <link rel="stylesheet" href="../css/tailwind.css" />
</head>

<body class="h-dvh flex flex-col justify-between">
    <main class="grid p-12 place-items-center bg-indigo-100 h-dvh">
        <form method="post" action="../controllers/QuestionsController.php?lesson_type=<?= $_GET['lesson_type'] ?>" class="w-full max-w-sm p-6 space-y-6 border rounded shadow text-indigo-700 bg-black/10 animate-jump">
            <section id="questions-card" class="space-y-6">
                <div class="space-y-6">
                    <h2 class='question'><?= $questions[$count]->question ?></h2>
                    <div>
                        <?php
                        $chooses = json_decode($questions[$count]->chooses, true);
                        foreach ($chooses as $key => $value) {
                            echo "<div><label>
                                <input type='radio' value='$key' name='{$questions[$count]->id}' />
                                <span class='answer'>$value</span>
                            </label>
                        </div>";
                        }
                        ?>
                    </div>
                </div>
            </section>
            <button type="submit" class="block px-2 py-1 mx-auto text-white transition-colors border rounded bg-indigo-700 hover:bg-indigo-800 hover:outline hover:outline-indigo-300 w-fit">Send</button>
        </form>
    </main>
    <?php
    require '../components/footer.html';
    ?>
</body>

</html>