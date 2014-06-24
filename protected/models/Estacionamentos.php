<?php

/**
 * This is the model class for table "estacionamentos".
 *
 * The followings are the available columns in table 'estacionamentos':
 * @property integer $idestacionamento
 * @property string $nome
 * @property string $proprietario
 * @property string $cidade
 * @property string $estado
 * @property string $endereco
 * @property string $numero
 * @property string $cnpj
 *
 * The followings are the available model relations:
 * @property Garagens[] $garagens
 */
class Estacionamentos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estacionamentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, proprietario, cidade, estado, endereco, numero, cnpj', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idestacionamento, nome, proprietario, cidade, estado, endereco, numero, cnpj', 'safe', 'on'=>'search'),
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
			'garagens' => array(self::HAS_MANY, 'Garagens', 'idestacionamento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idestacionamento' => 'Idestacionamento',
			'nome' => 'Nome',
			'proprietario' => 'Proprietario',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'endereco' => 'Endereco',
			'numero' => 'Numero',
			'cnpj' => 'Cnpj',
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

		$criteria->compare('idestacionamento',$this->idestacionamento);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('proprietario',$this->proprietario,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('cnpj',$this->cnpj,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estacionamentos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
