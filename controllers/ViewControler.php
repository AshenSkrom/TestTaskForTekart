<?
require_once 'models/ViewModel.php';
require_once 'base/ControllerBase.php';

class ViewController extends ControllerBase
{
    public function __construct()
    {
        $this->model = new ViewModel();
    }

    public function render()
    {
        $newsId = isset($_GET['id']) ? $_GET['id'] : null;
        if ($newsId) {
            $news = $this->model->getNewsById($newsId);

            require 'Views/view.php';
        } else {
            echo "Новость не найдена";
        }
    }
}
