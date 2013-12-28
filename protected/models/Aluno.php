<?php

/**
 * This is the model class for table "{{aluno}}".
 *
 * The followings are the available columns in table '{{aluno}}':
 * @property string $cpf
 * @property string $cod_matricula
 * @property string $data_vestibular
 * @property integer $pontos_vestibular
 * @property string $data_ultima_matricula
 * @property integer $classificacao
 * @property string $forma_ingresso
 * @property string $escolaridade
 * @property integer $segundo_grau
 * @property integer $universitario
 * @property string $estabelecimento
 * @property string $sede
 * @property string $estado
 * @property string $conclusao
 *
 * The followings are the available model relations:
 * @property Pessoa $cpf0
 * @property Requisicao[] $requisicaos
 * @property VinculoDisciplina[] $tblVinculoDisciplinas
 */
class Aluno extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Aluno the static model class
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
		return '{{aluno}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cpf, cod_matricula', 'required'),
			array('pontos_vestibular, classificacao, segundo_grau, universitario', 'numerical', 'integerOnly'=>true),
			array('cpf', 'length', 'max'=>11),
			array('cod_matricula', 'length', 'max'=>10),
			array('forma_ingresso, escolaridade, estabelecimento, sede', 'length', 'max'=>45),
			array('estado', 'length', 'max'=>2),
			array('data_vestibular, data_ultima_matricula, conclusao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cpf, cod_matricula, data_vestibular, pontos_vestibular, data_ultima_matricula, classificacao, forma_ingresso, escolaridade, segundo_grau, universitario, estabelecimento, sede, estado, conclusao', 'safe', 'on'=>'search'),
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
			'requisicaos' => array(self::HAS_MANY, 'Requisicao', 'cod_matricula'),
			'tblVinculoDisciplinas' => array(self::MANY_MANY, 'VinculoDisciplina', '{{vinculo_disciplina_aluno}}(cod_matricula, cod_vinculo_disciplina)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cpf' => 'Cpf',
			'cod_matricula' => 'Cod Matricula',
			'data_vestibular' => 'Data Vestibular',
			'pontos_vestibular' => 'Pontos Vestibular',
			'data_ultima_matricula' => 'Data Ultima Matricula',
			'classificacao' => 'Classificacao',
			'forma_ingresso' => 'Forma Ingresso',
			'escolaridade' => 'Escolaridade',
			'segundo_grau' => 'Segundo Grau',
			'universitario' => 'Universitario',
			'estabelecimento' => 'Estabelecimento',
			'sede' => 'Sede',
			'estado' => 'Estado',
			'conclusao' => 'Conclusao',
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
		$criteria->compare('cod_matricula',$this->cod_matricula,true);
		$criteria->compare('data_vestibular',$this->data_vestibular,true);
		$criteria->compare('pontos_vestibular',$this->pontos_vestibular);
		$criteria->compare('data_ultima_matricula',$this->data_ultima_matricula,true);
		$criteria->compare('classificacao',$this->classificacao);
		$criteria->compare('forma_ingresso',$this->forma_ingresso,true);
		$criteria->compare('escolaridade',$this->escolaridade,true);
		$criteria->compare('segundo_grau',$this->segundo_grau);
		$criteria->compare('universitario',$this->universitario);
		$criteria->compare('estabelecimento',$this->estabelecimento,true);
		$criteria->compare('sede',$this->sede,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('conclusao',$this->conclusao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}