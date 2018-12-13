<?php

namespace app\controllers;


use app\models\News;
use app\models\Publication;
use app\models\Statute;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;



class SiteController extends AppController
{

    //public $variable = true;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $news=array_reverse(News::find()->where(['status'=>1])->andWhere(['pred'=>0])->asArray()->all());
        $this->setMeta('НСТ Квант '); $this->view->params['lable'] = 'новости';

        return $this->render('index',compact('news','lable'));
    }
    public function actionNews()
    {
        $this->view->params['lable'] = 'новости';
        $new=News::findOne($_GET['id']);
        return $this->render('news',compact('new'));
    }
    public function actionPublic($id)
    {
        $public=Publication::findOne($id);
        $this->view->params['lable'] = $public['title'];
        return $this->render('public',compact('public'));
    }
    public function actionCirculation(){
        $this->view->params['lable'] = 'обращения председателя';
        $news=array_reverse(News::find()->where(['status'=>1])->andWhere(['pred'=>1])->asArray()->all());
        return $this->render('index',compact('news','lable'));
    }

    public function actionCharter(){

        $this->setMeta('НСТ Квант | Устав садоводчества'); $this->view->params['lable'] = 'Устав садоводчества';
        return $this->render('charter');
    }

    public function actionCharterproject(){
        $this->setMeta('НСТ Квант | Проект устава'); $this->view->params['lable'] = 'Проект устава садоводчества';

        return $this->render('project');
    }
    public function actionRegulations(){
        $this->setMeta('НСТ Квант | Регламенты'); $this->view->params['lable'] = 'Регламенты';
        $statute=Statute::find()->asArray()->all();
        return $this->render('regulations',compact('statute'));
    }
    public function actionStatute(){
        $this->setMeta('НСТ Квант | Регламенты'); $this->view->params['lable'] = 'Регламенты';
        $statute=Statute::findOne($_GET['id']);
        return $this->render('statute',compact('statute'));
    }
    public function actionDetails(){
        $this->setMeta('НСТ Квант | Реквизиты'); $this->view->params['lable'] = 'Реквизиты';
        return $this->render('details');
    }
    //////////////////////////////////////
    public function actionGarden(){
        $publications=$this->showPublication('garden');
        $this->setMeta('НСТ Квант | Сад'); $this->view->params['lable'] = 'Сад';
        return $this->render('publiclist',compact('publications'));
    }
    public function actionKaleyard(){
        $publications=$this->showPublication('kaleyard');
        $this->setMeta('НСТ Квант | Огород'); $this->view->params['lable'] = 'Огород';

        return $this->render('publiclist',compact('publications'));
    }
    public function actionAgronomist(){
        $publications=$this->showPublication('agronomist');
        $this->setMeta('НСТ Квант | Советы агронома'); $this->view->params['lable'] = 'Советы агронома';
        return $this->render('publiclist',compact('publications'));
    }
    public function actionFlower(){
        $publications=$this->showPublication('flower');
        $this->setMeta('НСТ Квант | Цветник'); $this->view->params['lable'] = 'Цветник';
        return $this->render('flower',compact('publications'));
    }
    public function actionGrapes(){
        $publications=$this->showPublication('grapes');
        $this->setMeta('НСТ Квант | Виноград'); $this->view->params['lable'] = 'Виноград';
        return $this->render('publiclist',compact('publications'));
    }
    public function actionBuild(){
        $publications=$this->showPublication('build');
        $this->setMeta('НСТ Квант | Строю сам'); $this->view->params['lable'] = 'Строю сам';
        return $this->render('publiclist',compact('publications'));
    }
    public function actionExperienced(){
        $publications=$this->showPublication('experienced');
        $this->setMeta('НСТ Квант | Советы бывалых'); $this->view->params['lable'] = 'Советы бывалых';
        return $this->render('publiclist',compact('publications'));
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->setMeta('НСТ Квант | Авторизация'); $this->view->params['lable'] = 'Авторизация';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

}
