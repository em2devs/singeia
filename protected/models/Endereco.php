<?php

/**
 * This is the model class for table "{{endereco}}".
 *
 * The followings are the available columns in table '{{endereco}}':
 * @property string $cpf
 * @property string $cep
 * @property string $tipo_endereco
 * @property string $logradouro
 * @property integer $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 *
 * The followings are the available model relations:
 * @property Pessoa $cpf0
 */
class Endereco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Endereco the static model class
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
		return '{{endereco}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cpf, cep, tipo_endereco, logradouro, numero, bairro, cidade, uf', 'required'),
			array('numero', 'numerical', 'integerOnly'=>true),
			array('cpf', 'length', 'max'=>11),
			array('cep', 'length', 'max'=>8),
			array('tipo_endereco', 'length', 'max'=>15),
			array('logradouro, bairro, cidade', 'length', 'max'=>45),
			array('complemento', 'length', 'max'=>25),
			array('uf', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cpf, cep, tipo_endereco, logradouro, numero, complemento, bairro, cidade, uf', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cpf' => 'Cpf',
			'cep' => 'Cep',
			'tipo_endereco' => 'Tipo Endereco',
			'logradouro' => 'Logradouro',
			'numero' => 'Numero',
			'complemento' => 'Complemento',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'uf' => 'Uf',
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
		$criteria->compare('cep',$this->cep,true);
		$criteria->compare('tipo_endereco',$this->tipo_endereco,true);
		$criteria->compare('logradouro',$this->logradouro,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('uf',$this->uf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}