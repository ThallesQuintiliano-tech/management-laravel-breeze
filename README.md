Management-Laravel-Breeze

Sistema de autenticação e gerenciamento de usuários em Laravel com Breeze e Blade. Inclui login, registro, edição de perfis e listagem de usuários com interface moderna e responsiva.

Pré-requisitos
- PHP 8.1 ou superior
- Composer
- Node.js e npm
- Git
- Banco de dados (MySQL)

Instalação
1. Clone o repositório:
   git clone https://github.com/ThallesQuintiliano-tech/management-laravel-breeze.git
   cd laravel-auth-adminlte

2. Instale as dependências do PHP:
   composer install

3. Configure o arquivo de ambiente:
   cp .env.example .env
   php artisan key:generate

4. Configure o banco de dados (usando MySQL):
   Crie um banco de dados MySQL chamado "laravel_auth_adminlte" (ou outro nome de sua escolha).
   No arquivo .env, configure:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_auth_adminlte
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   Substitua "seu_usuario" e "sua_senha" pelas credenciais do seu MySQL.
   Execute as migrações:
   php artisan migrate

5. Instale e compile os assets:
   npm install
   npm run dev

6. Crie usuários de teste (opcional):
   php artisan tinker
   App\Models\User::factory()->count(5)->create();
   exit
   Esses usuários terão a senha padrão "password".

7. Inicie o servidor:
   php artisan serve

8. Acesse o sistema:
   - Abra http://localhost:8000 no navegador.
   - Faça login com um e-mail gerado (ex.: user1@example.com) e a senha "password", ou registre um novo usuário.

Uso
- Dashboard: Veja e gerencie a lista de usuários (editar ou excluir).
- Editar Perfil: Acesse /profile/edit para editar o perfil do usuário logado.
- Editar Outros Usuários: No dashboard, clique em "Editar" para modificar os dados de outros usuários.

Solução de Problemas
- Erro de dependências: Certifique-se de que o PHP 8.1+ está instalado e execute "composer update".
- Erro de banco de dados: Verifique as credenciais do MySQL no .env e confirme que o banco de dados foi criado.
- Assets não carregam: Execute "npm install" e "npm run dev" novamente.

Contribuição
Sinta-se à vontade para abrir issues ou enviar pull requests com melhorias ou correções.

Licença
Este projeto está licenciado sob a MIT License.
