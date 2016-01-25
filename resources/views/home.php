<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>React e Ratchet, async e websockets com PHP</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/league.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );

      function toggleFullScreen() {
        var noSleep = new NoSleep();
        noSleep.enable();
        if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
         (!document.mozFullScreen && !document.webkitIsFullScreen)) {
          if (document.documentElement.requestFullScreen) {  
            document.documentElement.requestFullScreen();  
          } else if (document.documentElement.mozRequestFullScreen) {  
            document.documentElement.mozRequestFullScreen();  
          } else if (document.documentElement.webkitRequestFullScreen) {  
            document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
          }  
        } else {  
          if (document.cancelFullScreen) {  
            document.cancelFullScreen();  
          } else if (document.mozCancelFullScreen) {  
            document.mozCancelFullScreen();  
          } else if (document.webkitCancelFullScreen) {  
            document.webkitCancelFullScreen();  
          }  
        }  
      }
		</script>

		<!--[if lt IE 9]><script src="lib/js/html5shiv.js"></script><![endif]-->
	</head>

	<body data-websockets-address="<?php echo $websocketsAddress; ?>" data-mode="<?php echo $mode; ?>">
    <img onclick="toggleFullScreen();" src="images/fullscreen.png" style="position: fixed;bottom: 1em;right: 1em;width:2em; z-index: 9999999;">

		<div class="reveal">
            <div class="users-counter"></div>

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

                <section>
                    <h2>http://<?php echo $host; ?></h2>
                    <h1>Palestra interativa!</h1>
                    <h3>Smartphone / Tablet / Notebook</h3>
                    <p><img src="images/navegadores.png" /></p>
                    <h4>Instruções para Palestrantes!</h4>
                </section>

				<section class="sound-comecar">
					<h1>Bem vindo ao guia de Palestrantes para o Seminário Locaweb PHPSP</h1>
				</section>

				<section>
					<h2>Instruções Iniciais!</h2>
                    <p>Estamos usando Reveal.js para criar os slides, você pode acessar a documentação oficial do projeto <a href="https://github.com/hakimel/reveal.js">aqui</a></p>
                    <p>Mas é muito simples criar seus slides, basta usar marcação HTML simples. Nos deixamos algumas coisas prontas para você também.</p>
                    <p>O arquivo de slides está armazenadoe em "resources/views/home.php" dentro desse projeto, é nesse arquivo que você deve incluir os seus slides</p>
				</section>

				<section>
					<h2>Código</h2>
                    <p>para inserir trechos de código no slide basta seguir a seguinte formação:</p>
					<pre>
                        <code class="HTML" data-trim>
&lt;pre&gt;
    &lt;code class="php" data-trim&gt;
    &lt;/code&gt;
&lt;/pre&gt;
                        </code>
                    </pre>
				</section>

				<section class="poll" data-number="1">
                    <p>Enquetes</p>
                    <p>Adicione na tag section um atributo data-number com um valor único para criar enquetes</p>
                    <p>Tambem adicione a classe pool na section</p>
                    <p>Use esse slide como exemplo</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <section class="sound-suspense02" data-number="1">
                    <p>Som</p>
                    <p>Para adcionar sons, você deve alterar o arquivo "public/js/modules/sound.js" e incluir uma classe sound-* na section</p>
                    <p>Use esse slide como exemplo</p>
                </section>

                <section class="sound-suspense02" data-number="1">
                    <p>Mantenha Esses Slides</p>
                    <p>Insira seus slides após esse slide e mantenha os slides de exemplo para que outros palestrantes possam ver também</p>
                    <p>Envie-nos um Pull Request até 10/01/2016</p>
                </section>

                <!-- react além dos websockets -->
                <section>
                  <section>
                    <h2>
                      React além dos WebSockets
                    </h2>
                    <pre><code class="php">
      $seminarioLocaweb = new BigMuthaFuckinEvent(new \DateTime());

      $seminarioLocaweb->setMadnessMode(true);
                      </code></pre>
                    
                  </section>

                  <section>
                    <h2>
                      Níckolas Daniel da Silva
                    </h2>
                    <div>
                      <div style="float: left">
                        <img data-src="http://eventos.locaweb.com.br/files/2015/12/N%C3%ADckolas-Daniel-da-Silva.jpg">
                      </div>
                      <div style="float: right; width: 18em;">
                        <ul>
                          <li>
                            Bombeiro de Software há 4 anos
                          </li>
                          <li>  
                            Análise e Desenvolvimento de Sistemas [UNIFIEO]
                          </li>
                          <li>
                            Engenharia de Software Orientada para Serviços [IBTA]
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <small style="margin-top: 2em;">
                      <a href="http://nawarian.xyz" target="_new">
                        http://nawarian.xyz
                      </a>
                      |
                      <a href="http://git.io/vEe0o" target="_new">
                        http://git.io/vEe0o
                      </a>
                      |
                      <a href="http://phpsp.org.br" target="_new">
                        http://phpsp.org.br
                      </a>
                    </small>
                    <br>
                    <img data-src="images/skype-hug.gif" style="border: 1px solid #000">
                  </section>
                </section>

                <section id="introducao">
                  <section>
                    <h2>
                      Como costumamos programar
                    </h2>
                    <p>
                      Vamos registrar um novo jogador!
                    </p>
                    <pre><code class="php">      try {
        $mapper = $this->getMapper();

        $player = new Model\Player();
        $player->decorate($data); // dados do jogador

        $mapper->player->persist($player); // Player + atributos
        $this->createInventory($player); // Inventário 30x30 [slots]
        $this->createSkillset($player); // Skills + Níveis

        $mapper->flush();
        return (new JsonResponse($player));
      } catch (\Exception $e) {
        return (new JsonResponse(new Error($e)));
      }
                      </code></pre>
                  </section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/01.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/02.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/03.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/04.png"></section>
                  <section>
                    <h2>
                      Este código é...
                    </h2>
                    <aside style="float: left;">
                      <img src="images/reclamando.gif" alt="">
                    </aside>
                    <ul style="float: right; width: 15em;">
                      <li>
                        <strong>Síncrono</strong>: toda operação depende da diretamente anterior,
                        e o resultado final é o único que importa
                      </li>
                      <li>
                        <strong>Acoplado</strong>: toda operação só executa se sua anterior
                        também executar com sucesso
                      </li>
                      <li>
                        <strong>Catastrófico</strong>: uma falha invalida todo o progresso,
                        independentemente de seu nível de gravidade
                      </li>
                      <li>
                        <strong>Pouco responsivo</strong>: não há noção de completitude,
                        sucesso ou falhas
                      </li>
                    </ul>
                  </section>
                  <section data-background="images/processo-batch.gif">
                    
                  </section>
                  <section>
                    <h2>
                      Qual o problema?
                    </h2>
                    <p>
                      A maior fraqueza desse modelo é o custo de programação para
                      fornecer feedback ao usuário de forma decente. <br><br>
                      Além disso, adotar processos com o formato de batch cria
                      sensação de lentidão e impotência no progresso das operações.
                    </p>
                  </section>
                </section>

                <section>
                  <section>
                    <h2>
                      Uma abordagem diferente
                    </h2>
                    <p>
                      Em vez de executar um monte de procedimentos de uma vez,
                      que tal separar um pouco mais as responsabilidades?
                    </p>
                  </section>
                  <section>
                    <h2>
                      Uma cara diferente para fazer o mesmo
                    </h2>
                    <pre><code class="php">
      createPlayerFromRequest(\stdClass $request) { /*...*/ }
      createInventory(Model\Player $player) { /*...*/ }
      createSkillset(Model\Player $player) { /*...*/ }

      try {
          $player = createPlayerFromRequest($data);
          createInventory($player);
          createSkillset($player);

          return (new JsonResponse($player));
      } catch (\Exception $e) {
          return (new JsonResponse(new Error($e)));
      }
                    </code></pre>
                  </section>
                  <section>
                    <p>
                      Mesmo sendo diferente, este código ainda é<br>
                      <strong>catastrófico</strong> e <strong>pouco responsivo</strong>.
                      <br><br>
                      Apesar disto, ficou menos <strong>acoplado</strong>.
                      Mas ainda é <strong>síncrono</strong>...
                    </p>
                  </section>
                  <section>
                    <h2>
                      Catastrófico e Pouco Responsivo...
                    </h2>
                    <pre><code class="php">      try {
          $player = createPlayerFromRequest($data);
          createInventory($player); // 60 ms
          createSkillset($player); // 120 ms

          // Tudo certo *-*
          return (new JsonResponse($player)); // 180 ms
      } catch (InventoryCreationException $e) {
          // Deu erro no inventário
      } catch (SkillsetCreationException $e) {
          // Deu erro na criação das habilidades
      } catch (PlayerCreationException $e) {
          // Deu erro ao criar personagem :O
      } catch (\Exception $e) {
          // Aqui deu ruim mesmo!
      }</code></pre>
                  </section>
                  <section>
                    <p>
                      Eu já posso indicar se o problema foi na
                      criação do jogador, do inventário ou das habilidades.
                    </p>
                    <h3 class="fragment fade-in">
                      Mas por que diabos eu tenho de criar um inventário
                      e SÓ DEPOIS criar as habilidades?
                    </h3>
                  </section>
                  <section>
                    <h2>
                      Imagina só se...
                    </h2>
                    <p>
                      ...essas coisas acontecessem ao <strong>mesmo</strong> tempo
                    </p>
                    <pre><code class="php">
      createPlayerAccount(\stdClass $request) {
          // $player = createPlayerFromRequest($request); (...)
          return all([
            createInventory($player), // 60 ms
            createSkillset($player) // 120 ms
          ]);
      }

      createPlayerAccount($data) // 120 ms
        ->then(function (Model\Player $player) {}) // :D
        ->otherwise(function (InventoryCreationException $e) {}) // :/
        ->otherwise(function (SkillsetCreationException $e) {}) // :(
        ->otherwise(function (\Exception $e) {}); // TToTT
                      
                    </code></pre>

                  </section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/01.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/02.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/03.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/04.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/05.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/06.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/07.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/08.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/09.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/10.png"></section>
                  <section>
                    <p>
                      Trabalhar com processos em <strong>paralelo</strong> cria uma gama
                      de possibilidades! <br>
                      <strong>React PHP</strong> veio para realizar este sonho
                    </p>
                  </section>
                </section>

                <section id="slide-sonho">
                  <h2 style="color: #fff">
                    Quê que dá pra gente fazer com esse "sonho" aí
                  </h2>
                  <canvas id="react-sonho" style="border: 1px solid #000;"></canvas>
                </section>

                <section>
                  <section>
                    <h2>
                      Nossos conceitos chave são <strong>assíncrono</strong> e <strong>paralelo</strong>!
                    </h2>
                    <p>
                      Vamos conhecer agora as ferramentas React de acordo com estes conceitos.
                    </p>
                  </section>
                </section>
                <section>
                  <section>
                    <h2>
                      Event Loop
                    </h2>
                  </section>

                  <section>
                    <h2>
                      EventLoop - O maestro
                    </h2>
                    <p>
                      É o grande responsável por controlar os processos
                      paralelos. Possui, atualmente, quatro implementações:
                    </p>
                    <ul>
                      <li>LibEventLoop (<a href="http://php.net/manual/en/book.libevent.php" target="_new">LibEvent</a>)</li>
                      <li>LibEvLoop (<a href="https://github.com/m4rw3r/php-libev" target="_new">Libev</a>)</li>
                      <li>ExtEventLoop (<a href="http://php.net/manual/en/book.event.php" target="_new">Event</a>)</li>
                      <li>StreamSelect (standalone)</li>
                    </ul>
                    <p>
                      A <a href="https://github.com/reactphp/event-loop/blob/master/src/Factory.php" target="_new">EventLoop\Factory</a> utiliza exatamente esta ordem para adivinhar o EventLoop disponível para seu sistema.
                    </p>
                  </section>
                  <section>
                    <h2>
                      EventLoop - Básico
                    </h2>
                    <p>
                      Trata-se de um loop infinito* que, a cada ciclo, executa
                      três grupos de processos quando disponíveis:
                      <ul>
                        <li>Timers (One-off/Periodics)</li>
                        <li>Ticks (Next/Future)</li>
                        <li>Callbacks de Streams</li>
                      </ul>
                    </p>
                  </section>
                  <section data-background="images/event-loop.jpg" data-background-size="90%" data-background-color="#50534a"></section>
                  
                  <section>
                    <h2>
                      Timers
                      <br>
                      <small>
                        One-off/Periodics
                      </small>
                    </h2>
                    <pre><code class="php">
      $loop = React\EventLoop\Factory::create();
      // Executa {$callback01} infinitamente a cada {$n} segundos
      $eterno = $loop->addPeriodicTimer($n, $callback01);

      // Executa uma única vez, daqui a 5 segundos
      $unico = $loop->addTimer(
        5,
        function () use ($loop, $eterno) {
          if ($loop->isTimerActive($eterno)) {
            // Pára de inserir {$eterno} na fila
            $loop->canceltimer($eterno);
          }
        }
      );
      $loop->run();
                    </code></pre>
                  </section>
                  <section>
                    <h2>
                      Ticks
                      <br>
                      <small>
                        Future/Next
                      </small>
                    </h2>
                    <pre><code class="php">
      $loop = React\EventLoop\Factory::create();

      $nextTickCallback = function () {/*...*/};
      $futureTickCallback = function () {/*...*/};

      // Estes callbacks serão jogados para uma fila de execução
      $loop->nextTick($nextTickCallback);
      $loop->futureTick($futureTickCallback);

      $loop->run();
                    </code></pre>
                  </section>

          <section>
            <h2>
              Callbacks de Streams
            </h2>
            <pre><code class="php">
      $loop = React\EventLoop\Factory::create();

      $streamTal = getStream(); // resource
      stream_set_blocking($streamTal, 0);

      $loop->addReadStream($streamTal, function ($streamTal, $loop) {
          // O que fazer quando $streamTal está pronto para leitura
      });

      $loop->addWriteStream($streamTal, function ($streamTal, $loop) {
          // O que fazer quando $streamTal está pronto para gravação
      });

      $loop->run();
            </code></pre>
          </section>
          <section>
            <p>
              Todos estes adicionam execuções à fila do EventLoop. <br>
              <strong>Este é o coração do React PHP.</strong>
            </p>
          </section>
          <section data-background="images/event-loop.jpg" data-background-size="90%" data-background-color="#50534a"></section>
                </section>
        <section>
          <section>
            <h2>
              Streams
            </h2>
          </section>
          <section data-background="images/minions.gif">
            <div style="background-color: rgba(0, 0, 0, .4); border-radius: .5em; padding: 1em">
              <h2>
                Streams - Os Minions
              </h2>
              <p>
                De nada adianta um Gru que orquestre todo o trabalho se não
                há quem o realize.
              </p>
            </div>
          </section>
          <section>
            <h2>
              React\Stream
            </h2>
            <p>
              Este pacote contém dois itens principais:
            </p>
            <ul>
              <li>Buffer</li>
              <li>Stream</li>
            </ul>
            <p>
              A partir deste tópico começaremos a abordar processos <strong>paralelos</strong>
              e <strong>assíncronos</strong>.
            </p>
          </section>
          <section>
            <h2>
              Buffer
            </h2>
            <p>
              Buffers são os responsáveis por nos comunicar com processos
              de I/O, facilitando a escrita em <strong>resources</strong>.
            </p>
            <pre><code class="php">
      // Exemplo de variável do tipo *resource*
      $resource = fopen('arquivo.txt', 'w+');

      $buffer = new React\Stream\Buffer($resource, $loop);
      $buffer->write('Hello, buffer!');
            </code></pre>
            <p>
              A implementação da classe Buffer vai além da simples escrita:<br>
              Buffer também se preocupa com o tamanho dos itens a serem
              escritos e particiona a escrita entre os ciclos do EventLoop.
            </p>
          </section>
          <section>
            <h2>Stream</h2>
            <p>
              Já os streams são nossos heróis de leitura e escrita de <strong>resources</strong>.
              Os utilizamos através do <strong>on()</strong>, <strong>write()</strong>
              e <strong>pipe()</strong>:
            </p>
            <pre><code class="php">
      $phpsp = fopen('http://phpsp.org.br', 'r');
      $saida = fopen('./saida.html', 'w+');
      $callback = function ($data) {/*...*/};

      $reader = new React\Stream\Stream($phpsp, $loop);
      $writer = new React\Stream\Stream($saida, $loop);
      $reader->on('data', $callback);

      $reader->pipe($writer);
            </code></pre>
          </section>
          <section>
            <h2>
              Streams! Streams everywhere!
            </h2>
            <p>
              Os Streams e Buffers operam com todo tipo de <strong>resource</strong>.
              Portanto sockets, I/O de arquivos e quaisquer outros tipos de streams
              que façam leitura ou escrita.
            </p>
            <pre><code class="php">
      // Um OtServer em PHP?? Quem sabe?! O.o
      $sock = stream_socket_server('tcp://0.0.0.0:7171');
      $server = new React\Stream\Stream($sock, $loop);

      $server->on('data', function($data) use ($sock) {
          // Um readable resource => new Stream($clientSock) *-*
          $clientSock = stream_socket_accept($sock);
      });
            </code></pre>
          </section>
        </section>
        <section>
          <section>
            <h2>Sockets</h2>
          </section>
          <section>
            <h2>
              Socket - O canal
            </h2>
            <p>
              React\Socket serve justamente para simplificar a criação de
              servidores utilizando o protocolo TCP/IP.
            </p>
          </section>
          <section>
            <p>
              Lembram deste trecho de código?
            </p>
            <pre><code class="php">
      // Um OtServer em PHP?? Quem sabe?! O.o
      $sock = stream_socket_server('tcp://0.0.0.0:7171');
      $server = new React\Stream\Stream($sock, $loop);

      $server->on('data', function($data) use ($sock) {
          // Um readable resource => new Stream($clientSock) *-*
          $clientSock = stream_socket_accept($sock);
      });
            </code></pre>
            <p>
              Parece até simples se você não precisa identificar as conexões,
              organizar os fluxos de entrada e saída, buffers e tudo mais.
            </p>
          </section>
          <section>
            <h2>
              React\Socket
            </h2>
            <pre><code class="php">
      $stdOut = new React\Stream\Stream(STDOUT, $loop);
      $server = new React\Socket\Server($loop);

      $server->on('connection', function ($conn) use ($stdOut) {
          // Alguém se conectou!! *-*
          $conn->write('Olá, intruso! >_<');

          $conn->pipe($stdOut);
      });

      $server->listen(7171, '0.0.0.0');
            </code></pre>
          </section>
        </section>
        <section>
          <section data-background="images/telecurso-revisao.gif"></section>
          <section>
            <h2>
              React PHP
            </h2>
            <p>
              Fazendo o resumão de tudo, <strong>React PHP</strong>:
              <ul>
                <li class="fragment fade-in">
                  Tem um EventLoop que organiza as execuções
                </li>
                <li class="fragment fade-in">
                  Tem Streams, que ajudam a manipular I/O
                </li>
                <li class="fragment fade-in">
                  Tem Sockets, que nos permite comunicar por rede
                </li>
                <li class="fragment fade-in">
                  Tem uma boa abstração para trabalhar com <strong>resources</strong>
                </li>
              </ul>
            </p>
          </section>
          <section>
            <h2>
              Nota: React PHP lida com <strong>resources</strong>
            </h2>
            <p>
              Portanto os resultados de <strong>popen()</strong>,
              <strong>fopen()</strong>, <strong>stream_socket_server()</strong>,
              <strong>inotify_init()</strong>, e outros, poderão ser manipulados
              dentro do código PHP de forma facilitada.
            </p>
          </section>
          <section>
            <p>
              Se eu tenho acesso a I/O, subprocessos e rede, o que
              é que eu não posso fazer!?
            </p>
          </section>
          <section data-background="images/hell-yeah.gif"></section>
          <section>
            <p>
              Nada <br>
              <strong class="fragment fade-in">:)</strong>
            </p>
          </section>
        </section>
        <section data-background="images/ross.gif">
          <div style="background-color: rgba(0, 0, 0, .4); border-radius: .5em; padding: 1em" class="fragment fade-in">
            <p>
              Legal, legal...
            </p>
            <p class="fragment fade-in">
              Isso é só a base do React PHP, agora vamos à parte interessante!!
            </p>
          </div>
        </section>
        <section>
          <h2 class="fragment fade-out">
            Cases legais e marotos!
          </h2>
          <br>
          <h2 class="fragment fade-in">
            Dúvidas até o momento?
          </h2>
        </section>
        <section>
          <section>
            <h2>
              Case 01: Logging não bloqueante
            </h2>
            <p>
              Através de sockets ou mesmo de subprocessos somos capazes
              de realizar o logging de aplicações sem aumentar drasticamente
              o tempo de execução.
              <br>
              O Código abaixo ilustra uma aplicação com subprocessos.
            </p>
          </section>
          <section>
            <h2>
              Exemplo chulo com Monolog:
            </h2>
            <small>
              Esta ferramenta roda como linha de comando
            </small>
            <pre><code class="php">
      // $ php log.php meuArquivo.log 'Texto para o log'
      require_once dirname(__FILE__).'/vendor/autoload.php';

      use Monolog\Logger;
      use Monolog\Handler\StreamHandler;

      $logFile = $loggerName = $argv[1]; // meuArquivo.log
      $textToLog = $argv[2]; // Texto para o log

      $log = new Logger($loggerName);
      $log->pushHandler(new StreamHandler($logFile), Logger::WARNING);

      $log->addInfo($textToLog);
            </code></pre>
          </section>
          <section>
            <h2>
              Utilizando log.php
            </h2>
            <pre><code class="php">
      use React\ChildProcess\Process;

      $loop = React\EventLoop\Factory::create();
      $stdIn = new React\Stream\Stream(STDIN, $loop);
      
      $stdIn->on('data', function($input) use ($loop) {
          $comando = "php log.php input.log '{$input}'";
          (new Process($comando))->start($loop);
      });

      $loop->run();
            </code></pre>
          </section>
          <section data-background-size="42%" data-background="images/logging/01.png"></section>
          <section data-background-size="42%" data-background="images/logging/02.png"></section>
          <section data-background-size="42%" data-background="images/logging/03.png"></section>
          <section data-background-size="42%" data-background="images/logging/04.png"></section>
          <section data-background-size="42%" data-background="images/logging/05.png"></section>
        </section>
        <section>
          <section>
            <h2>
              Case 02: PHPBot - Automação de tarefas
            </h2>
            <small>
              <a href="https://github.com/nawarian/PHPBot" target="_new">
                https://github.com/nawarian/PHPBot
              </a>
            </small>
            <p>
              Computadores com Windows possuem a Win32 API que, dentre outas coisas,
              permite o envio de eventos de periféricos como teclado e mouse. <br>
              Para computadores com sistemas Unix-like que utilizem o X11, podemos utilizar
              a libx11 para alcançar o mesmo resultado.
            </p>
          </section>
          <section>
            <h2>
              Implementação
            </h2>
            <p>
              O PHP não tem acesso à Win32API sem utilizar extensões, para isto <strong>python</strong>
              se mostrou útil.
              Para o X11 ainda não existe uma biblioteca em PHP, mas a ferramenta de linha de comando <strong>xdotool</strong>
              já oferece tudo o que precisamos. <br>
              Trata-se portando de uma série de subprocessos chamados de forma organizada.
            </p>
          </section>
          <section>
            <h2>Exemplo: runando no Tibia :)</h2>
            <pre><code class="php">
      $dm = PHPBot\DesktopManager\Factory::create($loop);
      $runa = $argv[1];

      $runar = $dm->createCommandPipeline(
          $dm->wait(.5),
          $dm->keyboard()->sendKey(Keys::ENTER()),
          $dm->wait(.5),
          $dm->keyboard()->type($runa),
          $dm->wait(.5),
          $dm->keyboard()->sendKey(Keys::ENTER()),
          $dm->wait(2)
      );

      $runar->start()
            ->then($onPipelineEndedCallback);
            </code></pre>
          </section>
          <section>
            <video class="stretch" src="images/phpbot/tibiabot.mp4"></video>
          </section>
        </section>
			</div>

		</div>

		<script src="js/plugins/jquery.min.js"></script>
		<script src="lib/js/head.min.js"></script>
		<script src="js/plugins/reveal.js"></script>
    <script src="js/plugins/soundjs-0.6.0.combined.js"></script>

		<script>
            var mode = $('body').attr('data-mode');
            var websocketsAddress = $('body').attr('data-websockets-address');

            var revealConfig = {
                controls: false,
                progress: true,
                history: false,
                keyboard: false,
                overview: false,
                touch: false,
                center: true,
                autoSlideStoppable: false,
                help: false,

                transition: 'slide', // none/fade/slide/convex/concave/zoom

                // Optional reveal.js plugins
                dependencies: [
                    { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
                    { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: 'plugin/multiplex-ratchet/ratchet.js', async: true },
                    { src: 'js/code.min.js', async: true },
                    //{ src: 'plugin/zoom-js/zoom.js', async: true },
                    //{ src: 'plugin/notes/notes.js', async: true }
                ],

                multiplex: {
                    secret: 'issoehumsegredo',
                    id: 'nossaqueidlegal',
                    url: websocketsAddress
                },
            };

            if (mode == 'presenter') {
                revealConfig.controls = true;
                revealConfig.keyboard = true;
                revealConfig.touch = true;
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/master.js', async: true });
            } else {
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/client.js', async: true });
            }

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize(revealConfig);
		</script>
    <script src="js/plugins/NoSleep.min.js"></script>

    <script>
      window.onload = function () {
        var reactCanvas = document.getElementById('react-sonho'),
            ctx = reactCanvas.getContext('2d'),
            drawing = false;
        window.toDraw = new Array;
        window.toDrawReceived = new Array;

        var radius = 10;

        window.drawCircle = function (context, x, y) {
          context.fillStyle = '#fff';

          context.beginPath();
          context.moveTo(x, y);
          context.arc(x, y, radius, 0, 2 * Math.PI, false);
          context.fill();
        };

        function toggleDrawing (evt) {
          drawing = !drawing;
          evt.preventDefault();
        }

        window.addEventListener('mouseup', toggleDrawing);
        window.addEventListener('mousedown', toggleDrawing);

        reactCanvas.addEventListener('mousemove', function (e) {
          if (!drawing) return;

          toDraw.push({
            x: e.offsetX + 30,
            y: e.layerY + 30
          });
        });

        setInterval(function () {
          if (window.drawingWs && toDraw.length) {
            window.drawingWs.send(JSON.stringify({
              type: 'coords',
              coords: toDraw
            }));
          }

          var draw = toDraw.concat(toDrawReceived);
          toDrawReceived = new Array;
          toDraw = new Array;

          for (var i in draw) {
            var coords = draw[i];
            drawCircle(ctx, coords.x, coords.y);

            draw.splice(draw.indexOf(coords), 1);
          }
        }, 300);

        window.drawingWs = new WebSocket('ws://'+websocketsAddress);
        window.drawingWs.onopen = function () {
          window.onresize();
        };

        window.drawingWs.onmessage = function (e) {
          var msg = JSON.parse(e.data);

          if (msg.type == 'coords') {
            toDrawReceived = toDrawReceived.concat(msg.coords);
          }
        };

        window.onresize = function () {
          reactCanvas.width = 600;
          reactCanvas.height = 800;
        };

      };
    </script>

	</body>
</html>
