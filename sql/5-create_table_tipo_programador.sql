-- -----------------------------------------------------
-- Table `empresa`.`tipo_programador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`tipo_programador` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`tipo_programador` (
  `id_programador` INT NOT NULL AUTO_INCREMENT ,
  `lenguaje` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_programador`) )
ENGINE = InnoDB;