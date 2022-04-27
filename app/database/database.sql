/*USUÁRIO*/
CREATE TABLE `ps_v1`.`usuario` ( 
    `nome` VARCHAR(32) NOT NULL ,  
`usuario` VARCHAR(16) NOT NULL ,
  `senha` VARCHAR(64) NOT NULL ,
    `nivel` INT(2) NOT NULL ) ENGINE = InnoDB;