<?php

use yii\widgets\MenuLte;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        MenuLte::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        /*[
                            'label' => 'Blog',
                            'icon' => 'fa fa-briefcase',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Posting', 
                                    'icon' => 'fa fa-book', 
                                    'url' => ['/debug'],],                                
                                ['label' => 'Kategori', 
                                    'icon' => 'fa fa-tasks', 
                                    'url' => ['/debug'],],                                
                                ['label' => 'Komentar', 
                                    'icon' => 'fa fa-commenting', 
                                    'url' => ['/debug'],],
                                ['label' => 'Tautan', 
                                    'icon' => 'fa fa-tag', 
                                    'url' => ['/debug'],],
                            ],
                        ],*/
                        ['label' => 'User', 'icon' => 'fa fa-users', 'url' => ['user/index'],],
                    ],
                ]
        )
        ?>
    </section>
    <!-- /.sidebar -->
</aside>
