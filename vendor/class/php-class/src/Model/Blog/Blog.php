<?php 
    namespace Class\Model\Blog;

    use Class\DB\Sql;
    use Class\Model;

    class Blog extends Model{
        public static function listAll()
        {
            $sql = new Sql();
            return $sql->select("SELECT * FROM artigo ORDER BY dataartigo DESC");
        }

        public static function listAllAdmin()
        {
            $sql = new Sql();

            return $sql->select("SELECT * FROM artigo");
        }

        public function getArtigo($idArtigo)
        {
            $sql = new Sql();

            $result = $sql->select("SELECT * FROM artigo WHERE idartigo = :ID", array(":ID" => $idArtigo));

            return $result[0];
        }
    }
?>