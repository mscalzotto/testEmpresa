-- -----------------------------------------------------
-- Table `empresa`.`programadores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `empresa`.`programadores` ;

CREATE  TABLE IF NOT EXISTS `empresa`.`programadores` (
  `id_programador` INT NOT NULL AUTO_INCREMENT ,
  `id_empleado_p` INT NULL ,
  `id_tipo_programador` INT NULL ,
  PRIMARY KEY (`id_programador`) ,
  INDEX `id_empleado` (`id_empleado_p` ASC) ,
  INDEX `id_tipo_programador` (`id_tipo_programador` ASC) ,
  CONSTRAINT `id_empleado_p`
    FOREIGN KEY (`id_empleado_p` )
    REFERENCES `empresa`.`empleados` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_tipo_programador`
    FOREIGN KEY (`id_tipo_programador` )
    REFERENCES `empresa`.`tipo_programador` (`id_programador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;