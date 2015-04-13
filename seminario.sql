-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 06:26 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_ponentes`
--

INSERT INTO `sm_ponentes` (`ponenteID`, `ponenteName`, `ponenteBio`, `ponenteCentro`, `ponenteImg`, `slug`) VALUES
(1, 'Dr. Raimon Belenes Juárez', '<p>Dr. D. Raimon Belenes Ju&aacute;rez es m&eacute;dico, con m&aacute;s de 30 a&ntilde;os de experiencia en gesti&oacute;n de servicios sanitarios. Inici&oacute; su carrera profesional como Inspector M&eacute;dico, ocupando la posici&oacute;n de Coordinador de Gesti&oacute;n de la RASSSA (embri&oacute;n del SAS) en la Junta de Andaluc&iacute;a; m&aacute;s recientemente, fue Director del Instituto Catal&aacute;n de la Salud. Ha dirigido numerosos hospitales, como los centros de la Cruz Roja en Catalu&ntilde;a y el Hospital del Sagrado Coraz&oacute;n. Ha sido tambi&eacute;n Consejero Delegado del Hospital del Mar y de los centros asistenciales del Ayuntamiento de Barcelona y del Hospital Clinic de Barcelona. En el sector privado, ha sido Director del Desarrollo Corporativo de Adeslas y del Grupo de Salud de PWC. Es autor o coautor de varios libros y de m&aacute;s de un centenar de art&iacute;culos sobre gesti&oacute;n sanitaria.</p>', 'Director de Innovación, Investigación y Calidad, Grupo idcsalud- Quirón', 'img/raimonBelenes.jpg', 'Dr-Raimon-Belenes-Juaarez'),
(2, 'Dr. Eduardo Fraile Moreno', '<p>Cras suscipit purus porttitor maximus rhoncus. Phasellus consectetur pulvinar ex id semper. Praesent vel nulla volutpat, accumsan dui in, aliquet neque. Etiam eget ante commodo, faucibus elit sit amet, dignissim ligula. Duis condimentum velit quis luctus mollis. Ut non sagittis magna, quis ultrices quam. In pharetra ante id orci dignissim lacinia. Pellentesque iaculis ullamcorper mollis. Nullam tristique ultrices placerat. Aliquam pellentesque, nunc ac luctus varius, sapien nisi condimentum lectus, id laoreet sapien turpis a nibh.</p>\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent et orci est. Nam facilisis, lectus sed commodo auctor, enim libero luctus ligula, in tempus dolor magna a turpis. Praesent rhoncus, nulla a pharetra malesuada, nunc velit faucibus ex, ac eleifend justo enim id lacus. Suspendisse tristique vestibulum lacus non porta. Nulla viverra, nisl at efficitur tincidunt, lorem ante consectetur risus, sit amet rutrum massa est id metus. Praesent augue eros, commodo eget mauris pharetra, vulputate ullamcorper metus. Phasellus sodales, libero ac pretium mattis, lacus dui fringilla odio, id porttitor metus nibh a mauris. Duis maximus sed ante quis vulputate. Nulla laoreet, enim quis tincidunt pharetra, odio mauris malesuada ipsum, quis varius purus nibh ut justo. Aliquam erat volutpat. Nulla rutrum orci sed iaculis mo</p>', 'Director Técnico de la Unidad Central de Radiodiagnóstico de la Comunidad de Madrid.', 'img/desconocido.jpg', 'Dr-Eduardo-Fraile-Moreno'),
(3, 'Dr. José Luis de Sancho', '<p>Licenciado en Medicina y Cirugia y Especialista en Medicina Interna y Nefrolog&iacute;a</p>\r\n<p>Jefe del Servicio de Nefrolog&iacute;a y Director gerente del Hospital de Galdakao de Vizcaya</p>\r\n<p>Director gerente de los hospitales Puerta de Hierro de Madrid, Cl&iacute;nico de Granada, Anderson Internacional Madrid,Vall d`Hebron de Barcelona y Complejo hospitalario de Albacete</p>\r\n<p>Director general del Consejo Interterritorial del Sistema Nacional de salud (CISNS)</p>\r\n<p>Graduado en Gesti&oacute;n de empresas y gesti&oacute;n hospitalaria por IESE BUSSINESS SCHOOL</p>\r\n<p>Graduado en Gesti&oacute;n general de empresas por el INAP</p>\r\n<p>Consultor freelance y Profesor de gesti&oacute;n sanitaria en Universidades y Escuelas de negocios en la actualidad</p>', 'Especialista en gestión sanitaria', 'img/Foto Jl De Sancho despacho 1.JPG', 'Dr-Josae-Luis-de-Sancho'),
(4, 'Dr. Eduardo Gratacós ', '<p>Eduard Gratac&oacute;s is Director of BCNatal national and international referral centre in Maternal-Fetal Medicine, result of the merger of Hospital Cl&iacute;nic and Hospital Sant Joan de Deu de Barcelona. He is Professor of Obstetrics and Gynecology. Previously, he was Head of the Fetal Medicine Units of the University Hospital in Leuven, Belgium (1999-2000) and the Hospital Vall d''Hebron in Barcelona (2001-2004). Member of the Board of Directors and Scientific Chair of the International Society of Ultrasound in Obstetrics &amp; Gynecology (2006-2014). Member of Eurofoetus, the pioneering group in fetal surgery in Europe, he has participated in the design of several fetal treatments currently used, and has an experience of over 16 years and over 1600 interventions in fetal surgery. Scientific reviewer of the European Commission as well as several national research systems in Europe. Editor-in-chief of Fetal Diagnosis and Therapy. Director of the Erasmus Mundus European Doctorate in Fetal Medicine (Barcelona, Leuven, Lund), coordinator of three European Projects, Director of 24 doctoral theses, he has published over 320 scientific papers in peer-reviewed international journals.</p>', 'Jefe del Servicio Médico Materno Fetal del Hospital Clínico de Barcelona y Hospital Sant Joan de Déu', 'img/eduard_gratacos_0.jpg', 'Dr-Eduardo-Gratacaos'),
(5, 'Dr. Donald M. Berwick', '<p>Don Berwick is the United States&rsquo; leading advocate&nbsp;for high-quality healthcare. In December, he&nbsp;stepped down as the Administrator of the Centers&nbsp;for Medicare and Medicaid Services. For 22 years&nbsp;prior to that, he was the founding CEO of the&nbsp;Institute for Healthcare Improvement, a nonprofit&nbsp;dedicated to improving healthcare around the&nbsp;world. A pediatrician by background, he has also&nbsp;served on the faculties of the Harvard Medical&nbsp;School and and the Harvard School of Public Health.</p>', 'Antiguo Director de los Centers for Medicare and Medicaid Services (CMS). Fundador, Presidente y CEO del IHI (E.E.U.U)', 'img/donaldBerwick.png', 'Dr-Donald-M-Berwick'),
(6, 'Dr. Gonzalo Varela Simó ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis viverra convallis. Nulla imperdiet eros nec neque finibus, eget imperdiet libero iaculis. Donec iaculis nunc non elementum luctus. Cras in tortor quis purus fermentum sollicitudin eget sit amet libero. Suspendisse mattis et mauris in iaculis. Donec sed bibendum lectus. Nulla eu ex ac libero aliquam posuere. Vivamus arcu leo, volutpat eu accumsan viverra, maximus vitae justo. Donec non quam aliquet, vehicula ligula quis, tempus libero.</p>\r\n<p>Duis feugiat est velit. Etiam a vestibulum magna. Fusce enim nisi, tristique id elit vel, porta aliquam augue. Proin finibus eros vitae egestas rhoncus. Cras et accumsan nisl. Nulla dictum augue quis facilisis molestie. Nam urna libero, ornare eget mollis sed, interdum vel felis. Pellentesque tempus, orci et sagittis lobortis, felis urna tincidunt libero, non ornare turpis mi sodales nisl. Nunc ullamcorper posuere molestie. Pellentesque eleifend viverra ante vel dapibus. Aliquam semper facilisis augue, eget faucibus arcu finibus nec.</p>', 'Jefe del Servicio de Cirugía Torácica del Hospital Universitario de Salamanca.', 'img/G_Varela.jpg', 'Dr-Gonzalo-Varela-Simao');

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
MODIFY `asistenteID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sm_members`
--
ALTER TABLE `sm_members`
MODIFY `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sm_ponentes`
--
ALTER TABLE `sm_ponentes`
MODIFY `ponenteID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
