<?php
$matches = [
    [
        "home_team" => [
            "name" => "Boston Celtics",
            "score" => 50
        ],
        "visiting_team" => [
            "name" => "New York Knicks",
            "score" => 60
        ]
    ],
    [
        "home_team" => [
            "name" => "Toronto Raptors",
            "score" => 55
        ],
        "visiting_team" => [
            "name" => "Philadelphia 76ers",
            "score" => 62
        ]
    ],
    [
        "home_team" => [
            "name" => "Los Angeles Lakers",
            "score" => 65
        ],
        "visiting_team" => [
            "name" => "Sacramento Kings",
            "score" => 52
        ]
    ],
    [
        "home_team" => [
            "name" => "Golden State Warriors",
            "score" => 50
        ],
        "visiting_team" => [
            "name" => "LA Clippers",
            "score" => 55
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <h2>Risultati delle partite giocate fino ad ora:</h2>
        <ul>
            <?php for ($i = 0; $i < count($matches); $i++) {

                $current_match = $matches[$i];
                $current_home_team = $current_match["home_team"];
                $current_visiting_team = $current_match["visiting_team"] ?>
                <li>
                    <p>
                        <?php
                        echo $current_home_team["name"] . " - " . $current_visiting_team["name"] . " | " . $current_home_team["score"] . " - " . $current_visiting_team["score"]
                        ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
    </div>

</body>

</html>