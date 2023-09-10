# projeto_livraria_III
projeto voltado ao framework Laravel, foco será construir um sistema de livraria com funções de CRUD. 

#inicializar o projeto buildando a imagem do dockerfile
docker-compose build app

# comando para criar os containers 
docker-compose up -d

# baixar composer
docker-compose exec app composer install

# gerar uma chave única para o aplicativo com a artisan
docker-compose exec app php artisan key:generate
