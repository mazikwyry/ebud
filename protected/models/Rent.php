<?php

/**
 * This is the model class for table "rent".
 *
 * The followings are the available columns in table 'rent':
 * @property integer $id
 * @property string $item
 * @property string $description
 * @property string $price
 * @property string $photo
 */
class Rent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item, description, price', 'required'),
			array('item', 'length', 'max'=>200),
			array('price', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item, description, price, photo', 'safe', 'on'=>'search'),
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
			'images'=>array(self::HAS_MANY, 'Gall', 'id_parent', 'condition'=>'parent_type="rent"'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item' => 'Artykuł',
			'description' => 'Opis',
			'price' => 'Cena',
			'photo' => 'Zdjęcia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('photo',$this->photo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}