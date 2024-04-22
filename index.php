<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
# start a new cURL session ch = cURL handle
$ch = curl_init(API_URL);
// Specify we want to recive the request result and not show it on the screen
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Execute the request
 and save the result
*/
// var_dump($ch);
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);
?>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
  <title>Next Marvel movie</title>
</head>

<main>
  <section>
    <img src="<?= $data["poster_url"]; ?>" width="300" alt="<?= $data["title"]; ?>" />
  </section>

  <hgroup>
    <h2><?= $data["title"]; ?> to be relased in <?= $data["days_until"]; ?> days.</h2>
    <p>Release date: <?= $data["release_date"]; ?></p>
    <p>Next movie: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>
