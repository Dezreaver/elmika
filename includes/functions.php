<?php

//News logic for Main page and News page
function printLatestNews($fquery, $size)
{
    global $connection;

    $query = $fquery;
    $selectNews = mysqli_query($connection, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($selectNews)) {
        if($size == 'small') {
            $content = $row['news_content_small'];
        } elseif ($size == 'medium') {
            $content = $row['news_content_medium'];
        } else {
            $content = $row['news_content'];
        }

        $rows[] = [
            'id' => $row['news_id'],
            'heading' => $row['news_heading'],
            'content' => $content,
            'image' => $row['news_image']
        ];
    }
    return $rows;
}
// News Page pagination
function newsPagination($page) {

    global $connection;

    if ($page == "" || $page == 1) {
        $pageStart = 0;
    } else {
        $pageStart = ($page * 5) - 5;
    }

    $query = "SELECT * FROM news";
    $getAllNews = mysqli_query($connection, $query);
    $newsCount = mysqli_num_rows($getAllNews);

    $newsCount = ceil($newsCount / 5);

    return $arr[] = [
        $pageStart,
        $newsCount
    ];
}

//Navigation
function listNavigation(){
    global $connection;

    $query = "SELECT * FROM navigation";
    $navItems = mysqli_query($connection, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($navItems)) {
        $rows[] = [
            'title' => $row['nav_title'],
            'link' => $row['nav_link']
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

//Products page display, product page and model variants
function allProductsLogic($fquery)
{
global $connection;

$productsQuery = $fquery;
$productsList = mysqli_query($connection, $productsQuery);

$productsImgQuery = "SELECT * FROM product_images";
$productsImgList = mysqli_query($connection, $productsImgQuery);

$productVarQuery = "SELECT * FROM product_variants";
$productVarList = mysqli_query($connection, $productVarQuery);

$products = [];
while ($row = mysqli_fetch_assoc($productsList)) {
$products[] = [
'id' => $row['prod_id'],
'title' => $row['prod_title'],
'content' => $row['prod_content']
];
}

$productsImages = [];
while ($row = mysqli_fetch_assoc($productsImgList)) {
$productsImages[] = [
'id' => $row['img_id'],
'content' => $row['img_content'],
'prod_id' => $row['prod_id'],
'var_id' => $row['var_id']
];
}

$productVariants = [];
while ($row = mysqli_fetch_assoc($productVarList)) {
$productVariants[] = [
'id' => $row['var_id'],
'title' => $row['var_title'],
'content' => $row['var_content'],
'prod_id' => $row['prod_id']
];
}

$results = [];
foreach ($products as $product) {
$images = [];
$variants = [];
foreach ($productsImages as $productsImage) {
if ($productsImage['prod_id'] == $product['id']) {
$images[] = $productsImage;
}
}
foreach ($productVariants as $productVariant) {
if ($productVariant['prod_id'] == $product['id']) {
$variants[] = $productVariant;
}
}
$results[] = [
'id' => $product['id'],
'title' => $product['title'],
'content' => $product['content'],
'images' => $images,
'variants' => $variants
];
}
return $results;
}


