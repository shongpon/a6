<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kpi_list".
 *
 * @property integer $kpi_id
 * @property string $kpi_provcode
 * @property string $kpi_year
 * @property integer $kpi_order
 * @property string $kpi_name
 * @property string $kpi_definition
 * @property string $kpi_unit
 * @property integer $kpi_a_value
 * @property string $kpi_a_unit
 * @property string $kpi_a_desc
 * @property integer $kpi_b_value
 * @property string $kpi_b_unit
 * @property string $kpi_b_desc
 * @property string $kpi_formula
 * @property string $kpi_condition
 * @property string $kpi_sql
 * @property boolean $level_ministry
 * @property boolean $level_region
 * @property boolean $level_province
 * @property boolean $level_impotant
 * @property boolean $level_ceo_assess
 * @property string $tags
 * @property string $last_update
 */
class KpiList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kpi_list';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_warehouse');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kpi_provcode', 'kpi_year'], 'required'],
            [['kpi_order', 'kpi_a_value', 'kpi_b_value'], 'integer'],
            [['kpi_definition', 'kpi_a_desc', 'kpi_b_desc', 'kpi_formula', 'kpi_sql', 'tags'], 'string'],
            [['level_ministry', 'level_region', 'level_province', 'level_impotant', 'level_ceo_assess'], 'boolean'],
            [['last_update'], 'safe'],
            [['kpi_provcode'], 'string', 'max' => 2],
            [['kpi_year'], 'string', 'max' => 4],
            [['kpi_name', 'kpi_unit', 'kpi_a_unit', 'kpi_b_unit', 'kpi_condition'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kpi_id' => 'Kpi ID',
            'kpi_provcode' => 'Kpi Provcode',
            'kpi_year' => 'Kpi Year',
            'kpi_order' => 'Kpi Order',
            'kpi_name' => 'Kpi Name',
            'kpi_definition' => 'Kpi Definition',
            'kpi_unit' => 'Kpi Unit',
            'kpi_a_value' => 'Kpi A Value',
            'kpi_a_unit' => 'Kpi A Unit',
            'kpi_a_desc' => 'Kpi A Desc',
            'kpi_b_value' => 'Kpi B Value',
            'kpi_b_unit' => 'Kpi B Unit',
            'kpi_b_desc' => 'Kpi B Desc',
            'kpi_formula' => 'Kpi Formula',
            'kpi_condition' => 'Kpi Condition',
            'kpi_sql' => 'Kpi Sql',
            'level_ministry' => 'Level Ministry',
            'level_region' => 'Level Region',
            'level_province' => 'Level Province',
            'level_impotant' => 'Level Impotant',
            'level_ceo_assess' => 'Level Ceo Assess',
            'tags' => 'Tags',
            'last_update' => 'Last Update',
        ];
    }
}
