# Desenvolvimento Wordpress com Docker


## Inicializando o Ambiente de Desenvolvimento
Usando o comando a seguir, você estará inicializando um container docker para desenvolver sua aplicação com wordpress dentro dele.
```
docker-compose up -d wordpress
```
Neste momento a aplicação deve responder no endereço http://localhost:5000 para que você possa instalar o wordpress como desejar.
## Configurando um Site via Linha de Comando

Caso você não esteja preocupado em modelar uma instalação completa do wordpress, mas apenas um `plugin` ou um `theme`, talvez você queira gerar uma instalação automática do wordpress.

### Inicialização do Site

```bash
docker-compose run wp-cli wp core install --path="/var/www/html" --url=http://localhost:5000 --title="Meu Wordpress com Docker" --admin_user=admin --admin_password=secret --admin_email=foo@bar.com
```
Se você não for customizar nada no comando acima, poderá usar o seguinte atalho para executá-lo:

```bash
docker-compose up wp-cli
```

### Ativação do Theme em Desenvolvimento

```bash
docker-compose run wp-cli wp theme activate example-theme
```
### Ativação do Plugin em Desenvolvimento

```bash
docker-compose run wp-cli wp plugin activate example-plugin
```


## Licença

Este projeto foi desenvovido sob a licença GPLv3. Veja o arquivo [LICENSE](./LICENSE) para detalhes.


Feito com ♥ por [Daniel Oliveira](https://www.linkedin.com/in/doli/)