<html>
<body>
    <!-- Tela Sing up -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalSingUp">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../Project-myTicket/Assets/Imgs/logo.png" alt="logo" width="250px">
                    <button type="button" class="modal-close-cadastro" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="container card p-3" method="POST" action="./Script/02-insert.php">
                        <div class="form-group mb-3 text-center">
                            <label for="nomecompleto">Nome Completo</label>
                            <input type="text" class="form-control input-text" id="nomecompleto"
                                placeholder="Seu Nome Completo" name="nomeCompleto">
                        </div>

                        <div class="form-group mb-3 text-center">
                            <label for="cpf">CPF</label>
                            <input type="text" maxlength="11" class="form-control input-text" id="cpf" placeholder="CPF"
                                name="cpf">
                        </div>

                        <div class="form-group mb-3 text-center">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control input-text" id="email" placeholder="E-mail"
                                name="email">
                        </div>

                        <div class="form-group mb-3 text-center">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control input-text" id="senha" placeholder="Senha"
                                name="senha">
                        </div>

                        <button type="submit" class="input-cadastro">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tela Login -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalLogin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../Project-myTicket/Assets/Imgs/logo.png" alt="logo" width="250px">
                    <button type="button" class="modal-close-cadastro" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="container card p-3" method="POST" action="./Script/03-login.php">
                        <div class="form-group mb-3 text-center">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control input-text" id="email" placeholder="E-mail"
                                name="email">
                        </div>

                        <div class="form-group mb-3 text-center">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control input-text" id="senha" placeholder="Senha"
                                name="senha">
                        </div>

                        <button type="submit" class="input-cadastro">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Telas Fale Conosco -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalFaleConosco">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../Project-myTicket/Assets/Imgs/logo.png" alt="logo" width="250px">
                    <button type="button" class="modal-close-cadastro" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="container card p-3">
                        <div class="form-group mb-3 text-center">
                            <label for="nomecompleto">Nome Completo</label>
                            <input type="text" class="form-control input-text" id="nomecompleto"
                                placeholder="Seu Nome Completo">
                        </div>

                        <div class="form-group mb-3 text-center">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control input-text" id="email" placeholder="E-mail">
                        </div>

                        <div class="form-group mb-3 text-center">
                            <label for="textArea">Mensagem</label>
                            <textarea name="textArea" id="textArea" class="form-control input-text" rows="5"
                                style="resize: none;"></textarea>
                        </div>

                        <button type="submit" class="input-cadastro">Enviar mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>