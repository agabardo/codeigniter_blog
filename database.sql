-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.16-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema blog
--

CREATE DATABASE IF NOT EXISTS blog;
USE blog;

--
-- Definition of table `postagens`
--

DROP TABLE IF EXISTS `postagens`;
CREATE TABLE `postagens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` datetime NOT NULL DEFAULT '2016-02-11 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postagens`
--

/*!40000 ALTER TABLE `postagens` DISABLE KEYS */;
INSERT INTO `postagens` (`id`,`titulo`,`texto`,`data`) VALUES
 (1,'The lorem Ipsum Post','Lorem ipsum dolor sit amet, no mea feugiat legimus. Ad qui suas populo democritum, ex harum mediocrem sed. Vix ridens ancillae salutandi ut, ut veniam volumus eos, nam noster doctus gloriatur ne. Ludus labitur fierent pro an. Est et vidisse gubergren. Ea per noster putant consectetuer. Mei ei dicant mucius, at his etiam dolorum persequeris, ei vix amet possim disputationi.\r\n\r\nAeque interesset id has, latine deseruisse vis eu. Nullam legimus ei sed. Vocent similique ei mei, usu ex erant sanctus habemus. Nam ad agam dicta, ne maiorum accusamus sea. Eu vel cibo decore nostrud, et sed admodum oporteat, eam reque altera an.\r\n\r\nQuas nullam ea per, et porro ceteros honestatis vis. Ne mel saperet pericula, ei nam aperiam fierent. Civibus efficiendi nec ea, no vix ludus tation. Nec dicta mazim interpretaris ea, id sea tempor tacimates definitionem. Amet dico probatus mea id, commodo voluptaria ad usu.\r\n\r\nAccusam accommodare intellegebat ei has, voluptua definitiones vel ne. Aeque essent philosophia vel et. Omittam albucius apeirian at sed. Ut vim habeo iusto mnesarchum. Nostro legimus sadipscing ut his, ei qui maiorum efficiantur. In habemus gubergren mel, intellegam honestatis adversarium mei ne. Ad pri natum voluptua.\r\n\r\nScaevola moderatius percipitur et vix, mei nihil tractatos democritum in, veri dicit dolores mel id. Ne duo oblique percipit definiebas, impetus theophrastus signiferumque quo ne. Ne falli contentiones per, te viderer omittam cum. Te natum dolorum splendide eos, ad tollit adipisci liberavisse per. Nonumy feugiat referrentur ea per. At has discere inermis fierent. No inermis dolores cum, te debitis scaevola definiebas his.','2015-05-23 13:50:40'),
 (2,'The lorem Ipsum Post II','Morbi eget porta nisl. In aliquam magna sem, id pretium risus cursus at. Etiam tellus lorem, convallis ac eros vel, tincidunt dictum leo. Maecenas sed viverra enim. Vivamus id pretium augue, nec tempus augue. Sed ac felis eget odio malesuada posuere. Nam ut semper ex.\r\n\r\nSed id dui lacinia, facilisis nisl in, commodo neque. Etiam vitae sapien sed felis luctus bibendum vel non nulla. Phasellus ultrices leo ut turpis lobortis laoreet. Nulla eleifend rhoncus venenatis. Duis bibendum vel lacus in venenatis. Fusce dignissim eu justo sit amet hendrerit. Mauris euismod, ante et tempus bibendum, quam libero gravida nulla, vitae porta eros ante vel dolor.\r\n\r\nSed suscipit, dui et molestie tincidunt, turpis eros molestie odio, non eleifend felis lectus et metus. Nullam convallis nisi et euismod sollicitudin. Cras vehicula accumsan ligula, non efficitur lectus scelerisque a. Aliquam enim massa, elementum sit amet auctor eu, ultricies tristique dui. Etiam luctus lacinia commodo. Nam blandit faucibus diam et vulputate. In egestas blandit ipsum quis pulvinar. Quisque volutpat dui nec orci posuere bibendum. Duis eu nunc in neque egestas dapibus. Aliquam tellus diam, ornare sit amet ultricies sit amet, fringilla imperdiet lacus. Aliquam eu ultrices libero. Morbi nec volutpat tellus. Sed suscipit ligula vel neque molestie viverra. In in lacus at risus placerat euismod.','2015-10-08 09:24:13');
/*!40000 ALTER TABLE `postagens` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
