
CREATE TABLE `jobs` (
  `id_job` int(11) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `descrição` varchar(500) NOT NULL,
  `requisitos` varchar(500) NOT NULL,
  `diferenciais` varchar(500) NOT NULL,
  `salario` varchar(10) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `validade` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
