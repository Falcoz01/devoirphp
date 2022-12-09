<?php
define('DBH', 'mysql:host=localhost;port=3306;dbname=recette');
define('USER', 'root');
define('PASSWORD', '');
function getpdo(){

$pdo = new PDO(DBH, USER, PASSWORD);
    return $pdo;
}

function getallrecette(){
   


try{
    $pdo = getpdo();
    
    $request = $pdo->prepare("SELECT * FROM recette ");
// $request->bindParam(':min', $min);
//   $request->bindValue(':id', '3');
 $request->execute();
 $rows = $request->fetchAll();
        return $rows;
}catch (PDOException $e){
    echo 'connexion échoué :' . $e->getMessage();
}
catch(Exception $e){

}
}
function deleterecette($idrecette)
{
    
   
    try {
        $pdo = getpdo();
        $request = $pdo->prepare("DELETE FROM recette WHERE id = $idrecette");
            if ($request->execute() === TRUE) {
                echo "New record created successfully";
            } else {
                echo "ERROR:" . $request . "<br>";
            }
        } catch (PDOException $e) {
            echo 'connexion échoué :' . $e->getMessage();
        } catch (Exception $e) {

        }
    
}

?>

<?php
function getrecette($idrecette)
{
    try {
        $pdo = getpdo();
        
        $request = $pdo->prepare("SELECT * FROM recette WHERE id = $idrecette ");

    
        if($request->execute() === TRUE){
            echo "New record created successfully";
           
        }else{
            echo "ERROR:" . $request . "<br>";
        }

        return $request->fetch();

    } catch (PDOException $e) {
        echo 'connexion échoué :' . $e->getMessage();
    } catch (Exception $e) {

    }
}

function updaterecette($titrecode ,$descriptioncode ,$levelcode ,$publiccode ,$idrecette )
{
    try{
    $pdo = getpdo();
        
        $request = $pdo->prepare("UPDATE recette set  titre = '$titrecode', description = '$descriptioncode', level = $levelcode, is_public =$publiccode WHERE id = $idrecette");
    
        if($request->execute() === TRUE){
            echo "New record created successfully";
            
        }else{
            echo "ERROR:" . $request . "<br>";
        }
        
       
    }catch (PDOException $e){
        echo 'connexion échoué :' . $e->getMessage();
    }
    catch(Exception $e){
    
    }
}
    function createrecette($titrerecette ,$descriptionrecette ,$levelrecette ,$publicrecette ,$url){
        try{
            $pdo = getpdo();
            
            $request = $pdo->prepare("INSERT INTO recette (id ,titre ,description ,level ,image_url ,is_public) VALUES (0 ,'$titrerecette', '$descriptionrecette' ,'$levelrecette' ,'$url' ,'$publicrecette')");
        
            if($request->execute() === TRUE){
                echo "New record created successfully";
               
            }else{
                echo "ERROR:" . $request . "<br>";
            }
            
           
        }catch (PDOException $e){
            echo 'connexion échoué :' . $e->getMessage();
        }
        catch(Exception $e){
        
        }
        }
    