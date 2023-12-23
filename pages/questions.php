
<?php
require '../controllers/QuestionsController.php';
if(!isset($_SESSION['student_name'])){
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
<body>
    <main class="grid p-12 place-items-center bg-emerald-100">
        <form method="post" action="../controllers/QuestionsController.php" class="w-full max-w-sm p-6 space-y-6 border rounded shadow text-emerald-700 bg-black/10">
               <section id="questions-card" class="space-y-6">
           <?php
           foreach($questions as $question){
            $chooses = json_decode($question->chooses, true); 
            echo"<div>
            <h2 class='question'>{$question->question}</h2>
            ";
            foreach($chooses as $key=>$value){
                echo"<div><label>
                <input type='radio' value='$key' name='$question->id' />
                <span class='answer'>$value</span>
                </label>
                </div>";
            }
            echo"</div>";
           }
           ?>
              </section>
              <button type="submit" class="block px-2 py-1 mx-auto text-white transition-colors border rounded bg-emerald-700 hover:bg-emerald-800 hover:outline hover:outline-emerald-300 w-fit">Send</button>
        </form>

    </main>
</body>
</html>