<?

require_once 'controllers/HomeController.php';
require_once 'controllers/ViewControler.php';
require_once 'Router.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('?', $uri)[0];

$router = new Router();
$router->addRoute('/', HomeController::class, '');
$router->addRoute('/view_news', ViewController::class, '');
$router->dispatch($uri);
