-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 04:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seminario`
--

-- --------------------------------------------------------

--
-- Table structure for table `sm_asistentes`
--

CREATE TABLE IF NOT EXISTS `sm_asistentes` (
`asistenteID` int(11) unsigned NOT NULL,
  `asistenteName` varchar(255) NOT NULL,
  `asistentePrimerApellido` varchar(255) NOT NULL,
  `asistenteSegundoApellido` varchar(255) NOT NULL,
  `asistenteCiudad` varchar(255) NOT NULL,
  `asistenteCentro` varchar(255) NOT NULL,
  `asistenteCargo` varchar(255) NOT NULL,
  `asistenteEmail` varchar(255) NOT NULL,
  `asistenteTelefono` varchar(255) NOT NULL,
  `asistenteTelefonoSecundario` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_asistentes`
--

INSERT INTO `sm_asistentes` (`asistenteID`, `asistenteName`, `asistentePrimerApellido`, `asistenteSegundoApellido`, `asistenteCiudad`, `asistenteCentro`, `asistenteCargo`, `asistenteEmail`, `asistenteTelefono`, `asistenteTelefonoSecundario`) VALUES
(1, 'Rafael', 'RAMIREZ URBINA', 'Urbina', 'Montreal', 'Fundaset', 'Boss', 'raffe90@gmail.com', '4388847073', '4388847073'),
(2, 'Rafael', 'RAMIREZ URBINA', 'Urbina', 'Montreal', 'Fundaset', 'Boss', 'raffe90@gmail.com', '4388847073', '4388847073'),
(3, 'Andrea', 'Candamio', 'Menendez', 'Madrid', 'Mi Taza', 'Boss', 'rafa.ramirez90@yahoo.com', '655046278', '');

-- --------------------------------------------------------

--
-- Table structure for table `sm_members`
--

CREATE TABLE IF NOT EXISTS `sm_members` (
`memberID` int(11) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_members`
--

INSERT INTO `sm_members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'rafaramirez', '$2y$12$48SHn0yOorhzKlJpVEWF6uDWl1vqJm/jcb4ffBx5vChr64HQsum.e', 'r.ramirez@fundaseth.es');

-- --------------------------------------------------------

--
-- Table structure for table `sm_ponentes`
--

CREATE TABLE IF NOT EXISTS `sm_ponentes` (
`ponenteID` int(11) unsigned NOT NULL,
  `ponenteName` varchar(255) NOT NULL,
  `ponenteBio` text NOT NULL,
  `ponenteCentro` varchar(255) NOT NULL,
  `ponenteImg` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_ponentes`
--

INSERT INTO `sm_ponentes` (`ponenteID`, `ponenteName`, `ponenteBio`, `ponenteCentro`, `ponenteImg`, `slug`) VALUES
(1, 'Rafael Ramirez', '<p><span style="color: #000000; font-family: Arial, Helvetica, sans; font-size: 11px; line-height: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tincidunt non elit porta rhoncus. Sed pharetra diam est, vel tempus velit porta id. Ut pellentesque purus non faucibus feugiat. Suspendisse condimentum risus sem, sed iaculis est sodales eu. Quisque id ultrices libero. Morbi at congue turpis, et vulputate massa. Donec sem neque, ullamcorper ac elit maximus, blandit dignissim ante. Quisque ac ipsum sed arcu viverra condimentum. Curabitur commodo purus ligula, et bibendum eros posuere eget. Nulla ac ligula semper, blandit neque ac, sollicitudin enim. Mauris tempus quis felis ornare faucibus. Ut tempor felis nec purus rhoncus, dignissim gravida velit sagittis. Nullam nec tortor mattis, cursus felis ut, tempus lacus.</span></p>', 'Fundaseth, S.L', 'img/header-bg1.jpg', 'rafael-ramirez'),
(2, 'Belén Gutiérrez', '<p style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">Cras suscipit purus porttitor maximus rhoncus. Phasellus consectetur pulvinar ex id semper. Praesent vel nulla volutpat, accumsan dui in, aliquet neque. Etiam eget ante commodo, faucibus elit sit amet, dignissim ligula. Duis condimentum velit quis luctus mollis. Ut non sagittis magna, quis ultrices quam. In pharetra ante id orci dignissim lacinia. Pellentesque iaculis ullamcorper mollis. Nullam tristique ultrices placerat. Aliquam pellentesque, nunc ac luctus varius, sapien nisi condimentum lectus, id laoreet sapien turpis a nibh.</p>\r\n<p style="text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent et orci est. Nam facilisis, lectus sed commodo auctor, enim libero luctus ligula, in tempus dolor magna a turpis. Praesent rhoncus, nulla a pharetra malesuada, nunc velit faucibus ex, ac eleifend justo enim id lacus. Suspendisse tristique vestibulum lacus non porta. Nulla viverra, nisl at efficitur tincidunt, lorem ante consectetur risus, sit amet rutrum massa est id metus. Praesent augue eros, commodo eget mauris pharetra, vulputate ullamcorper metus. Phasellus sodales, libero ac pretium mattis, lacus dui fringilla odio, id porttitor metus nibh a mauris. Duis maximus sed ante quis vulputate. Nulla laoreet, enim quis tincidunt pharetra, odio mauris malesuada ipsum, quis varius purus nibh ut justo. Aliquam erat volutpat. Nulla rutrum orci sed iaculis mollis.</p>', 'Fundaseth, S.L', 'img/nina.png', 'bel-n-guti-rrez'),
(3, 'Javier Sánchez', '<p>Cras suscipit purus porttitor maximus rhoncus. Phasellus consectetur pulvinar ex id semper. Praesent vel nulla volutpat, accumsan dui in, aliquet neque. Etiam eget ante commodo, faucibus elit sit amet, dignissim ligula. Duis condimentum velit quis luctus mollis. Ut non sagittis magna, quis ultrices quam. In pharetra ante id orci dignissim lacinia. Pellentesque iaculis ullamcorper mollis. Nullam tristique ultrices placerat. Aliquam pellentesque, nunc ac luctus varius, sapien nisi condimentum lectus, id laoreet sapien turpis a nibh.</p>\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent et orci est. Nam facilisis, lectus sed commodo auctor, enim libero luctus ligula, in tempus dolor magna a turpis. Praesent rhoncus, nulla a pharetra malesuada, nunc velit faucibus ex, ac eleifend justo enim id lacus. Suspendisse tristique vestibulum lacus non porta. Nulla viverra, nisl at efficitur tincidunt, lorem ante consectetur risus, sit amet rutrum massa est id metus. Praesent augue eros, commodo eget mauris pharetra, vulputate ullamcorper metus. Phasellus sodales, libero ac pretium mattis, lacus dui fringilla odio, id porttitor metus nibh a mauris. Duis maximus sed ante quis vulputate. Nulla laoreet, enim quis tincidunt pharetra, odio mauris malesuada ipsum, quis varius purus nibh ut justo. Aliquam erat volutpat. Nulla rutrum orci sed iaculis mollis.</p>', 'Fundaseth, S.L', 'img/header-bg.jpg', 'javier-s-nchez'),
(4, 'Andrea Candamio', '<p>paste_as_text: true" placeholder="Bio del ponente"&gt;</p>', 'mitaza.es', 'img/project1.jpg', 'andrea-candamio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sm_asistentes`
--
ALTER TABLE `sm_asistentes`
 ADD PRIMARY KEY (`asistenteID`);

--
-- Indexes for table `sm_members`
--
ALTER TABLE `sm_members`
 ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `sm_ponentes`
--
ALTER TABLE `sm_ponentes`
 ADD PRIMARY KEY (`ponenteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sm_asistentes`
--
ALTER TABLE `sm_asistentes`
MODIFY `asistenteID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sm_members`
--
ALTER TABLE `sm_members`
MODIFY `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sm_ponentes`
--
ALTER TABLE `sm_ponentes`
MODIFY `ponenteID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
