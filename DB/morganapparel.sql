# phpMyAdmin SQL Dump
# version 2.5.4
# http://www.phpmyadmin.net
#
# โฮสต์: localhost
# เวลาในการสร้าง: 31 ก.ค. 2020  12:27น.
# รุ่นของเซิร์ฟเวอร์: 4.0.16
# รุ่นของ PHP: 4.3.3
# 
# ฐานข้อมูล : `morganapparel`
# 

# --------------------------------------------------------

#
# โครงสร้างตาราง `label`
#

DROP TABLE IF EXISTS `label`;
CREATE TABLE `label` (
  `label_id` int(11) NOT NULL auto_increment,
  `label_code` varchar(15) default NULL,
  `morgan_code` varchar(15) default NULL,
  `minimum_stock` double default NULL,
  `prices` varchar(10) default NULL,
  `stock` double default NULL,
  `label_level` varchar(10) default NULL,
  `materials` varchar(100) default NULL,
  `weave` varchar(100) default NULL,
  `finishs` varchar(100) default NULL,
  `specials` varchar(100) default NULL,
  `minimum` double default NULL,
  `label_type` int(11) default NULL,
  `status` int(11) default NULL,
  `create_date` date default NULL,
  `current_index` decimal(10,0) default NULL,
  PRIMARY KEY  (`label_id`)
) TYPE=MyISAM AUTO_INCREMENT=29 ;

#
# dump ตาราง `label`
#

INSERT INTO `label` VALUES (1, 'T CODE', 'TA1', '1000', '0.1', '10000', NULL, NULL, NULL, NULL, NULL, '10', NULL, 3, '2004-11-16', '1');
INSERT INTO `label` VALUES (2, 'E5', 'E5', '0', '9', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 1, '2005-03-31', '61');
INSERT INTO `label` VALUES (3, 'E7', 'E7', '0', '8', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 1, '2005-03-31', '62');
INSERT INTO `label` VALUES (4, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 1, '2005-03-31', '65');
INSERT INTO `label` VALUES (5, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (6, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (7, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (8, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (9, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (10, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (11, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (12, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (13, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (14, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (15, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (16, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (17, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (18, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (19, 'E9', 'E9', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-16', '3');
INSERT INTO `label` VALUES (20, 'E12', 'E12', '0', '5.9', '0', NULL, NULL, NULL, NULL, NULL, '0', NULL, 3, '2004-11-17', '4');
INSERT INTO `label` VALUES (21, 'E12', 'E12', '0', '5.9', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 3, '2004-11-17', '4');
INSERT INTO `label` VALUES (22, 'E12', 'E12', '0', '5.9', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 3, '2004-11-17', '4');
INSERT INTO `label` VALUES (23, 'E12', 'E12', '0', '2', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 3, '2004-11-17', '5');
INSERT INTO `label` VALUES (24, 'E12', 'E12', '0', '5.9', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 3, '2004-11-17', '5');
INSERT INTO `label` VALUES (25, 'E12.', 'E12.', '0', '5.9', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 1, '2005-03-31', '64');
INSERT INTO `label` VALUES (26, 'E13', 'E13', '0', '10.35', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 1, '2005-03-31', '66');
INSERT INTO `label` VALUES (27, 'E14', 'E14', '0', '5.9', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 1, '2005-03-31', '67');
INSERT INTO `label` VALUES (28, 'E9.', 'E9.', '0', '5.5', '0', NULL, NULL, NULL, NULL, NULL, '10000', NULL, 1, '2005-03-31', '68');

# --------------------------------------------------------

#
# โครงสร้างตาราง `label_name`
#

DROP TABLE IF EXISTS `label_name`;
CREATE TABLE `label_name` (
  `label_name_id` int(11) NOT NULL auto_increment,
  `label_id` decimal(10,0) default NULL,
  `language_id` decimal(10,0) default NULL,
  `label_name` varchar(50) default NULL,
  `label_detail` blob,
  `label_img` varchar(50) default NULL,
  `STATUS` decimal(10,0) default NULL,
  PRIMARY KEY  (`label_name_id`)
) TYPE=MyISAM AUTO_INCREMENT=29 ;

#
# dump ตาราง `label_name`
#

INSERT INTO `label_name` VALUES (1, '1', '1', 'T NAME', 0x544553542041414141414141, NULL, '1');
INSERT INTO `label_name` VALUES (2, '2', '1', 'HANG TAG', 0x48414e4720544147202c20415254434152442032334f20472e202c203c62723e53495a452033352058313230204d4d2e20205052494e544544204f4e20424f54482053494445533c62723e, NULL, '1');
INSERT INTO `label_name` VALUES (3, '3', '1', 'WOVEN LABEL', 0x574f56454e204c4142454c202c204d4943524f2044414d41534b202c20454e4420464f4c44202c20554c545241534f4e494320435554202c203c62723e53495a4520313620582035382f3730204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (4, '4', '1', 'IMPORTATION LABEL', 0x494d504f52544154494f4e204c4142454c202c205052494e544544204c4142454c202c204e594c4f4e202c20484f54204355542c3c62723e53495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (5, '5', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (6, '6', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (7, '7', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (8, '8', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (9, '9', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (10, '10', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (11, '11', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (12, '12', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (13, '13', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (14, '14', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (15, '15', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (16, '16', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (17, '17', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (18, '18', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (19, '19', '1', 'IMPORTATION LABEL', 0x5052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c2053495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (20, '20', '1', 'WASH CARE LABEL', 0x574153482043415245204c4142454c202c205052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c3c62723e53495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (21, '21', '1', 'WASH CARE LABEL', 0x574153482043415245204c4142454c202c205052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c3c62723e53495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (22, '22', '1', 'WASH CARE LABEL', 0x574153482043415245204c4142454c202c205052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c3c62723e53495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (23, '23', '1', 'WASH CARE LABEL', 0x574153482043415245204c4142454c202c205052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c3c62723e53495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (24, '24', '1', 'WASH CARE LABEL', 0x574153482043415245204c4142454c202c205052494e544544204c4142454c202c204e594c4f4e202c20484f5420534c49542045444745202c3c62723e53495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (25, '25', '1', 'WASH   CARE LABEL', 0x574153482043415245204c4142454c202c205052494e544544204c4142454c202c204e594c4f4e202c20484f5420435554202c3c62723e53495a45203330205820313030204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (26, '26', '1', 'HANG TAG', 0x48414e4720544147202c20415254434152442032334f20472e202c3c62723e53495a452035352058203735204d4d2e205052494e544544204f4e20424f54482020534944455320284241434b2053494445202d20424152434f444520414e4420494e464f524d4154494f4e292c3c62723e, NULL, '1');
INSERT INTO `label_name` VALUES (27, '27', '1', 'WASH   CARE LABEL', 0x574153482043415245204c4142454c202c205052494e54454420204f4e20424f5448205349444553202c204e594c4f4e202c20484f5420435554202c3c62723e53495a45203330205820313030204d4d2e202b20424152434f4445205052494e544544204f4e20544845204241434b2053494445, NULL, '1');
INSERT INTO `label_name` VALUES (28, '28', '1', 'IMPORTATION LABEL', 0x494d504f52544154494f4e204c4142454c202c205052494e54454420204f4e204f4e452053494445202c204e594c4f4e202c20484f5420435554202c3c62723e53495a452033302058203630204d4d2e20, NULL, '1');

# --------------------------------------------------------

#
# โครงสร้างตาราง `language`
#

DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `language_id` int(11) NOT NULL auto_increment,
  `language_name` varchar(30) default NULL,
  `language_abbr` varchar(10) default NULL,
  `STATUS` decimal(10,0) default NULL,
  PRIMARY KEY  (`language_id`)
) TYPE=MyISAM AUTO_INCREMENT=16 ;

#
# dump ตาราง `language`
#

INSERT INTO `language` VALUES (1, 'English', 'En', '1');
INSERT INTO `language` VALUES (2, 'Spanish', 'Sp', '0');
INSERT INTO `language` VALUES (5, 'Spanish', 'Sp', '0');
INSERT INTO `language` VALUES (9, 'Thailand', 'Th', '0');
INSERT INTO `language` VALUES (12, 'Italy', 'ity', '0');
INSERT INTO `language` VALUES (13, 'French', 'French', '1');
INSERT INTO `language` VALUES (14, 'Italy', 'Italy', '0');
INSERT INTO `language` VALUES (15, 'Spanish', 'Spanish', '1');

# --------------------------------------------------------

#
# โครงสร้างตาราง `order_track`
#

DROP TABLE IF EXISTS `order_track`;
CREATE TABLE `order_track` (
  `order_track_id` int(11) NOT NULL auto_increment,
  `label_id` decimal(10,0) default NULL,
  `purchase_id` decimal(10,0) default NULL,
  `amount` decimal(10,0) default NULL,
  `gament_id` varchar(10) default NULL,
  `order_track_status` decimal(10,0) default NULL,
  `status_note` blob,
  `status` decimal(10,0) default NULL,
  PRIMARY KEY  (`order_track_id`)
) TYPE=MyISAM AUTO_INCREMENT=107 ;

#
# dump ตาราง `order_track`
#

INSERT INTO `order_track` VALUES (11, '3', '1', '30000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (12, '2', '1', '30000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (13, '4', '1', '30000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (29, '3', '6', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (28, '2', '6', '2000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (14, '2', '2', '10000000', '', NULL, NULL, '1');
INSERT INTO `order_track` VALUES (15, '2', '2', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (16, '2', '3', '1', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (17, '3', '3', '1', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (18, '4', '3', '1', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (19, '2', '4', '100000000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (20, '3', '4', '9999999', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (21, '4', '5', '3611', '', NULL, NULL, '1');
INSERT INTO `order_track` VALUES (22, '2', '5', '3611', '', NULL, NULL, '1');
INSERT INTO `order_track` VALUES (23, '2', '5', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (24, '4', '5', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (30, '3', '5', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (31, '28', '7', '50', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (32, '27', '7', '50', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (35, '2', '10', '1000', NULL, NULL, NULL, '1');
INSERT INTO `order_track` VALUES (36, '3', '10', '1000', NULL, NULL, NULL, '1');
INSERT INTO `order_track` VALUES (37, '4', '7', '50', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (38, '2', '8', '1', '', NULL, NULL, '1');
INSERT INTO `order_track` VALUES (39, '3', '11', '14000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (40, '2', '11', '13800', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (41, '25', '11', '13800', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (42, '4', '11', '13800', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (43, '2', '7', '50', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (47, '4', '12', '40000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (45, '3', '12', '40000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (48, '26', '12', '36099', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (49, '27', '12', '36099', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (50, '2', '13', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (51, '3', '14', '10000000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (52, '26', '14', '5000000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (53, '28', '14', '8000000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (56, '3', '16', '920', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (57, '4', '16', '920', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (58, '26', '16', '920', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (59, '25', '16', '920', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (63, '4', '17', '36500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (64, '3', '17', '36500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (65, '26', '17', '36068', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (66, '27', '17', '36068', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (67, '3', '18', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (68, '2', '18', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (69, '25', '18', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (70, '4', '18', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (72, '3', '19', '30000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (73, '27', '19', '7200', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (74, '26', '19', '7200', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (77, '26', '20', '2700', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (78, '27', '20', '2700', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (79, '26', '21', '5100', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (80, '27', '21', '5100', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (81, '26', '22', '15100', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (82, '27', '22', '15100', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (83, '28', '23', '29000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (85, '3', '2', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (86, '3', '25', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (87, '26', '25', '5900', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (88, '28', '25', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (89, '27', '25', '5900', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (90, '3', '26', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (91, '28', '26', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (92, '26', '26', '4810', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (93, '27', '26', '4860', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (94, '3', '27', '2500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (95, '28', '27', '2500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (96, '26', '27', '2850', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (97, '27', '27', '2850', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (98, '3', '28', '6500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (99, '28', '28', '6500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (100, '26', '28', '8600', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (101, '27', '28', '8400', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (102, '3', '29', '3000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (103, '28', '29', '3000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (104, '26', '29', '3650', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (105, '27', '29', '3650', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (106, '28', '8', NULL, NULL, NULL, NULL, '0');

# --------------------------------------------------------

#
# โครงสร้างตาราง `order_track1`
#

DROP TABLE IF EXISTS `order_track1`;
CREATE TABLE `order_track1` (
  `order_track_id` int(11) NOT NULL auto_increment,
  `label_id` decimal(10,0) default NULL,
  `purchase_id` decimal(10,0) default NULL,
  `amount` decimal(10,0) default NULL,
  `gament_id` varchar(10) default NULL,
  `order_track_status` decimal(10,0) default NULL,
  `status_note` blob,
  `status` decimal(10,0) default NULL,
  PRIMARY KEY  (`order_track_id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# dump ตาราง `order_track1`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `purchase`
#

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL auto_increment,
  `create_by` decimal(10,0) default NULL,
  `create_date` datetime default NULL,
  `purchase_status` decimal(10,0) default NULL,
  `status_note` varchar(100) default NULL,
  `purchase_code` varchar(9) default NULL,
  `mor_ran` decimal(10,0) default NULL,
  `pack` decimal(10,0) default NULL,
  `brochure` decimal(10,0) default NULL,
  `xmessage` blob,
  `sendtome` decimal(10,0) default NULL,
  `sendtocc` decimal(10,0) default NULL,
  `ccemail` varchar(200) default NULL,
  `invoice` decimal(10,0) default NULL,
  `invoice_num` varchar(10) default NULL,
  `pack_list` decimal(10,0) default NULL,
  `pack_list_num` varchar(10) default NULL,
  `cert_origin` decimal(10,0) default NULL,
  `cert_origin_num` varchar(10) default NULL,
  `credit` decimal(10,0) default NULL,
  `credit_card` varchar(20) default NULL,
  `credit_exp_date` varchar(7) default NULL,
  `total_credit_price_charge` varchar(15) default NULL,
  `vat_total` varchar(15) default NULL,
  `totals` varchar(15) default NULL,
  `xstatus` decimal(10,0) default NULL,
  `vat_charge` varchar(15) default NULL,
  PRIMARY KEY  (`purchase_id`)
) TYPE=MyISAM AUTO_INCREMENT=30 ;

#
# dump ตาราง `purchase`
#

INSERT INTO `purchase` VALUES (1, '6', '2004-11-17 14:06:09', '0', NULL, '000001', '2684479', '0', '0', '', '0', '0', '', '1', '2', '1', '2', '1', '2', '2', NULL, NULL, NULL, NULL, '675', '2', NULL);
INSERT INTO `purchase` VALUES (2, '121', '2004-11-19 09:59:49', '0', NULL, '000002', '1892918', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (3, '2', '2004-11-19 21:12:19', '0', NULL, '000003', '1518018', '0', '0', '', '0', '1', 'kampee@phana.net', '0', '0', '0', '0', '0', '0', '2', NULL, NULL, NULL, NULL, '0.0225', '2', NULL);
INSERT INTO `purchase` VALUES (4, '3', '2004-11-19 21:14:48', '0', NULL, '000004', '7707455', '0', '0', 0x74657374206279206b2e6e6f6f6d, '0', '0', '', '0', '0', '0', '0', '0', '0', '2', NULL, NULL, NULL, NULL, '979999.992', '2', NULL);
INSERT INTO `purchase` VALUES (5, '215', '2004-11-26 16:24:53', '0', NULL, '000005', '8324312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (6, '217', '2004-11-30 19:20:27', '0', NULL, '000006', '4441255', '0', '0', '', '0', '0', '', '1', '1', '1', '1', '1', '1', '2', NULL, NULL, NULL, NULL, '58', '2', NULL);
INSERT INTO `purchase` VALUES (7, '222', '2005-01-06 20:05:54', '0', NULL, '000007', '2694610', '0', '0', '', '0', '0', '', '0', '0', '0', '0', '0', '0', '1', NULL, NULL, NULL, NULL, '1.295', '0', NULL);
INSERT INTO `purchase` VALUES (8, '2', '2005-01-07 00:57:43', '0', NULL, '000008', '8050636', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (9, '225', '2005-01-07 08:40:32', '0', NULL, '000009', '120396', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (10, '226', '2005-01-10 19:29:40', '0', NULL, '000010', '484995', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (11, '227', '2005-01-19 23:27:43', '0', NULL, '000011', '4490863', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (12, '229', '2005-03-28 13:44:47', '0', NULL, '000012', '4900147', '1', '1', '', '1', '1', 'dinesh@cgindia.com', '1', '4', '1', '4', '1', '4', '2', NULL, NULL, NULL, NULL, '1126.60875', '2', NULL);
INSERT INTO `purchase` VALUES (13, '206', '2005-03-30 19:08:21', '0', NULL, '000013', '3618901', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (14, '126', '2005-04-03 01:51:31', '0', NULL, '000014', '2054979', '0', '0', 0x74686973206973206a757374207468652074657374696e67206f72646572206279204e554e492f4652414e43455343413c62723e3c62723e77652077696c6c2073656e6420796f7520746865207661726961626c6520696e666f726d6174696f6e206c617465722e2e2e2e, '1', '0', '', '1', '10', '1', '', '1', '2', '2', NULL, NULL, NULL, NULL, '175750', '2', NULL);
INSERT INTO `purchase` VALUES (15, '232', '2005-04-11 23:49:25', '0', NULL, '000015', '5626957', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (16, '231', '2005-04-12 17:56:39', '0', NULL, '000016', '9960302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (17, '229', '2005-04-15 17:42:16', '0', NULL, '000017', '2782779', '1', '1', '', '0', '0', 'kavi', '1', '3', '1', '3', '1', '3', '2', NULL, NULL, NULL, NULL, '1078.855', '2', NULL);
INSERT INTO `purchase` VALUES (18, '234', '2005-04-18 17:31:16', '0', NULL, '000018', '8333312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (19, '235', '2005-05-20 17:56:11', '0', NULL, '000019', '1367886', '0', '0', 0x4869204d73204170706c652c3c62723e506c656173652066696e6420686572657769746820616e206f7264657220666f72204d6f7267616e206c6162656c732e204920686176652073656e7420796f7520746865206f7264657220666f726d20666f722074686520453133202620453134207769746820746865697220696e737472756374696f6e732e20506c656173652064697370617463682074686973206f7264657220617320736f6f6e20617320706f737369626c652e20416e6420706c65617365206164766973652064656c6976657279206461746520616c736f2e3c62723e506c6561736520736869702074686520676f6f647320746f2074686520666f6c6c6f77696e6720616464726573733a3c62723e4a4f4e204144414d204555524f50453c62723e554e49542031312c20544f57455220425553494e455353205041524b2c204341524559205741592c2057454d424c45593c62723e4d4944444c455345582048413920304c513c62723e54454c3a2030303434323038393032303135333c62723e4641583a2030303434323038393032303135373c62723e434f4e544143543a204a4f53482e, '1', '0', 'josh_mgbo@jonadam.co.uk', '1', '1', '1', '1', '1', '1', '2', NULL, NULL, NULL, NULL, '357', '2', NULL);
INSERT INTO `purchase` VALUES (20, '235', '2005-05-24 17:52:31', '0', NULL, '000020', '8454516', '0', '0', 0x4869204d73204170706c652c3c62723e506c656173652066696e6420686572657769746820616e206f7264657220666f72204531332026204531342e3c62723e506c65617365206164766973652064656c6976657279206461746520617320736f6f6e20617320706f737369626c652e3c62723e506c6561736520646973706174636820676f6f647320746f2074686520666f6c6c6f77696e6720616464726573732e3c62723e4a4f4e204144414d204555524f50453c62723e554e49542031312c20544f57455220425553494e455353205041524b2c204341524559205741593c62723e57454d424c4559202c4c4f4e444f4e2048413920304c51, '1', '1', 'josh_mgbo@jonadam.co.uk', '1', '1', '1', '1', '1', '1', '2', NULL, NULL, NULL, NULL, '43.875', '2', NULL);
INSERT INTO `purchase` VALUES (21, '235', '2005-05-25 15:37:16', '0', NULL, '000021', '9374367', '0', '0', 0x506c656173652066696e6420686572657769746820616e206f7264657220666f72204531332026204531342e20506c656173652073656e642074686520676f6f647320746f2074686520666f6c6c6f77696e672064656c697665727920616464726573732e3c62723e4a4f4e204144414d204555524f50453c62723e554e49542031312c20544f57455220425553494e455353205041524b202c204341524559205741593c62723e57454d424c45592c2048413920304c513c62723e4c4f4e444f4e20554b3c62723e54454c3a30303434323038393032303135333c62723e4641583a30303434323038393032303135373c62723e434f4e544143543a204a4f53482e3c62723e, '0', '0', '', '1', '1', '1', '1', '1', '1', '2', NULL, NULL, NULL, NULL, '82.875', '2', NULL);
INSERT INTO `purchase` VALUES (22, '235', '2005-05-25 19:41:56', '0', NULL, '000022', '8307397', '0', '0', 0x506c656173652066696e6420686572657769746820616e206f7264657220666f72204531332026204531342e3c62723e506c656173652064697370617463682074686520676f6f647320746f2074686520666f6c6c6f77696e6720616464726573732e3c62723e4a4f4e204144414d204555524f50453c62723e554e49542031312c20544f57455220425553494e455353205041524b2c204341524559205741592c3c62723e57454d424c45592048413920304c513c62723e4c4f4e444f4e20554b3c62723e54454c3a30303434323038393032303135333c62723e4641583a30303434323038393032303135373c62723e434f4e544143543a4a4f53483c62723e, '1', '1', 'josh_mgbo@jonadam.co.uk', '1', '1', '1', '1', '1', '1', '2', NULL, NULL, NULL, NULL, '245.375', '2', NULL);
INSERT INTO `purchase` VALUES (23, '235', '2005-05-25 19:51:07', '0', NULL, '000023', '8468290', '0', '0', 0x506c656173652066696e6420686572657769746820616e206f7264657220666f722045392e20506c65617365206e6f7465207665727920696d706f7274616e742e3c62723e2a2a2a6265666f726520796f75207072696e742074686973206f726465722c206b696e646c792073656e64206d65206120636f707920627920666178206f6620746865204539206c6162656c20666f72206d6520746f2073656520616e6420617070726f76652e20506c6561736520666178207468697320617320736f6f6e20617320706f737369626c652e20596f75206d757374206e6f74207072696e742074686973206f7264657220756e74696c20796f7520686176652073656e74206d65207468652066617865642073616d706c65206f66207468652045392e20506c656173652064697370617463682074686520676f6f647320746f2074686520666f6c6c6f77696e672064656c697665727920616464726573732e3c62723e4a4f4e204144414d204555524f50453c62723e554e49542031312c20544f57455220425553494e455353205041524b2c204341524559205741592c3c62723e57454d424c45592048413920304c513c62723e4c4f4e444f4e20554b3c62723e54454c3a30303434323038393032303135333c62723e4641583a30303434323038393032303135373c62723e434f4e544143543a204a4f53482e3c62723e, '1', '1', 'josh_mgbo@jonadam.co.uk', '1', '1', '1', '1', '1', '1', '2', NULL, NULL, NULL, NULL, '159.5', '2', NULL);
INSERT INTO `purchase` VALUES (24, '235', '2005-06-09 17:35:57', '0', NULL, '000024', '9576069', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (25, '236', '2005-07-08 19:39:40', '0', NULL, '000025', '4243986', '0', '0', 0x494e564f4943452041444452455353203a204a4f4e204144414d204c54443c62723e3138342f313932204452554d4d4f4e44205354524545543c62723e4c4f4e444f4e3c62723e4e5731203348503c62723e3c62723e44454c4956455220414444524553533a204a4f4e204144414d204555524f50453c62723e554e49542031312c20544f57455220425553494e455353205041524b3c62723e4341524559205741592c2057454d424c45592e3c62723e4d4944444c455345582c204c4f4e444f4e2048413920304c513c62723e54454c3a2030303434323038393032303135333c62723e434f4e544143543a204a4f5348, '0', '0', '', '1', '1', '1', '1', '0', '0', '2', NULL, NULL, NULL, NULL, '163.375', '2', NULL);
INSERT INTO `purchase` VALUES (26, '236', '2005-07-22 17:16:24', '0', NULL, '000026', '6054458', '0', '0', 0x44656c697665727920616464726573733a3c62723e4a6f6e204164616d204575726f70653c62723e556e69742031312c20546f77657220627573696e657373207061726b2c3c62723e4361726579207761792c2057656d626c65793c62723e4d6964646c657365782c3c62723e4c6f6e646f6e3c62723e48413920304c513c62723e556e69746564204b696e67646f6d3c62723e, '1', '1', 'josh_mgbo@jonadam.co.uk', '1', '1', '1', '1', '0', '0', '2', NULL, NULL, NULL, NULL, '145.9575', '2', NULL);
INSERT INTO `purchase` VALUES (27, '236', '2005-08-10 18:12:00', '0', NULL, '000027', '2964053', '0', '0', 0x44656c697665727920616464726573733a204a6f6e204164616d206c74643c62723e556e69742031312c20546f77657220427573696e657373207061726b204361726579207761792c3c62723e57656d626c65792c206d6964646c657365783c62723e4c6f6e646f6e2c3c62723e48413920304c513c62723e556e69746564206b696e67646f6d3c62723e54656c3a30303434323038393032303134343c62723e4661783a30303434323038393032303135373c62723e436f6e746163743a4a6f73682e, '0', '0', '', '1', '1', '1', '1', '0', '0', '2', NULL, NULL, NULL, NULL, '80.0625', '2', NULL);
INSERT INTO `purchase` VALUES (28, '236', '2005-08-19 16:14:21', '0', NULL, '000028', '9352639', '0', '0', 0x44656c697665727920616464726573733a204a6f6e204164616d204575726f70653c62723e556e697420313120546f77657220427573696e657373207061726b206361726579207761792c3c62723e57656d626c65792c204d6964646c657365783c62723e48413920304c513c62723e6c4f4e444f4e3c62723e556e69746564204b696e67646f6d3c62723e436f6e746163743a204a6f73682e3c62723e54656c3a3030343432303839303230313434, '0', '0', '', '1', '1', '1', '1', '0', '0', '2', NULL, NULL, NULL, NULL, '226.32', '2', NULL);
INSERT INTO `purchase` VALUES (29, '236', '2005-09-13 16:33:30', '0', NULL, '000029', '5387043', '0', '0', 0x44656c697665727920616464726573732069733a3c62723e4a6f6e204164616d206575726f7065206c74642e3c62723e556e69742031312c20546f77657220427573696e657373207061726b2c206361726579207761792c3c62723e57656d626c65792c204d6964646c657365783c62723e4c6f6e646f6e2c3c62723e48413920304c513c62723e556e69746564204b696e67646f6d3c62723e54656c3a30303434323038393032303134343c62723e436f6e746163743a204a6f73682e, '1', '1', 'josh_mgbo@jonadam.co.uk', '1', '1', '1', '1', '0', '0', '2', NULL, NULL, NULL, NULL, '99.8125', '2', NULL);

# --------------------------------------------------------

#
# โครงสร้างตาราง `purchase1`
#

DROP TABLE IF EXISTS `purchase1`;
CREATE TABLE `purchase1` (
  `purchase_id` int(11) NOT NULL auto_increment,
  `create_by` decimal(10,0) default NULL,
  `create_date` datetime default NULL,
  `purchase_status` decimal(10,0) default NULL,
  `status_note` varchar(100) default NULL,
  `purchase_code` varchar(9) default NULL,
  `mor_ran` decimal(10,0) default NULL,
  `pack` decimal(10,0) default NULL,
  `brochure` decimal(10,0) default NULL,
  `xmessage` blob,
  `sendtome` decimal(10,0) default NULL,
  `sendtocc` decimal(10,0) default NULL,
  `ccemail` varchar(200) default NULL,
  `invoice` decimal(10,0) default NULL,
  `invoice_num` decimal(10,0) default NULL,
  `pack_list` decimal(10,0) default NULL,
  `pack_list_num` decimal(10,0) default NULL,
  `cert_origin` decimal(10,0) default NULL,
  `cert_origin_num` decimal(10,0) default NULL,
  `credit` decimal(10,0) default NULL,
  `credit_card` varchar(20) default NULL,
  `credit_exp_date` varchar(7) default NULL,
  `total_credit_price_charge` varchar(15) default NULL,
  `vat_total` varchar(15) default NULL,
  `totals` varchar(15) default NULL,
  `xstatus` decimal(10,0) default NULL,
  PRIMARY KEY  (`purchase_id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

#
# dump ตาราง `purchase1`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `users`
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `users_id` int(11) NOT NULL auto_increment,
  `user_fname` varchar(30) default NULL,
  `user_lname` varchar(30) default NULL,
  `login_name` varchar(10) default NULL,
  `password` varchar(10) default NULL,
  `email` varchar(50) default NULL,
  `zone_id` decimal(10,0) default NULL,
  `user_status` decimal(10,0) default NULL,
  PRIMARY KEY  (`users_id`)
) TYPE=MyISAM AUTO_INCREMENT=247 ;

#
# dump ตาราง `users`
#

INSERT INTO `users` VALUES (1, 'Ahr', 'ahr', 'ahr', 'ahr', 'pathompong@intellinet.co.th', '1', '1');
INSERT INTO `users` VALUES (2, 'Panida', 'Teeyakom', 'nuk', 'nuk123', 'panida@computerlabelworldwide.com', '1', '1');
INSERT INTO `users` VALUES (3, 'nuni', 'nuni', 'nuni', 'nuni123', 'nuni@computerlabelworldwide.com', '1', '1');
INSERT INTO `users` VALUES (4, 'ko', 'ko', 'ko', 'ko', 'krisdavut@intellinet.co.th', '3', '1');
INSERT INTO `users` VALUES (5, 'morgan', '', 'morgan', 'morgan123', 'panida@computerlabelworldwide.com', '2', '1');
INSERT INTO `users` VALUES (6, 'Pongsak', '', 'pongsak', 'pong123', 'pongsak@computerlabelworldwide.com', '1', '1');
INSERT INTO `users` VALUES (7, 'ysa', '', 'ysatest', 'ysa', 'ydupire@morgan.fr', '3', '1');
INSERT INTO `users` VALUES (8, 'tony', 'Collins', 'tony', 'tony123', 'tony-collins@computerlabelworldwide.com', '1', '1');
INSERT INTO `users` VALUES (98, 'jane', '', 'jane', 'mgn104jan', 'jssis76@hotmail.com', '3', '1');
INSERT INTO `users` VALUES (10, 'accent', '', 'accent', 'mgn1accent', '', '3', '1');
INSERT INTO `users` VALUES (11, 'beltdesign', '', 'beltdesign', 'mgn1bd', 'info@beltdesign.nl', '3', '1');
INSERT INTO `users` VALUES (12, 'beltfashion-mina', '', 'bfmina', 'mgn3bf', 'mina@beltfashion.nl', '3', '1');
INSERT INTO `users` VALUES (13, 'beltfashion-wim', '', 'bfwim', 'mgn4bf', 'wim@beltfashion.nl', '3', '1');
INSERT INTO `users` VALUES (14, 'BIK BIJOUX', '', 'bix', 'mgn5bix', 'info@bikbijoux.com', '3', '1');
INSERT INTO `users` VALUES (15, 'BOOIL - Dina', '', 'dbooil', 'mgn6booil', 'dinadina578@hotmail.com', '3', '1');
INSERT INTO `users` VALUES (16, 'BOOIL - Jenny', '', 'jbooil', 'mgn7booil', '653861@hanmail.net', '3', '1');
INSERT INTO `users` VALUES (17, 'CADANSA', '', 'cadansa', 'mgn8cada', 'cadansa@vsnl.com', '3', '1');
INSERT INTO `users` VALUES (18, 'CARTOUCHE', '', 'cartouche', 'mgn9cart', 'info@cartouche-fashion.com', '3', '1');
INSERT INTO `users` VALUES (19, 'CATARZI', '', 'catarzi', 'mgn10cat', 'ale.mic@user.ats.it', '3', '1');
INSERT INTO `users` VALUES (20, 'CAZZOLA', '', 'cazzola', 'mgn11caz', 'gu.chik@laposte.net', '3', '1');
INSERT INTO `users` VALUES (21, 'CHENARD', '', 'chenard', 'mgn12che', 'chenard92@aol.com', '3', '1');
INSERT INTO `users` VALUES (22, 'ACCESSOIRES DU TEMPLE', '', 'adutemple', 'mgn13adu', 'christophe.lin@online.fr', '3', '1');
INSERT INTO `users` VALUES (23, 'ALPHA', '', 'alpha', 'mgn14alpha', 'ceinture@club-internet.fr', '3', '1');
INSERT INTO `users` VALUES (24, 'ALPINE - Sanjay', '', 'alpine', 'mgn15alpin', 'sanjay@alpineapparels.com', '3', '1');
INSERT INTO `users` VALUES (25, 'ART et METAL - Martina', '', 'aemetal', 'mgn16metal', 'martina@artmetal.it', '3', '1');
INSERT INTO `users` VALUES (26, 'BEEJOO', '', 'beejoo', 'mgn17beejo', 'beejoo@tiscali.fr', '3', '1');
INSERT INTO `users` VALUES (27, 'BUSCARLET', '', 'buscarlet', 'mgn18bus', 'buscarlet@free.fr', '3', '1');
INSERT INTO `users` VALUES (28, 'CACTUS - Arnaud', '', 'cactus', 'mgn19cactu', 'jocaste_bontemps@msn.com', '3', '1');
INSERT INTO `users` VALUES (29, 'CARABASSE', '', 'carabasse', 'mgn20cara', 'carabasse@gardtex.com', '3', '1');
INSERT INTO `users` VALUES (30, 'COURT CIRCUIT', '', 'court', 'mgn21court', 'usedjeans@hotmail.com', '3', '1');
INSERT INTO `users` VALUES (31, 'D.F.I.', '', 'dfi', 'mgn22dfi', '', '3', '1');
INSERT INTO `users` VALUES (33, 'D.V.I', '', 'dvi', 'mgn23dvi', 'reddvi@terra.es', '3', '1');
INSERT INTO `users` VALUES (97, 'phil', '', 'franis', 'mgn95sc', '', '3', '1');
INSERT INTO `users` VALUES (34, 'DANIEL', '', 'daniel', 'mgn24danie', 'daniel@sttspa.it', '3', '1');
INSERT INTO `users` VALUES (35, 'DI MODE', '', 'dimode', 'mgn25dimod', 'di-mode@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (36, 'DENIS BOUCHER', '', 'denis', 'mgn26denis', 'denisboucher@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (37, 'DORA - David', '', 'dora', 'mgn27dora', 'dbusato@dora.it', '3', '1');
INSERT INTO `users` VALUES (38, 'DURAND', '', 'durand', 'mgn28duran', 'durand@ilias.com', '3', '1');
INSERT INTO `users` VALUES (39, 'ELITE', '', 'elite', 'mgn29elite', 'elite.paris@noos.fr', '3', '1');
INSERT INTO `users` VALUES (40, 'FANCY FASHIONS', '', 'ffashion', 'mgn30ffash', 'ffashion@del2.vsnl.net.in', '3', '1');
INSERT INTO `users` VALUES (41, 'GANESHA', '', 'ganesha', 'mgn31ga', 'ganesha@vsnl.com', '3', '1');
INSERT INTO `users` VALUES (42, 'GRIFONI', '', 'grifoni', 'mgn32grifo', 'grifoni@ukgateway.net', '3', '1');
INSERT INTO `users` VALUES (43, 'GUILLAUMOND', '', 'gmont', 'mgn33gmont', 'e.deleage@guillaumond.com', '3', '2');
INSERT INTO `users` VALUES (44, 'ICAS', '', 'icas', 'mgn34icas', 'info@icascaps.it', '3', '1');
INSERT INTO `users` VALUES (45, 'ICAS - Giuseppina', '', 'icasg', 'mgn35icasg', 'giuseppina@icascaps.it', '3', '1');
INSERT INTO `users` VALUES (46, 'JOLIJOUBI', '', 'harrycover', 'mgn36hc', 'info@harrycover.com', '3', '1');
INSERT INTO `users` VALUES (47, 'JOLIJOUBI  Annabelle', '', 'harrycover', 'mgn37hcja', 'annabelle.taupin@harrycover.com', '3', '1');
INSERT INTO `users` VALUES (48, 'KHRISHNA - Jasmeet', '', 'kgkrish', 'mgn38kj', 'kgkrish@nda.vsnl.net.in', '3', '1');
INSERT INTO `users` VALUES (49, 'KOCABAS', '', 'bkocabas', 'mgn39bk', 'bkocabas@attnet.net.tr', '3', '1');
INSERT INTO `users` VALUES (50, 'LCDA', '', 'lcda', 'mgn40lcda', 'lcda@club-internet.fr', '3', '1');
INSERT INTO `users` VALUES (51, 'LEMIE - Matteo', '', 'matteo', 'mgn41mt', 'b.matteo@lemie.it', '3', '1');
INSERT INTO `users` VALUES (52, 'LEMIE - Pascal', '', 'pascal', 'mgn42pc', 'pbeaufort.leika@9online.fr', '3', '1');
INSERT INTO `users` VALUES (53, 'LERI', '', 'leri', 'mgn43leri', 'lericeintures@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (54, 'MAGIC', '', 'magic', 'mgn44mg', 'magic.fourniture@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (55, 'MATIERE A ACCESSOIRES', '', 'matiere', 'mgn45ma', 'matiere-a-accessoire@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (56, 'MILADY -Sab', '', 'tournesol', 'mgn46ms', 'tournesol.sa@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (57, 'MOD\'CRAVATE', '', 'infomcv', 'mgn47mcv', 'info@modcravate.com', '3', '1');
INSERT INTO `users` VALUES (58, 'MODENA', '', 'modena', 'mgn48ml', 'olivier@modana-laimbock.nl', '3', '1');
INSERT INTO `users` VALUES (59, 'MPD', '', 'mpd', 'mgn49mpd', 'wortelboer@mpd-acc.nl', '3', '1');
INSERT INTO `users` VALUES (60, 'OCEANIC', '', 'oceanic', 'mgn50oce', 'pitu@oceanicjewellers.com', '3', '1');
INSERT INTO `users` VALUES (61, 'ORCA', '', 'orca', 'mgn51orca', 'imceafax-orca@morgan.fr', '3', '1');
INSERT INTO `users` VALUES (62, 'PELLETERIE- Alberto', '', 'alberto', 'mgn52pa', '', '3', '1');
INSERT INTO `users` VALUES (63, 'PORRIER', '', 'porrier', 'mgn53tc', 'lesbasrobert@tiscali.fr', '3', '1');
INSERT INTO `users` VALUES (64, 'RAND', '', 'rand', 'mgn54rand', 'office@rand-freres.com', '3', '1');
INSERT INTO `users` VALUES (65, 'RAND - Xavier', '', 'randxd', 'mgn55randx', '', '3', '1');
INSERT INTO `users` VALUES (66, 'REBECCA', '', 'rebecca', 'mgn56er', '', '3', '1');
INSERT INTO `users` VALUES (67, 'RIWODIS', '', 'riwodis', 'mgn57noos', 'riwodis@noos.fr', '3', '1');
INSERT INTO `users` VALUES (68, 'RUBINSTEIN - Alexandre', '', 'bubinstein', 'mgn58ra', 'alexforrubinstein@skynet.be', '3', '1');
INSERT INTO `users` VALUES (69, 'SARLINI - Nicole', '', 'sarlini', 'mgn59sn', 'salesdep_nl@sarlini.com', '3', '1');
INSERT INTO `users` VALUES (70, 'SIJOLI', '', 'sijoli', 'mgn60aol', 'sijolibijoux@aol.com', '3', '1');
INSERT INTO `users` VALUES (71, 'STEVAL', '', 'steval', 'mgn61sv', 'stevalvalor@online.fr', '3', '1');
INSERT INTO `users` VALUES (72, 'STYLECUIR', '', 'stylecuir', 'mgn62wnd', 'style.cuir@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (73, 'T.E.CAPPELLIFICIO', '', 'jacqueslaf', 'mgn63lbr', 'jacqueslafond@libero.it', '3', '1');
INSERT INTO `users` VALUES (74, 'THEVENON', '', 'thevenon', 'mgn64tvn', 'christophe@thevenon.com', '3', '1');
INSERT INTO `users` VALUES (75, 'TOURNEROCHE', '', 'tourneroch', 'mgn65wnd', 'tourneroche@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (76, 'TRENDY - Alesssandro', '', 'alemic', 'mgn66ta', 'ale.mic@user.ats.it', '3', '1');
INSERT INTO `users` VALUES (77, 'VERSTEEGH', '', 'versteegh', 'mgn67wnd', 'htoulemonde@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (78, 'VIBHOR', '', 'saivibhor', 'mgn68ttld', 'saivibhor@touchtelindia.net', '3', '1');
INSERT INTO `users` VALUES (79, 'WWG', '', 'wwg', 'mgn69wwg', 'wwg@wwgltd.co.uk', '3', '1');
INSERT INTO `users` VALUES (80, 'WWG  Roxy', '', 'wwgr', 'mgn70wwgr', 'roxy@wwwgltd.co.uk', '3', '1');
INSERT INTO `users` VALUES (81, 'ZIFEL', '', 'zifel', 'mgn71zifel', 'zifel@wanadoo.fr', '3', '1');
INSERT INTO `users` VALUES (82, 'BRUNA', '', 'bruna', 'mgn72bruna', '', '3', '1');
INSERT INTO `users` VALUES (83, 'DELCOURT  - Sione', '', 'dsione', 'mgn73dsi', 'sione@delcourt.nl', '3', '1');
INSERT INTO `users` VALUES (84, 'GANESHA ART GALLERY -', 'Sangeet/Sumit', 'gag', 'mgn74gag', 'info@ganesha-mahendra.com', '3', '1');
INSERT INTO `users` VALUES (85, 'VERSTEEGH - Ellen de  Klein', '', 'vellen', 'mgn75ve', 'ellen@versteegh.nl', '3', '1');
INSERT INTO `users` VALUES (86, 'odette', 'courrier', 'odette', 'mgn76ode', '', '3', '1');
INSERT INTO `users` VALUES (87, 'ACM - Chiara', '', 'acmc', 'mgn77acmc', 'info@acmdettaglidimoda.it', '3', '2');
INSERT INTO `users` VALUES (88, 'ANTONIAZZI - Doenico', '', 'antoniazzi', 'mgn101ant', 'antoniazzi@antoniazzi1.191.it', '3', '1');
INSERT INTO `users` VALUES (89, 'BROCHOT - Vanessa Ouarem', '', 'vanessa', 'mgn79bv', '', '1', '1');
INSERT INTO `users` VALUES (90, 'DODI - Christian', '', 'dodi', 'mgn103dod', 'dodi@dodi.be', '3', '1');
INSERT INTO `users` VALUES (91, 'ISTANBUL - Fabrice Dupont', '', 'istanbul', 'mgn81is', '', '1', '1');
INSERT INTO `users` VALUES (92, 'ISTANBUL - Fabrice Dupont', '', 'istanbul', 'mgn81is', '', '3', '1');
INSERT INTO `users` VALUES (93, 'MEAZZO BENITO - Manuela Meazzo', '', 'meazzo', 'mgn102mea', 'meazzo@tin.it', '3', '1');
INSERT INTO `users` VALUES (94, 'ORCA - Bertrand Bigot', '', 'orca', 'mgn82orca', '', '3', '1');
INSERT INTO `users` VALUES (95, 'PAULA DESIGN - Maud Jacob', '', 'maud2st', 'mgn83maud', '', '3', '1');
INSERT INTO `users` VALUES (96, 'VOG - Audrey', '', 'laetitia', 'mgn84vog', '', '3', '1');
INSERT INTO `users` VALUES (99, 'Vanessa', 'Ouarem', 'Brochot', 'mgn97bro', '', '1', '1');
INSERT INTO `users` VALUES (100, 'CHRISTINE', '', 'CHRISTELLE', 'MGN98CIS', '', '1', '1');
INSERT INTO `users` VALUES (101, 'GIORGIO', '', 'GIORGIO', 'mgn99gio', '', '3', '1');
INSERT INTO `users` VALUES (102, 'vincent', 'yeung', 'VINCENT', 'mgn100vin', '', '3', '1');
INSERT INTO `users` VALUES (103, 'gianpaolo', '', 'antoniazzi', 'mgn101ant', '', '3', '1');
INSERT INTO `users` VALUES (104, 'alessio', 'benelli', 'cappellifi', 'mgn101cap', '', '3', '1');
INSERT INTO `users` VALUES (105, 'wayne', 'larkin', 'pauladesig', 'mgn103pau', '', '3', '1');
INSERT INTO `users` VALUES (106, 'wayne l', 'arkin', 'pauladesig', 'mgn103pau', '', '3', '1');
INSERT INTO `users` VALUES (107, 'abhi', '', 'abhi', 'abhi123', '', '1', '1');
INSERT INTO `users` VALUES (108, 'Chiara', '', 'ACM', 'mgn1acm', 'info@acmdettaglidimoda.it', '3', '1');
INSERT INTO `users` VALUES (109, 'thanulux', '', 'thanulux', 'mgntot101', 'totalway@thanulux.com', '3', '1');
INSERT INTO `users` VALUES (110, 'Clenoir', '', 'clenoir', 'mgn99up', '', '3', '1');
INSERT INTO `users` VALUES (111, 'Steve', '', 'steve', 'mgn55temp', '', '3', '1');
INSERT INTO `users` VALUES (112, 'Marie', '', 'marie', 'mgn66mar', '', '3', '1');
INSERT INTO `users` VALUES (113, 'Sanjay', '', 'sanjay', 'mgn11alp', '', '3', '1');
INSERT INTO `users` VALUES (114, 'Wilma', '', 'wilma', 'mgn22bel', '', '3', '1');
INSERT INTO `users` VALUES (115, 'Shirley', '', 'shirley', 'mgn55ori', '', '3', '1');
INSERT INTO `users` VALUES (116, 'Shirley', '', 'shirley', 'mgn55ori', '', '3', '1');
INSERT INTO `users` VALUES (117, 'Marie', '', 'marie', 'mgn77dur', '', '3', '1');
INSERT INTO `users` VALUES (118, 'Jill', '', 'jill', 'mgn11kel', '', '3', '1');
INSERT INTO `users` VALUES (119, 'Dina', '', 'dina', 'mgn77bbc', '', '3', '1');
INSERT INTO `users` VALUES (120, 'Olivier', '', 'olivier', 'mgn12upd', '', '3', '1');
INSERT INTO `users` VALUES (121, 'ple', '', 'ple', 'ple123', '', '1', '1');
INSERT INTO `users` VALUES (122, 'lisa', '', 'ima', 'ima123', '', '3', '1');
INSERT INTO `users` VALUES (123, 'Thomas', '', 'Jocaste', 'joc123', '', '3', '1');
INSERT INTO `users` VALUES (124, 'Dieter', '', 'Blumenmull', 'Blu123', '', '3', '1');
INSERT INTO `users` VALUES (125, 'Dieter', '', 'Blumenmull', 'Blu123', '', '3', '1');
INSERT INTO `users` VALUES (126, 'Francesca', '', 'francesca', 'frances', 'ple@yahoo.com', '3', '1');
INSERT INTO `users` VALUES (127, 'Annabelle', '', 'annabelle', 'mgn23har', 'frapieralli@globeagency.it', '3', '1');
INSERT INTO `users` VALUES (128, 'Christophe', '', 'christophe', 'mgn55the', '', '3', '1');
INSERT INTO `users` VALUES (129, 'Dieter', '', 'dieter', 'mgn77blu', '', '3', '1');
INSERT INTO `users` VALUES (130, 'Thomas', '', 'jacoste', 'mgn68jac', '', '3', '1');
INSERT INTO `users` VALUES (131, 'Lisa', '', 'lisa', 'mgn99lma', '', '3', '1');
INSERT INTO `users` VALUES (132, 'Guillaumond', '', 'guillaumon', 'mgn11gui', 'e.deleage@guillaumond.com', '3', '1');
INSERT INTO `users` VALUES (133, 'Norbelik', '', 'norbelik', 'mgn88des', '', '3', '1');
INSERT INTO `users` VALUES (134, 'Alessandro', '', 'rebecca', 'mgn66ess', '', '3', '1');
INSERT INTO `users` VALUES (135, 'Alessandro', '', 'berni', 'mgn22tre', '', '3', '1');
INSERT INTO `users` VALUES (136, 'Alessandro', '', 'berni', 'mgn22tre', '', '3', '1');
INSERT INTO `users` VALUES (137, 'Agnes', 'Havet', 'agnes', 'mgn11joc', '', '3', '1');
INSERT INTO `users` VALUES (138, 'Saigal', '', 'empire', 'mgn65int', '', '3', '1');
INSERT INTO `users` VALUES (139, 'Saigal', '', 'empire', 'mgn65int', '', '3', '1');
INSERT INTO `users` VALUES (140, 'David', '', 'dimode', 'mgn25mod', '', '3', '1');
INSERT INTO `users` VALUES (141, 'sarfati', '', 'prescilla', 'mgn78pre', '', '3', '1');
INSERT INTO `users` VALUES (142, 'ALINE', '', 'CARO CUIR', 'MGN105CARO', '', '3', '1');
INSERT INTO `users` VALUES (143, 'EVELYNE', '', 'EUROLINE', 'mgn106euro', '', '1', '1');
INSERT INTO `users` VALUES (144, 'Touchstone', '', 'touchstone', 'mgn11tou', 'emma@touchstoneimports.com', '3', '1');
INSERT INTO `users` VALUES (145, 'Blare-accessories', '', 'blare', 'mgn11bla', '', '1', '1');
INSERT INTO `users` VALUES (146, 'Blair-accessories', '', 'Blair', 'mgn11bla', '', '1', '1');
INSERT INTO `users` VALUES (147, 'STOLAR', '', 'STOLAR', 'MGN12STO', '', '1', '1');
INSERT INTO `users` VALUES (148, 'AGORA', '', 'AGORA', 'MGN14AG', '', '3', '1');
INSERT INTO `users` VALUES (149, 'DESIGN + BAHNG SWBAHNG', '', 'DESIGN', 'MGN15DE', '', '1', '1');
INSERT INTO `users` VALUES (150, 'TRENDY', '', 'TRENDY', 'MGN16TR', 'ale.mic@user.ats.it', '3', '1');
INSERT INTO `users` VALUES (151, 'JN +', '', 'JN', 'MGN17JN', '', '3', '1');
INSERT INTO `users` VALUES (152, 'UP2DATE', '', 'U2D', 'mgn18up', '', '3', '1');
INSERT INTO `users` VALUES (153, 'TIEFFE', '', 'tieffe', 'mgn19ti', '', '3', '1');
INSERT INTO `users` VALUES (154, 'TIEFFE', '', 'tieffe', 'mgn19ti', '', '3', '1');
INSERT INTO `users` VALUES (155, 'Facy fashion', '', 'fancy', 'mgn19fa', '', '3', '1');
INSERT INTO `users` VALUES (156, 'Delta sourcing', '', 'delta', 'mgn20del', '', '3', '1');
INSERT INTO `users` VALUES (157, 'Onlin - Chistopho', '', 'onlin', 'mgn55onl', '', '3', '1');
INSERT INTO `users` VALUES (158, 'Theaacessories', '', 'Thea', 'mgn107the', '', '3', '1');
INSERT INTO `users` VALUES (159, 'Oceanic', '', 'ocean', 'mgn22oce', '', '3', '1');
INSERT INTO `users` VALUES (160, 'Oceanic', '', 'ocean', 'mgn22oce', '', '3', '1');
INSERT INTO `users` VALUES (161, 'Abexo - Radhe', '', 'Abexo', 'mgn77abe', '', '3', '1');
INSERT INTO `users` VALUES (162, 'BBCREATION - Jenny', '', 'bbcreation', 'mgn123bbc', '', '3', '1');
INSERT INTO `users` VALUES (163, 'Libero', '', 'Libero', 'mgn01lib', '', '3', '1');
INSERT INTO `users` VALUES (164, 'Acmdettaglidimoda', '', 'acmdet', 'mgn02acm', '', '3', '1');
INSERT INTO `users` VALUES (165, 'Inbhold', '', 'inbhold', 'mgn03inb', '', '3', '1');
INSERT INTO `users` VALUES (166, 'Appella', '', 'appella', 'mgn04app', '', '3', '1');
INSERT INTO `users` VALUES (167, 'Jonadam', '', 'Jonadam', 'mgn05jon', '', '3', '1');
INSERT INTO `users` VALUES (168, 'Magic Cloth', '', 'Magic', 'mgn06mgn', '', '3', '1');
INSERT INTO `users` VALUES (169, 'Arnaud', '', 'arnaud', 'mgn08arn', '', '3', '1');
INSERT INTO `users` VALUES (170, 'Magic cloth', '', 'Magic', 'mgn06mag', '', '3', '1');
INSERT INTO `users` VALUES (171, 'KEWECHRIS - LILIANE', '', 'KEWECHRIS', 'MGN123KEW', '', '3', '1');
INSERT INTO `users` VALUES (172, 'PUNTO FIBBIA', '', 'PUNTO', 'MGN456PUN', '', '3', '1');
INSERT INTO `users` VALUES (173, 'PERICELL - BRUNO', '', 'PERICELL', 'MGN789PER', '', '3', '1');
INSERT INTO `users` VALUES (174, 'SANJING - ISABELLE', '', 'SANJING', 'mgn111san', '', '3', '1');
INSERT INTO `users` VALUES (175, 'Cathaya', '', 'catha', 'mgn44cat', '', '3', '1');
INSERT INTO `users` VALUES (176, 'Lideal', '', 'Lideal', 'mgn77lid', '', '3', '1');
INSERT INTO `users` VALUES (177, 'Lideal', '', 'Lideal', 'mgn77lid', '', '3', '1');
INSERT INTO `users` VALUES (178, 'Lideal', '', 'Lideal', 'mgn77lid', '', '3', '1');
INSERT INTO `users` VALUES (179, 'Grace', '', 'Grace', 'mgn88gr', '', '3', '1');
INSERT INTO `users` VALUES (180, 'Kousi - Stephanie', '', 'kousi', 'mgn99kou', '', '3', '1');
INSERT INTO `users` VALUES (181, 'Baytekin', '', 'bay', 'mgn04bay', '', '3', '1');
INSERT INTO `users` VALUES (182, 'Bix bijoux', '', 'bix', 'mgn05bix', '', '3', '1');
INSERT INTO `users` VALUES (183, 'Bix bijoux', '', 'bix', 'mgn05bix', '', '3', '1');
INSERT INTO `users` VALUES (184, 'BERUGBE', '', 'ber', 'mgn06ber', '', '3', '1');
INSERT INTO `users` VALUES (185, 'GB Concept', '', 'gb', 'mgn08gb', '', '3', '1');
INSERT INTO `users` VALUES (186, 'Kavitak', '', 'kav', 'mgn09kav', '', '3', '1');
INSERT INTO `users` VALUES (187, 'Globtex', '', 'glob', 'mgn10glo', '', '3', '1');
INSERT INTO `users` VALUES (188, 'Thomas - yu', '', 'mar', 'mgn11mar', '', '3', '1');
INSERT INTO `users` VALUES (189, 'Kelly', '', 'kellly', 'mgn66kel', '', '3', '1');
INSERT INTO `users` VALUES (190, 'Kelly', '', 'kellly', 'mgn66kel', '', '3', '1');
INSERT INTO `users` VALUES (191, 'Kelly', '', 'kellly', 'mgn66kel', '', '3', '1');
INSERT INTO `users` VALUES (192, 'GB2 Concept', '', 'gb2', 'mgn88gb2', '', '3', '1');
INSERT INTO `users` VALUES (193, 'MT - Trading', '', 'tra', 'mgn99tra', '', '3', '1');
INSERT INTO `users` VALUES (194, 'Back to Back', '', 'back', 'mgn14bac', '', '3', '1');
INSERT INTO `users` VALUES (195, 'Back to Back', '', 'back', 'mgn14bac', '', '3', '1');
INSERT INTO `users` VALUES (196, 'Orca - accessoires', '', 'orca', 'mgn15orc', '', '3', '1');
INSERT INTO `users` VALUES (197, 'Groupephl', '', 'group', 'mgn16gro', '', '3', '1');
INSERT INTO `users` VALUES (198, 'Arnaudmenasce2', '', 'arn', 'mgn17arn', '', '3', '1');
INSERT INTO `users` VALUES (199, 'Arnaudmenasce2', '', 'arn', 'mgn17arn', '', '3', '1');
INSERT INTO `users` VALUES (200, 'Victor', '', 'vic', 'mgn18vic', '', '3', '1');
INSERT INTO `users` VALUES (201, 'Pierredjian', '', 'pie', 'mgn19pie', '', '3', '1');
INSERT INTO `users` VALUES (202, 'Bensaad', '', 'ben', 'mgn20ben', '', '3', '1');
INSERT INTO `users` VALUES (203, 'Libertex', '', 'libertex', 'mgn21lib', '', '3', '1');
INSERT INTO `users` VALUES (204, 'SUN - IL', '', 'sun', 'mgn55sun', '', '3', '1');
INSERT INTO `users` VALUES (205, 'Orca-accessoires', '', 'orca', 'mgn123orca', '', '3', '1');
INSERT INTO `users` VALUES (206, 'crystal', '', 'crystal', 'cry123', '', '1', '1');
INSERT INTO `users` VALUES (207, 'Murano', '', 'murano', 'mgn99mura', '', '3', '1');
INSERT INTO `users` VALUES (208, 'Murano - Garment', '', 'murano', 'mgn99mura', '', '3', '1');
INSERT INTO `users` VALUES (209, 'Murano - Garment', '', 'murano', 'mgn99mura', '', '3', '1');
INSERT INTO `users` VALUES (210, 'Eurago', '', 'eurago', 'mgn100eura', '', '3', '1');
INSERT INTO `users` VALUES (211, 'Eurago', '', 'eurago', 'mgn100eura', '', '3', '1');
INSERT INTO `users` VALUES (212, 'Eurago', '', 'eurago', 'mgn100eura', '', '3', '1');
INSERT INTO `users` VALUES (213, 'Eurago', '', 'eurago', 'mgn100eura', '', '3', '1');
INSERT INTO `users` VALUES (214, 'Eurago', '', 'eurago', 'mgn100eura', '', '3', '1');
INSERT INTO `users` VALUES (215, 'Citilogic', '', 'citilog', 'mgn50cit', '', '3', '1');
INSERT INTO `users` VALUES (216, 'MDT - China', '', 'mdt', 'mgn44mdt', '', '3', '1');
INSERT INTO `users` VALUES (217, 'Sun - IL', '', 'sun', 'mgn60sun', '', '3', '1');
INSERT INTO `users` VALUES (218, 'Magic Cloth', '', 'Magic', 'mgn99mag', '', '3', '1');
INSERT INTO `users` VALUES (219, 'Dongguan', '', 'Don', 'mgn29Dong', '', '3', '1');
INSERT INTO `users` VALUES (220, 'Rag Trade', '', 'rag', 'mgn85rag', '', '3', '1');
INSERT INTO `users` VALUES (221, 'Rag Trade', '', 'rag', 'mgn85rag', '', '3', '1');
INSERT INTO `users` VALUES (222, 'vangie', '', 'vangie', 'vangie123', 'vangie@computerlabelworldwide.com', '1', '1');
INSERT INTO `users` VALUES (223, 'TUNA - CLW TR', '', 'tuna', 'tuna123', '', '1', '1');
INSERT INTO `users` VALUES (224, 'TUNA - CLW TR', '', 'tuna', 'tuna321', '', '1', '1');
INSERT INTO `users` VALUES (225, 'CLW', 'CLW', 'clw', 'clwxyz', '', '1', '1');
INSERT INTO `users` VALUES (226, 'Morganfr', '', 'morganfr', 'bjpaccess', '', '1', '1');
INSERT INTO `users` VALUES (227, 'Sika - Myriam', '', 'sika', 'mgn14sika', '', '3', '1');
INSERT INTO `users` VALUES (228, 'J&W Trading', '', 'JNW', 'mgn27jnw', '', '3', '1');
INSERT INTO `users` VALUES (229, 'CGINDIA', '', 'cgi', 'mgn11cgi', '', '3', '1');
INSERT INTO `users` VALUES (230, 'MK - Brasil', '', 'mk', 'mgn22mk', '', '3', '1');
INSERT INTO `users` VALUES (231, 'Abdellatif Bensaad', '', 'abdella', 'mgn09abd', '', '3', '1');
INSERT INTO `users` VALUES (232, 'Orlyrafy', '', 'Orly', 'mgn11orl', '', '3', '1');
INSERT INTO `users` VALUES (233, 'Jiangsu Wuzhong Imp. & Exp.', '', 'jiang', 'mgn12jia', '', '3', '1');
INSERT INTO `users` VALUES (234, 'Sika - Elisa', '', 'sika', 'mgn18sika', '', '3', '1');
INSERT INTO `users` VALUES (235, 'Jon Adam', '', 'jon', 'mgn19jon', '', '3', '2');
INSERT INTO `users` VALUES (236, 'josh', '', 'jonadamnew', 'jonadamnew', '', '1', '1');
INSERT INTO `users` VALUES (237, 'Josh', 'Mgbo', 'josh', 'jos234', 'aaaa@', '3', '2');
INSERT INTO `users` VALUES (238, 'Choudhary Garment', '', 'chgarment', 'chgarment1', '', '1', '1');
INSERT INTO `users` VALUES (239, 'Choudhary Garment', '', 'chgarment', 'chgarment1', '', '1', '1');
INSERT INTO `users` VALUES (240, 'choudhary garments', '', 'chgarment', 'chgarment', '', '1', '1');
INSERT INTO `users` VALUES (241, 'angelique', '', 'starbelts', 'starbelts1', '', '1', '1');
INSERT INTO `users` VALUES (242, 'angelique', '', 'starbelts', 'starbelts', '', '1', '1');
INSERT INTO `users` VALUES (243, 'angelique', '', 'starbelts', 'starbelts', '', '1', '1');
INSERT INTO `users` VALUES (244, 'Angelique', '', 'starbelts', 'star', '', '1', '1');
INSERT INTO `users` VALUES (245, 'Tim', '', 'starbelts', 'star', '', '1', '1');
INSERT INTO `users` VALUES (246, 'monica', '', 'euroluck', 'monica', '', '1', '1');
