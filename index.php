


<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$apiKey = '';
$apiKey2 = '';
$apiKey3 = '';

$client = new Client(['base_uri' => 'https://newsapi.org/v2/']);
$client2 = new Client(['base_uri' => 'https://newsdata.io/api/1/']);
$client3 = new Client(['base_uri' => 'https://api.coingecko.com/api/v3/coins/']);


// Fetch data for each section

$topHeadlines = getTopHeadlines($client, $apiKey);
$featuredScience = getFeaturedScience($client, $apiKey);
$featuredBusiness = getFeaturedBusiness($client, $apiKey);
$featuredEntertainment = getFeaturedEntertainment($client, $apiKey);
$featuredTechnology = getFeaturedTechnology($client, $apiKey);
$featuredSports = getFeaturedSports($client, $apiKey); 
$getLatest = getLatest($client2, $apiKey2);
$getCoin = getCoin($client3, $apiKey3);



// Function to get top headlines
function getCoin($client3, $apiKey3) {
    // API call for top headlines
    $response = $client3->request('GET', 'markets', [
        'query' => [
            'vs_currency'=> 'usd',
            'apiKey' => $apiKey3,
           
        ]
    ]);
    return json_decode($response->getBody(), true);
}
function getLatest($client2, $apiKey2) {
    // API call for top headlines
    $response = $client2->request('GET', 'latest', [
        'query' => [
            'country' => 'ng',
            'language' => 'en',
            'apiKey' => $apiKey2,
           
        ]
    ]);
    return json_decode($response->getBody(), true);
}

// Function to get top headlines
function getTopHeadlines($client, $apiKey) {
    // API call for top headlines
    $response = $client->request('GET', 'top-headlines', [
        'query' => [
            'category' => 'general',
            'apiKey' => $apiKey,
        ]
    ]);
    return json_decode($response->getBody(), true);
}
// Function to fetch featured science
function getFeaturedScience($client, $apiKey) {
    $response = $client->request('GET', 'top-headlines', [
        'query' => [
            'category' => 'science', 
            'apiKey' => $apiKey,
           
        ]
    ]);
    return json_decode($response->getBody(), true);
}
// Function to fetch business
function getFeaturedBusiness($client, $apiKey) {
    $response = $client->request('GET', 'top-headlines', [
        'query' => [
            'category' => 'business', 
            'apiKey' => $apiKey,
           
        ]
    ]);
    return json_decode($response->getBody(), true);
}
// Function to fetch entertainment
function getFeaturedEntertainment($client, $apiKey) {
    $response = $client->request('GET', 'top-headlines', [
        'query' => [
            'category' => 'entertainment', 
            'apiKey' => $apiKey,
           
        ]
    ]);
    return json_decode($response->getBody(), true);
}
// Function to fetch technology
function getFeaturedTechnology($client, $apiKey) {
    $response = $client->request('GET', 'top-headlines', [
        'query' => [
            'category' => 'technology', 
            'apiKey' => $apiKey,
           
        ]
    ]);
    return json_decode($response->getBody(), true);
}

// Function to fetch sports
function getFeaturedSports($client, $apiKey) {
    $response = $client->request('GET', 'top-headlines', [
        'query' => [
            'category' => 'sports', 
            'apiKey' => $apiKey,
           
        ]
    ]);
    return json_decode($response->getBody(), true);
}





?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MARSHALLNEWS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="news" name="keywords">
    <meta content="Marshall News Room" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">MARSHALL</span>NEWS</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="img/ads-700x70.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">MARSHALL</span>NEWS</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="category.html" class="nav-item nav-link">Categories</a>
                    <a href="single.html" class="nav-item nav-link">Single News</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Menu item 1</a>
                            <a href="#" class="dropdown-item">Menu item 2</a>
                            <a href="#" class="dropdown-item">Menu item 3</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                
        <?php foreach ($getCoin as $article): ?>              
                <div class="d-flex"style='justify-content:center; align-items:center; gap:10px;'>
                    <img src="<?= $article['image'] ?>" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 100%;">
                        <h5>$<?=number_format($article['current_price'], 2); ?></h5>
                    </div>
                </div>

<?php endforeach; ?>            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">

            <?php foreach ($topHeadlines['articles'] as $article): ?>
        <div class="position-relative overflow-hidden" style="height: 435px;">
            <img class="img-fluid h-100" src="<?= $article['urlToImage'] ?>" style="object-fit: cover;">
            <div class="overlay">
                <div class="mb-1">
                    <a class="text-white" href="#">Technology</a>
                    <span class="px-2 text-white">/</span>
                    <a class="text-white" href="#"><?= date('F j, Y', strtotime($article['publishedAt'])) ?></a>
                </div>
                <a class="h2 m-0 text-white font-weight-bold" href="<?= $article['url'] ?>"><?= $article['title'] ?></a>
            </div>
        </div>
    <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="img/cat-500x80-1.jpg" style="object-fit: cover;">
                        <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Business
                        </a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="img/cat-500x80-2.jpg" style="object-fit: cover;">
                        <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Technology
                        </a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="img/cat-500x80-3.jpg" style="object-fit: cover;">
                        <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Entertainment
                        </a>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="img/cat-500x80-4.jpg" style="object-fit: cover;">
                        <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Sports
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Science</h3>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
            
        <?php foreach ($featuredScience['articles'] as $article): ?>
                 

             <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid w-100 h-100" src="<?= $article['urlToImage'] ; ?>" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-1" style="font-size: 13px;">
                        <a class="text-white" href="#">Science</a>
                        <span class="px-1 text-white">/</span>
                        <a class="text-white" href="#"><?= date('F j, Y', strtotime($article['publishedAt']));  ?></a>
                    </div>
                    <a class="h4 m-0 text-white" href="<?=  $article['url']; ?>"><?=   implode(' ', array_slice(explode(' ', $article['title']), 0, 8));?>...</a>
                </div>
            </div>
         <?php endforeach; ?>

                
            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Business</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                     
                                  
             <?php foreach ($featuredBusiness['articles'] as $article): ?> 
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= $article['urlToImage']; ?>" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Business</a>
                                    <span class="px-1">/</span>
                                    <span><?= date('F j, Y', strtotime($article['publishedAt'])); ?> </span>
                                </div>
                                <a class="h4 m-0" href="<?=  $article['url']; ?>"><?=   implode(' ', array_slice(explode(' ', $article['title']), 0, 5)); ?></a>
                            </div>
                        </div>
             <?php endforeach; ?> 
                                        
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Technology</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                       
                        
                           <?php foreach ($featuredTechnology['articles'] as $article): ?> 
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= $article['urlToImage'] ; ?>" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span><?= date('F j, Y', strtotime($article['publishedAt'])); ?></span>
                                </div>
                                <a class="h4 m-0" href="<?=  $article['url']; ?>"><?=   implode(' ', array_slice(explode(' ', $article['title']), 0, 5)); ?></a>
                            </div>
                        </div>
             <?php endforeach; ?>   
                       
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Entertainment</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        
                                 
                    <?php foreach ($featuredEntertainment['articles'] as $article): ?> 
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= $article['urlToImage'] ; ?>" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Entertainment</a>
                                    <span class="px-1">/</span>
                                    <span><?= date('F j, Y', strtotime($article['publishedAt'])); ?></span>
                                </div>
                                <a class="h4 m-0" href="<?=  $article['url']; ?>"><?=   implode(' ', array_slice(explode(' ', $article['title']), 0, 5)); ?></a>
                            </div>
                        </div>
             <?php endforeach; ?>                      

                        
                      
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Sports</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        
               
                    <?php foreach ($featuredSports['articles'] as $article): ?> 
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= $article['urlToImage'] ; ?>" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">Sports</a>
                                    <span class="px-1">/</span>
                                    <span><?= date('F j, Y', strtotime($article['publishedAt'])); ?></span>
                                </div>
                                <a class="h4 m-0" href="<?=  $article['url']; ?>"><?=   implode(' ', array_slice(explode(' ', $article['title']), 0, 5)); ?></a>
                            </div>
                        </div>
             <?php endforeach; ?>                 

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                   

                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid w-100" src="img/ads-700x70.jpg" alt=""></a>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Latest</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-6">
                            
             <?php foreach (array_slice($getLatest['results'], 0, 1) as $article): ?>          
                            
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?= $article['image_url']; ?>" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href=""><?= implode(', ', $article['category']); ?></a>
                                        <span class="px-1">/</span>
                                        <span><?= date('F j, Y', strtotime($article['pubDate'])); ?></span>
                                    </div>
                                    <a class="h4" href="<?= $article['link']; ?>"><?= implode(' ', array_slice(explode(' ', $article['title']), 0, 7)); ?></a>
                                    <p class="m-0"><?= implode(' ', array_slice(explode(' ', $article['description']), 0, 20)); ?>...</p>
                                </div>
                            </div>
<?php endforeach; ?>
     <?php foreach (array_slice($getLatest['results'], 1, 2) as $article): ?>            
                             <div class="d-flex mb-3">
                                <img src="<?= $article['image_url']; ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href=""><?= implode(', ', $article['category']); ?></a>
                                        <span class="px-1">/</span>
                                        <span><?= date('F j, Y', strtotime($article['pubDate'])); ?></span>
                                    </div>
                                    <a class="h6 m-0" href="<?= $article['link']; ?>"><?= implode(' ', array_slice(explode(' ', $article['title']), 0, 7)); ?></a>
                                </div>
                            </div>
            <?php endforeach; ?>
                            
                        </div>
                        
                        
                        
                        <div class="col-lg-6">
                  <?php foreach (array_slice($getLatest['results'], 3, 1) as $article): ?>          
                            
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?= $article['image_url']; ?>" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href=""><?= implode(', ', $article['category']); ?></a>
                                        <span class="px-1">/</span>
                                        <span><?= date('F j, Y', strtotime($article['pubDate'])); ?></span>
                                    </div>
                                    <a class="h4" href="<?= $article['link']; ?>"><?= implode(' ', array_slice(explode(' ', $article['title']), 0, 7)); ?></a>
                                    <p class="m-0"><?= implode(' ', array_slice(explode(' ', $article['description']), 0, 20)); ?>...</p>
                                </div>
                            </div>
<?php endforeach; ?>
     <?php foreach (array_slice($getLatest['results'], 4, 2) as $article): ?>            
                             <div class="d-flex mb-3">
                                <img src="<?= $article['image_url']; ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href=""><?= implode(', ', $article['category']); ?></a>
                                        <span class="px-1">/</span>
                                        <span><?= date('F j, Y', strtotime($article['pubDate'])); ?></span>
                                    </div>
                                    <a class="h6 m-0" href="<?= $article['link']; ?>"><?= implode(' ', array_slice(explode(' ', $article['title']), 0, 7)); ?></a>
                                </div>
                            </div>
            <?php endforeach; ?>
                          
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Trending</h3>
                        </div>
                        
            <?php foreach (array_slice($getLatest['results'], 6, 5) as $article): ?>            
                             <div class="d-flex mb-3">
                                <img src="<?= $article['image_url']; ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href=""><?= implode(', ', $article['category']); ?></a>
                                        <span class="px-1">/</span>
                                        <span><?= date('F j, Y', strtotime($article['pubDate'])); ?></span>
                                    </div>
                                    <a class="h6 m-0" href="<?= $article['link']; ?>"><?= implode(' ', array_slice(explode(' ', $article['title']), 0, 7)); ?></a>
                                </div>
                            </div>
            <?php endforeach; ?>              
                                  
                        
                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">Marshall</span>News</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Categories</h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Tags</h4>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                    <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                    <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">MARSHALLNEWS</a>. All Rights Reserved.

           
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
