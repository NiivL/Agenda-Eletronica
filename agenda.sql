
CREATE DATABASE agenda;
USE agenda;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `atividades` (
  `id` int(11) NOT NULL,
  `assunto` varchar(200) NOT NULL,
  `atividade_desc` varchar(400) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `pessoas` (`id`, `user`, `password`) VALUES
(1, 'Nivaldo', '12345');


ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id`);





ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);




ALTER TABLE `atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



ALTER TABLE `atividades`
  ADD CONSTRAINT `fk_pessoas` FOREIGN KEY (`id`) REFERENCES `pessoas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
