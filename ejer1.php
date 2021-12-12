<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (4, "2020-09-23", "Juanjo", "I thought this was a great movie
        Even though my girlfriend made me see it against my will.", 5),
    (4, "2008-09-23", "Billy Bob", "I liked Eraserhead better.", 1),
    (4, "2008-09-28", "Peppermint Patty", "I wish I'd have seen it
        sooner!", 2),
    (5, "2008-09-23", "Luis", "tiene una buena produccion", 5),
    (5, "2008-09-23", "George B.", "I liked this movie, even though I
        Thought it was an informational video from my travel agent.", 3),
    (5, "2008-09-23", "Marvin Martian", "hola que tal", 5),
    (6, "2008-09-23", "George B.","Grande profe.", 3),
    (6, "2011-09-23", "Lolito", "esta muy buena la pelicula", 5),
    (6, "2012-09-23", "lutssa", "me ha gustado mucho ", 2)
ENDSQL;
mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';
?>
