<?php
    $this->title = $model->title;
?>
<div class="page case-detail">

    <div class="cont fl">
        <?=$model->content?>
    </div>

    <div class="menu fl">
        <div class="hd">
            <h2><?=$model->title?></h2>
            <p>[<?=$model->category->name?>]</p>
        </div>
        <div class="bd">
            <?=$model->description?>
        </div>
    </div>

</div>