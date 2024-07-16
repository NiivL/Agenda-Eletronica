

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `desccription` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `start` timestamp NOT NULL,
  `end` timestamp NOT NULL,
  `id_atividade` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `user` (`id_user`, `name_user`,`name`, `password`) VALUES
(1, 'Niv','Nivaldo', '12345');


ALTER TABLE `events`
  ADD PRIMARY KEY (`id_atividade`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);




ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `events`
  MODIFY `id_atividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



ALTER TABLE `events`
  ADD CONSTRAINT `fk_user_events` FOREIGN KEY (`id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;



