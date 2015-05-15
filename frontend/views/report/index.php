<?php

use yii\helpers\Html;
use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use app\models\RepChildDevR6;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampaignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Report';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
 <h3>ร้อยละของเด็กที่มีพัฒนาการสมวัยตามช่วงอายุ 0-5 ปี เขตบริการสุขภาพที่ 6</h1>

<?php


$sql = "
SELECT
ROUND(IFNULL(SUM(if(r.areacode LIKE '11%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '11%', r.total_targer, 0)) ,0),2) AS p11,
ROUND(IFNULL(SUM(if(r.areacode LIKE '20%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '20%', r.total_targer, 0)) ,0),2) AS p20,
ROUND(IFNULL(SUM(if(r.areacode LIKE '21%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '21%', r.total_targer, 0)) ,0),2) AS p21,
ROUND(IFNULL(SUM(if(r.areacode LIKE '22%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '22%', r.total_targer, 0)) ,0),2) AS p22,
ROUND(IFNULL(SUM(if(r.areacode LIKE '23%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '23%', r.total_targer, 0)) ,0),2) AS p23,
ROUND(IFNULL(SUM(if(r.areacode LIKE '24%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '24%', r.total_targer, 0)) ,0),2) AS p24,
ROUND(IFNULL(SUM(if(r.areacode LIKE '25%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '25%', r.total_targer, 0)) ,0),2) AS p25,
ROUND(IFNULL(SUM(if(r.areacode LIKE '27%', r.total_result, 0)) * 100 / SUM(if(r.areacode LIKE '27%', r.total_targer, 0)) ,0),2) AS สระแก้ว
FROM
rep_child_dev_r6 r
GROUP BY
r.age_month
ORDER BY
r.age_month
";
$rep = RepChildDevR6::findBySql($sql)->asArray()->all();



// echo '<br>'.implode(',', $rep[0]);
// echo '<br>'.implode(',', $rep[1]);
// echo '<br>'.implode(',', $rep[2]);
// echo '<br>'.implode(',', $rep[3]);



 //  $value=var_dump($rep[0]);
                        
 // echo print_r($value);  


 //  $value=var_dump(array_map('intVal', array_values($rep[0])));
                        
 // echo print_r($value);  


 // $value=var_dump(array_map('floatval', array_values($rep[0])));
 //  echo print_r(array_keys($rep[0]));  




echo Highcharts::widget([
'scripts' => array(
      'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
      'modules/exporting', // adds Exporting button/menu to chart
      //'themes/grid-light'        // applies global 'grid' theme to all charts
    ),
    'options' => array(
      'title' => array('text' => 'ร้อยละของเด็กที่มีพัฒนาการสมวัยตามช่วงอายุ 0-5 ปี เขตบริการสุขภาพที่ 6'),
      'xAxis' => array(
         'categories' => array_keys($rep[0])
      ),
      'yAxis' => array(
         'title' => array('text' => 'ร้อยละของเด็กที่มีพัฒนาการสมวัย')
      ),
      'colors'=>array('#2D7EC8', '#21A7DA', '#29D1D9', '#2FD1A5'),
      'gradient' => array('enabled'=> true),
      'credits' => array('enabled' => false),
      /*'exporting' => array('enabled' => false),*/ //to turn off exporting uncomment
      'chart' => array(
        'plotBackgroundColor' => '#ffffff',
        'plotBorderWidth' => null,
        'plotShadow' => false,
        'height' => 400,

      ),
      'title' => false,
       'series' => array(
            array('type'=>'column','name' => 'อายุ 9 เดือน', 'pointPadding'=>0, 'borderWidth'=>1, 'data' =>  array_map('floatval', array_values($rep[0])) ),
            array('type'=>'column','name' => 'อายุ 18 เดือน', 'pointPadding'=>0, 'borderWidth'=>1, 'data' => array_map('floatval', array_values($rep[1])) ),
            array('type'=>'column','name' => 'อายุ 30 เดือน', 'pointPadding'=>0, 'borderWidth'=>1, 'data' => array_map('floatval', array_values($rep[2])) ),
            array('type'=>'column','name' => 'อายุ 42 เดือน', 'pointPadding'=>0, 'borderWidth'=>1, 'data' => array_map('floatval', array_values($rep[3])) ),

      ),
    )
]);
?>

       <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">

            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-9 col-sm-9 blog-item">
                  
                  <h2><a href="javascript:;">Corrupti quos dolores etquas</a></h2>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
                  <blockquote>
                    <p>Pellentesque ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Integer posuere erat a ante.</p>
                    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                  </blockquote>                
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                  <p>Culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                  <ul class="blog-info">
                    <li><i class="fa fa-user"></i> By admin</li>
                    <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                    <li><i class="fa fa-comments"></i> 17</li>
                    <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                  </ul>

                  <h2>Comments</h2>
                  <div class="comments">
                    <div class="media">                    
                      <a href="javascript:;" class="pull-left">
                      <img src="assets/frontend/pages/img/people/img1-small.jpg" alt="" class="media-object">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Media heading <span>5 hours ago / <a href="javascript:;">Reply</a></span></h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <!-- Nested media object -->
                        <div class="media">
                          <a href="javascript:;" class="pull-left">
                          <img src="assets/frontend/pages/img/people/img2-small.jpg" alt="" class="media-object">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading <span>17 hours ago / <a href="javascript:;">Reply</a></span></h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                          </div>
                        </div>
                        <!--end media-->                      
                        <div class="media">
                          <a href="javascript:;" class="pull-left">
                          <img src="assets/frontend/pages/img/people/img3-small.jpg" alt="" class="media-object">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Media heading <span>2 days ago / <a href="javascript:;">Reply</a></span></h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                          </div>
                        </div>
                        <!--end media-->
                      </div>
                    </div>
                    <!--end media-->
                    <div class="media">
                      <a href="javascript:;" class="pull-left">
                      <img src="assets/frontend/pages/img/people/img4-small.jpg" alt="" class="media-object">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">Media heading <span>July 25,2013 / <a href="javascript:;">Reply</a></span></h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                      </div>
                    </div>
                    <!--end media-->
                  </div>

                  <div class="post-comment padding-top-40">
                    <h3>Leave a Comment</h3>
                    <form role="form">
                      <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text">
                      </div>

                      <div class="form-group">
                        <label>Email <span class="color-red">*</span></label>
                        <input class="form-control" type="text">
                      </div>

                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="8"></textarea>
                      </div>
                      <p><button class="btn btn-primary" type="submit">Post a Comment</button></p>
                    </form>
                  </div>                      
                </div>
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->            
                <div class="col-md-3 col-sm-3 blog-sidebar">
                  <!-- CATEGORIES START -->
                  <h2 class="no-top-space">Categories</h2>
                  <ul class="nav sidebar-categories margin-bottom-40">
                    <li><a href="javascript:;">London (18)</a></li>
                    <li><a href="javascript:;">Moscow (5)</a></li>
                    <li class="active"><a href="javascript:;">Paris (12)</a></li>
                    <li><a href="javascript:;">Berlin (7)</a></li>
                    <li><a href="javascript:;">Istanbul (3)</a></li>
                  </ul>
                  <!-- CATEGORIES END -->

                  <!-- BEGIN RECENT NEWS -->                            
                  <h2>Recent News</h2>
                  <div class="recent-news margin-bottom-10">
                    <div class="row margin-bottom-10">
                      <div class="col-md-3">
                        <img class="img-responsive" alt="" src="assets/frontend/pages/img/people/img2-large.jpg">                        
                      </div>
                      <div class="col-md-9 recent-news-inner">
                        <h3><a href="javascript:;">Letiusto gnissimos</a></h3>
                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                      </div>                        
                    </div>
                    <div class="row margin-bottom-10">
                      <div class="col-md-3">
                        <img class="img-responsive" alt="" src="assets/frontend/pages/img/people/img1-large.jpg">                        
                      </div>
                      <div class="col-md-9 recent-news-inner">
                        <h3><a href="javascript:;">Deiusto anissimos</a></h3>
                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                      </div>                        
                    </div>
                    <div class="row margin-bottom-10">
                      <div class="col-md-3">
                        <img class="img-responsive" alt="" src="assets/frontend/pages/img/people/img3-large.jpg">                        
                      </div>
                      <div class="col-md-9 recent-news-inner">
                        <h3><a href="javascript:;">Tesiusto baissimos</a></h3>
                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                      </div>                        
                    </div>
                  </div>
                  <!-- END RECENT NEWS -->                            

                  <!-- BEGIN BLOG TALKS -->
                  <div class="blog-talks margin-bottom-30">
                    <h2>Popular Talks</h2>
                    <div class="tab-style-1">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Multipurpose</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Documented</a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="tab-1" class="tab-pane row-fluid fade in active">
                          <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
                          <p><a class="more" href="javascript:;">Read more</a></p>
                        </div>
                        <div id="tab-2" class="tab-pane fade">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. aliquip jean shorts ullamco ad vinyl aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                        </div>
                      </div>
                    </div>
                  </div>                            
                  <!-- END BLOG TALKS -->

                  <!-- BEGIN BLOG PHOTOS STREAM -->
                  <div class="blog-photo-stream margin-bottom-20">
                    <h2>Photos Stream</h2>
                    <ul class="list-unstyled">
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img1.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img6.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/pics/img1-large.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/pics/img2-large.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/works/img3.jpg"></a></li>
                      <li><a href="javascript:;"><img alt="" src="assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                    </ul>                    
                  </div>
                  <!-- END BLOG PHOTOS STREAM -->

                  <!-- BEGIN BLOG TAGS -->
                  <div class="blog-tags margin-bottom-20">
                    <h2>Tags</h2>
                    <ul>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>OS</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Metronic</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Dell</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Conquer</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>MS</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Google</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Keenthemes</a></li>
                      <li><a href="javascript:;"><i class="fa fa-tags"></i>Twitter</a></li>
                    </ul>
                  </div>
                  <!-- END BLOG TAGS -->
                </div>
                <!-- END RIGHT SIDEBAR -->            
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
</div>

