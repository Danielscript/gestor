<?php
//criacao do serviços crud de manipulação de dados
class CursoService {
    private $conexao;
    private $curso;
    public function __construct(Conexao $conexao, Curso $curso) {
        $this->conexao = $conexao->conectar();
		$this->curso = $curso;
	}
public function inserir(){
    $query = 'insert into tb_cursos(curso)values(:curso)';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':curso', $this->curso->__get('curso'));
    $stmt->execute();
}
public function recuperar(){
    $query = 'select id, id_status,curso from tb_cursos';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_OBJ);




}

public function atualizar(){
    $query = "update tb_cursos set curso = :curso WHERE id = :id";
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':curso',$this->curso->__get('curso'));
    $stmt->bindValue(':id',$this->curso->__get('id'));
    $stmt->execute();
}
	
	
public function remover(){
    
}
    
	

}

?>
