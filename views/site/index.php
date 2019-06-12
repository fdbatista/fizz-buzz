<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h3>Welcome to FizzBuzz!</h3>
        <p class="lead">
			<a class="btn btn-success" href="<?= Url::to(['/fizz-buzz/index']) ?>">Let's get started</a>
		</p>
    </div>
</div>
