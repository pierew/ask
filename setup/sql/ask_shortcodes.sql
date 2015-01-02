CREATE TABLE IF NOT EXISTS `ask_shortcodes` (
  `idask_shortcodes` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `text` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idask_shortcodes`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
