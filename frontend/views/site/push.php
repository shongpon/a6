<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use miloschuman\highcharts\Highcharts;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Push';
$this->params['breadcrumbs'][] = $this->title;

$options = [
    'item' => function($index, $label, $name, $checked, $value) {

        // check if the radio button is already selected
        $checked = ($checked) ? 'checked' : '';

        $return = '<label class="radio-inline">';
        $return .= '<input type="radio" name="' . $name . '" value="' . $value . '" ' . $checked . '>';
        $return .= $label;
        $return .= '</label>';

        return $return;
    }
]
?>

<?php
echo Highcharts::widget([

   'options' => [
      'chart' => ['type'=>'solidgauge'],

      'title' => null,
      'yAxis' => [
          'title' => ['text' => 'Fruit eaten'],
          'min'=> 0,
          'max'=> 100,

      ],
      'series' => [
         ['name' => 'Jane', 'type' => 'solidgauge', 'data' => [80]],

      ],
      'credits' => ['enabled'=> false],



        'pane' => [
            'center'=> ['50%', '85%'],
            'size'=> '140%',
            'startAngle'=> -90,
            'endAngle'=> 90,
            'background'=> [
                'backgroundColor'=>'#EEE',
                'innerRadius'=> '60%',
                'outerRadius'=> '100%',
                'shape'=> 'arc'
            ]
        ],

        'tooltip'=> [
            'enabled'=> false
        ],

        // the value axis
        'yAxis'=> [
            'stops'=> [
                [0.1, '#55BF3B'], // green
                [0.5, '#DDDF0D'], // yellow
                [0.9, '#DF5353'] // red
            ],
            'lineWidth'=> 0,
            'minorTickInterval'=> null,
            'tickPixelInterval'=> 400,
            'tickWidth'=> 0,
            'title'=> [
                            'y'=> -70
                        ],
            'labels'=> [
                            'y'=> 16
                        ]
        ],

        'plotOptions'=> [
            'solidgauge'=>[
                'dataLabels'=> [
                    'y'=> 5,
                    'borderWidth'=> 0,
                    'useHTML'=>true
                ]
            ]
        ],        
   ]
]);
?>






    <div class="main">
      <div class="container">


<div style="width: 600px; height: 400px; margin: 0 auto">
  <div id="container-speed" style="width: 300px; height: 200px; float: left"></div>
  <div id="container-rpm" style="width: 300px; height: 200px; float: left"></div>
</div>



        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12">

            <div class="content-page">
              <div class="row">
                <div class="col-md-9 col-sm-9">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>


        <div>
            <?php $form = ActiveForm::begin(); ?>
                <?=$form->field($model, 'sex')
                        ->radioList(
                            ['all' => ' ทุกเพศ ', 'male' => ' ชาย ', 'female' => ' หญิง '],
                            ['item' => function ($index, $label, $name, $checked, $value) {
                                return '<label class="radio-inline">' . Html::radio($name, $checked, ['value'  => $value]) . $label . '</label>';
                                }
                            ]
                        )
                    ->label('เพศ');
                ?>

                <?= $form->field($model, 'age')->label('อายุ') ?>
                <?= $form->field($model, 'provcode')->dropdownList(['00' => 'ทุกจังหวัด', '27' => 'สระแก้ว', '10' => 'กรุงเทพฯ']) ?>
                <?= $form->field($model, 'distcode') ?>
                <?= $form->field($model, 'subdistcode') ?>
                <?= $form->field($model, 'hoscode') ?>
                <?= $form->field($model, 'msg')->textArea(['rows' => 6])->label('ข้อความ')  ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
            <?php ActiveForm::end(); ?>
        </div>


</div>

                <div class="col-md-3 col-sm-3 sidebar2">
                  <h2>Our Contacts</h2>
                  <address>
                    <strong>Loop, Inc.</strong><br>
                    795 Park Ave, Suite 120<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (234) 145-1810
                  </address>
                  <address>
                    <strong>Email</strong><br>
                    <a href="mailto:info@email.com">info@email.com</a><br>
                    <a href="mailto:support@example.com">support@example.com</a>
                  </address>
                  <ul class="social-icons margin-bottom-40">
                    <li><a href="javascript:;" data-original-title="facebook" class="facebook"></a></li>
                    <li><a href="javascript:;" data-original-title="github" class="github"></a></li>
                    <li><a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a></li>
                    <li><a href="javascript:;" data-original-title="linkedin" class="linkedin"></a></li>
                    <li><a href="javascript:;" data-original-title="rss" class="rss"></a></li>
                  </ul>

                  <h2 class="padding-top-30">About Us</h2>
                  <p>Sediam nonummy nibh euismod tation ullamcorper suscipit</p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
                    <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                    <li><i class="fa fa-check"></i> Deserunt fpicia</li>
                  </ul>        
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

            <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img2.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img5.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img2.jpg"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              Skype: <a href="skype:metronic">metronic</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
