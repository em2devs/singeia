<?php

/**
 * This is the model class for table "{{disciplina}}".
 *
 * The followings are the available columns in table '{{disciplina}}':
 * @property integer $cod_disciplina
 * @property string $nome_disciplina
 * @property string $sigla_disciplina
 * @property string $descricao_disciplina
 *
 * The followings are the available model relations:
 * @property VinculoDisciplina[] $vinculoDisciplinas
 */
class Disciplina extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Disciplina the static model class
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
		return '{{disciplina}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_disciplina, nome_disciplina, sigla_disciplina, descricao_disciplina', 'required'),
			array('cod_disciplina', 'numerical', 'integerOnly'=>true),
			array('nome_disciplina', 'length', 'max'=>45),
			array('sigla_disciplina', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_disciplina, nome_disciplina, sigla_disciplina, descricao_disciplina', 'safe', 'on'=>'search'),
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
			'vinculoDisciplinas' => array(self::HAS_MANY, 'VinculoDisciplina', 'cod_disciplina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_disciplina' => 'Codigo',
			'nome_disciplina' => 'Nome',
			'sigla_disciplina' => 'Sigla',
			'descricao_disciplina' => 'Descrição',
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

		$criteria->compare('cod_disciplina',$this->cod_disciplina);
		$criteria->compare('nome_disciplina',$this->nome_disciplina,true);
		$criteria->compare('sigla_disciplina',$this->sigla_disciplina,true);
		$criteria->compare('descricao_disciplina',$this->descricao_disciplina,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}