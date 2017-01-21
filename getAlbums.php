<?php

// Construction de la structure de données des albums
$albums = array(
    array(
        'id' => 1,
        'name' => 'All the Lost Souls',
        'artiste' => 'James Blunt',
        'cover' => 'img/albums/1/cover.png',
        'duration' => '42:16',
        'year' => '2007',
        'songs' => 11,
        'type' => 'Pop'
    ),
    array(
        'id' => 2,
        'name' => 'By the Way',
        'artiste' => 'Red Hot Chili Pepper',
        'cover' => 'img/albums/2/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
    array(
        'id' => 3,
        'name' => 'Different Pulses',
        'artiste' => 'Asaf Avidan',
        'cover' => 'img/albums/3/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
    array(
        'id' => 4,
        'name' => 'Devotion',
        'artiste' => 'Beach House',
        'cover' => 'img/albums/4/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
    array(
        'id' => 5,
        'name' => 'Coucou Disco - EP',
        'artiste' => 'Dim Sum',
        'cover' => 'img/albums/5/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
    array(
        'id' => 6,
        'name' => 'Be Set Free',
        'artiste' => 'Langhorne Slim',
        'cover' => 'img/albums/6/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
    array(
        'id' => 7,
        'name' => 'The Final Cut',
        'artiste' => 'Pink Floyd',
        'cover' => 'img/albums/7/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
    array(
        'id' => 8,
        'name' => 'Censored Colors',
        'artiste' => 'Portugal. The Man',
        'cover' => 'img/albums/8/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
    array(
        'id' => 9,
        'name' => 'Le Live',
        'artiste' => 'Téléphone',
        'cover' => 'img/albums/9/cover.png',
        'duration' => '1:41:18',
        'year' => '2002',
        'songs' => 23,
        'type' => 'Musique Alternative/Indé, Rock'
    ),
);

// Renvoi des données en JSON
header('Content-type: application/json');
echo json_encode(array('albums' => $albums));