CREATE TABLE `ip_lists` (
  `STARTADDRESS` varbinary(16) NOT NULL DEFAULT '',
  `ENDADDRESS` varbinary(16) NOT NULL DEFAULT '',
  `TYPE` int(1) NOT NULL DEFAULT '0',
  `COMMENT` char(255) DEFAULT NULL,
  PRIMARY KEY (`STARTADDRESS`,`ENDADDRESS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
