# Formulário PHP

Este projeto consiste em um formulário desenvolvido em HTML, CSS e PHP, que permite o envio de dados para um banco de dados PostgreSQL. Além disso, o projeto também inclui uma funcionalidade para listar os dados armazenados no banco.

## Tecnologias Utilizadas

- [XAMPP](https://www.apachefriends.org/index.html): Conjunto de ferramentas que inclui Apache, MySQL, PHP e Perl, facilitando a criação e gerenciamento de servidores web localmente.
- HTML: Linguagem de marcação utilizada para estruturar o conteúdo da página web.
- CSS: Linguagem de estilo utilizada para estilizar a aparência dos elementos HTML.
- PHP: Linguagem de script do lado do servidor utilizada para processar dados do formulário e interagir com o banco de dados.
- PostgreSQL: Sistema de gerenciamento de banco de dados relacional utilizado para armazenar os dados do formulário.

## Funcionalidades

- **Envio de Dados:** Os usuários podem preencher o formulário com informações solicitadas, como nome, e-mail, telefone, etc., e enviar esses dados para o banco de dados PostgreSQL.
- **Listagem de Dados:** Além disso, o projeto inclui uma funcionalidade para listar os dados armazenados no banco de dados, permitindo que os usuários visualizem as informações enviadas anteriormente.

## Instalação e Uso

1. **Instale o XAMPP:** Faça o download e instale o XAMPP em sua máquina a partir do [site oficial](https://www.apachefriends.org/index.html).
2. **Clone o Repositório:** Clone este repositório em seu ambiente local.
3. **Configure o Banco de Dados:** Importe o arquivo SQL fornecido (`database.sql`) para criar o esquema e as tabelas necessárias no PostgreSQL.
4. **Configure as Credenciais do Banco de Dados:** Edite o arquivo `config.php` e atualize as credenciais do banco de dados (nome do host, nome de usuário, senha, nome do banco de dados) de acordo com sua configuração.
5. **Inicie o Servidor:** Inicie o servidor Apache e o servidor PostgreSQL usando o painel de controle do XAMPP.
6. **Acesse o Formulário:** Abra um navegador da web e navegue até `http://localhost/caminho-para-o-projeto/formulario.php` para acessar o formulário e começar a enviar dados.

## Contribuição

Contribuições são bem-vindas! Se você encontrar um problema ou tiver alguma sugestão de melhoria, sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo [LICENSE](LICENSE) para obter mais detalhes.
