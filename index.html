<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Felipe S. Anjos">
        <title>Form Ajax With Alert Returning</title>
        <!--incluíndo css do boostrap-->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>Formulário Ajax com Feedback</h2>
                        <p>Preencha o formulário abaixo</p>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="jumbotron">    
                                <form method="post" action="" enctype="multipart/form-data" id="form">
                                    <div class="form-group">
                                        <label for="email">E-mail *</label>
                                        <input type="email" name="email" class="form-control" required id="email" placeholder="Seu e-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="senha">Senha</label>
                                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Sua senha...">
                                    </div>
                                    <div class="form-group">
                                        <label>Mensagem</label>
                                        <textarea name="descricao" class="form-control resize" rows="5" placeholder="Digita a sua mensagem..."></textarea>
                                    </div>
                                    <div class="form-group radio">
                                        Sexo:
                                        <label>
                                            <input type="radio" name="sexo" value="masculino" checked /> Masculino
                                        </label>
                                        <label>
                                            <input type="radio" name="sexo" value="feminino" /> Feminino
                                        </label>
                                        <label>
                                            <input type="radio" name="sexo" value="outros" /> Outros
                                        </label>
                                    </div>
                                    <div class="form-group checkbox">
                                        <label>
                                            <input type="checkbox" name="check" value="sim"> Clique para checar!
                                        </label>
                                    </div>
                                    <button type="button" id="enviar" class="btn btn-default">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="text-center">
                            <p>Desenvolvido por Felipe S. Anjos<br><a href="https://www.serpadosanjos.com/" target="_blank" title="Felipe S. Anjos">https://www.serpadosanjos.com/</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--incluíndo o jquery, sweet e boostrap-->
        <script src="./js/jquery-3.6.0.min.js"></script>        
        <script src="./js/sweetalert2.js"></script>        
        <script src="./js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {
                
                //configuracao base do toast.
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                //no clique do botão enviar processa o formulário.
                $('#enviar').click(function () {

                    let values = $('#form').serialize();

                    $.ajax({
                        url: 'formAjax.php',
                        dataType: 'json',
                        type: "post",
                        data: values,
                        cache: false,
                        success: function (response) {
                            
                            if (response.success) {
                                
                                Toast.fire({
                                    icon: 'success',
                                    color: '#98d874',
                                    background: '#f5fdf0',
                                    title: 'Dados enviado com sucesso!'
                                });
                            }else{
                                
                                Toast.fire({
                                    icon: 'error',
                                    color: '#ef6a6a',
                                    background: '#ffcccc',
                                    title: 'Preencha os campos obrigatórios!'
                                });
                            }
                        },
                        error: function (response) {    
                            
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Estamos com problemas no momento, tenta novamente mais tarde!',
                            });
                            
                        }
                    });
                });
            });
        </script>
    </body>
</html>