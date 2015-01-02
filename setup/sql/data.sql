START TRANSACTION;
INSERT INTO `ask_database`.`ask_group` (`idask_group`, `name`) VALUES (1, 'system');
COMMIT;
START TRANSACTION;
INSERT INTO `ask_database`.`ask_roles` (`idask_roles`, `name`) VALUES (1, 'administrator');
INSERT INTO `ask_database`.`ask_roles` (`idask_roles`, `name`) VALUES (2, 'user');
COMMIT;