-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 10.129.76.12
-- Tempo de geração: 20/02/2018 às 03:26
-- Versão do servidor: 5.6.26-log
-- Versão do PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `cygna`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE IF NOT EXISTS `agendamento` (
`id_agendamento` int(11) NOT NULL,
  `obs_agendamento` varchar(255) DEFAULT NULL,
  `profissional` varchar(255) DEFAULT NULL,
  `data_agendamento` date DEFAULT NULL,
  `hora_agendamento` time DEFAULT NULL,
  `situacao` varchar(100) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `reposicao` varchar(3) DEFAULT NULL,
  `id_especialidade` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`categoriaID` int(3) NOT NULL,
  `nomecategoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`categoriaID`, `nomecategoria`) VALUES
(1, 'Coffee'),
(2, 'Food'),
(3, 'Merchandise'),
(4, 'Clothing');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('5mf282dshu8kuj1k00hmidemi1l41h2c', '177.41.128.166', 1519096875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531393039363735383b757365726c6f6761646f7c4f3a383a22737464436c617373223a373a7b733a31353a2269645f70726f66697373696f6e616c223b733a323a223133223b733a31373a226e6f6d655f70726f66697373696f6e616c223b733a31383a22526567697320506169766120417261756a6f223b733a31363a226370665f70726f66697373696f6e616c223b733a31343a223838302e3133322e3630312d3738223b733a353a22656d61696c223b733a32323a22726567697370617261756a6f40676d61696c2e636f6d223b733a373a227573756172696f223b733a353a227265676973223b733a353a2273656e6861223b733a363a22313032303330223b733a363a22696d6167656d223b4e3b7d6c6f6761646f7c623a313b),
('erk1ld52il8ufmkpr8i7u35i2pi4vars', '177.41.128.166', 1519096667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531393039363338333b757365726c6f6761646f7c4f3a383a22737464436c617373223a373a7b733a31353a2269645f70726f66697373696f6e616c223b733a323a223133223b733a31373a226e6f6d655f70726f66697373696f6e616c223b733a31383a22526567697320506169766120417261756a6f223b733a31363a226370665f70726f66697373696f6e616c223b733a31343a223838302e3133322e3630312d3738223b733a353a22656d61696c223b733a32323a22726567697370617261756a6f40676d61696c2e636f6d223b733a373a227573756172696f223b733a353a227265676973223b733a353a2273656e6861223b733a363a22313032303330223b733a363a22696d6167656d223b4e3b7d6c6f6761646f7c623a313b);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `cpf_cliente` varchar(14) DEFAULT NULL,
  `dt_nascimento` varchar(10) DEFAULT NULL,
  `idade` varchar(5) DEFAULT NULL,
  `id_sexo` int(11) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefoneres` varchar(45) DEFAULT NULL,
  `telefonecom` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `profissao` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Fazendo dump de dados para tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `cpf_cliente`, `dt_nascimento`, `idade`, `id_sexo`, `endereco`, `cidade`, `id_estado`, `cep`, `telefoneres`, `telefonecom`, `celular`, `profissao`, `email`) VALUES
(17, 'Regis Paiva Araujo', '880.132.601-78', '28/09/1980', '37', 1, 'QUADRA QNM 34 CONJUNTO D', 'TAGUATINGA', 7, '72145-404', '(61) 3536-4558', '(61) 3536-4558', '(61) 9 8756-5871', 'Servidor público', 'regisparaujo@gmail.com'),
(21, 'Anna Paula Arantes', '994.929.381-20', '29/08/1984', '33', 2, 'Quadra QNM 34 conjunto D casa 44', 'TAGUATINGA', 7, '72145-404', '(61) 3536-4558', '(61) 3265-9800', '(61) 9 8166-2184', 'Servidora pública', 'anna.aquino@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `como_conheceu_cygna`
--

CREATE TABLE IF NOT EXISTS `como_conheceu_cygna` (
`id_como_conheceu_cygna` int(11) NOT NULL,
  `descricao_como_conheceu_cygna` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `especialidade`
--

CREATE TABLE IF NOT EXISTS `especialidade` (
`id_especialidade` int(11) NOT NULL,
  `descricao_especialidade` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `especialidade`
--

INSERT INTO `especialidade` (`id_especialidade`, `descricao_especialidade`) VALUES
(1, 'Nutrição'),
(2, 'Clínica médica'),
(3, 'Endocrinologia'),
(4, 'Dermatologista');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
`id_estado` int(11) NOT NULL,
  `estados` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Fazendo dump de dados para tabela `estados`
--

INSERT INTO `estados` (`id_estado`, `estados`) VALUES
(1, 'AC'),
(2, 'AL'),
(3, 'AP'),
(4, 'AM'),
(5, 'BA'),
(6, 'CE'),
(7, 'DF'),
(8, 'ES'),
(9, 'GO'),
(10, 'MA'),
(11, 'MT'),
(12, 'MS'),
(13, 'MG'),
(14, 'PA'),
(15, 'PB'),
(16, 'PR'),
(17, 'PE'),
(18, 'PI'),
(19, 'RJ'),
(20, 'RN'),
(21, 'RS'),
(22, 'RO'),
(23, 'RR'),
(24, 'SC'),
(25, 'SP'),
(26, 'SE'),
(27, 'TO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_anamnese`
--

CREATE TABLE IF NOT EXISTS `ficha_anamnese` (
`id_ficha_anamnese` int(11) NOT NULL,
  `data_inclusao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tratamento_estetico` varchar(45) DEFAULT NULL,
  `tratamento_estetico_qual` varchar(45) DEFAULT NULL,
  `lentes_contato` varchar(45) DEFAULT NULL,
  `utiliza_cosmetico` varchar(45) DEFAULT NULL,
  `utiliza_cosmetico_qual` varchar(45) DEFAULT NULL,
  `exposicao_sol` varchar(45) DEFAULT NULL,
  `exposicao_sol_frequencia` varchar(45) DEFAULT NULL,
  `usa_protetor_solar` varchar(45) DEFAULT NULL,
  `usa_protetor_solar_qual` varchar(45) DEFAULT NULL,
  `tabagismo` varchar(45) DEFAULT NULL,
  `quantidade_cigarros_dia` varchar(45) DEFAULT NULL,
  `ingere_bebida_alcoolica` varchar(45) DEFAULT NULL,
  `ingere_bebida_alcoolica_frequencia` varchar(45) DEFAULT NULL,
  `id_qt_vezes` int(11) DEFAULT NULL,
  `qualidade_sono` varchar(45) DEFAULT NULL,
  `quantas_horas_sono_noite` varchar(45) DEFAULT NULL,
  `atividade_fisica` varchar(45) DEFAULT NULL,
  `atividade_fisica_tipo` varchar(45) DEFAULT NULL,
  `atividade_fisica_frequencia` varchar(45) DEFAULT NULL,
  `anticoncepcional` varchar(45) DEFAULT NULL,
  `anticoncepcional_qual` varchar(45) DEFAULT NULL,
  `data_primeira_menstruacao` varchar(45) DEFAULT NULL,
  `data_ultima_menstruacao` varchar(45) DEFAULT NULL,
  `gestacoes` varchar(45) DEFAULT NULL,
  `gestacoes_quantas` varchar(45) DEFAULT NULL,
  `gestacoes_ha_quanto_tempo` varchar(45) DEFAULT NULL,
  `lactante` varchar(45) DEFAULT NULL,
  `observacoes_habitos` varchar(255) DEFAULT NULL,
  `principais_queixas` longtext,
  `tratamento_medico_atual` varchar(45) DEFAULT NULL,
  `medicamentos_em_uso` varchar(45) DEFAULT NULL,
  `herpes` varchar(45) DEFAULT NULL,
  `alergia` varchar(45) DEFAULT NULL,
  `alergia_qual` varchar(45) DEFAULT NULL,
  `queloides` varchar(45) DEFAULT NULL,
  `doenca_cardiaca` varchar(45) DEFAULT NULL,
  `doencas_cardiacas_quais` varchar(45) DEFAULT NULL,
  `marca_passo` varchar(45) DEFAULT NULL,
  `hipo_hipertensao_arterial` varchar(45) DEFAULT NULL,
  `trombose` varchar(45) DEFAULT NULL,
  `trombose_qual` varchar(45) DEFAULT NULL,
  `usa_anticoagulante` varchar(45) DEFAULT NULL,
  `usa_anticoagulante_qual` varchar(45) DEFAULT NULL,
  `doenca_auto_imune` varchar(45) DEFAULT NULL,
  `doenca_auto_imune_qual` varchar(45) DEFAULT NULL,
  `disturbio_renal` varchar(45) DEFAULT NULL,
  `disturbio_renal_qual` varchar(45) DEFAULT NULL,
  `disturbio_hormonal` varchar(45) DEFAULT NULL,
  `disturbio_hormonal_qual` varchar(45) DEFAULT NULL,
  `ciclo_menstrual_regular` varchar(45) DEFAULT NULL,
  `disturbio_gastrointestinal` varchar(45) DEFAULT NULL,
  `disturbio_gastrointestinal_qual` varchar(45) DEFAULT NULL,
  `disturbio_pulmonar_respiratorio` varchar(45) DEFAULT NULL,
  `disturbio_pulmonar_respiratorio_qual` varchar(45) DEFAULT NULL,
  `disturbio_hepatico` varchar(45) DEFAULT NULL,
  `disturbio_hepatico_qual` varchar(45) DEFAULT NULL,
  `epilepsia_convulsoes` varchar(45) DEFAULT NULL,
  `epilepsia_convulsoes_frequencia` varchar(45) DEFAULT NULL,
  `alteracao_psicologica_psiquiatrica` varchar(45) DEFAULT NULL,
  `alteracao_psicologica_psiquiatrica_qual` varchar(45) DEFAULT NULL,
  `tem_ou_ja_teve_cancer` varchar(45) DEFAULT NULL,
  `tem_ou_ja_teve_cancer_quando` varchar(45) DEFAULT NULL,
  `diabetes` varchar(45) DEFAULT NULL,
  `diabetes_tipo` varchar(45) DEFAULT NULL,
  `doenca_familia` varchar(45) DEFAULT NULL,
  `doenca_familia_qual` varchar(45) DEFAULT NULL,
  `implante_dentario` varchar(45) DEFAULT NULL,
  `implante_dentario_qual` varchar(45) DEFAULT NULL,
  `implante_metalico` varchar(45) DEFAULT NULL,
  `implante_metalico_qual` varchar(45) DEFAULT NULL,
  `intrauterino` varchar(45) DEFAULT NULL,
  `intrauterino_qual` varchar(45) DEFAULT NULL,
  `tratamento_dermatologico_estetico_anterior` varchar(45) DEFAULT NULL,
  `tratamento_dermatologico_estetico_anterior_qual` varchar(45) DEFAULT NULL,
  `uso_acido_peeling` varchar(45) DEFAULT NULL,
  `uso_acido_peeling_quando` varchar(45) DEFAULT NULL,
  `uso_acido_peeling_qual` varchar(45) DEFAULT NULL,
  `cirurgia_plastica_estetica` varchar(45) DEFAULT NULL,
  `cirurgia_plastica_estetica_qual` varchar(45) DEFAULT NULL,
  `observacoes_tratamento` varchar(255) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_profissional` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Fazendo dump de dados para tabela `ficha_anamnese`
--

INSERT INTO `ficha_anamnese` (`id_ficha_anamnese`, `data_inclusao`, `tratamento_estetico`, `tratamento_estetico_qual`, `lentes_contato`, `utiliza_cosmetico`, `utiliza_cosmetico_qual`, `exposicao_sol`, `exposicao_sol_frequencia`, `usa_protetor_solar`, `usa_protetor_solar_qual`, `tabagismo`, `quantidade_cigarros_dia`, `ingere_bebida_alcoolica`, `ingere_bebida_alcoolica_frequencia`, `id_qt_vezes`, `qualidade_sono`, `quantas_horas_sono_noite`, `atividade_fisica`, `atividade_fisica_tipo`, `atividade_fisica_frequencia`, `anticoncepcional`, `anticoncepcional_qual`, `data_primeira_menstruacao`, `data_ultima_menstruacao`, `gestacoes`, `gestacoes_quantas`, `gestacoes_ha_quanto_tempo`, `lactante`, `observacoes_habitos`, `principais_queixas`, `tratamento_medico_atual`, `medicamentos_em_uso`, `herpes`, `alergia`, `alergia_qual`, `queloides`, `doenca_cardiaca`, `doencas_cardiacas_quais`, `marca_passo`, `hipo_hipertensao_arterial`, `trombose`, `trombose_qual`, `usa_anticoagulante`, `usa_anticoagulante_qual`, `doenca_auto_imune`, `doenca_auto_imune_qual`, `disturbio_renal`, `disturbio_renal_qual`, `disturbio_hormonal`, `disturbio_hormonal_qual`, `ciclo_menstrual_regular`, `disturbio_gastrointestinal`, `disturbio_gastrointestinal_qual`, `disturbio_pulmonar_respiratorio`, `disturbio_pulmonar_respiratorio_qual`, `disturbio_hepatico`, `disturbio_hepatico_qual`, `epilepsia_convulsoes`, `epilepsia_convulsoes_frequencia`, `alteracao_psicologica_psiquiatrica`, `alteracao_psicologica_psiquiatrica_qual`, `tem_ou_ja_teve_cancer`, `tem_ou_ja_teve_cancer_quando`, `diabetes`, `diabetes_tipo`, `doenca_familia`, `doenca_familia_qual`, `implante_dentario`, `implante_dentario_qual`, `implante_metalico`, `implante_metalico_qual`, `intrauterino`, `intrauterino_qual`, `tratamento_dermatologico_estetico_anterior`, `tratamento_dermatologico_estetico_anterior_qual`, `uso_acido_peeling`, `uso_acido_peeling_quando`, `uso_acido_peeling_qual`, `cirurgia_plastica_estetica`, `cirurgia_plastica_estetica_qual`, `observacoes_tratamento`, `id_cliente`, `id_profissional`) VALUES
(11, '2018-01-31 02:57:06', 'Sim', 'limpeza de pele, peelling/ depilação a laser', 'Não', 'Não', '', 'Sim', NULL, 'Sim', 'episol com base FTS 60', 'Não', NULL, 'Não', '', 1, 'Regular', '6 horas', 'Sim', 'aerohit', '3x por semana', 'Não', '', '13/07/1999', '10/01/2018', 'Sim', '2', '2 anos', 'Não', 'nenhuma observação', ' nenhuma queixa                                               ', 'Não', '', 'Não', 'Não', '', 'Não', 'Não', NULL, 'Não', 'Não', 'Não', '', 'Não', '', 'Não', '', 'Não', '', 'Não', '', 'Não', 'Não', '', 'Não', '', NULL, '', 'Não', '', 'Não', '', 'Não', '', 'Não', '', 'Não', '                                             ', 'Não', '', 'Não', '', 'Não', '', 'Não', '', 'Sim', 'atuamente', 'não sei descrever', 'Sim', 'prótese mamária', 'nenhuma observação                                        ', 21, 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_avaliacao_capilar`
--

CREATE TABLE IF NOT EXISTS `ficha_avaliacao_capilar` (
`id_ficha_avaliacao_capilar` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `algum_tratamento_capilar_estetico_anterior` varchar(45) DEFAULT NULL,
  `algum_tratamento_capilar_estetico_anterior_qual` varchar(45) DEFAULT NULL,
  ` algum_medicamento_calvicie_queda_cabelo` varchar(45) DEFAULT NULL,
  ` algum_medicamento_calvicie_queda_cabelo_qual` varchar(45) DEFAULT NULL,
  `uso_tintura_produto_quimico` varchar(45) DEFAULT NULL,
  `uso_tintura_produto_quimico_qual` varchar(45) DEFAULT NULL,
  `frequencia_lava_cabelo` varchar(45) DEFAULT NULL,
  `uso_agua_muito_quente_lavar_cabelos` varchar(45) DEFAULT NULL,
  `alergia_coceira_ardencia_couro_cabeludo` varchar(45) DEFAULT NULL,
  `dermatite_seborreica` varchar(45) DEFAULT NULL,
  `historico_calvicie_família` varchar(45) DEFAULT NULL,
  `alguma_lesao_couro_cabeludo` varchar(45) DEFAULT NULL,
  `psoriase` varchar(45) DEFAULT NULL,
  `alopecia` varchar(45) DEFAULT NULL,
  `uso_ cosmeticos_cabelo` varchar(45) DEFAULT NULL,
  `uso_ cosmeticos_cabelo_qual` varchar(45) DEFAULT NULL,
  `aspecto_cabelo` varchar(45) DEFAULT NULL,
  `aspecto_couro_cabeludo` varchar(45) DEFAULT NULL,
  `observacoes` varchar(45) DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL,
  `ficha_avaliacao_capilarcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_avaliacao_corporal`
--

CREATE TABLE IF NOT EXISTS `ficha_avaliacao_corporal` (
`id_ficha_avaliacao_corporal` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  `data_inclusao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tratamento_corporal_anterior` varchar(45) DEFAULT NULL,
  `tratamento_corporal_anterior_quais` varchar(255) DEFAULT NULL,
  `resultado_skinup` varchar(45) DEFAULT NULL,
  `oleosidade_colo` varchar(45) DEFAULT NULL,
  `oleosidade_braco` varchar(45) DEFAULT NULL,
  `oleosidade_coxa` varchar(45) DEFAULT NULL,
  `umidade_colo` varchar(45) DEFAULT NULL,
  `umidade_braco` varchar(45) DEFAULT NULL,
  `umidade_coxa` varchar(45) DEFAULT NULL,
  `elasticidade_colo` varchar(45) DEFAULT NULL,
  `elasticidade_braco` varchar(45) DEFAULT NULL,
  `elasticidade_coxa` varchar(45) DEFAULT NULL,
  `estado_cutaneo` varchar(45) DEFAULT NULL,
  `textura` varchar(45) DEFAULT NULL,
  `lesoes_pele` varchar(45) DEFAULT NULL,
  `lesoes_pele_outro` varchar(45) DEFAULT NULL,
  `cicatriz` varchar(45) DEFAULT NULL,
  `cicatriz_localizacao` varchar(45) DEFAULT NULL,
  `tipo_hldg` varchar(45) DEFAULT NULL,
  `grau_hldg` varchar(45) DEFAULT NULL,
  `hldg_celluvision_estagio` varchar(45) DEFAULT NULL,
  `local_hldg` varchar(255) DEFAULT NULL,
  `coloracao_hldg` varchar(255) DEFAULT NULL,
  `temperatura_hldg` varchar(45) DEFAULT NULL,
  `presenca_dor_palpacao` varchar(45) DEFAULT NULL,
  `observacoes_hldg` varchar(255) DEFAULT NULL,
  `edema_teste_cacifo` varchar(45) DEFAULT NULL,
  `sensacao_peso_cansaco_mmii` varchar(255) DEFAULT NULL,
  `observacoes_edema` longtext,
  `lipodistrofia_gordura` varchar(45) DEFAULT NULL,
  `lipodistrofia_distribuicao_gordura` varchar(45) DEFAULT NULL,
  `lipodistrofia_localizacao` varchar(45) DEFAULT NULL,
  `observacoes_lipodistrofia` longtext,
  `flacidez_tissular` varchar(45) DEFAULT NULL,
  `flacidez_tissular_localizacao` varchar(45) DEFAULT NULL,
  `flacidez_muscular` varchar(45) DEFAULT NULL,
  `flacidez_muscular_localizacao` varchar(45) DEFAULT NULL,
  `estria_cor` varchar(45) DEFAULT NULL,
  `estria_largura` varchar(45) DEFAULT NULL,
  `estria_tipo` varchar(45) DEFAULT NULL,
  `estria_regiao` varchar(255) DEFAULT NULL,
  `microvasos_tipo` varchar(45) DEFAULT NULL,
  `doenca_controlada_diabeticos` varchar(45) DEFAULT NULL,
  `microvasos_historico_familiar` varchar(45) DEFAULT NULL,
  `febre_recentemente` varchar(45) DEFAULT NULL,
  `febre_recentemente_quando` varchar(45) DEFAULT NULL,
  `tempo_pe_sentado` varchar(45) DEFAULT NULL,
  `tempo_pe_sentado_frequencia` varchar(45) DEFAULT NULL,
  `pratica_exercicios_atividades_alto_impacto` varchar(45) DEFAULT NULL,
  `sobrepeso` varchar(45) DEFAULT NULL,
  `obesidade` varchar(45) DEFAULT NULL,
  `proximo_fontes_calor` varchar(45) DEFAULT NULL,
  `alteracao_postural_ombros` varchar(45) DEFAULT NULL,
  `alteracao_postural_coluna` varchar(45) DEFAULT NULL,
  `hernia_pontos_dor` varchar(45) DEFAULT NULL,
  `hernia_pontos_dor_onde` varchar(255) DEFAULT NULL,
  `observacoes_alteracao_postural` varchar(255) DEFAULT NULL,
  `antropometria_biotipo` varchar(45) DEFAULT NULL,
  `estatura` varchar(45) DEFAULT NULL,
  `peso_atual` varchar(45) DEFAULT NULL,
  `imc` varchar(45) DEFAULT NULL,
  `peso_desejado` varchar(45) DEFAULT NULL,
  `classificacao` varchar(45) DEFAULT NULL,
  `observacoes_antropometria` varchar(255) DEFAULT NULL,
  `pgc` varchar(45) DEFAULT NULL,
  `massa_magra` varchar(45) DEFAULT NULL,
  `peso_massa_gordura` varchar(45) DEFAULT NULL,
  `percentual_agua_corporal` varchar(45) DEFAULT NULL,
  `relacao_cintura_quadril` varchar(45) DEFAULT NULL,
  `observacoes_gerais` longtext,
  `tratamento_proposto` longtext,
  `observacoes_tratamento` longtext,
  `tmb` varchar(45) DEFAULT NULL,
  `braco_d` float DEFAULT NULL,
  `braco_e` float DEFAULT NULL,
  `abd_superior` float DEFAULT NULL,
  `cintura` float DEFAULT NULL,
  `abd_inferior` float DEFAULT NULL,
  `quadril` float DEFAULT NULL,
  `coxa_sup_d` float DEFAULT NULL,
  `coxa_sup_e` float DEFAULT NULL,
  `coxa_inf_d` float DEFAULT NULL,
  `coxa_inf_e` float DEFAULT NULL,
  `ombro` float DEFAULT NULL,
  `panturrilha` float DEFAULT NULL,
  `coxa_m` float DEFAULT NULL,
  `triceps_biceps` float DEFAULT NULL,
  `peitoral` float DEFAULT NULL,
  `subs_axilar_media` float DEFAULT NULL,
  `abd_vertical` float DEFAULT NULL,
  `abd_horizontal` float DEFAULT NULL,
  `supra_iliaca` float DEFAULT NULL,
  `paturrilha_pregas` float DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `ficha_avaliacao_corporal`
--

INSERT INTO `ficha_avaliacao_corporal` (`id_ficha_avaliacao_corporal`, `id_cliente`, `id_profissional`, `data_inclusao`, `tratamento_corporal_anterior`, `tratamento_corporal_anterior_quais`, `resultado_skinup`, `oleosidade_colo`, `oleosidade_braco`, `oleosidade_coxa`, `umidade_colo`, `umidade_braco`, `umidade_coxa`, `elasticidade_colo`, `elasticidade_braco`, `elasticidade_coxa`, `estado_cutaneo`, `textura`, `lesoes_pele`, `lesoes_pele_outro`, `cicatriz`, `cicatriz_localizacao`, `tipo_hldg`, `grau_hldg`, `hldg_celluvision_estagio`, `local_hldg`, `coloracao_hldg`, `temperatura_hldg`, `presenca_dor_palpacao`, `observacoes_hldg`, `edema_teste_cacifo`, `sensacao_peso_cansaco_mmii`, `observacoes_edema`, `lipodistrofia_gordura`, `lipodistrofia_distribuicao_gordura`, `lipodistrofia_localizacao`, `observacoes_lipodistrofia`, `flacidez_tissular`, `flacidez_tissular_localizacao`, `flacidez_muscular`, `flacidez_muscular_localizacao`, `estria_cor`, `estria_largura`, `estria_tipo`, `estria_regiao`, `microvasos_tipo`, `doenca_controlada_diabeticos`, `microvasos_historico_familiar`, `febre_recentemente`, `febre_recentemente_quando`, `tempo_pe_sentado`, `tempo_pe_sentado_frequencia`, `pratica_exercicios_atividades_alto_impacto`, `sobrepeso`, `obesidade`, `proximo_fontes_calor`, `alteracao_postural_ombros`, `alteracao_postural_coluna`, `hernia_pontos_dor`, `hernia_pontos_dor_onde`, `observacoes_alteracao_postural`, `antropometria_biotipo`, `estatura`, `peso_atual`, `imc`, `peso_desejado`, `classificacao`, `observacoes_antropometria`, `pgc`, `massa_magra`, `peso_massa_gordura`, `percentual_agua_corporal`, `relacao_cintura_quadril`, `observacoes_gerais`, `tratamento_proposto`, `observacoes_tratamento`, `tmb`, `braco_d`, `braco_e`, `abd_superior`, `cintura`, `abd_inferior`, `quadril`, `coxa_sup_d`, `coxa_sup_e`, `coxa_inf_d`, `coxa_inf_e`, `ombro`, `panturrilha`, `coxa_m`, `triceps_biceps`, `peitoral`, `subs_axilar_media`, `abd_vertical`, `abd_horizontal`, `supra_iliaca`, `paturrilha_pregas`) VALUES
(1, 21, 13, '2018-02-08 21:17:24', 'Não', 'teste', 'Desequilíbrio acentuado', '29', '30', '31', '29', '30', '31', '29', '30', '31', 'limpo', 'áspera', 'pápula', 'varizes', 'Hipertrófica', 'perna', 'Edematosa', 'I', '1º', 'pescoço', 'parda', 'Fria', 'Não', 'nenhuma específica', 'Positivo', '10', 'nenhuma', 'Compacta', 'Localizada', 'perna', 'nenhuma', '+ leve', 'coxa', '+ leve', 'barriga', 'Alba', 'Fina', 'Atrófica', 'perna', 'Primárias', 'Sim', 'Sim', 'Sim', '2 meses', 'Sim', 'Trabalho', 'Não', 'Sim', 'Não', 'Não', 'Anteriorização', ' Escoliose em C', 'Não', '', 'Nenhuma', 'Ginóide', '170', '82', '24', '68', 'Entre 18,5 e 24,9 - Peso normal', 'nenhuma', '18', '47', '35', '61', '2', 'nenhuma', 'ainda em análise', 'nenhuma', '12', 32, 32, 90, 100, 88, 102, 72, 71, 68, 69, 120, 50, 25, 58, 100, 52, 90, 102, 58, 56),
(2, 21, 13, '2018-02-08 23:30:47', 'Não', 'teste', 'Desequilíbrio acentuado', '29', '30', '31', '29', '30', '31', '29', '30', '31', 'Sensibilizado', NULL, NULL, 'teste', 'Queloideana', 'perna', 'Edematosa', 'III', '3º', 'perna', 'parda', 'Quente', 'Não', NULL, 'Negativo', 'nenhuma', 'nenhuma', 'Flácida', 'Generalizada', 'braço', NULL, '+++ Intenso', 'barriga', '++ moderado', NULL, ' Rubra/violácea', 'Fina', 'Atrófica', 'perna', NULL, 'Não', 'Não', 'Sim', '', 'trabalho', NULL, 'Não', 'Sim', 'Não', 'Não', 'Anteriorização', 'Hipercifose', 'Não', '', 'nenhuma', 'Longilíneo', '175', '80', '24', '72', 'Entre 18,5 e 24,9 - Peso normal', 'nenhuma', '19', '25', '40', '61', '14', 'nenhuma', 'nenhuma', 'nenhuma', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_avaliacao_facial`
--

CREATE TABLE IF NOT EXISTS `ficha_avaliacao_facial` (
`id_ficha_avaliacao_facial` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `resultado_skinup` varchar(45) DEFAULT NULL,
  `oleosidade_testa` varchar(45) DEFAULT NULL,
  `oleosidade_bochecha` varchar(45) DEFAULT NULL,
  `oleosidade_queixo` varchar(45) DEFAULT NULL,
  `umidade_testa` varchar(45) DEFAULT NULL,
  `umidade_bochecha` varchar(45) DEFAULT NULL,
  `umidade_queixo` varchar(45) DEFAULT NULL,
  `elasticidade_testa` varchar(45) DEFAULT NULL,
  `elasticidade_bochecha` varchar(45) DEFAULT NULL,
  `elasticidade_queixo` varchar(45) DEFAULT NULL,
  `biotipo_cutaneo` varchar(45) DEFAULT NULL,
  `estado_cutaneo` varchar(45) DEFAULT NULL,
  `textura` varchar(45) DEFAULT NULL,
  `espessura` varchar(45) DEFAULT NULL,
  `ostios` varchar(45) DEFAULT NULL,
  `acne` varchar(45) DEFAULT NULL,
  `involucao_cutanea` varchar(45) DEFAULT NULL,
  `tipo_rugas` varchar(45) DEFAULT NULL,
  `locais_rugas` varchar(255) DEFAULT NULL,
  `fototipo_cutaneo_fitzpatrick` varchar(45) DEFAULT NULL,
  `melaninas` varchar(45) DEFAULT NULL,
  `melaninas_outros` varchar(45) DEFAULT NULL,
  `alteracoes_vasculares` varchar(45) DEFAULT NULL,
  `alteracoes_vasculares_outros` varchar(45) DEFAULT NULL,
  `lesoes_pele` varchar(45) DEFAULT NULL,
  `lesoes_pele_outros` varchar(45) DEFAULT NULL,
  `cicatriz` varchar(45) DEFAULT NULL,
  `pelos` varchar(45) DEFAULT NULL,
  `olheiras` varchar(45) DEFAULT NULL,
  `observacoes` longtext,
  `tratamento_proposto` longtext,
  `observacoes_tratamento_proposto` longtext,
  `data` timestamp NULL DEFAULT NULL,
  `ficha_avaliacao_facialcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_recordatorio_alimentar`
--

CREATE TABLE IF NOT EXISTS `ficha_recordatorio_alimentar` (
`id_ficha_recordatorio_alimentar` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `data` timestamp NULL DEFAULT NULL,
  `desjejum` longtext,
  `colacao` longtext,
  `almoco` longtext,
  `lanche` longtext,
  `janta` longtext,
  `ceia` longtext,
  `consumo_liquido` longtext,
  `observacoes` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `profissional`
--

CREATE TABLE IF NOT EXISTS `profissional` (
`id_profissional` int(11) NOT NULL,
  `nome_profissional` varchar(255) NOT NULL,
  `cpf_profissional` varchar(14) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(12) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Fazendo dump de dados para tabela `profissional`
--

INSERT INTO `profissional` (`id_profissional`, `nome_profissional`, `cpf_profissional`, `email`, `usuario`, `senha`, `imagem`) VALUES
(6, 'Marcia Correa', '385.385.381-00', 'marcia.correasilva@icloud.com', 'marcia', '102030cygna', NULL),
(13, 'Regis Paiva Araujo', '880.132.601-78', 'regisparaujo@gmail.com', 'regis', '102030', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `quantas_vezes`
--

CREATE TABLE IF NOT EXISTS `quantas_vezes` (
  `id_qt_vezes` int(11) NOT NULL,
  `descricao_quantidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `quantas_vezes`
--

INSERT INTO `quantas_vezes` (`id_qt_vezes`, `descricao_quantidade`) VALUES
(1, '1-2 vezes / semana'),
(2, '3-4 vezes / semana'),
(3, '1-2 vezes / dia'),
(4, 'mais de 3 vezes / dia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
`id_sexo` int(11) NOT NULL,
  `descricao_sexo` varchar(12) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Fazendo dump de dados para tabela `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `descricao_sexo`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
 ADD PRIMARY KEY (`id_agendamento`), ADD KEY `fk_id_cliente_idx` (`id_cliente`), ADD KEY `fk_id_profissional_idx` (`profissional`), ADD KEY `fk_profissional_idx` (`profissional`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`categoriaID`);

--
-- Índices de tabela `ci_session`
--
ALTER TABLE `ci_session`
 ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `como_conheceu_cygna`
--
ALTER TABLE `como_conheceu_cygna`
 ADD PRIMARY KEY (`id_como_conheceu_cygna`);

--
-- Índices de tabela `especialidade`
--
ALTER TABLE `especialidade`
 ADD PRIMARY KEY (`id_especialidade`);

--
-- Índices de tabela `estados`
--
ALTER TABLE `estados`
 ADD PRIMARY KEY (`id_estado`);

--
-- Índices de tabela `ficha_anamnese`
--
ALTER TABLE `ficha_anamnese`
 ADD PRIMARY KEY (`id_ficha_anamnese`);

--
-- Índices de tabela `ficha_avaliacao_capilar`
--
ALTER TABLE `ficha_avaliacao_capilar`
 ADD PRIMARY KEY (`id_ficha_avaliacao_capilar`);

--
-- Índices de tabela `ficha_avaliacao_corporal`
--
ALTER TABLE `ficha_avaliacao_corporal`
 ADD PRIMARY KEY (`id_ficha_avaliacao_corporal`);

--
-- Índices de tabela `ficha_avaliacao_facial`
--
ALTER TABLE `ficha_avaliacao_facial`
 ADD PRIMARY KEY (`id_ficha_avaliacao_facial`);

--
-- Índices de tabela `ficha_recordatorio_alimentar`
--
ALTER TABLE `ficha_recordatorio_alimentar`
 ADD PRIMARY KEY (`id_ficha_recordatorio_alimentar`);

--
-- Índices de tabela `profissional`
--
ALTER TABLE `profissional`
 ADD PRIMARY KEY (`id_profissional`);

--
-- Índices de tabela `quantas_vezes`
--
ALTER TABLE `quantas_vezes`
 ADD PRIMARY KEY (`id_qt_vezes`);

--
-- Índices de tabela `sexo`
--
ALTER TABLE `sexo`
 ADD PRIMARY KEY (`id_sexo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
MODIFY `categoriaID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `como_conheceu_cygna`
--
ALTER TABLE `como_conheceu_cygna`
MODIFY `id_como_conheceu_cygna` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
MODIFY `id_especialidade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de tabela `ficha_anamnese`
--
ALTER TABLE `ficha_anamnese`
MODIFY `id_ficha_anamnese` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `ficha_avaliacao_capilar`
--
ALTER TABLE `ficha_avaliacao_capilar`
MODIFY `id_ficha_avaliacao_capilar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `ficha_avaliacao_corporal`
--
ALTER TABLE `ficha_avaliacao_corporal`
MODIFY `id_ficha_avaliacao_corporal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `ficha_avaliacao_facial`
--
ALTER TABLE `ficha_avaliacao_facial`
MODIFY `id_ficha_avaliacao_facial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `ficha_recordatorio_alimentar`
--
ALTER TABLE `ficha_recordatorio_alimentar`
MODIFY `id_ficha_recordatorio_alimentar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `profissional`
--
ALTER TABLE `profissional`
MODIFY `id_profissional` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de tabela `sexo`
--
ALTER TABLE `sexo`
MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `agendamento`
--
ALTER TABLE `agendamento`
ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
