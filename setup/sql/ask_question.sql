CREATE TABLE IF NOT EXISTS `ask_database`.`ask_question` (
  `idask_question` INT(11) NOT NULL AUTO_INCREMENT,
  `text` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idask_question`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

