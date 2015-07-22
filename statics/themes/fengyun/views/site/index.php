<?php
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;
use source\libs\Resource;
use source\core\widgets\ListView;
use source\core\widgets\LinkPager;
use source\libs\DataSource;
use source\core\widgets\LoopData;

/* @var $this source\core\front\FrontView */

$this->layout = 'main';
$this->title='首页';

?>

<?php 
        $this->loopData($rows,'//_inc/content_default');
        echo \statics\themes\fengyun\functions\LinkPager::widget([
            'pagination' => $pager
        ]);
        ?>
        