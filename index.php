<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styleLogin.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-1.9.1.js"type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="script/login.js"></script>
        <title> CRUD </title>
    </head>
    <body>
        <header class="title0" id="header">
            <img class="logokabum" src="images/logo-kabum.png" alt="">
        </header>
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <h6 class="mb-0 pb-3"><span>SIGN IN </span><span>SIGN UP</span></h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <form class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">SIGN IN</h4>
                                                    <div class="form-group">
                                                        <input type="email" name="logemail" class="form-style" placeholder="Email" id="logemail" autocomplete="off"required />
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="logpass" class="form-style" placeholder="Senha" id="logpass" autocomplete="off"required />
                                                    </div>
                                                <a href="#" id="logarBtn" class="btn mt-4">ENTER</a>
                                                <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot password?</a></p>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="card-back"class="card-back" method="POST">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">SIGN UP</h4>
                                                    <div class="form-group">
                                                        <input type="text" name="logname" class="form-style" placeholder="Nome Completo" id="logname" autocomplete="off"required />
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="text" name="logCPF" class="form-style" placeholder="CPF" id="logCPF" autocomplete="off"required />
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="email" name="logemail" class="form-style" placeholder="Email" id="logCademail" autocomplete="off"required /> 
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="logpass" class="form-style" placeholder="Senha" id="logCadpass" autocomplete="off"required />
                                                        <input style="display:none" id="id"  value="">
                                                    </div>
                                                <input href="#" id="btnCadastrar" class="btn mt-4" type="submit" value="SEND">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footericons">
                <div class="insta0">
                    <a href="https://www.instagram.com/danielle_grotta/" target="_blank"><img class="insta"src="images/insta.png" alt="">Danielle_Grotta</a>
                </div>
                <div class="git0">
                    <a href="https://github.com/DanielleGrotta" target="_blank"><img class="git" src="images/git.png" alt="">DanielleGrotta</a>
                </div>
            </div>
        </footer>
    </body>
</html>