<?php

/**
 * This is the model class for table "veiculos_clientes_pagamentos".
 *
 * The followings are the available columns in table 'veiculos_clientes_pagamentos':
 * @property integer $idveiculo_cliente_pagamento
 * @property integer $idveiculo
 * @property integer $idcliente
 * @property string $hora_entrada
 * @property string $hora_saida
 * @property string $data_entrada
 * @property string $data_saida
 * @property integer $idpagamento
 * @property string $status_pagamento
 *
 * The followings are the available model relations:
 * @property Pagamentos $idpagamento0
 * @property Clientes $idcliente0
 * @property Veiculos $idveiculo0
 */
class VeiculosClientesPagamentos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'veiculos_clientes_pagamentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idveiculo_cliente_pagamento, idveiculo, idcliente, idpagamento', 'required'),
			array('idveiculo_cliente_pagamento, idveiculo, idcliente, idpagamento', 'numerical', 'integerOnly'=>true),
			array('hora_entrada, hora_saida, data_entrada, data_saida, status_pagamento', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idveiculo_cliente_pagamento, idveiculo, idcliente, hora_entrada, hora_saida, data_entrada, data_saida, idpagamento, status_pagamento', 'safe', 'on'=>'search'),
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
			'idpagamento0' => array(self::BELONGS_TO, 'Pagamentos', 'idpagamento'),
			'idcliente0' => array(self::BELONGS_TO, 'Clientes', 'idcliente'),
			'idveiculo0' => array(self::BELONGS_TO, 'Veiculos', 'idveiculo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idveiculo_cliente_pagamento' => 'Idveiculo Cliente Pagamento',
			'idveiculo' => 'Idveiculo',
			'idcliente' => 'Idcliente',
			'hora_entrada' => 'Hora Entrada',
			'hora_saida' => 'Hora Saida',
			'data_entrada' => 'Data Entrada',
			'data_saida' => 'Data Saida',
			'idpagamento' => 'Idpagamento',
			'status_pagamento' => 'Status Pagamento',
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

		$criteria->compare('idveiculo_cliente_pagamento',$this->idveiculo_cliente_pagamento);
		$criteria->compare('idveiculo',$this->idveiculo);
		$criteria->compare('idcliente',$this->idcliente);
		$criteria->compare('hora_entrada',$this->hora_entrada,true);
		$criteria->compare('hora_saida',$this->hora_saida,true);
		$criteria->compare('data_entrada',$this->data_entrada,true);
		$criteria->compare('data_saida',$this->data_saida,true);
		$criteria->compare('idpagamento',$this->idpagamento);
		$criteria->compare('status_pagamento',$this->status_pagamento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VeiculosClientesPagamentos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
