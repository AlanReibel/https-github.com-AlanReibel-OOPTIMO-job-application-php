<?php

namespace app\controllers;

use yii\web\Controller;
use app\services\PostService;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays test 1.
     *
     * @return string
     */
    public function actionTest1()
    {
        $postService = new PostService();
        $posts = $postService->getPosts();

        return $this->render('test1', [
            'posts' => $posts
        ]);
    }
}
