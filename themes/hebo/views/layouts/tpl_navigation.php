<section id="navigation-main">  
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="nav-collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'htmlOptions' => array('class' => 'nav'),
                        'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                        'itemCssClass' => 'item-test',
                        'encodeLabel' => false,
                        'items' => array(
                            array('label' => 'Home', 'url' => array('/site/index')),
                            array('label' => 'Anak Asuh', 'url' => array('/site/anak_asuh')),
                            array('label' => 'Daftar Perantara Baru', 'url' => array('/site/daftar_perantara'),'visible'=>Yii::app()->user->isRole('Admin')&&!Yii::app()->user->isGuest),
                            array('label' => 'Pengasuh', 'url' => array('/site/pengasuh'),'visible'=>Yii::app()->user->isRole('Admin')&&!Yii::app()->user->isGuest),
                            array('label' => 'Pengasuhan Anak <span class="caret"></span>', 'url' => '#', 'itemOptions', 'visible'=>Yii::app()->user->isRole('Pengasuh')&&!Yii::app()->user->isGuest, 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Request Pengasuhan', 'url' => array('/Karyawan/ChangePassword', 'id' => Yii::app()->user->id)),
                                    array('label' => 'Proggress Pengasuhan', 'url' => array('Site/logout')),
                                //array('label' => 'Daftar Hadir', 'url' => array('BeritaAcaraDaftarHadir/searchBeritaAcaraDaftarHadir')),
                                )),
                            array('label' => 'Register', 'url' => array('/user/register','visible' => Yii::app()->user->isGuest)),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')<span class="caret"></span>', 'url' => '#', 'itemOptions', 'visible' => !Yii::app()->user->isGuest, 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Change Password', 'url' => array('/Karyawan/ChangePassword', 'id' => Yii::app()->user->id)),
                                    array('label' => 'Logout', 'url' => array('Site/logout')),
                                //array('label' => 'Daftar Hadir', 'url' => array('BeritaAcaraDaftarHadir/searchBeritaAcaraDaftarHadir')),
                                )),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- /#navigation-main -->