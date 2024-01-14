# ToDo List App

Um simples aplicativo ToDo List desenvolvido em Laravel 8 com Bootstrap.

## Requisitos do Sistema

Certifique-se de que seu ambiente atenda aos seguintes requisitos:

- PHP >= 7.3
- Laravel 8.X
- Composer
- Node.js e NPM
- Banco de dados (por exemplo, MySQL)

## Instalação

1. Clone o repositório:

    ```bash
    git clone https://github.com/igorsalgado/laravel-todo-list.git
    ```

2. Instale as dependências do Composer:

    ```bash
    composer install
    ```

3. Copie o arquivo de configuração `.env`:

    ```bash
    cp .env.example .env
    ```

4. Configure o arquivo `.env` com suas informações de banco de dados e outras configurações necessárias.

5. Gere a chave de aplicativo:

    ```bash
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados:

    ```bash
    php artisan migrate
    ```

7. Compile os ativos:

    ```bash
    npm install
    npm run dev
    ```

8. Inicie o servidor de desenvolvimento:

    ```bash
    php artisan serve
    ```

9. Acesse o aplicativo em [http://localhost:8000](http://localhost:8000).

## Recursos

- Adicione, edite e exclua tarefas.
- Marque tarefas como concluídas.
- Visualize uma lista clara e ordenada de suas tarefas.

## Contribuindo

Sinta-se à vontade para contribuir com melhorias! Basta seguir as etapas:

1. Faça um fork do repositório.
2. Crie uma branch para sua contribuição: `git checkout -b feature/nova-funcionalidade`.
3. Faça suas alterações e faça commit: `git commit -m 'Adiciona nova funcionalidade'`.
4. Envie para o seu fork: `git push origin feature/nova-funcionalidade`.
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).

---

**Nota:** Este é um modelo básico. Certifique-se de ajustar e personalizar conforme necessário para o seu projeto específico.
