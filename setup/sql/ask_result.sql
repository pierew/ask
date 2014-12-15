CREATE TABLE IF NOT EXISTS `ask_database`.`ask_result` (
  `idask_result` INT(11) NOT NULL AUTO_INCREMENT,
  `ask_question_idask_question` INT(11) NOT NULL,
  `ask_user_idask_user` INT(11) NOT NULL,
  `answer` VARCHAR(45) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idask_result`, `ask_question_idask_question`, `ask_user_idask_user`),
  INDEX `fk_ask_result_ask_question1_idx` (`ask_question_idask_question` ASC),
  INDEX `fk_ask_result_ask_user1_idx` (`ask_user_idask_user` ASC),
  CONSTRAINT `fk_ask_result_ask_question1`
    FOREIGN KEY (`ask_question_idask_question`)
    REFERENCES `ask_database`.`ask_question` (`idask_question`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ask_result_ask_user1`
    FOREIGN KEY (`ask_user_idask_user`)
    REFERENCES `ask_database`.`ask_user` (`idask_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

