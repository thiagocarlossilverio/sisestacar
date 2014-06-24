<?php

/**
 * This is the model class for table "categoria_veiculos".
 *
 * The followings are the available columns in table 'categoria_veiculos':
 * @property integer $idcategoria_veiculos
 * @property string $nome_categoria
 * @property string $descricao
 *
 * The followings are the available model relations:
 * @property TabelaPrecos[] $tabelaPrecoses
 * @property Veiculos[] $veiculoses
 */
class CategoriaVeiculos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'categoria_veiculos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_categoria, descricao', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcategoria_veiculos, nome_categoria, descricao', 'safe', 'on'=>'search'),
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
			'tabelaPrecoses' => array(self::HAS_MANY, 'TabelaPrecos', 'idcategoria_veiculos'),
			'veiculoses' => array(self::HAS_MANY, 'Veiculos', 'idcategoria_veiculos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcategoria_veiculos' => 'Idcategoria Veiculos',
			'nome_categoria' => 'Nome Categoria',
			'descricao' => 'Descricao',
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

		$criteria->compare('idcategoria_veiculos',$this->idcategoria_veiculos);
		$criteria->compare('nome_categoria',$this->nome_categoria,true);
		$criteria->compare('descricao',$this->descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CategoriaVeiculos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
