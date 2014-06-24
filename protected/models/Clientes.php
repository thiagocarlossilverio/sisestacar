<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $idcliente
 * @property string $nome
 * @property string $data_nascimento
 * @property string $telefone_residencial
 * @property string $telefone_celular
 * @property string $cpf
 * @property string $cidade
 * @property string $estado
 * @property string $endereco
 * @property string $bairro
 * @property string $numero
 * @property string $complemento
 *
 * The followings are the available model relations:
 * @property Veiculos[] $veiculoses
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, telefone_residencial, telefone_celular, cpf, cidade, estado, endereco, bairro, numero, complemento', 'length', 'max'=>45),
			array('data_nascimento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcliente, nome, data_nascimento, telefone_residencial, telefone_celular, cpf, cidade, estado, endereco, bairro, numero, complemento', 'safe', 'on'=>'search'),
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
			'veiculos' => array(self::MANY_MANY, 'Veiculos', 'veiculos_clientes_pagamentos(idcliente, idveiculo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcliente' => 'Idcliente',
			'nome' => 'Nome',
			'data_nascimento' => 'Data Nascimento',
			'telefone_residencial' => 'Telefone Residencial',
			'telefone_celular' => 'Telefone Celular',
			'cpf' => 'Cpf',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'endereco' => 'Endereco',
			'bairro' => 'Bairro',
			'numero' => 'Numero',
			'complemento' => 'Complemento',
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

		$criteria->compare('idcliente',$this->idcliente);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);
		$criteria->compare('telefone_residencial',$this->telefone_residencial,true);
		$criteria->compare('telefone_celular',$this->telefone_celular,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('complemento',$this->complemento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
