<?php

/**
 * @var $this yii\web\View
 * @var array $result;
 */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<main>
    <div class="container articles-container">


        <div class="divider-new  mt-4 mb-5" >
            <h1 class="h1-responsive">Интересные статьи о ТВбоксах</h1>
        </div>

        <div class="tiles-mag">

            <!-- Magazine -->
            <div class="row mb-3">
                <!-- Main news -->
                <div class="col-md-12 tiles-blog">

                        <!--First row-->
                        <div class="row">
                            <?php foreach ($articles as $art): ?>
                            <!--First column-->
                            <div class="col-md-4 tiles-margins " >
                                <!--Single blog post-->
                                <div class="tiles-blog-post waves-effect waves-light z-depth-1">
                                    <!--Blog post link-->
                                    <a href="<?=Url::to(['articles/question', 'id' => $art->id]) ?>">
                                        <!--Image-->
                                        <div class="tiles-image hm-zoom">
                                            <?= Html::img("@web/img/{$art->image}", ['alt' => $art->name, 'class' => 'img-fluid']) ?>

                                        </div>
                                        <!--/Image-->
                                    </a>
                                    <!--Blog post link-->

                                    <!--Blog post body-->
                                    <div class="tiles-post-body">
                                        <!--Excerpt-->

                                        <h3 class="tiles-post-title h3-responsive"><a href="<?=Url::to(['articles/question', 'id' => $art->id]) ?>" class="white-text"><?= $art->name?></a></h3>

                                        <span class="tiles-post-date grey-text"><i class="fa fa-clock-o"></i> <?= $art->date?></span>

                                        <!--/Excerpt-->
                                    </div>
                                    <!--/Blog post body-->
                                </div>
                                <!--/Single blog post-->
                            </div>
                            <!--/First column-->
                            <?php endforeach;?>
                        </div>
                        <!--/First row-->

                </div>
                <!--/ Main news -->

            </div>
            <!--/ Magazine -->

        </div>

    </div>
</main>