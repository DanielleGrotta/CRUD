<?php
    header("Content-Type: application/json");
    include("conexao.php"); 
    //--------- CADASTRO CLIENTE ----------------------------------------------------------------------------------------------------
    if($_POST["acao"] == "clientRegister"){ 
        
        $login       = $_POST['login'];
        $name_client = $_POST['name_client']; 
        $cpf         = $_POST['cpf'];
        $rg          = $_POST['rg'];
        $email       = $_POST['email'];
        $tel1        = $_POST['tel1'];
        $tel2        = $_POST['tel2'];
        $birth       = $_POST['birth'];
        $active      = 1;

        try{
            $query2 = $pdo->prepare('SELECT id FROM users WHERE login=?');

            $query2->bindParam(1,$login);
            $query2->execute();
            $result2  = $query2->fetch();

            $id_user  = $result2[0];
            
            $stmt = $pdo->prepare('INSERT INTO clients (name_client,cpf,rg,email,tel1,tel2,birth,active,id_user) VALUES (?,?,?,?,?,?,?,?,?)');  

            $stmt->bindParam(1,$name_client);  
            $stmt->bindParam(2,$cpf); 
            $stmt->bindParam(3,$rg);
            $stmt->bindParam(4,$email);
            $stmt->bindParam(5,$tel1);
            $stmt->bindParam(6,$tel2);
            $stmt->bindParam(7,$birth);
            $stmt->bindParam(8,$active);
            $stmt->bindParam(9,$id_user);
            $stmt->execute(); 

            echo json_encode([]);
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
    //-------- CADASTRO LOGIN --------------------------------------------------------------------------------------------------
    if($_POST["acao"] == "userRegister"){ 

        $name      = $_POST['name']; 
        $cpf       = $_POST['CPF'];
        $email     = $_POST['login'];
        $pass      = $_POST['pass'];
        $userType  = 2;
        $hash      = password_hash($pass, PASSWORD_DEFAULT);

        try{
            $stmt = $pdo->prepare('INSERT INTO users (name,CPF,login,pass_hash,userType) VALUES (?,?,?,?,?)'); 
            
            $stmt->bindParam(1,$name); 
            $stmt->bindParam(2,$cpf); 
            $stmt->bindParam(3,$email);
            $stmt->bindParam(4,$hash);
            $stmt->bindParam(5,$userType);
            
            $stmt->execute(); 
            
            echo json_encode([
                "logged"   => "logged"
            ]);
        }
        catch (PDOException $e) {  
            echo "Error: " . $e->getMessage();
        }
    }

//------------------------------------------LOGAR-------------------------------------
    
    if($_POST["acao"] == "logUser"){ 

        $login       = $_POST['login'];
        $pass        = $_POST['pass'];

        try{
            $stmt = $pdo->prepare('SELECT name,pass_hash,userType FROM users WHERE login = ?'); 
            
            $stmt->bindParam(1,$login); 
            $stmt->execute();
            $result = $stmt->fetch();

            if (password_verify($pass,$result[1])){
                $logged = 1;
            } else {
                $logged = 0;
            }
            echo json_encode([
                "logged"    => $logged,
                "login"     => $login,
                "name"      => $result[0],
                "userType"  => $result[2]
            ]);
        }
        catch (PDOException $e) {  
            echo "Error: " . $e->getMessage();
        }
    }



    //-------CADASTRO ENDEREÇO--------------------------------------------------------------------------------------------------

    if($_POST["acao"] == "addressRegister"){
    
        $id_client       = $_POST['id_client'];
        $state           = $_POST['state'];
        $CEP             = $_POST['CEP'];
        $city            = $_POST['city']; 
        $district        = $_POST['district'];
        $street          = $_POST['street'];
        $number          = $_POST['number'];
        $main_address    = 1;
        $active_address  = 1;

        try{
            $stmt1 = $pdo->prepare('INSERT INTO clients_address (id_client,state,CEP,city,district,street,number,main_address,active_address) VALUES (?,?,?,?,?,?,?,?,?)');
            
            $stmt1->bindParam(1,$id_client);
            $stmt1->bindParam(2,$state); 
            $stmt1->bindParam(3,$CEP); 
            $stmt1->bindParam(4,$city);  
            $stmt1->bindParam(5,$district); 
            $stmt1->bindParam(6,$street);
            $stmt1->bindParam(7,$number);
            $stmt1->bindParam(8,$main_address);
            $stmt1->bindParam(9,$active_address);
            $stmt1->execute(); 

            echo json_encode([]);
        }
        catch (PDOException $e) {  
            echo "Error: " . $e->getMessage();
        }
    }

?>   
