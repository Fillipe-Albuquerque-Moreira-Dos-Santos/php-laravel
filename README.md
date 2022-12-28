<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Instalação do Sistema

#### No terminal siga a lista de comandos abaixo:

- git clone https://github.com/Fillipe-Albuquerque-Moreira-Dos-Santos/php-laravel
- cd php-laravel
- composer install
- cp .env.example .env
- Configurar o arquivo .env com as informações de conexão da base de dados.
- php artisan key:generate
- php artisan storage:link
- php artisan migrate
- php artisan db:seed 

Agora tudo pronto, basta usar o "php artisan serve" e acessar o endereço http://localhost:8000


## Visão Geral

Sistema para a gestão de eventos, permite que cada usuário crie e edite os seus eventos em uma área protegida por login e senha. Os eventos que que tiverem marcados como postados e forem de data posterior ao dia atual são exibidos na tela inicial do sistema da qual não necessita de autenticação para ser acessados.

Foi utilizado uma estrutura de base de dados simples com a tabela de usuarios do proprio laravel, 
uma tabela para persistir os eventos e uma ultima tabela para a compra do ingresso onde ficam salvos o evento, 
quantidade e o usuário. Estou disponibilizando o.sql para agilizar o processo

## Segue abaixo um vídeo do projeto
[![Watch the video](https://i.imgur.com/vKb2F1B.png)](https://www.youtube.com/watch?v=t4ybvKbe9Tc)

Qualquer duvida fico a disposição no email "fillipefff@gmail.com"
