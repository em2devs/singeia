<?php

/**
 * This is the model class for table "{{pessoa}}".
 *
 * The followings are the available columns in table '{{pessoa}}':
 * @property string $cpf
 * @property string $nome
 * @property string $sobrenome
 * @property string $estado_civil
 * @property string $dt_nascimento
 * @property string $sexo
 * @property string $naturalidade_municipio
 * @property string $naturalidade_uf
 * @property string $nacionalidade
 * @property string $rg
 * @property string $data_emissao_rg
 * @property string $orgao_emissor_rg
 * @property string $cod_titulo_eleitor
 *
 * The followings are the available model relations:
 * @property Aluno $aluno
 * @property Endereco $endereco
 * @property Funcionario $funcionario
 * @property Professor $professor
 * @property Telefone $telefone
 */
class Pessoa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pessoa the static model class
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
		return '{{pessoa}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cpf, nome, sobrenome, estado_civil, dt_nascimento, sexo, naturalidade_municipio, naturalidade_uf, nacionalidade, rg, data_emissao_rg, orgao_emissor_rg, cod_titulo_eleitor', 'required'),
			array('cpf', 'length', 'max'=>11),
			array('nome, sobrenome, naturalidade_municipio, nacionalidade', 'length', 'max'=>45),
			array('estado_civil, orgao_emissor_rg', 'length', 'max'=>10),
			array('sexo', 'length', 'max'=>1),
			array('naturalidade_uf', 'length', 'max'=>2),
			array('rg', 'length', 'max'=>15),
			array('cod_titulo_eleitor', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cpf, nome, sobrenome, estado_civil, dt_nascimento, sexo, naturalidade_municipio, naturalidade_uf, nacionalidade, rg, data_emissao_rg, orgao_emissor_rg, cod_titulo_eleitor', 'safe', 'on'=>'search'),
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
			'aluno' => array(self::HAS_ONE, 'Aluno', 'cpf'),
			'endereco' => array(self::HAS_ONE, 'Endereco', 'cpf'),
			'funcionario' => array(self::HAS_ONE, 'Funcionario', 'cpf'),
			'professor' => array(self::HAS_ONE, 'Professor', 'cpf'),
			'telefone' => array(self::HAS_ONE, 'Telefone', 'cpf'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cpf' => 'Cpf',
			'nome' => 'Nome',
			'sobrenome' => 'Sobrenome',
			'estado_civil' => 'Estado Civil',
			'dt_nascimento' => 'Dt Nascimento',
			'sexo' => 'Sexo',
			'naturalidade_municipio' => 'Naturalidade Municipio',
			'naturalidade_uf' => 'Naturalidade Uf',
			'nacionalidade' => 'Nacionalidade',
			'rg' => 'Rg',
			'data_emissao_rg' => 'Data Emissao Rg',
			'orgao_emissor_rg' => 'Orgao Emissor Rg',
			'cod_titulo_eleitor' => 'Cod Titulo Eleitor',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('sobrenome',$this->sobrenome,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('dt_nascimento',$this->dt_nascimento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('naturalidade_municipio',$this->naturalidade_municipio,true);
		$criteria->compare('naturalidade_uf',$this->naturalidade_uf,true);
		$criteria->compare('nacionalidade',$this->nacionalidade,true);
		$criteria->compare('rg',$this->rg,true);
		$criteria->compare('data_emissao_rg',$this->data_emissao_rg,true);
		$criteria->compare('orgao_emissor_rg',$this->orgao_emissor_rg,true);
		$criteria->compare('cod_titulo_eleitor',$this->cod_titulo_eleitor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}