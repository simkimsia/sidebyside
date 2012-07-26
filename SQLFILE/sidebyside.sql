-- Adminer 3.4.0 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE `lessons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lefttext` text NOT NULL,
  `righttext` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `lessons` (`id`, `lefttext`, `righttext`) VALUES
(13,	'&lt;head&gt;\r\n&lt;/head&gt;\r\n	&lt;body&gt;\r\n		&lt;form&gt;\r\n	#1&lt;input type=&quot;text&quot; name=&quot;name&quot;/&gt;#1\r\n			#2&lt;input type=&quot;submit&quot; name=&quot;submit&quot;/&gt;#2\r\n		&lt;/form&gt;',	''),
(12,	'<head>\r\n</head>\r\n              <body>\r\n               <form>\r\n			#1<input type=\"text\" name=\"name\"/>#1\r\n			#2<input type=\"submit\" name=\"submit\"/>#2\r\n		</form>',	'');

-- 2012-07-26 13:31:03
