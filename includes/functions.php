<?php

//News logic for Main page and News page
function printLatestNews($fquery, $small)
{
    global $connection;

    $query = $fquery;
    $selectNews = mysqli_query($connection, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($selectNews)) {
        $rows[] = [
            'heading' => $row['news_heading'],
            'content' => $small ?
                substr($row['news_content'], 0, 300) . '...' :
                substr($row['news_content'], 0, 1000) . '...'

        ];
    }
    return $rows;
}

//Representatives button block
function listRepresentatives()
{
    global $connection;

    $countryQuery = "SELECT * FROM rep_countries";
    $countryList = mysqli_query($connection, $countryQuery);

    $countries = [];
    while($row = mysqli_fetch_assoc($countryList)) {
        $countries[] = [
            'id' => $row['country_id'],
            'name' => $row['country_name']
        ];
    }

    $repQuery = "SELECT * FROM rep_info";
    $repList = mysqli_query($connection, $repQuery);

    $representatives = [];
    while($row = mysqli_fetch_assoc($repList)){
        $representatives[] = [
            'info' => $row['rep_content'],
            'url' => $row['rep_url'],
            'country_id' => $row['country_id']
        ];
    }

    $result = [];
    foreach($countries as $country) {
        $reps = [];
        foreach($representatives as $representative) {
            if ($representative['country_id'] == $country['id']) {
                $reps[] = $representative;
            }
        }

        $result[] = [
            'country_id' => $country['id'],
            'name' => $country['name'],
            'reps' => $reps
        ];
    }
    return $result;
}