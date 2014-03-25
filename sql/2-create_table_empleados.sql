-- -----------------------------------------------------
-- Table `empresa`.`empleados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`empleados` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`empleados` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `apellido` VARCHAR(45) NULL ,
  `edad` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;