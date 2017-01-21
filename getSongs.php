<?php
// Récupération des paramètres
$album = $_GET['album'];

// Construction de la structure de données des chansons
$songs = array(
    "1" =>
    array(
        array(
            'num' => 1,
            'title' => '1973',
            'duration' => '4:41'
        ),
        array(
            'num' => 2,
            'title' => 'One Of The Brightest Stars',
            'duration' => '3:12'
        ),
        array(
            'num' => 3,
            'title' => 'I\'ll Take Everything',
            'duration' => '3:06'
        ),
        array(
            'num' => 4,
            'title' => 'Same Mistake',
            'duration' => '4:59'
        ),
        array(
            'num' => 5,
            'title' => 'Carry You Home',
            'duration' => '3:57'
        ),
        array(
            'num' => 6,
            'title' => 'Give Me Some Love',
            'duration' => '3:37'
        ),
        array(
            'num' => 7,
            'title' => 'I Really Want You',
            'duration' => '3:31'
        ),
        array(
            'num' => 8,
            'title' => 'Shine On',
            'duration' => '4:28'
        ),
        array(
            'num' => 9,
            'title' => 'Annie',
            'duration' => '3:30'
        ),
        array(
            'num' => 10,
            'title' => 'I Can\'t Hear The Music',
            'duration' => '3:46'
        ),
        array(
            'num' => 11,
            'title' => '1973 (Acoustic)',
            'duration' => '3:29'
        )
    ),
    "2" =>
    array(
        array(
            'num' => 1,
            'title' => 'By The Way',
            'duration' => '3:36'
        ),
        array(
            'num' => 2,
            'title' => 'Universally Speaking',
            'duration' => '4:16'
        ),
        array(
            'num' => 3,
            'title' => 'This Is The Place',
            'duration' => '4:17'
        ),
        array(
            'num' => 4,
            'title' => 'Dosed',
            'duration' => '5:11'
        ),
        array(
            'num' => 5,
            'title' => 'Don\'t Forget Me',
            'duration' => '4:37'
        ),
        array(
            'num' => 6,
            'title' => 'The Zephyr Song',
            'duration' => '3:51'
        ),
        array(
            'num' => 7,
            'title' => 'Can\'t Stop',
            'duration' => '4:29'
        ),
        array(
            'num' => 8,
            'title' => 'I Could Die For You',
            'duration' => '3:12'
        ),
        array(
            'num' => 9,
            'title' => 'Midnight',
            'duration' => '4:55'
        ),
        array(
            'num' => 10,
            'title' => 'Throw Away Your Television',
            'duration' => '3:44'
        ),
        array(
            'num' => 11,
            'title' => 'Cabron',
            'duration' => '3:58'
        ),
        array(
            'num' => 12,
            'title' => 'Tear',
            'duration' => '5:17'
        ),
        array(
            'num' => 13,
            'title' => 'On Mercury',
            'duration' => '3:27'
        ),
        array(
            'num' => 14,
            'title' => 'Minor Thing',
            'duration' => '3:37'
        ),
        array(
            'num' => 15,
            'title' => 'Warm Tape',
            'duration' => '4:16'
        ),
        array(
            'num' => 16,
            'title' => 'Venice Queen',
            'duration' => '6:07'
        ),
    )
);

// Renvoi des données en JSON
header('Content-type: application/json');
echo json_encode(array('songs' => $songs[$album]));