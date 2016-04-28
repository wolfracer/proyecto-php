-- MySQL Script generated by MySQL Workbench
-- 04/24/16 18:28:06
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema inventario
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `inventario` ;

-- -----------------------------------------------------
-- Schema inventario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `inventario` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ;
USE `inventario` ;

-- -----------------------------------------------------
-- Table `inventario`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`producto` (
  `id_producto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` FLOAT NOT NULL,
  `existencia` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_producto`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `idProducto_UNIQUE` ON `inventario`.`producto` (`id_producto` ASC);

CREATE UNIQUE INDEX `Nombre_UNIQUE` ON `inventario`.`producto` (`nombre` ASC);


-- -----------------------------------------------------
-- Table `inventario`.`almacen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`almacen` (
  `id_almacen` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `ubicacion` VARCHAR(45) NOT NULL,
  `existencia` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_almacen`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `id_almacen_UNIQUE` ON `inventario`.`almacen` (`id_almacen` ASC);

CREATE UNIQUE INDEX `nombre_UNIQUE` ON `inventario`.`almacen` (`nombre` ASC);


-- -----------------------------------------------------
-- Table `inventario`.`inventario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`inventario` (
  `id_inventario` INT NOT NULL AUTO_INCREMENT,
  `producto_id_producto` INT NOT NULL,
  `almacen_id_almacen` INT NOT NULL,
  `cantidad` INT NOT NULL,
  PRIMARY KEY (`id_inventario`),
  CONSTRAINT `fk_producto_has_almacen_producto`
    FOREIGN KEY (`producto_id_producto`)
    REFERENCES `inventario`.`producto` (`id_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_has_almacen_almacen1`
    FOREIGN KEY (`almacen_id_almacen`)
    REFERENCES `inventario`.`almacen` (`id_almacen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_producto_has_almacen_almacen1_idx` ON `inventario`.`inventario` (`almacen_id_almacen` ASC);

CREATE INDEX `fk_producto_has_almacen_producto_idx` ON `inventario`.`inventario` (`producto_id_producto` ASC);

CREATE UNIQUE INDEX `id_inventario_UNIQUE` ON `inventario`.`inventario` (`id_inventario` ASC);


-- -----------------------------------------------------
-- Table `inventario`.`ventas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `inventario`.`ventas` (
  `id_ventas` INT NOT NULL AUTO_INCREMENT,
  `producto_id_producto` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`id_ventas`),
  CONSTRAINT `fk_ventas_producto1`
    FOREIGN KEY (`producto_id_producto`)
    REFERENCES `inventario`.`producto` (`id_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_ventas_producto1_idx` ON `inventario`.`ventas` (`producto_id_producto` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
