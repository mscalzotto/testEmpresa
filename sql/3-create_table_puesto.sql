-- -----------------------------------------------------
-- Table `empresa`.`puesto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`puesto` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`puesto` (
  `id_puesto` INT NOT NULL AUTO_INCREMENT ,
  `puesto` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_puesto`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;