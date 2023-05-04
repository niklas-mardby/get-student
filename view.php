<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get-student</title>
</head>
<body>
    <section>
        <h1>All students:</h1>
        <ol>
            <?php
                foreach($students as $student) {
                    echo "<li>
                            <a href='index.php?id={$student["id"]}'>
                                {$student["name"]}
                            </a>
                        </li>";
                }
            ?>
        </ol>
    </section>
        <h2>Student info:</h2>
        <ul>
            <li>Name: <?= $chosen_student["name"] ?></li>
            <li>Mobile: <?= $chosen_student["mobile"] ?></li>
        </ul>
    <section>
    </section>
</body>
</html>