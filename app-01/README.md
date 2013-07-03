Fulia
======

Essa é a primeira aplicação, eu me base-ei na área administrativa do site devfuria.com.br,
que eu chamava (não existe mais) de "fulia".

O que o software faz?
---

Gerencia as matérias/artigos de um site.

Trata-se de um crud básico, o index chama a lista de matérias
e ao clicar em cada matérias temos o formulário de cada resgistro.



Lições aprendidas
---

Propositalmente, eu tentei ao máximo imitar o esquema natural, ou melhor, convencial de construção
de uma aplicação web.

Os registros são exibidos em uma listagem (table)...

![tabela](https://raw.github.com/flaviomicheletti/prototipo-arqui-js/master/app-01/biblio/primeira-tela.png "lista")


..onde é possível abrir o registro em um formulário
ou deletar o registro na própria listagem.

![formulário](https://raw.github.com/flaviomicheletti/prototipo-arqui-js/master/app-01/biblio/segunda-tela.png "formulário")


Observações:

* As views estão muito inteligentes.
* Os models não refletem nenhum padrão


Como instalar?
---

A estutura de diretório deve ficar assim:

    app/
        biblio/
        materia/
        index.php



A base de dados segue o esquema do arquivo "biblio/classes/Conn.class.php":

        $local   = "localhost";
        $usuario = "root";
        $senha   = "1234";
        $base    = "devfuria_main";

Modifique à suas nessecidades.


A estrutura e os dados da nossa única tabela vem a seguir:

    CREATE TABLE IF NOT EXISTS `materias_` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `url` varchar(255) NOT NULL,
      `titulo` varchar(255) NOT NULL,
      `resumo` text NOT NULL,
      `keywords` varchar(255) DEFAULT NULL,
      `nivel` varchar(50) NOT NULL,
      `secao` varchar(20) NOT NULL,
      `autor` varchar(100) NOT NULL,
      `dt_atualizacao` date DEFAULT NULL,
      `dt_criacao` date NOT NULL,
      `ordem` int(11) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

    TRUNCATE materias;
    INSERT INTO `materias` (`id`, `url`, `titulo`, `resumo`, `keywords`, `nivel`, `secao`, `autor`, `dt_atualizacao`, `dt_criacao`, `ordem`) VALUES
    (1, 'php/basico/um-bom-comeco', 'Um bom começo', 'PHP é uma linguagem de programação para uso geral. Inicialmente, projetada por Rasmus Lerdorf na década de 1990, tinha como objetivo principal contar as visitas que eram realizadas em seu currículo on-line. Atualmente (2012) é utilizada, principalmente para construir aplicações web. Entende-se por aplicbase-dadosações web (às vezes abreviado para “webapp” ou simplesmente “app´s”) programas ou softwares escritos para rodarem na plataforma web, no modelo cliente/servidor...', 'o que é php; definição de php;', 'basico', 'php', 'alexandre', '2012-09-11', '2012-06-05', 1),
    (2, 'php/basico/logica-de-programacao', 'Lógica de Programação', 'A lógica de programação é um exercício mental. Ela equivale aos exercícios físicos e todo programador deve praticar, não apenas no início do aprendizado mas no decorrer de toda a “estrada”. Programar um computador é uma atividade, antes de tudo, criativa. Quando a criatividade se une com o raciocínio lógico temos a lógica de programação. E programar nada mais é do que instruir o computador a resolver problemas... usando a lógica de forma criativa.', 'lógica de programação; php e lógica de programação; pseudocódigo; dfd; diagrama de fluxo de dados; teste de mesa; algoritmos;', 'basico', 'php', 'alexandre', '2012-09-11', '2012-06-05', 2),
    (3, 'php/basico/antes-de-enfiar-o-pe-na-jaca', 'Antes de enfiar o pé na jáca', 'A questão é que o PHP é fácil demais. o que incentiva a implementar suas idéias, retornando, assim, bons resultados. Algumas dessas facilidades são a possibilidade de digitar grande parte de seu código diretamente em suas páginas da Web, adicionar funções úteis (como um código de acesso a banco de dados) a arquivos, incluindo-as de página em página e, antes de se dar conta, você já tem um aplicativo Web em execução.', 'endentação; endentar; endentar código; estilo de programação; nomenclatura; comentários; comentando código;', 'basico', 'php', 'alexandre', '2012-09-11', '2012-06-05', 3),
    (4, 'php/basico/instalando-o-ambiente', 'Instalando o ambiente no estilo NEXT, NEXT, NEXT', 'Todo programador precisa saber “levantar” seu próprio ambiente de trabalho, me refiro a instalar os programas necessários para começar o desenvolvimento. Inclua na lista: o servidor web(apache), o módulo PHP, o banco de dados, a API (interface) do banco de dados, o editor de código, o controlador de versão, a escolha do sistema operacional, etc... Após instalado os componentes, devemos configurar cada um deles.', 'servidor web; configurações; apache; mysql; x-debug; phpmysqlgit; svn; firefox; firebug;', 'basico', 'php', 'alexandre', '2013-02-04', '2012-06-05', 4),
    (5, 'php/basico/estudos-de-logica-1-ao-5', 'Estudos de lógica com respostas (1 ao 5)', 'Você já sabe o que é PHP, conhece a sintaxe básica, lêu o artigo “pé na jáca”, já conseguiu “subir’ o ambiente de desenvolvimento. Agora só falta começar a programar. Para isso vamos começar exercitando a lógica de programação. Não vamos criar programas completos e profissionais, nada disso. Construiremos apenas pequenos trechos de códigos para exercitar o raciocínio e desenvolver uma intimidade com a linguagem.', 'exercícios de lógica; prática da lógica; algoritmos;', 'basico', 'php', 'alexandre', '2012-09-11', '2012-06-05', 5),
    (6, 'php/basico/estudos-de-logica-6-ao-10', 'Estudos de lógica com respostas (6 ao 10)', 'Esta é a segunda bateria de exercícios de lógica.', 'exercícios de lógica; prática da lógica; algoritmos;', 'basico', 'php', 'alexandre', '2012-09-11', '2012-06-05', 6),
    (7, 'js/basico/intro', 'Introdução', 'JavaScript(JS) não é brinquedo, é linguagem de programação séria. Das mil definições de JS a que mais me agrada é a de Kevin e Cameron em seu livro Simple JavaScript (Só JavaScript) ''JavaScript é uma linguagem de programação simples que permite alterar páginas web dinamicamente, enquanto estão sendo exibidas em um navegador.''.', 'introdução ao javascript; definição de javascript; ajax; firebug; front-end; desenvolvimento fornt-end;', 'basico', 'js', 'alexandre', '2012-11-08', '2012-10-08', 1),
    (8, 'js/basico/preparando-o-terreno', 'Preparando o terreno', 'Na matéria de introdução eu comentei que vamos aprender JS junto com HTML e CSS. Na verdade vamos aprender as coisas separadamente, porém vamos trabalhar com os três elementos como se fosse ingredientes obrigatórios em cada receita.\r\n\r\nNeste ponto é importante entendermos a obrigação de cada um desses componentes. O JS será encarregado do comportamento da página, da interação com o usuário, dos enventos possíveis (click, duplo click, teclado, movimentação do mouse, e etc...), de tudo aquilo que pode beneficinar a interface do sistema.', 'marcação semântica; exemplos de javascript;', 'basico', 'js', 'alexandre', '2012-11-08', '2012-10-08', 2),
    (9, 'html-css/basico/onde-tudo-comecou', 'Onde tudo começou', 'Tim Berners-Lee, a culpa é toda dele. No começo dos anos 90, o dito cujo, inventou o HTML (HyperText Markup Language) que\nsignifica Linguagem de Marcação de Hipertexto. Ele queria facilitar a comunicação de suas pesquisas com seus colegas\ne acabou resolvendo o problema de todo mundo, nascia a web.', 'html intro; html começando', 'basico', 'html-css', 'alexandre', '2013-02-11', '2013-01-23', 1),
    (10, 'html-css/basico/html-e-css-intro', 'HTML e CSS - Introdução', 'Vamos dar uma rápida olhada nas tag''s básicas e uma "passeada" com o CSS.', 'html e css', 'basico', 'html-css', 'alexandre', '2013-02-11', '2013-01-23', 2),
    (11, 'html-css/basico/elementos-inline-block-level', 'Elementos in-line e elementos block-level', 'Há dois tipos básicos de tag''s: as in-line e de block-level.\n\nA diferênça básica é que o browser acomoda os elementos\ninline à esquerda um ao lado do outro e as de bloco ele coloca uma embaixo da outra ocupando a tela toda.\n\nVeja o HTML abaixo para *entender* e clique no [link](code1.html "Veja a pagina em funcionamento")\npara *perceber* como ele foi reenderizado.', 'html; elemntos inline, elementos block-level', 'basico', 'html-css', 'alexandre', '2013-02-11', '2013-01-23', 3),
    (12, 'html-css/basico/primeiro-html/', 'Criando nosso primeiro HTML', 'O site csszengarden.com é notório por seus esforços em promover e divulgar o poder do CSS unido a um bom HTML. Ele tráz uma proposta interessante: criaram um HTML básico, porém bem formado, válido e desafiaram designers solcitando que o estilizassem sem "tocar" no HTML. Em outras palavras, o designer poderá utiliar o tema/estilo que quiser, mas não poderá jamais alterar o HTML e sua estrutura', 'primeiro html', 'basico', 'html-css', 'alexandre', '2013-04-12', '2013-04-12', 4),
    (13, 'php/basico/debugando/', 'Debugando (depurando)', 'Debugar é um esforço para encontrar determinado ponto (às vezes vários pontos) "defeituoso" no código para que seja corrigido.', 'debugando; depurando; var_dump; var_dump(); x-debug; X-debug; print_r; tags pre; pre', 'basico', 'php', 'alexandre', '2013-04-10', '2013-04-10', 7),
    (14, 'js/basico/debugando/', 'Debugando (depurando)', '" Precisamos debugar o programa para sabermos onde [e como] está ocorrendo o erro. Essa frase faz parte do dia a dia do desenvolvedor e, não raro, ela tira o sono de muita gente.', 'debugando; depurando; debugando js; depurando jsfirebug;', 'basico', 'js', 'alexandre', '2013-04-10', '2013-04-10', 3);