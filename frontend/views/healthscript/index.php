<?php

use yii\helpers\Html;
use yii\grid\GridView;
use miloschuman\highcharts\Highcharts;
use app\models\KpiList;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampaignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Report';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">



       <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">

            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-9 col-sm-9 blog-item">
                  
                  <h2><a href="javascript:;">KPI Report 2558</a></h2>
      <p>รายงานผลการปฏิบัติราชการรายตัวชี้วัดด้านสุขภาพจังหวัดสระแก้ว</p>            
      <table class="table table-condensed table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>ตัวชี้วัด</th>
            <th class="text-nowrap">เป้าหมาย</th>
            <th class="text-nowrap">ผลงาน</th>
            <th class="text-nowrap">ผลประเมิน</th>
            <th class="text-nowrap">Info.</th>
          </tr>
        </thead>
        <tbody>

<?php


$sql = "
SELECT * FROM `kpi_list` WHERE `kpi_year`='2558'
";


  foreach (KpiList::findBySql($sql)->all() as $row) {

            echo "         <tr data-toggle=\"collapse\" data-target=\"#demo\">";

            $a = $row['kpi_a_value'];
            $b = $row['kpi_b_value'];
            if($a > 0) {
                eval('$value='.$row['kpi_formula'].';');
                if($row['kpi_condition']<>'') {
                    eval('$pass=$value'.$row['kpi_condition'].';');
                    if($pass ) {
                        echo "           <td class=\"success\">".$row['kpi_order']."</td>";
                        echo "           <td>".stripslashes($row['kpi_name'])."</td>";
                        echo "           <td class=\"text-nowrap text-center\">".stripslashes($row['kpi_condition'])."</td>";
                        echo "           <td class=\"text-nowrap text-center\">".number_format((float)$value, 2, '.', '')."</td>";
                        echo "           <td class=\"text-nowrap text-center\">ผ่าน</td>";
                        
                    } else {
                        echo "           <td class=\"danger\">".$row['kpi_order']."</td>";
                        echo "           <td>".stripslashes($row['kpi_name'])."</td>";
                        echo "           <td class=\"text-nowrap text-center\">".stripslashes($row['kpi_condition'])."</td>";
                        echo "           <td class=\"text-nowrap text-center\">".number_format((float)$value, 2, '.', '')."</td>";
                        echo "           <td class=\"text-nowrap text-center\">ไม่ผ่าน</td>";
                    }
                    echo "           <td class=\"text-nowrap text-center\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#demo".$row['kpi_order']."\">Detail</button></td>";
                }
                    
            } else {
                $value=0;
                        echo "           <td>".$row['kpi_order']."</td>";
                        echo "           <td>".stripslashes($row['kpi_name'])."</td>";
                        echo "           <td class=\"text-nowrap text-center\">".stripslashes($row['kpi_condition'])."</td>";
                echo "           <td width=\"10%\" class=\"text-center\">รอประมวลผล</td>";
                echo "           <td class=\"text-center\">-</td>";
                echo "           <td class=\"text-nowrap text-center\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"collapse\" data-target=\"#demo".$row['kpi_order']."\">Detail</button></td>";
            }

            echo "         </tr>";
                echo "      <tr id=\"demo".$row['kpi_order']."\" class=\"collapse\"><td colspan=\"6\">";
                echo "        Lorem ipsum dolor sit amet, consectetur adipisicing elit,";
                echo "        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,";
                echo "        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
                echo "      </td></tr>";
            


  }



    

?>

        </tbody>
      </table>

                  <ul class="blog-info">
                    <li><i class="fa fa-user"></i> By admin</li>
                    <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                    <li><i class="fa fa-comments"></i> 17</li>
                    <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                  </ul>

                    
                </div>
                <!-- END LEFT SIDEBAR -->

              </div>
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
</div>

