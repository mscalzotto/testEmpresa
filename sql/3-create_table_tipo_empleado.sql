-- -----------------------------------------------------
-- Table `empresa`.`tipo_empleado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`tipo_empleado` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`tipo_empleado` (
  `id_tipo` INT NOT NULL AUTO_INCREMENT ,
  `tipo_empleado` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_tipo`) )
ENGINE = InnoDB;