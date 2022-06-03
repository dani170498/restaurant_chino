/* ---------------------------------------------------- */
/*  Generated by Enterprise Architect Version 13.5 		*/
/*  Created On : 31-may.-2022 05:38:46 				*/
/*  DBMS       : MySql 						*/
/* ---------------------------------------------------- */

SET FOREIGN_KEY_CHECKS=0 
;

/* Drop Tables */

DROP TABLE IF EXISTS `empleados` CASCADE
;

DROP TABLE IF EXISTS `entregas` CASCADE
;

DROP TABLE IF EXISTS `inventario` CASCADE
;

DROP TABLE IF EXISTS `platos` CASCADE
;

DROP TABLE IF EXISTS `productos` CASCADE
;

DROP TABLE IF EXISTS `usuarios` CASCADE
;

DROP TABLE IF EXISTS `ventas` CASCADE
;

/* Create Tables */

CREATE TABLE `empleados`
(
	`cod_empleado` VARCHAR(8) NOT NULL,
	`nombre_empleado` VARCHAR(50) NULL,
	`rol_empleado` VARCHAR(50) NULL,
	`ci_empleado` VARCHAR(16) NULL,
	`correo_empleado` VARCHAR(100) NULL,
	`contra_empleado` VARCHAR(16) NULL,
	`nacimiento_empleado` DATE NULL,
	`ingreso_empleado` DATE NULL,
	CONSTRAINT `PK_empleados` PRIMARY KEY (`cod_empleado` ASC)
)

;

CREATE TABLE `entregas`
(
	`cod_entrega` VARCHAR(8) NOT NULL,
	`nombre_usuario` VARCHAR(50) NULL,
	`nombre_plato` VARCHAR(50) NULL,
	`nombre_producto` VARCHAR(50) NULL,
	`nombre_empleado` VARCHAR(50) NULL,
	`cod_usuario` VARCHAR(8) NULL,
	`cod_empleado` VARCHAR(8) NULL,
	`cod_plato` VARCHAR(50) NULL,
	`cod_producto` VARCHAR(8) NULL,
	CONSTRAINT `PK_inventario` PRIMARY KEY (`cod_entrega` ASC)
)

;

CREATE TABLE `inventario`
(
	`nombre_plato` VARCHAR(50) NULL,
	`nombre_producto` VARCHAR(50) NULL,
	`nombre_proveedor` VARCHAR(50) NULL,
	`cod_plato` VARCHAR(50) NULL,
	`cod_producto` VARCHAR(8) NULL
)

;

CREATE TABLE `platos`
(
	`cod_plato` VARCHAR(50) NOT NULL,
	`nombre_plato` VARCHAR(50) NULL,
	`foto_plato` VARCHAR(50) NULL,
	`precio_plato` VARCHAR(8) NULL,
	CONSTRAINT `PK_platos` PRIMARY KEY (`cod_plato` ASC)
)

;

CREATE TABLE `productos`
(
	`cod_producto` VARCHAR(8) NOT NULL,
	`nombre_producto` VARCHAR(50) NULL,
	`foto_producto` VARCHAR(100) NULL,
	`precio_producto` VARCHAR(8) NULL,
	`nombre_distribuidor` VARCHAR(50) NULL,
	CONSTRAINT `PK_productos` PRIMARY KEY (`cod_producto` ASC)
)

;

CREATE TABLE `usuarios`
(
	`cod_usuario` VARCHAR(8) NOT NULL,
	`nombre_usuario` VARCHAR(50) NULL,
	`cinit_usuario` VARCHAR(16) NULL,
	`correo_usuario` VARCHAR(100) NULL,
	`contra_usuario` VARCHAR(16) NULL,
	`nacimiento_usuario` DATE NULL,
	CONSTRAINT `PK_usuarios` PRIMARY KEY (`cod_usuario` ASC)
)

;

CREATE TABLE `ventas`
(
	`cod_venta` VARCHAR(8) NOT NULL,
	`nombre_plato` VARCHAR(50) NULL,
	`precio_plato` VARCHAR(8) NULL,
	`nombre_producto` VARCHAR(50) NULL,
	`precio_producto` VARCHAR(8) NULL,
	`nombre_usuario` VARCHAR(50) NULL,
	`cinit_usuario` VARCHAR(16) NULL,
	`nombre_empleado` VARCHAR(50) NULL,
	`cod_usuario` VARCHAR(8) NULL,
	`cod_empleado` VARCHAR(8) NULL,
	`cod_plato` VARCHAR(50) NULL,
	`cod-producto` VARCHAR(8) NULL,
	CONSTRAINT `PK_ventas` PRIMARY KEY (`cod_venta` ASC)
)

;

/* Create Primary Keys, Indexes, Uniques, Checks */

ALTER TABLE `entregas` 
 ADD INDEX `IXFK_entregas_empleados` (`cod_empleado` ASC)
;

ALTER TABLE `entregas` 
 ADD INDEX `IXFK_entregas_platos` (`cod_plato` ASC)
;

ALTER TABLE `entregas` 
 ADD INDEX `IXFK_entregas_productos` (`cod_producto` ASC)
;

ALTER TABLE `entregas` 
 ADD INDEX `IXFK_entregas_usuarios` (`cod_usuario` ASC)
;

ALTER TABLE `inventario` 
 ADD INDEX `IXFK_inventario_platos` (`cod_plato` ASC)
;

ALTER TABLE `inventario` 
 ADD INDEX `IXFK_inventario_productos` (`cod_producto` ASC)
;

ALTER TABLE `ventas` 
 ADD INDEX `IXFK_ventas_empleados` (`cod_empleado` ASC)
;

ALTER TABLE `ventas` 
 ADD INDEX `IXFK_ventas_platos` (`cod_plato` ASC)
;

ALTER TABLE `ventas` 
 ADD INDEX `IXFK_ventas_productos` (`cod-producto` ASC)
;

ALTER TABLE `ventas` 
 ADD INDEX `IXFK_ventas_usuarios` (`cod_usuario` ASC)
;

/* Create Foreign Key Constraints */

ALTER TABLE `entregas` 
 ADD CONSTRAINT `FK_entregas_empleados`
	FOREIGN KEY (`cod_empleado`) REFERENCES `empleados` (`cod_empleado`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `entregas` 
 ADD CONSTRAINT `FK_entregas_platos`
	FOREIGN KEY (`cod_plato`) REFERENCES `platos` (`cod_plato`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `entregas` 
 ADD CONSTRAINT `FK_entregas_productos`
	FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `entregas` 
 ADD CONSTRAINT `FK_entregas_usuarios`
	FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`cod_usuario`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `inventario` 
 ADD CONSTRAINT `FK_inventario_platos`
	FOREIGN KEY (`cod_plato`) REFERENCES `platos` (`cod_plato`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `inventario` 
 ADD CONSTRAINT `FK_inventario_productos`
	FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `ventas` 
 ADD CONSTRAINT `FK_ventas_empleados`
	FOREIGN KEY (`cod_empleado`) REFERENCES `empleados` (`cod_empleado`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `ventas` 
 ADD CONSTRAINT `FK_ventas_platos`
	FOREIGN KEY (`cod_plato`) REFERENCES `platos` (`cod_plato`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `ventas` 
 ADD CONSTRAINT `FK_ventas_productos`
	FOREIGN KEY (`cod-producto`) REFERENCES `productos` (`cod_producto`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `ventas` 
 ADD CONSTRAINT `FK_ventas_usuarios`
	FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`cod_usuario`) ON DELETE Restrict ON UPDATE Restrict
;

SET FOREIGN_KEY_CHECKS=1 
;
