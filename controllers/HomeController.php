<?
require_once 'models/HomeModel.php';
require_once 'base/ControllerBase.php';


class HomeController extends ControllerBase
{
    public function __construct()
    {

        $this->model = new HomeModel();
    }

    public function render()
    {
        $lastNews = $this->model->getLastNews();
        $items_per_page = 4;

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $items_per_page;

        $news = $this->model->getNews($offset, $items_per_page);
        $total_count = $this->model->getTotalNewsCount();
        $total_pages = ceil($total_count / $items_per_page);
        $page_amount = 2;

        require 'Views/home.php';
    }
}
