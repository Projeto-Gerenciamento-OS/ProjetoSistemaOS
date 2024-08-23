## Clonar o repositorio no xampp
  1 - C:\xampp\htdocs

## inicia o xampp (apache e o MySQL)!!

## Para criar um projeto:
  1.1 - composer create-project laravel/laravel (nomeArquivo ou . [caso ja esteja em uma pasta]) 
  1.2 - composer install

  2 -  php artisan serve(iniciar o projeto)

## Para rodar um projeto:
  1 - abrir a pasta com o laravel
  2 - php artisan serve

## Para criar um layout - por comando:
  php artisan make:view layouts/nome

## Para criar um controller - por coamndo:
  php artisan make:controller nome

## Migrate:
  1 - Para criar um migrate: php artisan make:migration (nome)
  2 - Enviar os arquivos ao bd (banco de dados): php artisan migrate
  3 - Excluir e reenviar os arquivos: php artisan migrate:fresh
  4 - Status do migrate: php migrate:status

## Model - interage com o banco de dados, ponte entre a controller e o view
  1 - Para criar uma model: php artisan make:model nome


## Request - para autentificar
  1 -  php artisan make:request nome

## Component -
  1 - php artisan make:component alert --view

## Para gerar uma chave nova:
 1 - cp .env.example .env
 2 - composer install
 3 - php artisan key:generate

## Para mandar a seed
  1 - php artisan db:seed
  
# Para dar funcionalidade ao btn

  1. criar todas as rotas
  2. cria a controller da pagina
  3. Criar a migrate (php artisan make:migration create_nome)
  4. criar a model
  5. criar as views

  * Na controller
    * cria uma variavel que recebe o valor da model (o nome da model), e os complementos (::orderBy('created_ad')...)

    * cria a funcao que ira enviar a outras paginas (na funcao deve chamar a model e criar uma variavel com mesmo nome)
  
  * Na model:
  
    * protected $table = 'nome da tabela da migration' - para poder protejer o nome da tabela criada na migrete do proprio laravel que coloca os nomes das tabelas no plural

    * protected $fillable = [ 'campos', 'da', 'tabela'] 


# Comandos para passar todas as atualizações de uma branch atualizada para uma desatualizada.

  * git checkout nome_da_sua_branch

  * git fetch origin

  * git checkout nome_da_branch_atualizada

  * git pull origin nome_da_branch_atualizada

  * git checkout nome_da_sua_branch

  * git reset --hard nome_da_branch_atualizada

  * git push origin nome_da_sua_branch --force
  
