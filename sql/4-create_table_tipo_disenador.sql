-- -----------------------------------------------------
-- Table `empresa`.`tipo_disenador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`tipo_disenador` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`tipo_disenador` (
  `id_disenador` INT NOT NULL AUTO_INCREMENT ,
  `tipo_disenador` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_disenador`) )
ENGINE = InnoDB;