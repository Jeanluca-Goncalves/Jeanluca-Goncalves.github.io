<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php include 'header.php'  ?>
                
               
                
<img src="img/logo.jpeg" alt="Logo da Empresa" style="position: absolute; top: 20px; left: 20px; height: 80px; width: auto;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                    <div class="container-fluid">
                        <span class="navbar-text">
                            Bem-vindo!
                        </span>
                        <form class="d-flex" method="POST" action="logout.php">
                            <button type="submit" class="btn btn-danger">Sair</button>
                        </form>
                    </div>
                </nav>

                <div class="card">
                    <div class="card-header">
                        <h3>Minha Agenda de Contatos</h3>
                    </div>
                    <div class="card-body">
                        <a href="add_contact.php" class="btn btn-primary mb-3">Adicionar Contato</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Endereço</th>
                                    <th>Observações</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>123456789</td>
                                        <td>johndoe@example.com</td>
                                        <td>123 Main St, City</td>
                                        <td>Lorem Ipsum</td>
                                        <td>
                                            <a href="edit_contact.php?id=1" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="home.php?delete=1" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este contato?')">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jane Smith</td>
                                        <td>987654321</td>
                                        <td>janesmith@example.com</td>
                                        <td>456 Elm St, Town</td>
                                        <td>Dolor Sit Amet</td>
                                        <td>
                                            <a href="edit_contact.php?id=2" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="home.php?delete=2" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este contato?')">Excluir</a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>