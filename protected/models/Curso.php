<?php

/**
 * This is the model class for table "{{curso}}".
 *
 * The followings are the available columns in table '{{curso}}':
 * @property integer $cod_curso
 * @property string $nome_curso
 * @property string $sigla_curso
 * @property string $descricao_curso
 * @property integer $duracao_curso
 *
 * The followings are the available model relations:
 * @property VinculoDisciplina[] $vinculoDisciplinas
 */
class Curso extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Curso the static model class
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
		return '{{curso}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_curso, nome_curso, sigla_curso, descricao_curso, duracao_curso', 'required'),
			array('cod_curso, duracao_curso', 'numerical', 'integerOnly'=>true),
			array('nome_curso', 'length', 'max'=>45),
			array('sigla_curso', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_curso, nome_curso, sigla_curso, descricao_curso, duracao_curso', 'safe', 'on'=>'search'),
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
			'vinculoDisciplinas' => array(self::HAS_MANY, 'VinculoDisciplina', 'cod_curso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_curso' => 'Codigo',
			'nome_curso' => 'Nome',
			'sigla_curso' => 'Sigla',
			'descricao_curso' => 'Descrição',
			'duracao_curso' => 'Duração',
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

		$criteria->compare('cod_curso',$this->cod_curso);
		$criteria->compare('nome_curso',$this->nome_curso,true);
		$criteria->compare('sigla_curso',$this->sigla_curso,true);
		$criteria->compare('descricao_curso',$this->descricao_curso,true);
		$criteria->compare('duracao_curso',$this->duracao_curso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}