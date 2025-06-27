# Projeto Final LPP - Mini Blog em PHP

Este é um blog simples construído com PHP puro e SQLite.  
Foi desenvolvido como projeto final da disciplina "Linguagens e Paradigmas da Programação" (LPP).

---

## Funcionalidades

- Listar todos os posts do blog  
- Visualizar posts individualmente  
- Criar novos posts via formulário  
- Inserir posts via API REST com JSON (endpoint `/api/insert.php`)  
- CLI para inserção de posts via terminal (`cli_insert.php`)  
- Utiliza SQLite como banco de dados leve  
- Sem uso de frameworks ou bibliotecas externas  

---

## Estrutura do Projeto

```

├── api/
│   └── insert.php        # Endpoint API REST para inserir posts via JSON
├── cli\_insert.php        # Script CLI para inserir posts via terminal
├── create.php            # Formulário para criar um novo post
├── db.php                # Conexão com o banco usando PDO (SQLite)
├── footer.php            # Rodapé HTML (include)
├── header.php            # Cabeçalho HTML (include)
├── index.php             # Lista todos os posts
├── init.php              # Inicializa a tabela do banco (executar uma vez)
├── insert.php            # Processa e insere novos posts via formulário
├── post.php              # Exibe um post individual por ID
├── style.css             # Estilo básico para o blog
├── data/                 # Pasta que contém o arquivo do banco SQLite
└── backup\_posts.txt      # Backup de posts inseridos via CLI

````

---

## Como Executar

### Requisitos

- PHP 7.4 ou superior instalado na sua máquina

### Passos

1. Clone este repositório:
   ```bash
   git clone https://github.com/seuusuario/lpp-final-project-php.git
   cd lpp-final-project-php
````

2. Inicie o servidor PHP embutido:

   ```bash
   php -S localhost:8000
   ```

3. Execute a inicialização da tabela uma vez no navegador(ja esta inicada):

   ```
   http://localhost:8000/init.php
   ```

4. Acesse o blog:

   ```
   http://localhost:8000/index.php
   ```

5. Para inserir posts via API, faça um POST para:

   ```
   http://localhost:8000/api/insert.php
   ```

   Enviando JSON no corpo, exemplo com curl:

   ```bash
   curl -X POST http://localhost:8000/api/insert.php \
     -H "Content-Type: application/json" \
     -d '{"title":"Meu Título","content":"Conteúdo do post"}'
   ```

6. Para inserir posts via terminal CLI:

   ```bash
   php cli_insert.php
   ```

---

## Observações

* O script `init.php` cria a tabela `posts` no banco SQLite. Execute-o uma vez e depois pode removê-lo ou ignorá-lo.
* O arquivo `backup_posts.txt` armazena localmente os posts inseridos via CLI para backup simples.
* Este projeto é destinado a aprendizado e aplicações pequenas.
* Para ambientes de produção, considere usar soluções mais robustas de segurança, validação e banco de dados.

---

## Segurança e Validação

* Títulos aceitam apenas letras, números e espaços (validação com expressões regulares).
* O conteúdo do post é limpo para remover tags `<script>`, prevenindo ataques XSS básicos.


##Conclusão
* O projeto do mini blog explorou diversos aspectos importantes do PHP, como a manipulação de banco de dados SQLite através do PDO, o uso de expressões regulares para validação de entrada, e técnicas básicas de segurança, como a sanitização de dados para evitar scripts maliciosos. Além disso, a implementação de um endpoint de API demonstrou como o PHP pode ser utilizado tanto para aplicações web clássicas quanto para serviços REST simples.

---
