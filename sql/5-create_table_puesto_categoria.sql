-- -----------------------------------------------------
-- Table `empresa`.`puesto_categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`puesto_categoria` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`puesto_categoria` (
  `id_puesto_x_categoria` INT NOT NULL ,
  `id_empleado` INT NULL ,
  `id_categoria` INT NULL ,
  PRIMARY KEY (`id_puesto_x_categoria`) ,
  INDEX `id_empleado` (`id_empleado` ASC) ,
  INDEX `id_categoria` (`id_categoria` ASC) ,
  CONSTRAINT `id_empleado`
    FOREIGN KEY (`id_empleado` )
    REFERENCES `empresa`.`empleados` (`id_empleado` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_categoria`
    FOREIGN KEY (`id_categoria` )
    REFERENCES `empresa`.`categoria` (`id_categoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;