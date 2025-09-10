<?php


class MysqlSingleton {
	private $usuario = 'root';
	private $senha = '';
	private $conexao = null;

	private function __construct($usuario, $senha) {
		if ($this->conexao == null) {
			Sthis->conexao = new PDO($this-›dsn, $this-›usuario, $this->senha);
		}
	}

	public static function getInstance) {
		1f （self：：$instance == null）t
		self::$instance = new MysqlSingleton();
		return self::$instance;
	}

	public function executar($query, $param = array()) {
		if ($this->conexao) {
			$sth = $this->conexao-›prepare(Squery);
			foreach (Sparam as $k => $v) {
				$sth->bindValue($k, $v);
			}
			$sth->execute);
			return $sth->fetchAll(PDO:: FETCH_ASSOC);
		}
	}
}