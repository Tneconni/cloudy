<?php

/**
 * This is the model class for table "cld_parts".
 *
 * The followings are the available columns in table 'cld_parts':
 * @property integer $id
 * @property integer $menu_id
 * @property string $name
 * @property string $contents
 * @property integer $sort_order
 * @property string $seoKeyword
 * @property string $js_file
 */
class Parts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cld_parts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_id, name, contents, sort_order', 'required'),
			array('menu_id, sort_order', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>256),
			array('seoKeyword, js_file', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, menu_id, name, contents, sort_order, seoKeyword, js_file', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menu_id' => 'Menu',
			'name' => 'Name',
			'contents' => 'Contents',
			'sort_order' => 'Sort Order',
			'seoKeyword' => 'Seo Keyword',
			'js_file' => 'Js File',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('contents',$this->contents,true);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('seoKeyword',$this->seoKeyword,true);
		$criteria->compare('js_file',$this->js_file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Parts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /******************** written by developer ***********************/
    public function getPartsByOrder(){
        $sql = 'SELECT * FROM ' . DB_PRE . 'parts ORDER BY sort_order';
        $res = $this->findAllBySql($sql);
        return $res;

    }
}
