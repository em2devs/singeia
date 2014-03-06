<?php

/**
 * This is the model class for table "{{telefone}}".
 *
 * The followings are the available columns in table '{{telefone}}':
 * @property string $cpf
 * @property integer $cod_area_telefone
 * @property string $numero_telefone
 * @property string $tipo_telefone
 *
 * The followings are the available model relations:
 * @property Pessoa $cpf0
 */
class Telefone extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Telefone the static model class
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
		return '{{telefone}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cpf, cod_area_telefone, numero_telefone, tipo_telefone', 'required'),
			array('cod_area_telefone', 'numerical', 'integerOnly'=>true),
			array('cpf', 'length', 'max'=>11),
			array('numero_telefone', 'length', 'max'=>9),
			array('tipo_telefone', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cpf, cod_area_telefone, numero_telefone, tipo_telefone', 'safe', 'on'=>'search'),
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
			'cpf' => 'CPF',
			'cod_area_telefone' => 'Código de Área',
			'numero_telefone' => 'Número',
			'tipo_telefone' => 'Tipo',
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
		$criteria->compare('cod_area_telefone',$this->cod_area_telefone);
		$criteria->compare('numero_telefone',$this->numero_telefone,true);
		$criteria->compare('tipo_telefone',$this->tipo_telefone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getTipoTelefone()
        {
            return array(
                'Casa'      => 'Casa',
                'Trabalho'  => 'Trabalho',
                'Celular'   => 'Celular',
            );
        }
}