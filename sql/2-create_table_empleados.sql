-- -----------------------------------------------------
-- Table `empresa`.`empleados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`empleados` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`empleados` (
  `id_empleado` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `apellido` VARCHAR(45) NULL ,
  `edad` VARCHAR(45) NULL ,
  `id_puesto` INT NOT NULL ,
  PRIMARY KEY (`id_empleado`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;