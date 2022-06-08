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
            'author' => 'Franco Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Rossi',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Mario Verdi',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Bianchi',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Gino Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <?php for ($i = 0; $i < count(array_keys($posts)); $i++) {
            $current_date = array_keys($posts)[$i];
            $current_array = $posts[$current_date]; ?>
            <div class="item">
                <div class="date">
                    <?php echo $current_date ?>
                </div>
                <ul>

                    <?php for ($j = 0; $j < count($current_array); $j++) {
                        $current_post = $current_array[$j]; ?>
                        <li>
                            <div class="contents">
                                <?php for ($k = 0; $k < count(array_keys($current_post)); $k++) {
                                    $current_post_key = array_keys($current_post)[$k]; ?>
                                    <div class="<?php echo $current_post_key ?>">
                                        <?php echo $current_post[$current_post_key] ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>

</body>

</html>