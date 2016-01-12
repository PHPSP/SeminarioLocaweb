# Tema Base para Slides do Seminário Locaweb PHPSP

Bem vindo palestrante, esse repositório contém o tema base para os slides do Seminário Locaweb PHPSP. 

Aqui você encontrará toda a estrutura necessária para desenvolver seus slides de forma simples e permitindo total interatividade aos participantes do evento.

## Instalando as Dependencias

Para instalar as dependências dos projeto execute na raiz do repositório clonado:

```bash
composer install
```

## Rodando a Aplicação

Você pode rodar a aplicação de 3 formas: 'AZK', 'Vagrant' ou 'Localmente'. Cada forma é explicada abaixo:

### AZK

Instale o AZK (caso não tenha ainda instalado): http://docs.azk.io/en/installation/

Dica: Para MacOSX e Windows, você precisará do Virtualbox.

Vá até a pasta do projeto e rode:

```bash
azk start
```

A saída deve ser algo como:

```bash
azk: ↑ starting `websocket` system, 1 new instances...
azk: ✓ checking `library/php:fpm` image...
azk: ◴ waiting for `websocket` system to start, trying connection to port websocket/tcp...
azk: ↑ starting `php` system, 1 new instances...
azk: ◴ waiting for `php` system to start, trying connection to port fastcgi/tcp...
azk: ↑ starting `nginx` system, 1 new instances...
azk: ✓ checking `library/nginx:latest` image...
azk: ◴ waiting for `nginx` system to start, trying connection to port http/tcp...

┌───┬───────────┬───────────┬─────────────────────────────┬───────────────────────────────┬─────────────┐
│   │ System    │ Instances │ Hostname/url                │ Instances-Ports               │ Provisioned │
├───┼───────────┼───────────┼─────────────────────────────┼───────────────────────────────┼─────────────┤
│ ↑ │ nginx     │ 1         │ http://seminario.dev.azk.io │ 1-http:32789, 1-443:32788     │ -           │
│   │           │           │                             │                               │             │
├───┼───────────┼───────────┼─────────────────────────────┼───────────────────────────────┼─────────────┤
│ ↑ │ php       │ 1         │ dev.azk.io                  │ 1-fastcgi:9000                │ -           │
├───┼───────────┼───────────┼─────────────────────────────┼───────────────────────────────┼─────────────┤
│ ↑ │ websocket │ 1         │ dev.azk.io                  │ 1-websocket:777, 1-9000:32787 │ -           │
│   │           │           │                             │                               │             │
└───┴───────────┴───────────┴─────────────────────────────┴───────────────────────────────┴─────────────┘
```

Após as instâncias estarem rodando, abra no navegador: http://seminario.dev.azk.io/

Para o modo apresentador (que permite trocar os slides): http://seminario.dev.azk.io/presenter
Usuário: admin
Senha: phprules

### Vagrant

Certifique-se de ter instalado Vagrant, Virtualbox e o plugin `vagrant-hostmanager`. Os plugins `vagrant-cachier` e 
`vagrant-bindfs` são opcionais.

Esse repositório possui receitas de provisionamento com Vagrant criadas usando PuPHPet, portanto para rodar a aplicação
basta executar o comando `vagrant up` na raiz do projeto, isso irá baixar uma imagem ubuntu 14.04, instalar e configurar
tudo que é necessário para rodar a aplicação. Porem esse processo pode levar um tempo.

Após concluído o processo de provisionamento acesse a maquina virtual via ssh uutilizando o comando `vagrant ssh` e 
inicie o servidor de slides com o comando

```bash
sudo su
cd /vagrant
php artisan slides:server
```

### Rodando Localmente sem Vagrant

Caso você deseje executar a aplicação diretamente no seu sistema você pode usar Apache ou NGINX configurando o virtual
host para apontar para o diretório `public` desse repositório, ou executar o comando a seguir que irá levantar um 
servidor de desenvolvimento local.

```bash
php artisan serve
```

Algumas extensões do PHP e outras dependências devem estar habilitadas ou instaladas no seu sistema para que a aplicação
rode normalmente utilizando esse comando, você pode consultar a infraestrutura recomendada no arquivo de descrição do
PuPHPet localizado em `puphpet/config.yaml`

## Acessando os Slides

Existem duas forma de acessar os slides, como expectador ou como apresentador. Somente como apresentador você terá
acesso aos controles dos slides, os expectadores apenas poderão vizualizar os slides que estiverem sendo controlados
pelo apresentador.

Se não tiver executado com Vagrant substitua o endereço pelo endereço configurado no seu ambiente ou por 
http://localhost:8000 caso esteja executando com o servidor de desenvolvimento tanto ao acessar como apresentador
quanto como expectador

### Acesso com Apresentador

http://seminario.dev/presenter

Usuário: admin
Senha: phprules

### Acesso como Expectador

http://seminario.dev

## Slides de Exemplos

O Projeto possui alguns slides de exemplo para você utilizar como base na sua apresentação, sinta-se a vontade para
fazer os seus slides da forma que achar melhor, os slides de exemplo contem mais informações sobre como montar sua 
apresentação.

## Aviso

Esse é um trabalho em andamento, envie Pull Requests com seus Slides para esse repositório mas esteja ciente de que
outros palestrantes e organizadores do evento também estarão realizando mudanças no projeto ao mesmo tempo, por isso
procure não interferir nas demais alterações.

Caso tenha algum problema com a aplicação abra uma issue nesse mesmo respositório.

### License

Livre para o universo! :-D
