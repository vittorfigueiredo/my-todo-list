### API MY TODO LIST 📖

## Passo a passo para rodar o projeto em seu ambiente de desenvolvimento:

1 - Primeiro clone o repositório para seu diretório de projetos ou qualquer outro caminho na sua máquina.

2 - Em seguida, instale o composer na sua máquinha e configure se não tiver ainda.

3 - Execute o comando `composer install` para instalar as dependências necessárias para rodar o projeto.

4 - Crie um arquivo `.env` na raíz do projeto e insira dentro as variáveis de ambiente que estão no arquivo de exemplo `.env.example`, depois é mudar os valores dessas váriaveis de acordo com seu banco de dados.

5 - Agora execute o comando `php -S 0.0.0.0:3333` no terminal para iniciar um servidor local e assim poder rodar o projeto.

6 - Pronto! 🙂
### Query para criar a tabela no seu banco dde dados

```sql
CREATE TABLE task (
  id VARCHAR(36) PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  description VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT NOW(),
  updated_at DATETIME DEFAULT NULL
);
```

### Rotas disponiveis

# Listar todas as tasks:
GET: `/src/controllers/list-tasks.php`
# Adicionar uma task:
POST: `/src/controllers/add-task.php`

# Atualizar uma task:
POST: `/src/controllers/update-task.php`

# Deletar uma task:
POST: `/src/controllers/delete-task.php`
