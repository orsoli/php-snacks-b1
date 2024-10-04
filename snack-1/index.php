<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta data  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Orsol Filaj">
    <meta name="description" content="snacks">
    <!-- Title  -->
    <title>Snack1</title>

    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Link Bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Link font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
    <!-- Container  -->
    <div class="container mx-auto py-4">
        <section>
            <?php foreach($posts as $data => $datePosts){ ?>
            <h1>
                <?= "The date: $data"?>
            </h1>
            <ul class="list-unstyled">
                <?php foreach($datePosts as $post){?>
                <li>
                    <h4>
                        Title: <?= $post['title']; ?>
                    </h4>
                    <p>
                        Author: <?= $post['author']; ?>
                    </p>
                    <p>
                        Text: <?= $post['text']; ?>
                    </p>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>



            <h2>

            </h2>
        </section>
    </div>
</body>

</html>