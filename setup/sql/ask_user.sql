CREATE TABLE IF NOT EXISTS `ask_database`.`ask_user` (
  `idask_user` INT(11) NOT NULL AUTO_INCREMENT,
  `ask_group_idask_group` INT(11) NOT NULL,
  `ask_roles_idask_roles` INT(11) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `status` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idask_user`, `ask_group_idask_group`, `ask_roles_idask_roles`),
  INDEX `fk_ask_user_ask_group_idx` (`ask_group_idask_group` ASC),
  INDEX `fk_ask_user_ask_roles1_idx` (`ask_roles_idask_roles` ASC),
  CONSTRAINT `fk_ask_user_ask_group`
    FOREIGN KEY (`ask_group_idask_group`)
    REFERENCES `ask_database`.`ask_group` (`idask_group`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ask_user_ask_roles1`
    FOREIGN KEY (`ask_roles_idask_roles`)
    REFERENCES `ask_database`.`ask_roles` (`idask_roles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;