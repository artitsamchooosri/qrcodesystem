/*
 Navicat Premium Data Transfer

 Source Server         : test
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : qrscan

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 30/08/2022 16:37:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for coupong
-- ----------------------------
DROP TABLE IF EXISTS `coupong`;
CREATE TABLE `coupong`  (
  `uuid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cread-date` datetime(0) NULL DEFAULT NULL,
  `exp-date` datetime(0) NULL DEFAULT NULL,
  `checkout-date` datetime(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `url-coupong` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`uuid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of coupong
-- ----------------------------
INSERT INTO `coupong` VALUES ('111', '2022-08-30 09:58:26', '2022-09-02 14:25:00', '2022-09-02 16:03:19', 'used', 'https://127.0.0.1/qrscan-system/page/checkout-qr-code.php?id=111', '111.png');
INSERT INTO `coupong` VALUES ('123', '2022-08-30 09:57:03', '2022-08-30 14:25:00', '2022-08-30 11:28:04', 'used', 'https://127.0.0.1/qrscan-system/page/checkout-qr-code.php?id=123', '123.png');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `authority` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `timestamp` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '$2y$10$175rNF2t45.cBlepYCYvDu9J6FwAi.SbxFWavN20m1ATs15IhR9Pu', 'Artit Samchoosri', 'administrator', '192.168.10.107', '2022-08-30 11:47:52');

SET FOREIGN_KEY_CHECKS = 1;
