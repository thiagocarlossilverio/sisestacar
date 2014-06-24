<?php

/**
 * This is the model class for table "garagens".
 *
 * The followings are the available columns in table 'garagens':
 * @property integer $idgaragem
 * @property integer $idestacionamento
 * @property integer $idveiculo
 * @property string $nome
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Estacionamentos $idestacionamento0
 * @property Veiculos $idveiculo0
 */
class Garagens extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'garagens';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idestacionamento, idveiculo', 'required'),
			array('idestacionamento, idveiculo', 'numerical', 'integerOnly'=>true),
			array('nome, status', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idgaragem, idestacionamento, idveiculo, nome, status', 'safe', 'on'=>'search'),
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
			'idestacionamento0' => array(self::BELONGS_TO, 'Estacionamentos', 'idestacionamento'),
			'idveiculo0' => array(self::BELONGS_TO, 'Veiculos', 'idveiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idgaragem' => 'Idgaragem',
			'idestacionamento' => 'Idestacionamento',
			'idveiculo' => 'Idveiculo',
			'nome' => 'Nome',
			'status' => 'Status',
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

		$criteria->compare('idgaragem',$this->idgaragem);
		$criteria->compare('idestacionamento',$this->idestacionamento);
		$criteria->compare('idveiculo',$this->idveiculo);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Garagens the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
