# Kino Angola - Plataforma de Descoberta de Experiências Gastronômicas e de Lazer

Bem-vindo ao repositório do website da **Kino Angola**. Este projeto é uma plataforma inovadora que conecta usuários a roulotes, bares, restaurantes e locais de lazer em Angola, facilitando a descoberta de novos lugares com base em preferências pessoais de localização, preço e serviços.

## Índice

- [Visão Geral](#visão-geral)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Instalação e Configuração](#instalação-e-configuração)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Funcionalidades](#funcionalidades)
- [Contribuição](#contribuição)
- [Licença](#licença)

## Visão Geral

A Kino Angola é uma plataforma criada para revolucionar a maneira como os angolanos e turistas descobrem e acessam experiências gastronômicas e de lazer em Luanda e em todo o país. A plataforma oferece recomendações personalizadas baseadas em localização e preferências, com foco especial na inclusão e promoção de microempreendedores locais.

## Tecnologias Utilizadas

- **Laravel 10** - Framework PHP utilizado para o desenvolvimento do backend.
- **MySQL** - Sistema de gerenciamento de banco de dados.
- **Vue.js** - Framework JavaScript para construção de interfaces dinâmicas.
- **Bootstrap 5** - Framework CSS para o design responsivo.
- **Google Maps API** - Integração para geolocalização em tempo real.
- **Docker** - Para facilitar o desenvolvimento em ambientes isolados.

## Instalação e Configuração

Siga os passos abaixo para configurar o ambiente de desenvolvimento da Kino Angola.

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/seu-usuario/kino-angola.git
    cd kino-angola
    ```

2. **Instale as dependências:**

    Certifique-se de ter o [Composer](https://getcomposer.org/) instalado.

    ```bash
    composer install
    npm install
    ```

3. **Configuração do arquivo `.env`:**

    Renomeie o arquivo `.env.example` para `.env`:

    ```bash
    cp .env.example .env
    ```

    Configure as variáveis de ambiente, como conexão com o banco de dados, chave do aplicativo, etc.

    ```bash
    php artisan key:generate
    ```

4. **Migrações e Seeders:**

    Execute as migrações e os seeders para preparar o banco de dados:

    ```bash
    php artisan migrate --seed
    ```

5. **Inicie o servidor local:**

    ```bash
    php artisan serve
    ```

    Acesse o website em `http://localhost:8000`.

## Estrutura do Projeto

Aqui está uma visão geral da estrutura principal do projeto:

kino-angola/
├── app/ 
├── bootstrap/ 
├── config/ 
├── database/ 
│ ├── migrations/ 
│ ├── seeders/ 
├── public/ 
├── resources/ 
│ ├── views/ 
│ ├── js/ 
│ ├── css/ 
├── routes/ 
│ ├── web.php 
│ ├── api.php 
├── storage/ 
└── tests/

## Funcionalidades

- **Cadastro e Autenticação de Usuários**
- **Geolocalização de Estabelecimentos**
- **Pesquisa Avançada por Preferências**
- **Avaliações e Classificações**
- **Criação de Conta Empresarial**
- **Gestão de Estabelecimentos**

## Contribuição

Contribuições são bem-vindas! Por favor, siga as etapas abaixo:

1. Faça um fork do projeto.
2. Crie um novo branch (`git checkout -b feature/MinhaFeature`).
3. Commit suas alterações (`git commit -m 'Adiciona minha nova feature'`).
4. Envie para o branch (`git push origin feature/MinhaFeature`).
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
