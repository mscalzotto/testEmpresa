-- -----------------------------------------------------
-- Table `empresa`.`disenadores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`disenadores` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`disenadores` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `id_empleado_d` INT NULL ,
  `id_tipo_disenador` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `id_empleado` (`id_empleado_d` ASC) ,
  INDEX `id_tipo_disenador` (`id_tipo_disenador` ASC) ,
  CONSTRAINT `id_empleado`
    FOREIGN KEY (`id_empleado_d` )
    REFERENCES `empresa`.`empleados` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_tipo_disenador`
    FOREIGN KEY (`id_tipo_disenador` )
    REFERENCES `empresa`.`tipo_disenador` (`id_disenador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;