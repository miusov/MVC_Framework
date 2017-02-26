<?php


class HomeController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        require_once(ROOT . '/views/home/index.php');
        return true;
    }

    public function actionArticle($article)
    {
        require_once(ROOT . '/views/home/article.php');
        return true;
    }


}
