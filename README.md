# Controle de Horário Ponto dos Usuários
Desafio: A empresa XPTO necessita de um sistema para lançamento de horas

# Como Usar
Importar o banco de dados com o nome empresa_xpto.
As configurações do banco, como: nome do banco, host, user e pass estão
no arquivo config.php
É necessário estar logado para registrar o ponto e ver os pontos já registrados.
Classe Usuario: Faz o cadastro de usuarios e pega os usuarios cadastrados.
Classe Colaborador: Faz e retorna os registros do ponto.
Controller: Faz o controle entre a página que o usuário esta vendo e o banco nas classes Usuario
e Colaborador.

Para fazer o testo com alguns usuários ja criados:
email               senha
pedro@gmail.com     123
jorge@gmail.com     123
lucas@gmail.com     123


# Registrar Ponto dos Colaboradores
Faz o registro de entrada e saída dos usuários cadastrados, não pode registrar a mesma
data para o mesmo usuário.

# Cadastrar Novo Usuário
Faz o cadastro dos usuários, não pode ter email repetido.

# Relatório do Ponto
Mostra todos pontos cadastrados, é possível filtrar por nome e data mais antiga.
Tem a opção de editar ou excluir o registro do ponto.

# Sair
Encerra a sessão do usuário.