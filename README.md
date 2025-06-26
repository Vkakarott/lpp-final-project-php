# Projeto Final LPP - Mini Blog em PHP

Este é um blog simples construído com PHP puro e SQLite.  
Foi desenvolvido como projeto final da disciplina "Linguagens e Paradigmas da Programação" (LPP).

---

## Funcionalidades

- Listar todos os posts do blog  
- Visualizar posts individualmente  
- Criar novos posts via formulário  
- Utiliza SQLite como banco de dados leve  
- Sem uso de frameworks ou bibliotecas externas  

---

## Estrutura do Projeto

```

├── index.php       # Lista todos os posts
├── post.php        # Exibe um post individual por ID
├── create.php      # Formulário para criar um novo post
├── insert.php      # Processa e insere novos posts no banco
├── db.php          # Conexão com o banco usando PDO
├── init.php        # Inicializa a tabela do banco (executar uma vez)
├── header.php      # Cabeçalho HTML (include)
├── footer.php      # Rodapé HTML (include)
├── style.css       # Estilo básico para o blog
└── data/           # Pasta que contém o arquivo do banco SQLite

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

3. Abra o navegador e execute a inicialização do banco uma vez:

   ```
   http://localhost:8000/init.php
   ```

5. Acesse o blog:

   ```
   http://localhost:8000/index.php
   ```

---

## Observações

* O script `init.php` cria a tabela `posts` no banco SQLite. Execute-o uma vez e depois pode removê-lo ou ignorá-lo.
* Este projeto é destinado a aprendizado e aplicações pequenas.
* Para ambientes de produção, considere usar soluções mais robustas de segurança e banco de dados.

---
