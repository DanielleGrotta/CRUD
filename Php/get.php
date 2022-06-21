<?php
    header("Content-Type: application/json");
    include("conexao.php");
    //-------------LISTAR CLIENTES ATIVOS--------------------------------------------------------------------------------------------
    if($_GET['acao'] == "listClient"){  
        
        $userType = $_GET['userType'];
        $login    = $_GET['login'];

        try {   
            if($userType == "1"){
                $query3 = $pdo->prepare('SELECT clients.name_client, clients.id , clients.active,clients.cpf,clients.rg,clients.email,clients.birth,clients.tel1,clients.tel2,users.name FROM clients INNER JOIN users ON (clients.id_user = users.id)');
                $query3->execute();

                $result3 = $query3->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result3);
            }
            else{
                $query2 = $pdo->prepare('SELECT id FROM users WHERE login=?');
                $query2->bindParam(1,$login);
                $query2->execute();
    
                $result2 = $query2->fetch();
    
                $query = $pdo->prepare('SELECT * FROM clients WHERE id_user=? AND active="1"'); 
                $query->bindParam(1,$result2["id"]);
                $query->execute();
    
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result);
            }
        } 
        catch (PDOException $e) {  
            echo "Error: " . $e->getMessage();
        }
    }

    //------------LISTAR ENDEREÇOS MODAL -----------------------------------------------------------------------------------------------------

    if($_GET['acao'] == "listAddress"){

        $id_client = $_GET['id_client'];

        try{
            $query = $pdo->prepare('SELECT * FROM `clients_address` WHERE id_client=? AND active_address > 0'); 
            
            $query->bindParam(1,$id_client);
            $query->execute();
            
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($result);
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    
    }

    //-------PREENCHER FORM DE EDITAR CLIENTE------------------------------------------------------

    if($_GET['acao'] == "clientData"){  
        
        $id = $_GET['id'];

        try{
            $query = $pdo->prepare('SELECT * FROM clients WHERE id=?');

            $query->bindParam(1,$id);
            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($result);
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 

    //-------PREENCHER FORM DE EDITAR ENDEREÇO----------------------------------------------------- 

    if($_GET['acao'] == "addressData"){ 
        
        $id_address = $_GET['id'];

        try{
            $query = $pdo->prepare('SELECT * FROM clients_address WHERE id_address=?'); 

            $query->bindParam(1,$id_address);
            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($result);
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    } 
