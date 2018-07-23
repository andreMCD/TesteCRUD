<?php
    abstract class ClassConexao{
        #Faz a Conexão com DB
        protected function conexaoDB() {
            try {
                $Con=new PDO("mysql:host=localhost;dbname=crud","root","");
                return $Con;
            }catch (PDOException $Erro) {
                return $Erro->getMessage();
            }
        }
    }