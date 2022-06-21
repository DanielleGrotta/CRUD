$(document).ready(function () {   

    $("#logarBtn").on("click", function(){
        
        const login = document.getElementById("logemail").value  
        const pass  = document.getElementById("logpass").value
        const objLogin = {                        
            acao: "logUser",
            login: login,
            pass: pass
        }
        $.ajax({
            method: "POST",
            url: "Php/post.php",
            data: objLogin,
            success: function(res) {
                const logged = res.logged
                const name = res.name 
                const login = res.login
                const userType = res.userType
                
                localStorage.setItem('name', name,);
                localStorage.setItem('logged', logged);
                localStorage.setItem('login', login);
                localStorage.setItem('userType', userType);

                if((logged) == 1) {
                    window.location = 'http://localhost/CRUD/menu.html',
                    alert("Logado com sucesso!");
                }
                else {
                    window.location = 'http://localhost/CRUD/index.php',
                    alert("Login ou senha incorretos");
                }
            }
        });
    });

    $("#card-back").submit(function(e){      
        e.preventDefault();

        const name  = document.getElementById("logname").value
        const cpf   = document.getElementById("logCPF").value  
        const login = document.getElementById("logCademail").value  
        const pass  = document.getElementById("logCadpass").value  
        const userlogin = {                        
            acao: "userRegister",
            name: name,
            CPF: cpf,
            login: login,
            pass: pass
        }
        $.ajax({
            method: "POST",
            url: "Php/post.php",
            data: userlogin,
            dataType: "json",
            success: function(res) {
                alert('Cadastrado com Sucesso');
                location.reload();
            }
        });
    });
});

