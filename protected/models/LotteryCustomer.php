<?php

/**
 * This is the model class for table "cld_lottery_customer".
 *
 * The followings are the available columns in table 'cld_lottery_customer':
 * @property integer $lottery_customer_id
 * @property string $name
 * @property string $sex
 * @property string $img_url
 * @property integer $lottery_level
 */
class LotteryCustomer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cld_lottery_customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('lottery_level', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>64),
			array('sex', 'length', 'max'=>6),
			array('img_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('lottery_customer_id, name, sex, img_url, lottery_level', 'safe', 'on'=>'search'),
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
			'lottery_customer_id' => 'Lottery Customer',
			'name' => 'Name',
			'sex' => 'Sex',
			'img_url' => 'Img Url',
			'lottery_level' => '0:没有中奖，非0数字：中奖等级',
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

		$criteria->compare('lottery_customer_id',$this->lottery_customer_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('img_url',$this->img_url,true);
		$criteria->compare('lottery_level',$this->lottery_level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LotteryCustomer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    ///////////////////////////自定义方法从这里开始////////////////////////////////////////////

    /*
     * 添加抽奖者
     * */
    public static function addParticipant( $memberList ){

        $sql = "INSERT INTO " . DB_PRE . "lottery_customer (`name`, `img_url`)
VALUES";
        $values = "";
        foreach( $memberList as $member){
            $values .= "('" . $member['name'] . "', '" . $member['img_url'] . "'),";

        }
        $values = trim($values, ',');
        $sql .= $values;

        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $query = $sqlCmd->execute();
        return $query;
    }

    public function getNonwinners(){
        $sql = "  SELECT * FROM " . DB_PRE . "lottery_customer WHERE lottery_level='0';";

        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $query = $sqlCmd->queryAll();
        return $query;
    }

    public function getNonwinnersCount(){
        $sql = "  SELECT COUNT(*) AS `count` FROM " . DB_PRE . "lottery_customer WHERE lottery_level='0';";

        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $count = $sqlCmd->queryScalar();
        return $count;
    }

    public function getLuckyDogByTurn( $turn ){
        $sql = "SELECT * FROM " . DB_PRE . "lottery_customer  WHERE lottery_level = '0' LIMIT " . $turn . ",1";
        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $luckyDog = $sqlCmd->queryRow();
        return $luckyDog;
    }

    public function getLuckyDogs(){
        $sql = "SELECT * FROM " . DB_PRE . "lottery_customer  WHERE lottery_level > '0' ORDER BY `lottery_level` DESC";
        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $luckyDogs = $sqlCmd->queryAll();
        return $luckyDogs;
    }


    public function setLuckyDogPrize($lottery_customer_id, $lottery_level){
        $sql = "UPDATE
  " . DB_PRE . "lottery_customer
SET
  lottery_level = '" . $lottery_level . "'
WHERE lottery_customer_id = '" . $lottery_customer_id . "'";
        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $success = $sqlCmd->execute();
        return $success;
    }

    public function setLottery( $param ){
        $sql = "UPDATE " . DB_PRE . "lottery_customer SET
lottery_level = '" . $param['lottery_level'] . "'
WHERE lottery_customer_id='" . $param['lottery_customer_id'] . "'";
        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $success = $sqlCmd->execute();
        return $success;
    }

    public function initLottery(){

        $sql = "UPDATE " . DB_PRE . "lottery_customer SET lottery_level='0' WHERE lottery_level>0";
        $sqlCmd = Yii::app()->db->createCommand( $sql );
        $success = $sqlCmd->execute();
        return $success;

    }
}
