<code><?=__FILE__?></code>
<br/>
<?= $var; ?>
<br/>
<?= $hello; ?>
<br/>
<?= $hi; ?>
<br/>
<?= $name; ?>
<?php
//echo '<pre>';
//var_dump($posts);
//echo '</pre>';
//debug($posts);
if (!empty($posts)) {
    foreach ($posts as $post) {
?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="<?=\yii\helpers\Url::to(['post/view', 'id' => $post->id])?>"><?=$post->title;?></a>
                </h3>
            </div>
            <div class="panel-body">
                <?=$post->excerpt;?>
            </div>
        </div>
<?php
    }
    echo \yii\widgets\LinkPager::widget(['pagination' => $pages]);
}