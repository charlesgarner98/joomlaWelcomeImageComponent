DROP TABLE IF EXISTS `#__welcomeImage`;

CREATE TABLE `#__welcomeImage` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`image`   VARCHAR(1024) NOT NULL DEFAULT '',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__welcomeImage` (`image`) VALUES
('');
