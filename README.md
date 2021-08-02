## Amar Assist - CRUD:

O projeto Amar Assit - CRUD, tem por objetivo guardar informações de contatos (Nome, E-mail e Telefone).

## Como instalar o projeto:

- Premissas:
Docker e composer instalados.

Após fazer o clone do projeto no repositório do github, acessa a pasta do projeto (LaravelCRUD) e digite o seguinte comando para atualizar o projeto, baixar as dependências:

- composer update

Após executar o comando acima, duplique o arquivo .env.example e renomea para .env (raiz do projeto).

Abra o arquivo .env (criado no passo anterior) e nas configurações de banco de dados, insira conforme abaixo (observação: As senhas só estão expostas porque é um teste):

- DB_CONNECTION=mysql
- DB_HOST=mysql
- DB_PORT=3306
- DB_DATABASE=amar_assist
- DB_USERNAME=root
- DB_PASSWORD=root

Agora, acesse a pasta laradock.

Dentro da pasta laradock, digite o seguinte comando para instalar as imagens docker e subir os containers:

- sudo docker-compose up -d nginx mysql phpmyadmin

Após executar o comando acima, acesse o phpmyadmin:
- http://localhost:1010
- Servidor: mysql
- Pass: root
- User: root

Crie a tabela: amar_assist com a colação utf8mb4_unicode_ci.

Após criar a tabela acima, acesse o container para executarmos as migrations que criará a tabela contatos:

- sudo docker-compose exec --user=laradock workspace bash

Na sequência, execute o comando:

- php artisan migrate

O comando acima irá criar nossas tabelas de migrations e contatos.

## Acessando o template blade:

Abra o navegador e digite a seguinte URL:

- http://localhost:8888/contato

Pronto, agora pode utilizar a vontade! Crie novos contatos, edite e remova os contatos.

## Observação:

- Observação: Este projeto (v1) não está em REST e não está autenticando usuários e não contém testes unitários.