<?php
include("{$_SERVER['DOCUMENT_ROOT']}/phpCRUD/Class/classConexao.php");
class classCrud extends classConexao {

    private $crud;
    private $contador;

    #Preparando as Declarativas
    private function preparedStatements ($Query, $Parametros) {
        
        $this->countParametros($Parametros);
        $this->crud=$this->conexaoDB()->prepare($Query);
        
        if($this->contador > 0){
            for ($i=1; $i <= $this->contador; $i++) {
                $this->crud->bindValue($i, $Parametros[$i-1]);
            }
        }
        $this->crud->execute();
        
    }

    #Contador de Parametros
    private function countParametros($Parametros) {
        
        $this->contador=count($Parametros);
    }

    #Inserindo do DB
    public function insertDB($tabela, $condicao, $Parametros){
        $this->preparedStatements("insert into {$tabela} values ({$condicao})", $Parametros);
        return $this->crud;
    }

    #Selecinando do DB
    public function selectDB($campos, $tabela, $condicao, $Parametros){
        $this->preparedStatements("select {$campos} from {$tabela} {$condicao}", $Parametros);
        return $this->crud;
    }

    #Deletando dados do DB
    public function deleteDB($tabela, $condicao, $Parametros){
        $this->preparedStatements("delete from {$tabela} where {$condicao}", $Parametros);
        return $this->crud;
    }

    #Atualização de dados no DB
    public function updateDB($tabela, $set, $condicao, $Parametros){
        $this->preparedStatements("update {$tabela} set {$set} where {$condicao}", $Parametros);
        return $this->crud;
    }

}