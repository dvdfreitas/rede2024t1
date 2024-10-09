# Redes 2024/2025

## Software necessário

xampp - https://sourceforge.net/projects/xampp/

git - https://git-scm.com/download/win

composer - https://getcomposer.org/download/

node - https://nodejs.org/en/download/current

VS Code - https://code.visualstudio.com/

---

### Plugins do VS Code

- PHP Intelephense

  - https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client

### Atalhos do VS Code


| Ctrl + P | Procura um ficheiro pelo nome |
| --- | --- |

## Instalação 

### Laravel

Vamos instalar um projeto que iremos chamar ```redes2024```. Note que o nome do projeto é o nome da pasta que será criada e deverá estar relacionado com o nome do seu projeto. 

```bash
composer create-project laravel/laravel redes2024t1
```

### Jetstream

De seguida deverá entrar na pasta do projeto:

```cd redes2024t1```

Já dentro da pasta `redes2024t1` deverá executar o seguinte comando:

```bash
composer require laravel/jetstream
```

Iremos utilizar o jetstream com o ```livewire```. Para isso deverá executar o seguinte comando:

```bash
php artisan jetstream:install livewire
```

Neste momento não precisa de se preocupar sobre o que é o Livewire. 

### Finalização da instalação 

```bash
npm install
npm run build
```

### Configuração da base de dados

Para que o laravel use a base de dados correta, deverá alterar o ficheiro ```.env``` que se encontra na raiz do projeto e modificar a seguinte linha para o nome da base de dados. Deverá usar o nome adequado ao seu projeto.

Neste caso, como vamos usar ```mysql``` em vez de ```sqlite```, faremos as seguintes alterações no ficheiro:

```bash
#DB_CONNECTION=sqlite
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nodjintis
DB_USERNAME=root
DB_PASSWORD=

```

Nas últimas versões do Laravel, caso a base de dados não exista, o Laravel irá criá-la.

Finalmente, deverá executar as migrações:

```bash
php artisan migrate
```

## Iniciar o servidor

Como estamos a usar o ```MySQL``` teremos que ter o servidor a funcionar. Para o nosso caso, terá que estar em execução no XAMPP (ou LAMPP se tiver em Linux).

Depois deverá ter executar na raíz da pasta do projecto:

```bash
php artisan serve
```

Para verificar se está tudo funcional, poderá, a partir do seu browser favorito, abrir o endereço retornado pelo comando anterior. Normalmente será 127.0.0.1 (localhost) e porta 8000:

```
localhost:8000
```

## Criação de componente 



## Criação de um modelo 

Para implementar o modelo visto nas aulas ```Organization``` deverá utilizar o comando:

```bash
php artisan make:model Organization
```

No entanto, como vimos, vamos criar sempre uma migração (m), factory (f), Seeder (s), e controlador. Pelo que podemos usar a opção ```-mfcs```.

```bash
php artisan make:model Organization -mcfs
```

# Trabalho

Cada aluno contribuíra com uma parte do site. Os trabalhos atribuídos são:


# Semana de 9 outubro

Objetivos

- Criação do modelo, migração, controler, seeder e factory para ```Category```;

- Preenchimento da tabela ```categories`` através do seeder ```CategorySeeder```; 

- Criação do "routing" para a vista de listagem de categorias;

- Criação da vista para a listagem das categorias.

## Criação do modelo, migração, seeder e factory para ```Category```

Para criar o modelo ```Category``` assim como a migração (m), controller (c), seeder (s) e factory (f) deverá executar na linha de comandos (dentro da pasta raíz do projeto):

```
php artisan make:model Category -mcfs
```

Serão criados vários ficheiros. [Quais? Repare no nome dos ficheiros, principalmente no facto de estarem no singular ou plural.]




