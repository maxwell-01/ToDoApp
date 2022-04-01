<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>To Do List</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="toDoList.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
</head>

<body>
<header>

    <h1>To Do List</h1>
    <p>Never forget again</p>

</header>

<main>
    <section class="to-do-list-section">
        <form method="post">
            <label>
                <input type="text" placeholder="Task Name" name="taskname">
            </label>
            <input type="submit" value="Add Task">
        </form>
        <table>
           <tr>
               <th>Task</th>
               <th>Status</th>

           </tr>
            <?php
                foreach ($tasks as $task){
                    echo '
                    <tr><td>'.$task["taskname"].'<a href="/complete-task/'.$task["id"].'"><img class="complete-tick-img" src="check.png"></a></td><td>'.$task["status"].'</td></tr>
                    ';
                }
            ?>
        </table>
    </section>
</main>

<footer>
    <div>
        <div class="footer-item">
            <a href="https://www.instagram.com/thehopefulhitchhikers/?hl=en" target="_blank">Instagram</a>
        </div>

        <div class="footer-item">
            <a href="https://www.linkedin.com/in/maxwellnewton/" target="_blank">LinkedIn</a>
        </div>

        <div class="footer-item">
            <a href="https://github.com/maxwell-01" target="_blank">GitHub</a>
        </div>
    </div>

</footer>

</body>

</html>