<?php

/**
 * This is the model class for table "{{funcionario}}".
 *
 * The followings are the available columns in table '{{funcionario}}':
 * @property string $cpf
 * @property string $registro_funcional
 * @property string $data_admissao
 *
 * The followings are the available model relations:
 * @property Pessoa $cpf0
 * @property Requisicao[] $requisicaos
 */
class Funcionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
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
		return '{{funcionario}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cpf, registro_funcional', 'required'),
			array('cpf', 'length', 'max'=>11),
			array('registro_funcional', 'length', 'max'=>10),
			array('data_admissao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cpf, registro_funcional, data_admissao', 'safe', 'on'=>'search'),
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
			'cpf0' => array(self::BELONGS_TO, 'Pessoa', 'cpf'),
			'requisicaos' => array(self::HAS_MANY, 'Requisicao', 'registro_funcional'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cpf' => 'Cpf',
			'registro_funcional' => 'Registro Funcional',
			'data_admissao' => 'Data Admissao',
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

		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('registro_funcional',$this->registro_funcional,true);
		$criteria->compare('data_admissao',$this->data_admissao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}