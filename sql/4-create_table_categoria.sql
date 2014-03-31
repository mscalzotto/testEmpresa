-- -----------------------------------------------------
-- Table `empresa`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`categoria` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT ,
  `id_puesto` INT NULL ,
  `categoria` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_categoria`) ,
  INDEX `id_puesto` (`id_puesto` ASC) ,
  CONSTRAINT `id_puesto`
    FOREIGN KEY (`id_puesto` )
    REFERENCES `empresa`.`puesto` (`id_puesto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;