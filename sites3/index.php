<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title> 
        <?php
            
            $pageTitle = "Домашняя страница";
            echo $pageTitle;
        ?>        
    </title>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
        <meta http-equiv="refresh" content="1">
    </head>
    <body class="bod">
        
        <header class="header">
            <div class="container">
                 <nav class="main-menu">
                 <?php
                echo '<a href="#about"';
                ?>
                <?php
                echo ' >Обо мне</a>';
                ?>

                <?php
                echo '<a href="#score"';
                ?>
                <?php
                echo ' >Оценки</a>';
                ?>
                <?php
                echo '<a href="form.php"';
                ?>
                <?php
                echo ' >Обратная связь</a>';
                ?>

                <?php
                $name = 'Авторизация';
                $link = 'auth.php';
                $current_page = true;
                ?>

                <a href="<?php echo $link; ?>" <?php if ($current_page)
                       echo ' class="aut"'; ?>>
                    <?php echo $name; ?>
                </a>

            
    

            
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <section id="about">
                    <h1>Обо мне</h1>
                    <p>
                        Привет! Я учусь на втором курсе Московского Политеха и хочу показать результаты за свой первый курс.
                    </p>
                    <figure class="photo">
                        <?php
                            if( date('s') % 2 === 0 ) 
                            $name='1';	
                            else	
                            $name='2';
                        
                            echo '<img src="images/photo'.$name.'.jpg" alt="Меняющаяся фотография">';
                            
    ?>


                    </figure>
                
                </section>
                <section id="score">
                    <h1>Оценки</h1>
                    <p>
                        Хочу продемонстрировать вам свои оценки за 1 курс
                    </p>
                    <table>
                        <tr>
                            <td>Предмет</td>
                            <td>Оценка</td>
                            <td>Семестр</td>
                        </tr>
                        <?php
            $grades = [
                ['Курсовой проект', 5, 1],
                ['Основы программирования', 5, 1],
                ['Линейная Алгебра', 5, 1],
                ['Алгоритмы и структуры данных', 5, 1],
                ['Базы данных', 5, 2],
                ['Курсовой проект', 5, 2],
                ['Прикладное программирование', 5, 2],
            ];
            foreach ($grades as $grade) {
                echo "<tr>";
                echo "<td>{$grade[0]}</td>"; 
                echo "<td>{$grade[1]}</td>";  
                echo "<td>{$grade[2]}</td>"; 
                echo "</tr>";
            }
        ?>
                    </table>
                    <section id="about">
                        
                </section>
            
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <?php
                date_default_timezone_set('Europe/Moscow');
                $currentDateTime = date('d.m.Y \в H-i:s');
                echo "Сформировано $currentDateTime";
            ?>
            </div>

        </footer>

    </body>
</html>