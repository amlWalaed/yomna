<?php
require '../controllers/LoginController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../css/tailwind.css" rel="stylesheet" />
</head>
<body class="">
 <main class="flex flex-col items-center justify-center h-screen  bg-indigo-500">
     <?php 
     if(count($errors)>0){
         echo '<div class="bg-indigo-200 text-red-500 text-sm p-2 font-medium mb-3 rounded max-w-sm w-full">';
             foreach($errors as $error){
                 echo'<li>'.$error.'</li> ';
             };
         echo '</div>';
     }
        ?>
    <form method="post" class="space-y-6 border rounded shadow w-full max-w-sm p-6 bg-white/20">
        <div class="flex flex-col">
            <label for="student_name" >Name</label>
            <input id="student_name" type="text" name="student_name" />
        </div>
        <div class="flex flex-col">
            <label for="school_name">School Name</label>
            <select id="school_name" name="school_name">
                <option>Mans university</option>
                <option>Damietta university</option>
            </select>
        </div>
        <div>
            <label>
                <input type="radio" value="male" name="gender" />
                <span>Male</span>
            </label>
            <label>
                <input type="radio" value="female" name="gender" />
                <span>Female</span>
            </label>
        </div>
        <button type="submit"
        class="block mx-auto px-2 py-1 rounded text-center bg-indigo-900 hover:bg-indigo-700 text-white transition-colors duration-200">Start</button>
    </form>
 </main>
</body>
</html>