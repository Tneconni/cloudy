<?php

/**
 * This is the model class for table "cld_apps".
 *
 * The followings are the available columns in table 'cld_apps':
 * @property integer $app_id
 * @property string $name
 * @property string $description
 * @property string $image_url
 * @property string $link
 * @property string $work_date
 * @property string $update
 */
class Apps extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cld_apps';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, image_url, link', 'required'),
			array('name', 'length', 'max'=>64),
			array('image_url, link', 'length', 'max'=>255),
			array('work_date, update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('app_id, name, description, image_url, link, work_date, update', 'safe', 'on'=>'search'),
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
			'app_id' => 'App',
			'name' => 'Name',
			'description' => 'Description',
			'image_url' => 'Image Url',
			'link' => 'app 地址链接',
			'work_date' => 'Work Date',
			'update' => 'Update',
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

		$criteria->compare('app_id',$this->app_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('work_date',$this->work_date,true);
		$criteria->compare('update',$this->update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apps the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /////////////////////Own defined project /////////////////////////////////


    public function getApp(){

        $sql = "SELECT * FROM " . DB_PRE . "apps ORDER BY work_date DESC  LIMIT 0,10";
        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $query = $sqlCmd->queryAll();
        return $query;

    }

}
