# Projeto da disciplina de Programação Web 2
Propõe desenvolver uma aplicação PHP para que clientes possam comprar roupas disponibilizadas na loja online, enquanto vendedores possam cadastrar sua loja online relacionada, obrigatoriamente, à uma loja no Instagram

Para acessar o projeto em produção, [clique aqui](https://projeto-pweb2.herokuapp.com)

- **Curiosidades técnicas:**  
O site está hospedado no [Heroku](https://www.heroku.com/), com banco de dados no [Remote MySQL](https://remotemysql.com)

## Instruções de Execução em Ambiente Local:
Antes de começar, verifique se a sua máquina possui as seguintes ferramentas:
- Git
- PHP
- Servidor Apache (ex.: Xampp, Wampp, Lampp)

Com as ferramentas instaladas, faça um clone do repositório e inicie o servidor local

Para simplificar a construção do banco de dados local, você pode baixar e importar o arquivo [lojas_instagram.sql](./lojas_instagram.sql) no seu gerenciador de banco de dados (ex.: phpMyAdmin)

## Requisitos do Sistema:
- Utilizar a linguagem de programação PHP
- Seguir o paradigma de Programação Orientada a Objetos (POO)
- Empregar a arquitetura Model-View-Controller (MVC)

## Módulos do Sistema:
- Vendedor:
  - [x] Cadastro de Vendedor
  - [x] Login
  - [ ] Cadastro e Gerenciamento de Loja (vincular Instagram)
    - [ ] Gerenciar Roupas
    - [ ] Cadastrar roupas (descrição, gênero, categoria, preço, tamanho, foto)
    - [ ] Visualizar roupas
    - [ ] Excluir roupas
    - [ ] Gerenciar Clientes
    - [ ] Visualizar Clientes que efetuaram compra na loja
    - [ ] Gerenciar Pedidos
    - [ ] Atualizar status de pedido
    - [ ] Visualizar endereço do pedido
    - [ ] Visualizar pagamentos

- Cliente:
  - [x] Cadastro de Cliente
  - [x] Login
  - [ ] Buscar Roupas
  - [ ] Filtrar Listagem de Roupas
    - [ ] Por gênero
    - [ ] Por categoria
    - [ ] Por faixa de preço
    - [ ] Por loja (filtrar pelo perfil do Instagram)
  - [ ] Listar Roupas
  - [ ] Realizar Pedido
    - [ ] Adicionar endereço de entrega
    - [ ] Atualizar endereço de entrega
    - [ ] Efetuar pagamento
  - [ ] Visualizar Pedidos

# Equipe:
- Filipe Alves ([filipealvess](https://github.com/filipealvess))
- Lucas Emanuel ([lunmiel](https://github.com/lunmiel))
- Pedro Carlos ([0rmindo](https://github.com/0rmindo))
