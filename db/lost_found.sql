

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `alogin` (
  `id` int  NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');



CREATE TABLE `user` (
  `id` int  NOT NULL,
  `fName` varchar(20) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user` (`id`, `fName`,`usn`, `email`, `password`,  `phonenumber`, `dept`) VALUES
(1, 'Prathvi','4nm19is121', '4nm19is121@nmamit.in', '1234', '8908756745', 'IS'),
(2, 'Rachana','4nm19is124' ,'4nm19is124@nmamit.in', '1243', '9785123455', 'IS');


CREATE TABLE `litems_info` (
  `id` int  DEFAULT NULL,
  `fName` varchar(20) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idate` date DEFAULT NULL,
  `contact` varchar(10) NOT NULL,
  `descri` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `litems_info` (`id`, `fname`, `usn`,`idate`, `email`,`contact`, `descri`) VALUES
(1, 'Siri', '4nm19is167','2022-01-03','4nm19is167@nmamit.in','9380858322', '32 GB sandisk blackcolour pendrive'),
(2, 'Vaishali','4nm19ec191', '2022-01-03','4nm19ec191@nmamit.in','9380858322', '2 gold pendants.One is S another is stone'),
(3, 'Prajna','4nm19is108', '2022-01-03','4nm19is108@nmamit.in','9380858322', 'black colour Fastrack'),
(4, 'Arpitha', '4nm19is031','2022-02-10','4nm19is031@nmamit.in','9902133784', 'samsung  mobile');


CREATE TABLE `fitems_info` (
  `id` int DEFAULT NULL,
  `fName` varchar(20) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `idate` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `descri` char(100) DEFAULT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `fitems_info` (`id`, `fname`,`usn`, `idate`, `email`,`contact`, `descri`, `pic`) VALUES
(1, 'Shashikala','4nm19is152 ','2022-01-12','4nm19is152@nmamit.in','9876543210', 'found 2 ladies purse infront of sac', "images\dipu.jpg"),
(2, 'Siri', '4nm19is167','2022-01-2','4nm19is167@nmamit.in','9876543210', 'found red colour expert bag at ISL01', "images/me.jpg"),
(3, 'Vimarsha', '4nm19is190','2022-02-12','4nm19is190@nmamit.in', '1234567890','round shaped black color specs','images/test.jpg');


ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `litems_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_litem_ibfk_1` (`id`);

ALTER TABLE `fitems_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fitem_ibfk_1` (`id`);


ALTER TABLE `alogin`
  MODIFY `id` int  NOT NULL AUTO_INCREMENT;

ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `litems_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
ALTER TABLE `fitems_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;


--
ALTER TABLE `litems_info`
  ADD CONSTRAINT `user_litem_ibfk_1` FOREIGN KEY (`id`) REFERENCES `litems_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 
--
ALTER TABLE `fitems_info`
  ADD CONSTRAINT `user_fitem_ibfk_1` FOREIGN KEY (`id`) REFERENCES `fitems_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


COMMIT;
