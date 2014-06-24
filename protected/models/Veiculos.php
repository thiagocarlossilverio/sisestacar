<?php

/**
 * This is the model class for table "veiculos".
 *
 * The followings are the available columns in table 'veiculos':
 * @property integer $idveiculo
 * @property integer $idmodelo
 * @property integer $idcategoria_veiculos
 * @property string $cor
 * @property string $ano
 *
 * The followings are the available model relations:
 * @property Garagens[] $garagens
 * @property ModelosVeiculos $idmodelo0
 * @property CategoriaVeiculos $idcategoriaVeiculos
 * @property Clientes[] $clientes
 */
class Veiculos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'veiculos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idmodelo, idcategoria_veiculos', 'required'),
			array('idmodelo, idcategoria_veiculos', 'numerical', 'integerOnly'=>true),
			array('cor, ano', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idveiculo, idmodelo, idcategoria_veiculos, cor, ano', 'safe', 'on'=>'search'),
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
			'garagens' => array(self::HAS_MANY, 'Garagens', 'idveiculo'),
			'idmodelo0' => array(self::BELONGS_TO, 'ModelosVeiculos', 'idmodelo'),
			'idcategoriaVeiculos' => array(self::BELONGS_TO, 'CategoriaVeiculos', 'idcategoria_veiculos'),
			'clientes' => array(self::MANY_MANY, 'Clientes', 'veiculos_clientes_pagamentos(idveiculo, idcliente)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idveiculo' => 'Idveiculo',
			'idmodelo' => 'Idmodelo',
			'idcategoria_veiculos' => 'Idcategoria Veiculos',
			'cor' => 'Cor',
			'ano' => 'Ano',
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

		$criteria->compare('idveiculo',$this->idveiculo);
		$criteria->compare('idmodelo',$this->idmodelo);
		$criteria->compare('idcategoria_veiculos',$this->idcategoria_veiculos);
		$criteria->compare('cor',$this->cor,true);
		$criteria->compare('ano',$this->ano,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Veiculos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
