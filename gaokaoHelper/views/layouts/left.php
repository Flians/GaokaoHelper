<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '学校数据库', 'icon' => 'dashboard', 'url' => ['/school']],
                    ['label' => '历年分数线', 'icon' => 'dashboard', 'url' => ['/school-score']],
                    ['label' => '管理员', 'icon' => 'dashboard', 'url' => ['/admin'],],
                    ['label' => '服务商管理', 'icon' => 'dashboard', 'url' => ['/operater'],],
                    [
                        'label' => '系统配置',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => '省份管理', 'icon' => 'file-code-o', 'url' => ['/province'],],
                            ['label' => '年份管理', 'icon' => 'file-code-o', 'url' => ['/year'],],
                            ['label' => '省控制分数线', 'icon' => 'file-code-o', 'url' => ['/provincescore'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
