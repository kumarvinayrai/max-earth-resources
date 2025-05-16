<?php
// Simple Router

$request = $_SERVER['REQUEST_URI'];
$request = explode('?', $request)[0];

if ($request === '/' || $request === '') {
    $request = '/home';
}

$routes = [
    '/home' => '/../app/views/home.php',
    '/about' => '/../app/views/about/index.php',
    '/about/management_team' => '/../app/views/about/management_team.php',
    '/about/accomplishments' => '/../app/views/about/accomplishments.php',
    '/about/directors_desk' => '/../app/views/about/directors_desk.php',
    '/about/vision_mission' => '/../app/views/about/vision_mission.php',
    '/about/advantage' => '/../app/views/about/advantage.php',

    '/verticals' => '/../app/views/verticals/index.php',
    '/verticals/major_minerals' => '/../app/views/verticals/major_minerals.php',
    '/verticals/minor_minerals' => '/../app/views/verticals/minor_minerals.php',
    '/verticals/mining_equipment' => '/../app/views/verticals/mining_equipment.php',

    '/projects/ongoing' => '/../app/views/projects/ongoing.php',

    '/investors' => '/../app/views/investors/index.php',
    '/investors/annual_reports' => '/../app/views/investors/annual_reports.php',
    '/investors/shareholders' => '/../app/views/investors/shareholders.php',
    '/investors/stock_price' => '/../app/views/investors/stock_price.php',
    '/investors/quarterly_results' => '/../app/views/investors/quarterly_results.php',

    '/news/latest_news' => '/../app/views/news/latest_news.php',
    '/news/media_articles' => '/../app/views/news/media_articles.php',

    '/contact' => '/../app/views/contact/index.php',
    '/contact/query_form' => '/../app/views/contact/query_form.php',
    '/contact/social_links' => '/../app/views/contact/social_links.php',

    '/admin/login' => '/../app/views/admin/login.php',
    '/admin/news' => '/../app/views/admin/news.php',
    '/admin/media_articles' => '/../app/views/admin/media_articles.php',
    '/admin/social_links' => '/../app/views/admin/social_links.php',
    '/admin/reports' => '/../app/views/admin/reports.php',
    '/admin/shareholders' => '/../app/views/admin/shareholders.php',
    '/admin/stock_price' => '/../app/views/admin/stock_price.php',
];

if (isset($routes[$request])) {
    include __DIR__ . $routes[$request];
} else {
    http_response_code(404);
    echo "404 - Page Not Found";
}
