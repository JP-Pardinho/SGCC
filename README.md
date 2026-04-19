# SGCC - Sistema de Gerenciamento de Cursos para Coordenadores

Este repositório contém a implementação do Sistema de Gerenciamento de Cursos para Coordenadores (SGCC). O projeto está sendo desenvolvido com o objetivo de aplicar na prática os conceitos, diagramas e documentações elaborados nas disciplinas de Engenharia de Software e Engenharia de Requisitos.

## 🛠️ Tecnologias Utilizadas

A stack escolhida prioriza a produtividade e a separação clara de responsabilidades entre as regras de negócio e a interface de usuário.

* **Back-end:** [Laravel](https://laravel.com/) (PHP)
* **Painel Administrativo / Front-end:** [FilamentPHP](https://filamentphp.com/) (TALL Stack)
* **Banco de Dados:** MySQL

## ⚙️ Pré-requisitos

Antes de iniciar, certifique-se de ter as seguintes ferramentas instaladas em sua máquina:

* PHP >= 8.2
* Composer
* Node.js & NPM
* Banco de dados local (MySQL)

## 🚀 Como Executar o Projeto Localmente

Siga o passo a passo abaixo para configurar o ambiente de desenvolvimento:

**1. Clone o repositório**
```bash
git clone https://github.com/jp-pardinho/SGCC.git
cd SGCC
```

**2. Instale as dependências do PHP**
```bash
composer install
```

**3. Configure as variáveis de ambiente**
Faça uma cópia do arquivo .env.example e renomeie para .env
```bash
cp .env.example .env
```
Atenção: Abra o arquivo .env e configure as credenciais do seu banco de dados nas variáveis

**4. Gere a chave da aplicação**
```bash
php artisan key:generate
```

**5. Execute as Migrations (Criação do Banco de Dados)**
```bash
php artisan migrate
```

**6. Inicie o servidor local**
```bash
php artisan serve
```

## 👥 Equipe de Desenvolvimento

- [Carlos Moronari](https://github.com/EduMoronari)
- Gabriel dos Santos
- [João Pedro Pardinho](https://github.com/jp-pardinho)
- [Joaquim de Sá](https://github.com/JoaquimMHS)
- [Nicolas Leal](https://github.com/Nikleal)


**Projeto desenvolvido para fins acadêmicos.**






