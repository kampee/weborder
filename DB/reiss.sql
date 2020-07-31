# phpMyAdmin SQL Dump
# version 2.5.4
# http://www.phpmyadmin.net
#
# โฮสต์: localhost
# เวลาในการสร้าง: 31 ก.ค. 2020  12:28น.
# รุ่นของเซิร์ฟเวอร์: 4.0.16
# รุ่นของ PHP: 4.3.3
# 
# ฐานข้อมูล : `reiss`
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

INSERT INTO `label` VALUES (1, 'TEST CODE', 'T001', '5000', '10', '10000', NULL, NULL, NULL, NULL, NULL, '100', NULL, 3, '2004-11-19', '0');
INSERT INTO `label` VALUES (2, '0381', '0381', '5000', '19.5', '71500', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-06-27', '1');
INSERT INTO `label` VALUES (3, '0377', '0377', '5000', '13.5', '5706', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '2');
INSERT INTO `label` VALUES (4, '0378/1', '0378/1', '5000', '8', '11130', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 3, '2004-11-19', '3');
INSERT INTO `label` VALUES (5, '0378/1', '0378/1', '5000', '8', '11130', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 3, '2004-11-19', '3');
INSERT INTO `label` VALUES (6, '0378/1', '0378/1', '5000', '8', '11130', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 3, '2004-11-19', '3');
INSERT INTO `label` VALUES (7, '0378-1', '0378-1', '5000', '8', '10230', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '3');
INSERT INTO `label` VALUES (8, '0378-2', '0378-2', '5000', '8', '7130', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '4');
INSERT INTO `label` VALUES (9, '0378-3', '0378-3', '5000', '8', '9950', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '5');
INSERT INTO `label` VALUES (10, '0378-4', '0378-4', '5000', '8', '12305', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '6');
INSERT INTO `label` VALUES (11, '0378-5', '0378-5', '5000', '8', '10645', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '7');
INSERT INTO `label` VALUES (12, '0378-6', '0378-6', '5000', '8', '19236', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '8');
INSERT INTO `label` VALUES (13, '0378-7', '0378-7', '5000', '8', '23787', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '9');
INSERT INTO `label` VALUES (14, '0378-8', '0378-8', '5000', '8', '20114', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '10');
INSERT INTO `label` VALUES (15, '0378-9', '0378-9', '5000', '8', '12956', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '11');
INSERT INTO `label` VALUES (16, '0378-11', '0378-11', '5000', '8', '12080', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-06-27', '13');
INSERT INTO `label` VALUES (17, '0378-10', '0378-10', '5000', '8', '9400', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 3, '2004-11-19', '12');
INSERT INTO `label` VALUES (18, '0378-10', '0378-10', '5000', '8', '9400', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 3, '2004-11-19', '12');
INSERT INTO `label` VALUES (19, '0378-12', '0378-12', '5000', '8', '13790', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-06-27', '14');
INSERT INTO `label` VALUES (20, '00379-1', '00379-1', '5000', '23', '42100', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '15');
INSERT INTO `label` VALUES (21, '0378-10', '0378-10', '5000', '8', '9400', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 3, '2004-11-19', '12');
INSERT INTO `label` VALUES (22, '0376-B', '0376-B', '5000', '15.5', '57543', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-06-27', '16');
INSERT INTO `label` VALUES (23, '0378-13', '0378-13', '5000', '8.5', '28094', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-06-27', '17');
INSERT INTO `label` VALUES (24, '0378-14', '0378-14', '5000', '8.5', '14709', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '18');
INSERT INTO `label` VALUES (25, '0378-15', '0378-15', '5000', '8.5', '13225', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-07-09', '19');
INSERT INTO `label` VALUES (26, '0378-16', '0378-16', '5000', '8.5', '9437', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-06-27', '20');
INSERT INTO `label` VALUES (27, '0378-17', '0378-17', '5000', '8', '9400', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 1, '2005-01-11', '12');
INSERT INTO `label` VALUES (28, '0378-18', '0378-18', '5000', '8.5', '0', NULL, NULL, NULL, NULL, NULL, '5000', NULL, 3, '2005-02-08', '21');

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
) TYPE=MyISAM AUTO_INCREMENT=31 ;

#
# dump ตาราง `label_name`
#

INSERT INTO `label_name` VALUES (1, '1', '1', 'TEST NAM', 0x54455354204445534352495054494f4e, NULL, '1');
INSERT INTO `label_name` VALUES (2, '2', '1', 'REISS LADIESWEAR LARGE', 0x5245495353204c414449455357454152204c41524745202c20534154494e205245564552534520202f20554c545241534f4e494320534c4954202f20454e44464f4c44202c2053495a45202032372058203535202f203635204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (3, '3', '1', 'REISS LADIESWEAR SKINNY', 0x5245495353204c41444945535745415220534b494e4e59202c20534154494e2052455645525345202f20554c545241534f4e494320534c4954202f20454e44464f4c44202c2053495a452031302058203535202f203635204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (4, '4', '1', 'REISS LADIESWEAR SIZE LABEL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (5, '5', '1', 'REISS LADIESWEAR SIZE LABEL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (6, '6', '1', 'REISS LADIESWEAR SIZE LABEL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (7, '7', '1', 'LADIES  SIZE LABEL 6', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (8, '8', '1', 'LADIES SIZE LABEL 8', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (9, '9', '1', 'LADIES SIZE LABEL 10', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (10, '10', '1', 'LADIES SIZE LABEL 12', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (11, '11', '1', 'LADIES SIZE LABEL 14', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (12, '11', '1', 'LADIES SIZE LABEL 14', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (13, '12', '1', 'LADIES SIZE LABEL XS', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (14, '13', '1', 'LADIES SIZE LABEL S', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (15, '14', '1', 'LADIES SIZE LABEL - M', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (16, '15', '1', 'LADIES SIZE LABEL - L', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (17, '15', '1', 'LADIES SIZE LABEL - L', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (18, '16', '1', 'LADIES SIZE LABEL - S/M', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (19, '17', '1', 'LADIES SIZE LABEL - XL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (20, '18', '1', 'LADIES SIZE LABEL - XL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (21, '19', '1', 'LADIES SIZE LABEL - M/L', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (22, '20', '1', 'REISS MENSWEAR LARGE', 0x5245495353204d454e5357454152204c41524745202c20534154494e2052455645525345202f20554c545241534f4e494320534c4954202f20454e44464f4c44202c2053495a452033322058203537202f203639204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (23, '21', '1', 'LADIES SIZE LABEL - XL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (24, '22', '1', 'REISS MENSWEAR SKINNY', 0x5245495353204d454e535745415220534b494e4e59202c20534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a452031312058203633202f203735204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (25, '23', '1', 'MENS SIZE LABEL - S', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (26, '24', '1', 'MENS SIZE LABEL - M', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (27, '25', '1', 'MENS SIZE LABEL - L', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (28, '26', '1', 'MENS SIZE LABEL - XL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (29, '27', '1', 'LADIES SIZE  LABEL  XL)', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');
INSERT INTO `label_name` VALUES (30, '28', '1', 'MEN SIZE LABEL - XXL', 0x534154494e2052455645525345202f20554c545241534f4e494320534c4954202f204354522e464f4c44202c2053495a4520392058203330204d4d2e, NULL, '1');

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
) TYPE=MyISAM AUTO_INCREMENT=31 ;

#
# dump ตาราง `order_track`
#

INSERT INTO `order_track` VALUES (1, '1', '1', '1', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (2, '25', '2', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (3, '20', '2', '10000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (4, '15', '2', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (5, '22', '3', '10000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (7, '2', '4', '10000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (8, '2', '3', '10000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (9, '2', '4', '10000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (10, '13', '3', '1000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (16, '3', '6', '1', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (13, '2', '1', '1234', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (14, '2', '5', '10000000000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (15, '3', '5', '100000555', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (17, '3', '3', '10000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (18, '7', '3', '500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (19, '8', '3', '500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (20, '9', '3', '800', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (21, '10', '3', '700', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (22, '11', '3', '600', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (23, '12', '3', '500', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (24, '14', '3', '400', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (25, '3', '2', '10000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (26, '14', '7', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (27, '13', '7', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (28, '22', '8', '5000', '', NULL, NULL, '2');
INSERT INTO `order_track` VALUES (29, '13', '7', NULL, NULL, NULL, NULL, '0');
INSERT INTO `order_track` VALUES (30, '22', '7', NULL, NULL, NULL, NULL, '0');

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
) TYPE=MyISAM AUTO_INCREMENT=9 ;

#
# dump ตาราง `purchase`
#

INSERT INTO `purchase` VALUES (1, '2', '2004-11-11 10:05:51', '0', NULL, '000001', '2039485', '0', '0', '', '0', '1', 'krieng@computerlabelworldwide.com', '0', '0', '0', '0', '0', '0', '1', '1233323232323223323', '02/2004', '24.82', NULL, '24.07', '2', '0.75');
INSERT INTO `purchase` VALUES (2, '10', '2004-11-19 16:30:51', '0', NULL, '000002', '5978778', '0', '0', 0x4465617220416c6c2c3c62723e3c62723e492068617665206f726465726564206f6e6c7920207265662e303337372e4920646f206e6f7420756e6465727374616e6420776879206974206c6f6f6b73206c696b6520692063616c6c6564206f6620746865206f746865727320746f6f2e3c62723e506c65617365206c6574206d65206b6e6f7720617361703c62723e4f6e6c79206465737061746368207265662e303337372061732031302e30303070637320746f206f75722048454144204f46464943452061742052656973732e3c62723e5468616e6b7320616e6420726567617264732c3c62723e42616e75, '1', '0', '', '1', '', '1', '', '0', '0', '2', NULL, NULL, NULL, NULL, '447.5', '2', NULL);
INSERT INTO `purchase` VALUES (3, '10', '2004-11-19 16:31:01', '0', NULL, '000003', '4509671', '0', '0', 0x414c414e20204c554f3c62723e475245415457494e442020494e5445524e4154494f4e414c204c494d495445443c62723e342f46202e204d5056453b204f4d44495354524f413b20424c44472e3c62723e3835302d38373020204c41492020434849202c204b4f4b20524f4144202c3c62723e434845554e4720205348412057414e202c204b4f574c4f4f4e2c3c62723e484f4e47204b4f4e47, '1', '0', '', '1', '2', '1', '2', '1', '2', '2', NULL, NULL, NULL, NULL, '525', '2', NULL);
INSERT INTO `purchase` VALUES (4, '6', '2004-11-19 16:54:44', '0', NULL, '000004', '8866863', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (5, '3', '2004-11-20 18:10:06', '0', NULL, '000005', '8995735', '1', '1', 0x74657374206f7265646572206f6e207361747572646179206576656e696e67206279206b2e6e6f6f6d, '1', '0', 'krieng@computerlabelworldwide.com', '1', '5', '0', '0', '0', '0', '2', NULL, NULL, NULL, NULL, '196350007.493', '2', NULL);
INSERT INTO `purchase` VALUES (6, '2', '2004-11-20 20:57:52', '0', NULL, '000006', '2911687', '0', '0', '', '0', '1', 'krieng@computerlabelworldwide.com', '0', '0', '0', '0', '0', '0', '2', NULL, NULL, NULL, NULL, '0.0135', '2', NULL);
INSERT INTO `purchase` VALUES (7, '10', '2004-12-15 21:36:44', '0', NULL, '000007', '3928532', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);
INSERT INTO `purchase` VALUES (8, '10', '2004-12-15 21:36:46', '0', NULL, '000008', '3928532', '0', '0', 0x504c454153452053454e4420544f204f55522048454144204f46464943452041542052454953533c62723e5448414e4b20594f552c3c62723e42414e55, '0', '0', '', '1', '', '1', '', '0', '0', '2', NULL, NULL, NULL, NULL, '77.5', '2', NULL);

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
) TYPE=MyISAM AUTO_INCREMENT=13 ;

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
INSERT INTO `users` VALUES (9, 'Kampee', 'Sridavong', 'kampee', 'gatorface', 'krieng@computerlabelworldwide.com', '1', '1');
INSERT INTO `users` VALUES (10, 'BANU', '', 'REISS', 'RES123', '', '1', '1');
INSERT INTO `users` VALUES (11, 'vangie', '', 'vangie', 'vangie123', '', '1', '1');
INSERT INTO `users` VALUES (12, 'vangie', '', 'vangie', 'vangie123', '', '1', '1');
