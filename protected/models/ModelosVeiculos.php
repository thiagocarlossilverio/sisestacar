<?php

/**
 * This is the model class for table "modelos_veiculos".
 *
 * The followings are the available columns in table 'modelos_veiculos':
 * @property integer $idmodelo
 * @property string $nome_modelo
 * @property integer $idmarca
 * @property string $status
 *
 * The followings are the available model relations:
 * @property MarcasVeiculos $idmarca0
 * @property Veiculos[] $veiculoses
 */
class ModelosVeiculos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modelos_veiculos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idmarca', 'required'),
			array('idmarca', 'numerical', 'integerOnly'=>true),
			array('nome_modelo, status', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmodelo, nome_modelo, idmarca, status', 'safe', 'on'=>'search'),
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
			'idmarca' => array(self::BELONGS_TO, 'MarcasVeiculos', 'idmarca'),
			'veiculos' => array(self::HAS_MANY, 'Veiculos', 'idmodelo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmodelo' => 'Idmodelo',
			'nome_modelo' => 'Nome Modelo',
			'idmarca' => 'Idmarca',
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

		$criteria->compare('idmodelo',$this->idmodelo);
		$criteria->compare('nome_modelo',$this->nome_modelo,true);
		$criteria->compare('idmarca',$this->idmarca);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelosVeiculos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
