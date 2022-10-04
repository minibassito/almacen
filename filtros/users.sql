/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : itic

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 14/01/2021 00:57:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserLastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserGender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserCountry` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserAge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Cancelled` int NOT NULL,
  PRIMARY KEY (`UserID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Alejandra', 'Sandoval', 'SuperAdmin', 'Mujer', 'Mexico', '26', 'Active', 0);
INSERT INTO `users` VALUES (2, 'Valeria', 'Perez', 'Admin', 'Mujer', 'Venezuela', '25', 'Active', 0);
INSERT INTO `users` VALUES (3, 'Emiliano', 'Trejo', 'Basic', 'Hombre', 'Mexico', '18', 'Active', 0);
INSERT INTO `users` VALUES (4, 'Patricia', 'Moreno', 'Admin', 'Mujer', 'España', '28', 'Active', 0);
INSERT INTO `users` VALUES (5, 'Gabriel', 'Valero', 'Basic', 'Hombre', 'España', '18', 'Inactive', 0);
INSERT INTO `users` VALUES (6, 'Cristian', 'Rodriguez', 'Basic', 'Hombre', 'Venezuela', '18', 'Inactive', 0);
INSERT INTO `users` VALUES (7, 'Esperanza', 'Montes', 'Basic', 'Mujer', 'Mexico', '53', 'Active', 0);
INSERT INTO `users` VALUES (8, 'Anthony', 'Garcia', 'Basic', 'Hombre', 'España', '55', 'Active', 0);
INSERT INTO `users` VALUES (9, 'Carla', 'Perez', 'Admin', 'Mujer', 'Mexico', '23', 'Active', 0);

SET FOREIGN_KEY_CHECKS = 1;
