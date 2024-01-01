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
    <main class="flex flex-col items-center justify-center h-screen bg-indigo-500">
        <?php
        if (count($errors) > 0) {
            echo '<div class="w-full max-w-sm p-2 mb-3 text-sm font-medium text-red-500 bg-indigo-200 rounded animate-jump-in animate-delay-300">';
            foreach ($errors as $error) {
                echo '<li>' . $error . '</li> ';
            };
            echo '</div>';
        }
        ?>
        <form method="post" class="w-full max-w-sm p-6 space-y-6 border rounded shadow bg-white/20">
            <div class="flex flex-col">
                <label for="student_name">Name</label>
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
            <button type="submit" class="block px-2 py-1 mx-auto text-center text-white transition-colors duration-200 bg-indigo-900 rounded hover:bg-indigo-700">Start</button>
        </form>
    </main>
</body>

</html>