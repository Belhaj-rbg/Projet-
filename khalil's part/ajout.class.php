 <?php
    require'dbconexion.class.php';
 
    class produit
    {
        private $cnx;

        public function __construct()
        {
            $db = new base;
            $connect = $db->connectDB();
            $this->cnx = $connect;

        }
         public function read()
        {
            try {
                $req='SELECT * FROM produit';
                $result= $this->cnx->prepare($req);
                $result->execute();
                return $result;
            }catch (PDOException $e) {
                                  echo $e->getMessage();

                }

}
       
     public function ajout($nom,$description,$prix,$fnew)
     {
         try {
      $sql ="INSERT INTO produit (nom,description,prix,fnew)
       VALUES (:nom,:description,:prix,:img)";
      $result= $this->cnx->prepare($sql);
      $result->bindparam(":nom", $nom);
      $result->bindparam(":description", $description);
      $result->bindparam(":prix", $prix);
      $result->bindparam(":img", $fnew);
      $result->execute();
      return $result;
     } catch (PDOException $ex) {
     echo $ex->getMessage();
                }
            }
               public function reade($pid)
            {
                try {
                    $sql = 'SELECT * FROM produit WHERE p_id = :pid';
                    $req = $this->cnx->prepare($sql);
                    $req->bindparam(":pid", $p_id);
                    $req->execute();
                    return $req;
                } catch (PDOException $ex) {
                    echo $ex->getMessage();
                }
            }
   public function delete($p_id)
    {
        try {
            $sql = 'DELETE FROM produit WHERE p_id = :p_id';
            $result =$this->cnx->prepare($sql);
            $result->bindparam(":p_id", $p_id);
            $result->execute();
            return $result;
        } catch (PDOException $exce) {
            echo $exce->getMessage();
        }
    }
     public function update($pid,$nom,$prix,$description,$img)
    {
        try {
            $sql = 'UPDATE produit  SET nom = :nom,prix= :prix,description= :description,img = :img WHERE pid = :pid';
            $result= $this->cnx->prepare($sql);
            $result->bindparam(":pid", $pid);
            $result->bindparam(":nom", $nom);
            $result->bindparam(":prix", $prix);
            $result->bindparam(":description", $description);
            $result->bindparam(":img", $img);
            $result->execute();
            return $result;

        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


        }
            