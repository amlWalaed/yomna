<?php
require '../controllers/QuestionsController.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Student | Test </title>
</head>
<body>
    <main class="grid place-items-center bg-emerald-500">
        

    </main>
    <script>
        try{
            fetch('../controllers/QuestionsController.php').then((res)=>res.text()).then(res=>console.log(res))
        }catch(e){
            throw Error(e.message)
        }
    </script>
</body>
</html>