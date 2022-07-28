-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jul-2022 às 12:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cetdabar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `addresuser`
--

CREATE TABLE `addresuser` (
  `idaddress` int(11) NOT NULL,
  `cepuser` char(9) NOT NULL,
  `addressuser` varchar(100) NOT NULL,
  `bairrouser` varchar(50) NOT NULL,
  `cidadeuser` varchar(40) NOT NULL,
  `numerouser` varchar(10) NOT NULL,
  `complementouser` varchar(30) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `idarquivo` int(11) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `idcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `idartigo` int(11) NOT NULL,
  `tituloartigo` varchar(256) NOT NULL,
  `artigo` text NOT NULL,
  `imgcapa` varchar(100) NOT NULL,
  `imgbanner` varchar(100) NOT NULL,
  `dataartigo` date NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`idartigo`, `tituloartigo`, `artigo`, `imgcapa`, `imgbanner`, `dataartigo`, `iduser`) VALUES
(1, 'Artigo 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla gravida turpis eget finibus tristique. Aliquam et urna eget lectus dignissim efficitur ut eu mi. Proin rhoncus dictum tellus in placerat. In non nibh in libero faucibus pellentesque. Proin ultrices erat sed volutpat porttitor. Donec et metus vel tellus volutpat pretium. Pellentesque eu quam id lorem faucibus porttitor. Pellentesque iaculis velit non quam semper pretium. In laoreet imperdiet luctus. Mauris orci tortor, rutrum id aliquam in, ullamcorper aliquam erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas efficitur enim sem. Pellentesque tellus tellus, feugiat non elementum vel, semper quis ante. In quis vehicula orci, eu tincidunt sapien.\r\n\r\n\r\nPellentesque condimentum erat ac velit hendrerit, non dapibus augue viverra. Donec ut pulvinar est. In hac habitasse platea dictumst. Donec varius, mauris eget egestas luctus, libero enim volutpat enim, sed finibus lorem erat eget arcu. Nunc porttitor id diam in porttitor. In tempor imperdiet sapien sed dignissim. Curabitur odio purus, pellentesque nec tellus nec, porttitor consequat nibh. Sed laoreet egestas ornare. Etiam pretium dui elit, nec mollis nibh lacinia at. Aenean varius leo at ornare porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pharetra risus. Vestibulum velit augue, pharetra id laoreet ut, cursus sed tortor. Duis nec enim ex.\r\n\r\n\r\nDuis vitae mauris fermentum, egestas dolor id, porta nibh. Nullam tellus diam, dictum et tellus vel, semper facilisis eros. Duis ut augue mauris. Sed augue nisl, egestas eu maximus a, tempor a erat. Ut id tincidunt eros. Proin tempor augue eget diam hendrerit viverra. Aliquam vel sem vel urna finibus bibendum id nec eros. Etiam in mattis turpis, a facilisis dui. Sed dapibus augue vitae scelerisque fringilla. Quisque fermentum leo et ipsum tempor facilisis. Maecenas at viverra eros. Praesent dapibus velit vel ultricies efficitur. Ut eget tellus nulla.\r\n\r\n\r\nIn porttitor a eros sed tristique. Aenean id quam scelerisque, aliquam sapien vel, interdum mi. Vivamus turpis dui, aliquet eu quam sit amet, lobortis finibus risus. Pellentesque ultricies auctor purus in dignissim. Phasellus non efficitur eros, ac tincidunt purus. Donec laoreet dolor a ante fermentum finibus. Nulla lacus dui, porta a nibh ac, ultrices blandit magna. Maecenas hendrerit quam et felis euismod, sed mollis nisl commodo. Nunc eu gravida tellus. Sed euismod justo at fringilla ornare. Suspendisse bibendum nec ante ac egestas. Aenean tristique efficitur orci nec iaculis. Phasellus tincidunt, lorem ut elementum ultricies, est risus rhoncus leo, et mattis nunc neque dignissim metus. Etiam tincidunt, est sit amet imperdiet sagittis, leo velit pellentesque turpis, non pellentesque odio arcu sed tellus. Phasellus luctus, tortor vitae accumsan imperdiet, arcu tortor dictum leo, vitae sagittis sapien magna quis diam. Pellentesque lobortis eleifend diam.\r\n\r\n\r\nSed interdum nisl vitae ultricies fringilla. Etiam tincidunt sem est, sed gravida massa hendrerit nec. Praesent egestas nisi euismod, tempor sem sed, scelerisque tortor. In sit amet nunc lacinia, ultrices libero tristique, tincidunt leo. Nam volutpat, urna ut malesuada dapibus, sapien urna bibendum risus, in congue arcu odio quis nulla. Morbi nec finibus orci. Nulla erat orci, porta nec congue vel, egestas in lorem.', 'assets/blog/capa/c4ca4238a0b923820dcc509a6f75849b.jpg', 'assets/blog/banner/c81e728d9d4c2f636f067f89cc14862c.jpg', '2022-07-19', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nomecontato` varchar(100) NOT NULL,
  `emailcontato` varchar(100) NOT NULL,
  `teluser` char(15) DEFAULT NULL,
  `msgcontato` text NOT NULL,
  `datacontato` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `nomecurso` varchar(60) NOT NULL,
  `desccurso` text NOT NULL,
  `valorcurso` varchar(10) NOT NULL,
  `duracao` varchar(30) NOT NULL,
  `instrutor` varchar(100) NOT NULL,
  `imgcurso` varchar(100) NOT NULL,
  `msgcurso` text NOT NULL,
  `statuscurso` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `nomecurso`, `desccurso`, `valorcurso`, `duracao`, `instrutor`, `imgcurso`, `msgcurso`, `statuscurso`) VALUES
(1, 'Curso Básico de Teologia', '<p><span style=\"color: rgb(0, 0, 0);\">O Curso B&aacute;sico de teologia &eacute; composto por 20 mat&eacute;rias curriculares, sendo elas bases fundamentais para o desenvolvimento do aluno ao decorrer do curso e para o exerc&iacute;cio de sua voca&ccedil;&atilde;o.</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">O curso cont&eacute;m as seguintes mat&eacute;rias:</span></p>\r\n<ul>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Escatologia I;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Heresiologia I;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Hermen&ecirc;utica;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Geografia b&iacute;blica I;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Hist&oacute;ria de Israel;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Historia dos avivamentos;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Elemento de m&uacute;sica na B&iacute;blia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Evangelismo e integra&ccedil;&atilde;o;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Eclesiologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Soteriologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Cristologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Bibliologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Angeologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Teologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Pneumatologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Antropologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Hamartiologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Missiologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Pentateuco;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Lideran&ccedil;a crist&atilde;</span></li>\r\n</ul>', '', '2 anos', 'Fabio Santos', 'assets/cursos/curso1.jpg', 'Olá, gostaria de saber mais sobre o Curso Básico de Teologia', '1'),
(2, 'Curso Médio de Teologia', '<p><span style=\"color: rgb(0, 0, 0);\">O Curso M&eacute;dio em Teologia tem como base as 20 mat&eacute;rias do Curso B&aacute;sico de Teologia, adicionando mais 10 mat&eacute;rias complementares, que somadas, s&atilde;o ao todo, 30 mat&eacute;rias.&nbsp;<strong>Se voc&ecirc; j&aacute; &eacute; aluno do <a href=\"curso.php?idCurso=1\" aria-invalid=\"true\">Curso B&aacute;sico de Teologia</a>, poder&aacute; continuar com o m&eacute;dio adicionando as 10 mat&eacute;rias complementares.</strong></span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">O curso cont&eacute;m as seguintes mat&eacute;rias:&nbsp;</span></p>\r\n<ul>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Escatologia I;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Heresiologia I;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Hermen&ecirc;utica;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Geografia b&iacute;blica I;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Hist&oacute;ria de Israel;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Historia dos avivamentos;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Elemento de m&uacute;sica na B&iacute;blia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Evangelismo e integra&ccedil;&atilde;o;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Eclesiologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Soteriologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Cristologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Bibliologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Angeologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Teologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Pneumatologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Antropologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Hamartiologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Missiologia;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Pentateuco;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Lideran&ccedil;a crist&atilde;;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Homil&eacute;tica;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Adm. eclesi&aacute;stica ;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Teologia pastoral;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Ed. Religiosa;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Geografia b&iacute;blica II;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Heresiologia II;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">&Eacute;tica crist&atilde;;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Historia eclesi&aacute;stica I;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Historia eclesi&aacute;stica II;</span></li>\r\n<li><span style=\"color: rgb(0, 0, 0);\">Escatologia II;</span></li>\r\n</ul>', '', '3 Anos', 'Fabio Santos', 'assets/cursos/curso2.jpg', 'Olá, gostaria de saber mais sobre o Curso Médio de Teologia', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dabar`
--

CREATE TABLE `dabar` (
  `id` int(11) NOT NULL,
  `sobre` text NOT NULL,
  `identidade` text NOT NULL,
  `requisitos` text NOT NULL,
  `sobreInstrutor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dabar`
--

INSERT INTO `dabar` (`id`, `sobre`, `identidade`, `requisitos`, `sobreInstrutor`) VALUES
(1, '<p>A escola teológica Dabar é sediada na Av. Deputado Castro de Carvalho, 1695, Vila Áurea, Poá – SP. Fone: 11 2891-8736/99318-2269.A mesma foi organizada em Janeiro de 2007, e as aulas tiveram inicio em 05/02/07. Sendo a primeira aula apenas inaugural, ou seja, uma apresentação formal da escola. Nesta apresentação foi notificada a sua identidade e as instituições de apoio que são: A Confradesb e a Universidade Corporativa Livre Átrios. Bem como o sistema de funcionamento da escola quanto ao corpo docente e discente.</p><p><br></p><p>A escola teológica Dabar hodiernamente é uma pessoa jurídica e usufrui de plena autonomia, ou seja, ela já não tem mais vinculo com as instituições acima referenciada.</p><p><br></p><p>A escola apesar de estar sediada em Poá, ela oferece o curso online, e o curso completo gravado em vídeos aulas com seus respectivos materiais. </p><p><br></p><p>O corpo docente da escola, hoje é formado apenas por um único professor que, é, a mesma pessoa que organizou e que preside a escola. Que é, o Fábio José dos Santos, o mesmo é responsável pelas ministrações das aulas tanto online quanto gravadas. </p><p><br></p><p>A escola oferece apenas os cursos básicos e médios de teologia. O curso básico é formado por 20 matérias, tendo uma aula por semana e duas horas de aulas. E o curso médio é formado por 30 matérias. Vale ressaltar que, o curso médio tem como base as 20 matérias do curso básico. As aulas online ocorrem nas segundas feiras das 20hs às 22hs.</p><p><br></p><p>O Centro Educacional de Teologia DABAR é de cunho Inter denominacional, que tem como meta, preparar pessoas para manusear bem a Palavra de Deus, no serviço do Reino de Deus e no exercício da sua vocação.</p>', '<ol>\n<li>O nome da escola &eacute;: ETD &ndash; Escola Teol&oacute;gica Dabar. Dabar &eacute; um termo que vem do hebraico e significa Palavra. Entretanto traz a ideia de Palavra vinda de Deus, indica palavra firmada ou a&ccedil;&atilde;o de Deus (Jr.2:1).</li>\n<li>A escola n&atilde;o tem reconhecimento do MEC. E n&atilde;o tem por algumas raz&otilde;es, veja- mos:<br>- 90% das escolas teol&oacute;gicas n&atilde;o tem reconhecimento;<br>- A finalidade da escola n&atilde;o &eacute; formar profissionais, e sim obreiros para a seara do Senhor. A forma&ccedil;&atilde;o oferecida &eacute; teol&oacute;gica, religiosa e eclesi&aacute;stica. E esses cursos n&atilde;o necessitam da autoriza&ccedil;&atilde;o ou reconhecimento do MEC. N&atilde;o s&atilde;o cursos t&eacute;cnicos ou de educa&ccedil;&atilde;o superior acad&ecirc;mica, para o aluno se tornar um profissional.</li>\n<li>A escola oferece apenas o curso b&aacute;sico e m&eacute;dio de teologia, ou seja, n&atilde;o oferece a gradua&ccedil;&atilde;o que &eacute; o bacharel.</li>\n<li>A escola teol&oacute;gica Dabar tem com meta dar uma s&oacute;lida forma&ccedil;&atilde;o teol&oacute;gica aos seus alunos, embora a princ&iacute;pio a n&iacute;vel b&aacute;sico e m&eacute;dio, conforme a natureza do curso. Sem olvidar que, a mesma n&atilde;o se deixar&aacute; ser influenciada pelo modernismo, liberalismo e relativismo quanto ao ensino e pr&aacute;tica da Palavra de Deus. A escola preservar&aacute; o ensino ortodoxo da Palavra de Deus.</li>\n</ol>', '<ol> <li><strong>Requisitos para admiss&atilde;o de alunos</strong><br>- As matriculas podem ser feitas no inicio de cada nova mat&eacute;ria, ou na corrente, desde que, a mesma n&atilde;o tenha ultrapassado 50% das aulas;<br>- Preencher a ficha de matricula com letra leg&iacute;vel;<br>- O aluno precisa pelo menos ter o prim&aacute;rio completo. Caso n&atilde;o tenha haver&aacute; uma entrevista com o presidente da escola, para uma poss&iacute;vel avalia&ccedil;&atilde;o do aluno;<br>- Uma foto 3x4;<br>- Pagar a matricula;<br>- Na transi&ccedil;&atilde;o de um aluno de uma escola para a escola teol&oacute;gica Dabar, as suas disciplinas ser&atilde;o aceitas mediante o hist&oacute;rico, desde que, as mesmas tenham correspond&ecirc;ncias e as cargas hor&aacute;rias ser&atilde;o avaliadas;<br>- Pagar mensalidade;</li> <li>Requisitos quanto ao corpo discente:<br>- 75% de frequ&ecirc;ncias nas aulas;<br>- A frequ&ecirc;ncia &eacute; adicionada como nota da prova;<br>- Cada aula perdida representar&aacute; 0,5 pontos;<br>- Faltas n&atilde;o justificadas n&atilde;o ser&atilde;o abonadas;<br>- A leitura do livro &eacute; adicionada com a nota da prova;<br>- As provas ser&atilde;o dadas ap&oacute;s a &uacute;ltima aula de cada mat&eacute;ria;<br>- Cada mat&eacute;ria ter&aacute; uma carga hor&aacute;ria de 10 horas, ou seja, ser&atilde;o cinco aulas para cada mat&eacute;ria, com duas horas de aulas e uma aula por semana;<br>- O material did&aacute;tico ser&aacute; indicado pela escola;<br>- No t&eacute;rmino do curso o aluno dever&aacute; fazer um prov&atilde;o resumindo todo o curso;<br>- O aluno no final do curso dever&aacute; comprovar que leu toda a B&iacute;blia como pr&eacute;-requisito para finalizar o curso.</li> </ol>', '<p><span style=\"color: rgb(0, 0, 0);\">Fabio Jos&eacute; dos Santos &eacute; Bacharel em Teologia pelo Semin&aacute;rio Teol&oacute;gico Batista Nacional, atualmente pastoreia a Primeira Igreja Batista em Jardim Paineira em Itaquaquecetuba &ndash; SP.</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\"><strong>Forma&ccedil;&atilde;o</strong></span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- Bacharel em Teologia &ndash; STBNET (Semin&aacute;rio Teol&oacute;gico Batista Nacional En&eacute;as Tognini).</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- Fez o mestrado em Teologia B&iacute;blica do Novo Testamento &ndash; STBNET (Semin&aacute;rio Teol&oacute;gico Batista Nacional En&eacute;as Tognini).</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- Licenciatura em Filosofia &ndash; Ph&ecirc;nix- Guarulhos &ndash; SP.</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- P&oacute;s-Gradua&ccedil;&atilde;o em Filosofia &ndash; UFSCAR &ndash; SP.</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- Licenciado em hist&oacute;ria. - Faculdade S&atilde;o Jos&eacute;&nbsp;</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- Licenciado em pedagogia &ndash; Educa Mais Brasil</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- P&oacute;s-gradua&ccedil;&atilde;o em educa&ccedil;&atilde;o especial &ndash; Faculdade S&atilde;o Lu&iacute;s</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">- Cursando p&oacute;s-gradua&ccedil;&atilde;o em tutoria de educa&ccedil;&atilde;o a dist&acirc;ncia &ndash; Educa Mais Brasil&nbsp;&nbsp;</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">Leciona as mat&eacute;rias do Curso B&aacute;sico e M&eacute;dio de Teologia oferecidos pelo Centro Educacional de Teologia DABAR.</span></p>\n<p><span style=\"color: rgb(0, 0, 0);\">Leciona as mat&eacute;rias de Filosofia, Sociologia, Hist&oacute;ria e &Eacute;tica e Cidadania organizacional na rede p&uacute;blica de educa&ccedil;&atilde;o.</span></p>\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `idmatricula` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idturma` int(11) NOT NULL,
  `vencimentoboleto` int(11) NOT NULL,
  `datamatricula` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `idturma` int(11) NOT NULL,
  `nometurma` varchar(30) NOT NULL,
  `statusturma` char(1) NOT NULL,
  `datacadturma` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nomeuser` varchar(100) NOT NULL,
  `emailuser` varchar(100) NOT NULL,
  `passuser` varchar(256) NOT NULL,
  `imguser` varchar(100) NOT NULL,
  `telfixouser` varchar(15) DEFAULT NULL,
  `celuseruser` varchar(15) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `sexouser` char(1) DEFAULT NULL,
  `estadocivil` varchar(20) DEFAULT NULL,
  `naturalidade` varchar(100) DEFAULT NULL,
  `nomepai` varchar(100) DEFAULT NULL,
  `nomemae` varchar(100) DEFAULT NULL,
  `documento` varchar(30) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `escolaridade` varchar(35) DEFAULT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `igreja` varchar(60) DEFAULT NULL,
  `pastor` varchar(100) DEFAULT NULL,
  `funcao` varchar(30) NOT NULL,
  `nucleo` varchar(40) DEFAULT NULL,
  `conversao` varchar(50) DEFAULT NULL,
  `datacad` date NOT NULL,
  `admin` char(1) NOT NULL,
  `catuser` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`iduser`, `nomeuser`, `emailuser`, `passuser`, `imguser`, `telfixouser`, `celuseruser`, `datanasc`, `sexouser`, `estadocivil`, `naturalidade`, `nomepai`, `nomemae`, `documento`, `cpf`, `escolaridade`, `profissao`, `igreja`, `pastor`, `funcao`, `nucleo`, `conversao`, `datacad`, `admin`, `catuser`) VALUES
(1, 'Paulo Daniel Nascimento da Palma', 'paulodaniel1360@gmail.com', '12345678', 'nezuko.jpg', NULL, '(11) 93054-6947', '2002-05-10', 'm', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2022-07-19', '1', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userrecoverypass`
--

CREATE TABLE `userrecoverypass` (
  `idrecovery` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `userip` varchar(45) NOT NULL,
  `dtrecovery` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `userrecoverypass`
--

INSERT INTO `userrecoverypass` (`idrecovery`, `iduser`, `userip`, `dtrecovery`, `dtregister`) VALUES
(2, 1, '::1', NULL, '2022-07-20 13:33:50'),
(3, 1, '::1', NULL, '2022-07-20 16:34:04'),
(4, 1, '::1', NULL, '2022-07-20 16:40:33'),
(5, 1, '::1', NULL, '2022-07-20 17:25:15'),
(6, 1, '::1', NULL, '2022-07-20 17:26:29'),
(7, 1, '::1', NULL, '2022-07-20 17:27:43'),
(8, 1, '::1', NULL, '2022-07-20 17:31:22'),
(9, 1, '::1', NULL, '2022-07-20 17:33:21'),
(10, 1, '::1', NULL, '2022-07-20 18:33:40'),
(11, 1, '::1', NULL, '2022-07-20 18:37:38');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `addresuser`
--
ALTER TABLE `addresuser`
  ADD PRIMARY KEY (`idaddress`),
  ADD KEY `iduser` (`iduser`);

--
-- Índices para tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`idarquivo`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Índices para tabela `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`idartigo`),
  ADD KEY `iduser` (`iduser`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Índices para tabela `dabar`
--
ALTER TABLE `dabar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idmatricula`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idcurso` (`idcurso`),
  ADD KEY `idturma` (`idturma`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Índices para tabela `userrecoverypass`
--
ALTER TABLE `userrecoverypass`
  ADD PRIMARY KEY (`idrecovery`),
  ADD KEY `iduser` (`iduser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `idarquivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `artigo`
--
ALTER TABLE `artigo`
  MODIFY `idartigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `dabar`
--
ALTER TABLE `dabar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `idmatricula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `userrecoverypass`
--
ALTER TABLE `userrecoverypass`
  MODIFY `idrecovery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `addresuser`
--
ALTER TABLE `addresuser`
  ADD CONSTRAINT `addresuser_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Limitadores para a tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD CONSTRAINT `arquivo_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`);

--
-- Limitadores para a tabela `artigo`
--
ALTER TABLE `artigo`
  ADD CONSTRAINT `artigo_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`),
  ADD CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`idturma`) REFERENCES `turma` (`idturma`);

--
-- Limitadores para a tabela `userrecoverypass`
--
ALTER TABLE `userrecoverypass`
  ADD CONSTRAINT `userrecoverypass_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
