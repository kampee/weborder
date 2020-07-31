# phpMyAdmin SQL Dump
# version 2.5.4
# http://www.phpmyadmin.net
#
# โฮสต์: localhost
# เวลาในการสร้าง: 31 ก.ค. 2020  12:27น.
# รุ่นของเซิร์ฟเวอร์: 4.0.16
# รุ่นของ PHP: 4.3.3
# 
# ฐานข้อมูล : `cwf`
# 

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_address`
#

DROP TABLE IF EXISTS `wb_address`;
CREATE TABLE `wb_address` (
  `aid` int(5) NOT NULL auto_increment,
  `uid` int(5) NOT NULL default '0',
  `ship_com` varchar(60) NOT NULL default '',
  `ship_add1` varchar(50) NOT NULL default '',
  `ship_add2` varchar(50) NOT NULL default '',
  `ship_add3` varchar(50) NOT NULL default '',
  `ship_zip` varchar(10) NOT NULL default '',
  `ship_city` varchar(30) NOT NULL default '',
  `ship_country` varchar(30) NOT NULL default '',
  `ship_contact` varchar(30) NOT NULL default '',
  `job_title` varchar(20) NOT NULL default '',
  `ship_phone` varchar(20) NOT NULL default '',
  `ship_vat` float NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `fax_no` varchar(15) NOT NULL default '',
  `cr_name` varchar(20) NOT NULL default '',
  `cr_acc` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`aid`)
) TYPE=MyISAM COMMENT='Users' AUTO_INCREMENT=2 ;

#
# dump ตาราง `wb_address`
#

INSERT INTO `wb_address` VALUES (1, 1, 'CLWGlobal', 'Suksawad Soi 5', '', '', '10130', 'Bangkok', 'Thailand', 'Kampee', 'IT Programmer', '1234567890', '0', 'kampee@clwglobal.com', '1234567890', 'DHL', '');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_cart`
#

DROP TABLE IF EXISTS `wb_cart`;
CREATE TABLE `wb_cart` (
  `cart_id` int(10) NOT NULL auto_increment,
  `sess_id` varchar(60) NOT NULL default '',
  `uid` int(5) NOT NULL default '0',
  `cid` int(5) NOT NULL default '0',
  `p_id` int(10) NOT NULL default '0',
  `p_qty` int(10) NOT NULL default '0',
  `order_id` int(5) NOT NULL default '0',
  `order_date` date NOT NULL default '0000-00-00',
  `order_time` time NOT NULL default '00:00:00',
  `cart_date` date NOT NULL default '0000-00-00',
  `cart_time` time NOT NULL default '00:00:00',
  `order_ip` varchar(20) NOT NULL default '',
  `cart_ip` varchar(15) NOT NULL default '',
  `cart_flag` float NOT NULL default '0',
  PRIMARY KEY  (`cart_id`)
) TYPE=MyISAM COMMENT='Carts' AUTO_INCREMENT=1 ;

#
# dump ตาราง `wb_cart`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_ccpr`
#

DROP TABLE IF EXISTS `wb_ccpr`;
CREATE TABLE `wb_ccpr` (
  `sl_id` int(10) NOT NULL auto_increment,
  `sl_cartid` int(10) NOT NULL default '0',
  `sl_date` date NOT NULL default '0000-00-00',
  `sl_time` time NOT NULL default '00:00:00',
  `sl_flag` float NOT NULL default '0',
  PRIMARY KEY  (`sl_id`)
) TYPE=MyISAM COMMENT='Order Form Primary' AUTO_INCREMENT=3 ;

#
# dump ตาราง `wb_ccpr`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_ccse`
#

DROP TABLE IF EXISTS `wb_ccse`;
CREATE TABLE `wb_ccse` (
  `sl_no` int(10) NOT NULL auto_increment,
  `sl_cartid` int(10) NOT NULL default '0',
  `sl_fabcomp` varchar(60) NOT NULL default '',
  `sl_refcode` varchar(30) NOT NULL default '',
  `sl_size` varchar(30) NOT NULL default '',
  `sl_size1` varchar(30) NOT NULL default '',
  `sl_size2` varchar(30) NOT NULL default '',
  `sl_size3` varchar(30) NOT NULL default '',
  `sl_size4` varchar(30) NOT NULL default '',
  `sl_size5` varchar(30) NOT NULL default '',
  `sl_size6` varchar(30) NOT NULL default '',
  `sl_color` varchar(30) NOT NULL default '',
  `sl_qty` int(10) NOT NULL default '0',
  `sl_qty1` int(10) NOT NULL default '0',
  `sl_qty2` int(10) NOT NULL default '0',
  `sl_qty3` int(10) NOT NULL default '0',
  `sl_qty4` int(10) NOT NULL default '0',
  `sl_qty5` int(10) NOT NULL default '0',
  `sl_qty6` int(10) NOT NULL default '0',
  `sl_wi` varchar(5) NOT NULL default '',
  `sl_wi_temp1` varchar(10) NOT NULL default '',
  `sl_wi_temp2` varchar(10) NOT NULL default '',
  `sl_ii` varchar(5) NOT NULL default '',
  `sl_di` varchar(5) NOT NULL default '',
  `sl_ci` varchar(5) NOT NULL default '',
  `sl_bi` varchar(5) NOT NULL default '',
  `sl_flag` float NOT NULL default '0',
  PRIMARY KEY  (`sl_no`)
) TYPE=MyISAM COMMENT='Order Form Secondary' AUTO_INCREMENT=1 ;

#
# dump ตาราง `wb_ccse`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_clients`
#

DROP TABLE IF EXISTS `wb_clients`;
CREATE TABLE `wb_clients` (
  `cid` int(5) NOT NULL auto_increment,
  `ccode` varchar(30) NOT NULL default '',
  `cname` varchar(50) NOT NULL default '',
  `csc` longtext NOT NULL,
  `csc_fr` longtext NOT NULL,
  `min_cur` char(3) NOT NULL default '',
  `min_amt` double NOT NULL default '0',
  `gemail` varchar(100) NOT NULL default '',
  `fr_allow` float NOT NULL default '0',
  `pay_credit` float NOT NULL default '0',
  `pay_tt` float NOT NULL default '0',
  `cflag` float NOT NULL default '0',
  PRIMARY KEY  (`cid`),
  KEY `ccode` (`ccode`)
) TYPE=MyISAM COMMENT='Clients' AUTO_INCREMENT=12 ;

#
# dump ตาราง `wb_clients`
#

INSERT INTO `wb_clients` VALUES (1, 'FCUK', 'FCUK', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">\r\n	  <font face="Helvetica Condensed,Arial,verdana,sans-serif" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="Helvetica Condensed,Arial,verdana,sans-serif" size="+3">FCUK<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n', '', 'EUR', '0', 'weborder-fcuk@computerlabelworldwide.com', '0', '1', '1', '0');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_currency`
#

DROP TABLE IF EXISTS `wb_currency`;
CREATE TABLE `wb_currency` (
  `cur_code` varchar(5) NOT NULL default '',
  `cur_name` varchar(30) NOT NULL default '',
  `cur_sy` varchar(10) NOT NULL default '',
  `cur_rate` double NOT NULL default '0',
  `sort_id` int(2) NOT NULL default '0'
) TYPE=MyISAM COMMENT='Currency';

#
# dump ตาราง `wb_currency`
#

INSERT INTO `wb_currency` VALUES ('EUR', 'EURO', '&euro;', '0', 1);
INSERT INTO `wb_currency` VALUES ('POUND', 'POUND', '&pound;', '0', 2);
INSERT INTO `wb_currency` VALUES ('BAHT', 'BAHT', 'BAHT', '0', 3);
INSERT INTO `wb_currency` VALUES ('USD', 'USD', '$', '0', 4);

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_files`
#

DROP TABLE IF EXISTS `wb_files`;
CREATE TABLE `wb_files` (
  `file_id` int(5) NOT NULL auto_increment,
  `uid` int(5) NOT NULL default '0',
  `file_names` varchar(200) NOT NULL default '',
  `file_upload` varchar(200) NOT NULL default '',
  `file_desc` tinytext NOT NULL,
  `file_date` timestamp(14) NOT NULL,
  `file_flag` float NOT NULL default '0',
  PRIMARY KEY  (`file_id`)
) TYPE=MyISAM COMMENT='File Manager' AUTO_INCREMENT=4 ;

#
# dump ตาราง `wb_files`
#

INSERT INTO `wb_files` VALUES (1, 8, '', 'ht.jpg', '', 20091119163052, '0');
INSERT INTO `wb_files` VALUES (2, 8, '', '', '', 20091119182954, '0');
INSERT INTO `wb_files` VALUES (3, 8, 'ELLE 913049/X21', '913049-X21 Elle HT (HTT # 00455-1).jpg', 'HTT # 00455/1\r\nSize: 37 x 110mm', 20091119183134, '0');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_group`
#

DROP TABLE IF EXISTS `wb_group`;
CREATE TABLE `wb_group` (
  `gid` int(5) NOT NULL auto_increment,
  `gname` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`gid`)
) TYPE=MyISAM COMMENT='Groups' AUTO_INCREMENT=7 ;

#
# dump ตาราง `wb_group`
#

INSERT INTO `wb_group` VALUES (1, 'admin');
INSERT INTO `wb_group` VALUES (2, 'superuser');
INSERT INTO `wb_group` VALUES (3, 'user');
INSERT INTO `wb_group` VALUES (4, 'Manager');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_katcar_pr`
#

DROP TABLE IF EXISTS `wb_katcar_pr`;
CREATE TABLE `wb_katcar_pr` (
  `sl_id` int(10) NOT NULL auto_increment,
  `sl_cartid` int(10) NOT NULL default '0',
  `sl_date` date NOT NULL default '0000-00-00',
  `sl_time` time NOT NULL default '00:00:00',
  `sl_flag` float NOT NULL default '0',
  PRIMARY KEY  (`sl_id`)
) TYPE=MyISAM COMMENT='Order Form Primary' AUTO_INCREMENT=1 ;

#
# dump ตาราง `wb_katcar_pr`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_katcar_se`
#

DROP TABLE IF EXISTS `wb_katcar_se`;
CREATE TABLE `wb_katcar_se` (
  `sl_no` int(10) NOT NULL auto_increment,
  `sl_cartid` int(10) NOT NULL default '0',
  `sl_care` longtext NOT NULL,
  `sl_qty` int(10) NOT NULL default '0',
  `sl_flag` float NOT NULL default '0',
  PRIMARY KEY  (`sl_no`)
) TYPE=MyISAM COMMENT='Order Form Secondary' AUTO_INCREMENT=1 ;

#
# dump ตาราง `wb_katcar_se`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_language`
#

DROP TABLE IF EXISTS `wb_language`;
CREATE TABLE `wb_language` (
  `lid` tinyint(5) NOT NULL auto_increment,
  `lang` char(2) NOT NULL default '',
  `language` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`lid`)
) TYPE=MyISAM COMMENT='Languages' AUTO_INCREMENT=7 ;

#
# dump ตาราง `wb_language`
#

INSERT INTO `wb_language` VALUES (1, 'en', 'English');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_note`
#

DROP TABLE IF EXISTS `wb_note`;
CREATE TABLE `wb_note` (
  `note_id` int(10) NOT NULL auto_increment,
  `pid` int(5) NOT NULL default '0',
  `uid` int(5) NOT NULL default '0',
  `note_desc` text NOT NULL,
  `note_email` varchar(50) NOT NULL default '',
  `note_date` date NOT NULL default '0000-00-00',
  `note_time` time NOT NULL default '00:00:00',
  `note_ip` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`note_id`)
) TYPE=MyISAM COMMENT='Note' AUTO_INCREMENT=6 ;

#
# dump ตาราง `wb_note`
#

INSERT INTO `wb_note` VALUES (1, 8, 1, '', 'enter email here', '2008-12-16', '05:27:29', '61.47.25.130');
INSERT INTO `wb_note` VALUES (2, 11, 1, 'test from me', 'Lovelyboyd@hotmail.com', '2008-12-21', '11:12:17', '202.149.25.225');
INSERT INTO `wb_note` VALUES (3, 3, 1, 'Test note', 'kampee@clwglobal.com', '2009-11-19', '03:56:45', '61.47.25.130');
INSERT INTO `wb_note` VALUES (4, 4, 8, '', 'enter email here', '2009-11-19', '04:18:49', '61.47.25.130');
INSERT INTO `wb_note` VALUES (5, 3, 1, 'Test', 'kampee@clwglobal.com', '2009-11-19', '04:30:20', '61.47.25.130');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_of`
#

DROP TABLE IF EXISTS `wb_of`;
CREATE TABLE `wb_of` (
  `of_id` int(5) NOT NULL default '0',
  `of_date` date NOT NULL default '0000-00-00',
  `of_time` time NOT NULL default '00:00:00',
  `of_ip` varchar(20) NOT NULL default '',
  `of_flag` float NOT NULL default '0',
  `of_pin` varchar(4) NOT NULL default '',
  PRIMARY KEY  (`of_id`)
) TYPE=MyISAM COMMENT='Order form';

#
# dump ตาราง `wb_of`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_order`
#

DROP TABLE IF EXISTS `wb_order`;
CREATE TABLE `wb_order` (
  `order_uid` int(5) NOT NULL default '0',
  `order_cid` int(5) NOT NULL default '0',
  `order_id` int(10) NOT NULL auto_increment,
  `order_sid` varchar(50) NOT NULL default '',
  `ship_add` int(5) NOT NULL default '0',
  `bill_add` int(5) NOT NULL default '0',
  `vendor_pack` float NOT NULL default '0',
  `company_brochure` float NOT NULL default '0',
  `other_mess` longtext NOT NULL,
  `sendtome` float NOT NULL default '0',
  `sendtodoc` float NOT NULL default '0',
  `sendtodoc_add` varchar(60) NOT NULL default '',
  `inv_doc` int(2) NOT NULL default '0',
  `pac_doc` int(2) NOT NULL default '0',
  `co_doc` int(2) NOT NULL default '0',
  `payment_method` char(1) NOT NULL default '',
  `order_date` date default NULL,
  `order_time` time NOT NULL default '00:00:00',
  `order_ip` varchar(18) NOT NULL default '',
  `payment_desc` longtext NOT NULL,
  `card_no` varchar(16) NOT NULL default '',
  `card_type` char(1) NOT NULL default '',
  `cardexp_month` char(2) NOT NULL default '',
  `cardexp_year` char(2) NOT NULL default '',
  `order_qty` int(10) NOT NULL default '0',
  `order_cur` varchar(10) NOT NULL default '',
  `order_amt` double NOT NULL default '0',
  `order_cml` float NOT NULL default '0',
  `order_process` int(1) NOT NULL default '0',
  `del_date` date NOT NULL default '0000-00-00',
  `call_out` float NOT NULL default '0',
  `a30days` float NOT NULL default '0',
  `order_location` varchar(20) NOT NULL default '0',
  `order_oq` int(2) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
) TYPE=MyISAM COMMENT='Order Info' AUTO_INCREMENT=1 ;

#
# dump ตาราง `wb_order`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_ostatus`
#

DROP TABLE IF EXISTS `wb_ostatus`;
CREATE TABLE `wb_ostatus` (
  `os_id` int(2) NOT NULL auto_increment,
  `os_code` char(2) NOT NULL default '',
  `os_name` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`os_id`)
) TYPE=MyISAM COMMENT='Order Status' AUTO_INCREMENT=7 ;

#
# dump ตาราง `wb_ostatus`
#

INSERT INTO `wb_ostatus` VALUES (1, 'WP', 'waiting for processing');
INSERT INTO `wb_ostatus` VALUES (2, 'WM', 'waiting for more information');
INSERT INTO `wb_ostatus` VALUES (3, 'PC', 'processing');
INSERT INTO `wb_ostatus` VALUES (4, 'SF', 'shipped');
INSERT INTO `wb_ostatus` VALUES (5, 'CN', 'cancelled');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_pgroup`
#

DROP TABLE IF EXISTS `wb_pgroup`;
CREATE TABLE `wb_pgroup` (
  `pgroup` int(5) NOT NULL auto_increment,
  `pcode` varchar(10) NOT NULL default '',
  `pname` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`pgroup`)
) TYPE=MyISAM COMMENT='Product Group' AUTO_INCREMENT=11 ;

#
# dump ตาราง `wb_pgroup`
#

INSERT INTO `wb_pgroup` VALUES (1, 'HT', 'Hang Tag');
INSERT INTO `wb_pgroup` VALUES (2, 'PL', 'Printed Label');
INSERT INTO `wb_pgroup` VALUES (3, 'VL', 'Woven Label');
INSERT INTO `wb_pgroup` VALUES (4, 'WL', 'Washcare Label');
INSERT INTO `wb_pgroup` VALUES (7, 'LT', 'Leg Sticker');
INSERT INTO `wb_pgroup` VALUES (6, 'OT', 'Overrider Tag');
INSERT INTO `wb_pgroup` VALUES (10, 'HTF', 'Heat Transfer');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_product`
#

DROP TABLE IF EXISTS `wb_product`;
CREATE TABLE `wb_product` (
  `pid` int(10) NOT NULL auto_increment,
  `cid` int(5) NOT NULL default '0',
  `uid` int(5) NOT NULL default '0',
  `pgroup` int(5) NOT NULL default '0',
  `client_code` varchar(30) NOT NULL default '',
  `client_code2` varchar(30) NOT NULL default '',
  `prod_name` varchar(50) NOT NULL default '',
  `prod_name2` varchar(50) NOT NULL default '',
  `prod_desc` longtext NOT NULL,
  `prod_price` double NOT NULL default '0',
  `prod_cur` varchar(10) NOT NULL default '',
  `prod_price1` double NOT NULL default '0',
  `prod_cur1` varchar(10) NOT NULL default '',
  `prod_per` int(8) NOT NULL default '0',
  `prod_unit` varchar(20) NOT NULL default '',
  `mini_qty` int(8) NOT NULL default '0',
  `cur_stock` double NOT NULL default '0',
  `min_stock` double NOT NULL default '0',
  `pic_thum` varchar(30) NOT NULL default '',
  `pic_zoom` varchar(30) NOT NULL default '',
  `order_files` varchar(60) NOT NULL default '',
  `prod_care` float NOT NULL default '0',
  PRIMARY KEY  (`pid`),
  KEY `pid` (`pid`),
  KEY `client_code` (`client_code`)
) TYPE=MyISAM COMMENT='Product' AUTO_INCREMENT=34 ;

#
# dump ตาราง `wb_product`
#

INSERT INTO `wb_product` VALUES (14, 1, 11, 10, '900 455/84T', '', 'Timberland Heat Transfer (Medium)', '', 'CLW Reference: HTF # 0584\r\nSize: 57 x 14mm\r\nColor: Navy Blue\r\n\r\nFrance (C&F):\r\nEURO 0.060 / pc\r\nUSD 0.1060 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.027 / pc\r\nUSD 0.0477 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '900455 -103.jpg', '900455 -103.jpg', '', '0');
INSERT INTO `wb_product` VALUES (15, 1, 11, 10, '900 455/103', '', 'Timberland Heat Transfer (Medium)', '', 'CLW Reference: HTF # 0585/1\r\nSize: 57 x 14mm\r\nColor: White\r\n\r\nFrance (C&F):\r\nEURO 0.060 / pc\r\nUSD 0.1060 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.027 / pc\r\nUSD 0.0477 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '900455 - 84T.jpg', '900455 - 84T.jpg', '', '0');
INSERT INTO `wb_product` VALUES (13, 1, 11, 10, '900 451/103', '', 'Timberland Heat Transfer (Small)', '', 'CLW Reference: HTF # 00581/1\r\nSize: 48 x 11.5mm\r\nColor: White\r\n\r\nFrance (C&F):\r\nEURO 0.050 / pc\r\nUSD 0.0883 / pc\r\n\r\nAsia (FOB):\r\nEURO: 0.020 / pc\r\nUSD 0.353 / pc\r\n\r\n\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '900451-103.jpg', '900451-103.jpg', '', '0');
INSERT INTO `wb_product` VALUES (12, 1, 11, 10, '900 451/035', '', 'Timberland Heat Transfer (Small)', '', 'CLW: Reference: HTF # 00580 \r\nSize: 48 x 11.5mm\r\nColor: Grey\r\n\r\nFrance (C&F):\r\nEURO 0.050 / pc\r\nUSD 0.0883 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.020 / pc\r\nUSD 0.0353 / pc\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '900451-035.jpg', '900451-035.jpg', '', '0');
INSERT INTO `wb_product` VALUES (5, 1, 9, 1, '913 050/X21', '', 'Elle Hangtag (Canada)', '', 'CLW Reference: HTT # 00456/1\r\nSize: 37 x 110mm\r\n\r\nFOB Price:\r\n20.00 USD / 1,000pcs\r\n\r\n155.00 HKD / 1,000pcs\r\n\r\n720 THB / 1,000pcs ', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '913050-X21..bmp', '913050-X21..bmp', '', '0');
INSERT INTO `wb_product` VALUES (7, 1, 9, 1, '913 049/X21', '', 'Elle Hangtag (Handknit)', '', 'CLW Reference: HTT # 00455/1\r\nSize: 37 x 110mm\r\n\r\nFOB Price in USD Currency:\r\n2,000pcs - 250 / job\r\n5,000pcs - 0.060 / pc\r\n10,000pcs - 0.055 / pc\r\n50,000pcs - 0.037 / pc\r\n\r\nFOB Price in HKD Currency:\r\n2,000pcs - 1,937 / job\r\n5,000pcs - 0.47 / pc\r\n10,000pcs - 0.43 / pc\r\n50,000pcs - 0.29 / pc\r\n\r\nFOB Price in THB Currency:\r\n5,000pcs - 2.16 / pc\r\n10,000pcs - 1.98 / pc\r\n50,000pcs - 1.33 / pc\r\n\r\n\r\n\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '913049-X21..jpg', '913049-X21..jpg', '', '0');
INSERT INTO `wb_product` VALUES (8, 1, 9, 3, '923 094/X21', '', 'Elle Size Labels', '', 'CLW Reference: TNLB # 01374/3\r\nSize: 24 x 43mm\r\n\r\nFOB Price:\r\n\r\nUSD 13.42 / 1,000pcs\r\n\r\nHKD 104.00 / 1,000pcs\r\n\r\nTHB 483.00 / 1,000pcs', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '923094-X21...jpg', '923094-X21...jpg', '', '0');
INSERT INTO `wb_product` VALUES (9, 1, 9, 3, '923 095/X21', '', 'Elle Size Labels', '', 'CLW Reference: TNLB # 01373/3\r\nSize : 10 x 30mm\r\n\r\nFOB Price:\r\n\r\nUSD 13.42 / 1,000pcs\r\n\r\nHKD 104.00 / 1,000pcs\r\n\r\nTHB 483.00 / 1,000pcs\r\n\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '923095-X21.jpg', '923095-X21.jpg', '', '0');
INSERT INTO `wb_product` VALUES (10, 1, 9, 3, '923 096/X21', '', 'Elle Main Labels', '', 'CLW Reference: TNLB # 01375/3\r\nSize: 10 x 30mm\r\n\r\nFOB Price:\r\nUSD 13.42 / 1,000pcs\r\n\r\nHKD 104.00 / 1,000pcs\r\n\r\nTHB 483.00 / 1,000pcs', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '923096-X21 Elle..jpg', '923096-X21 Elle..jpg', '', '0');
INSERT INTO `wb_product` VALUES (11, 1, 9, 10, 'E16 249', '', 'Elle Stones Heat Transfer', '', 'CLW Reference: OTH # 00207\r\nSize: 15 x 15mm\r\n\r\nFOB Price:\r\n800 = 0.17 USD / pc\r\nPrices will be revised as per quantities. ', '0', 'EUR', '0', '', 0, '', 0, '0', '0', 'E16249.jpg', 'E16249.jpg', '', '0');
INSERT INTO `wb_product` VALUES (16, 1, 11, 3, '926 639/M01', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01654/2 Combo B2\r\nSize: 8 x 35mm\r\n\r\nFrance (C&F):\r\nEURO 21.00 / 1,000pcs\r\nUSD 36.12 / 1,000pcs\r\n\r\nAsia (FOB):\r\nEURO 14.00 / 1,000pcs\r\nUSD 25.80 / 1,000pcs\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926639-M01.jpg', '926639-M01.jpg', '', '0');
INSERT INTO `wb_product` VALUES (20, 1, 11, 3, '926 639/N52', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01654/1 Combo A\r\nSize: 8 x 35mm\r\n\r\nFrance (C&F):\r\nEURO 21.00 / 1,000pcs\r\nUSD 36.12 / 1,000pcs\r\n\r\nAsia (FOB):\r\nEURO 14.00 / 1,000pcs\r\nUSD 25.80 / 1,000pcs\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926639-N52.jpg', '926639-N52.jpg', '', '0');
INSERT INTO `wb_product` VALUES (19, 1, 11, 3, '926 639/M60', '', 'Timberland Woven Labels', '', 'CLW Reference: 01654/1 Combo F\r\nSize: 8 x 35mm\r\n\r\nFrance (C&F):\r\nEURO 21.00 / 1,000pcs\r\nUSD 36.12 / 1,000pcs\r\n\r\nAsia (FOB):\r\nEURO 14.00 / 1,000pcs\r\nUSD 25.80 / 1,000pcs ', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926639-M60.jpg', '926639-M60.jpg', '', '0');
INSERT INTO `wb_product` VALUES (22, 1, 11, 3, '926 639/U31', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01654/1 Combo C\r\nSize: 8 x 35mm\r\n\r\nFrance (C&F):\r\nEURO 21.00 / 1,000pcs\r\nUSD 36.12 / 1,000pcs\r\n\r\nAsia (FOB):\r\nEURO 14.00 / 1,000pcs\r\nUSD 25.80 / 1,000pcs\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926639-U31.jpg', '926639-U31.jpg', '', '0');
INSERT INTO `wb_product` VALUES (21, 1, 11, 3, '926 639/P18', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01654/1 Combo G\r\nSize: 8 x 35mm\r\n\r\nFrance (C&F):\r\nEURO 21.00 / 1,000pcs\r\nUSD 36.12 / 1,000pcs\r\n\r\nAsia (FOB):\r\nEURO 14.00 / 1,000pcs\r\nUSD 25.80 / 1,000pcs\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926639-P18.jpg', '926639-P18.jpg', '', '0');
INSERT INTO `wb_product` VALUES (23, 1, 11, 3, '926 639/V21', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01654/2 Combo D1\r\nSize: 8 x 35mm\r\n\r\nFrance (C&F):\r\nEURO 21.00 / 1,000pcs\r\nUSD 36.12 / 1,000pcs\r\n\r\nAsia (FOB):\r\nEURO 14.00 / 1,000pcs\r\nUSD 25.80 / 1,000pcs\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926639-V21.jpg', '926639-V21.jpg', '', '0');
INSERT INTO `wb_product` VALUES (24, 1, 11, 3, '926 639/V82', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01654/1 Combo E\r\nSize: 8 x 35mm\r\n\r\nFrance (C&F):\r\nEURO 21.00 / 1,000pcs\r\nUSD 36.12 / 1,000pcs\r\n\r\nAsia (FOB):\r\nEURO 14.00 / 1,000pcs\r\nUSD 25.80 / 1,000pcs\r\n', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926639-V82.jpg', '926639-V82.jpg', '', '0');
INSERT INTO `wb_product` VALUES (25, 1, 11, 3, '926 458/M60', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692 Combo C\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 1000, '', 0, '0', '0', '926458-M60.jpg', '926458-M60.jpg', '', '0');
INSERT INTO `wb_product` VALUES (26, 1, 11, 3, '926 458/M92', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692 Combo D\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-M92.jpg', '926458-M92.jpg', '', '0');
INSERT INTO `wb_product` VALUES (27, 1, 11, 3, '926 458/N52', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692 Combo E\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-N52.jpg', '926458-N52.jpg', '', '0');
INSERT INTO `wb_product` VALUES (28, 1, 11, 3, '926 458/P81', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692/1 Combo I\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-P81.jpg', '926458-P81.jpg', '', '0');
INSERT INTO `wb_product` VALUES (29, 1, 11, 3, '926 458/Q02', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692 Combo F\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-Q02.jpg', '926458-Q02.jpg', '', '0');
INSERT INTO `wb_product` VALUES (30, 1, 11, 3, '926 458/R03', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692 Combo A\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-R03.jpg', '926458-R03.jpg', '', '0');
INSERT INTO `wb_product` VALUES (31, 1, 11, 3, '926 458/U12', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692/1 Combo B1 B\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-U12.jpg', '926458-U12.jpg', '', '0');
INSERT INTO `wb_product` VALUES (32, 1, 11, 3, '926 458/U62', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692/1 Combo H2 A\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-U62.jpg', '926458-U62.jpg', '', '0');
INSERT INTO `wb_product` VALUES (33, 1, 11, 3, '926 458/V82', '', 'Timberland Woven Labels', '', 'CLW Reference: TNLB # 01692 Combo G\r\nSize: 15 x 25mm\r\n\r\nFrance (C&F):\r\nEURO 0.0120 / pc\r\nUSD 0.0188 / pc\r\n\r\nAsia (FOB):\r\nEURO 0.0050 / pc\r\nUSD 0.0078 / pc', '0', 'EUR', '0', '', 0, '', 0, '0', '0', '926458-V82.jpg', '926458-V82.jpg', '', '0');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_setting`
#

DROP TABLE IF EXISTS `wb_setting`;
CREATE TABLE `wb_setting` (
  `wbs` longtext NOT NULL
) TYPE=MyISAM COMMENT='Setting';

#
# dump ตาราง `wb_setting`
#

INSERT INTO `wb_setting` VALUES ('nuni@computerlabelworldwide.com');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_slpr`
#

DROP TABLE IF EXISTS `wb_slpr`;
CREATE TABLE `wb_slpr` (
  `sl_id` int(10) NOT NULL auto_increment,
  `sl_cartid` int(10) NOT NULL default '0',
  `sl_date` date NOT NULL default '0000-00-00',
  `sl_time` time NOT NULL default '00:00:00',
  `sl_flag` float NOT NULL default '0',
  PRIMARY KEY  (`sl_id`)
) TYPE=MyISAM COMMENT='Order Form Primary' AUTO_INCREMENT=1 ;

#
# dump ตาราง `wb_slpr`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_slse`
#

DROP TABLE IF EXISTS `wb_slse`;
CREATE TABLE `wb_slse` (
  `sl_no` int(10) NOT NULL auto_increment,
  `sl_cartid` int(10) NOT NULL default '0',
  `sl_num` varchar(10) NOT NULL default '',
  `sl_usa` varchar(10) NOT NULL default '',
  `sl_qty` int(10) NOT NULL default '0',
  `sl_flag` float NOT NULL default '0',
  PRIMARY KEY  (`sl_no`)
) TYPE=MyISAM COMMENT='Order Form Secondary' AUTO_INCREMENT=1 ;

#
# dump ตาราง `wb_slse`
#


# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_stock`
#

DROP TABLE IF EXISTS `wb_stock`;
CREATE TABLE `wb_stock` (
  `stock_id` int(10) NOT NULL auto_increment,
  `stock_cid` int(5) NOT NULL default '0',
  `stock_pid` int(10) NOT NULL default '0',
  `stock_type` char(1) NOT NULL default '',
  `stock_qty` int(10) NOT NULL default '0',
  `stock_date` date NOT NULL default '0000-00-00',
  `stock_time` time NOT NULL default '00:00:00',
  `stock_ip` varchar(20) NOT NULL default '',
  `stock_uid` int(5) NOT NULL default '0',
  `stock_rem` varchar(30) NOT NULL default '',
  `stock_flag` float NOT NULL default '0',
  PRIMARY KEY  (`stock_id`)
) TYPE=MyISAM COMMENT='Stock Inventory' AUTO_INCREMENT=10 ;

#
# dump ตาราง `wb_stock`
#

INSERT INTO `wb_stock` VALUES (1, 1, 1, 'O', 10000, '2009-11-18', '11:14:10', '127.0.0.1', 1, 'Test Stock', '0');
INSERT INTO `wb_stock` VALUES (2, 1, 2, 'O', 10000, '2009-11-18', '12:12:48', '127.0.0.1', 1, '', '0');
INSERT INTO `wb_stock` VALUES (3, 1, 3, 'O', 10000, '2009-11-18', '12:40:08', '202.176.154.84', 1, '', '0');
INSERT INTO `wb_stock` VALUES (4, 1, 5, '', 79808, '2010-01-16', '01:23:01', '61.47.25.130', 8, '', '0');
INSERT INTO `wb_stock` VALUES (5, 1, 0, 'o', 0, '2010-01-16', '02:11:14', '61.47.25.130', 8, '', '0');
INSERT INTO `wb_stock` VALUES (6, 1, 5, 'O', 79808, '2010-01-16', '02:12:46', '61.47.25.130', 8, '', '0');
INSERT INTO `wb_stock` VALUES (7, 1, 12, 'O', 125, '2010-01-18', '04:05:17', '61.47.25.130', 8, '', '0');
INSERT INTO `wb_stock` VALUES (8, 1, 13, 'o', 180, '2010-01-18', '04:05:49', '61.47.25.130', 8, '', '0');
INSERT INTO `wb_stock` VALUES (9, 1, 14, 'o', 10, '2010-01-18', '04:17:23', '61.47.25.130', 8, '', '0');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_ulog`
#

DROP TABLE IF EXISTS `wb_ulog`;
CREATE TABLE `wb_ulog` (
  `ulog_id` int(10) NOT NULL auto_increment,
  `uid` int(5) NOT NULL default '0',
  `ipaddr` varchar(15) NOT NULL default '',
  `ipclient` varchar(50) NOT NULL default '',
  `sess_id` varchar(60) NOT NULL default '',
  `log_stdate` date NOT NULL default '0000-00-00',
  `log_sttime` time NOT NULL default '00:00:00',
  `log_endate` date NOT NULL default '0000-00-00',
  `log_entime` time NOT NULL default '00:00:00',
  PRIMARY KEY  (`ulog_id`)
) TYPE=MyISAM COMMENT='Session Log' AUTO_INCREMENT=150 ;

#
# dump ตาราง `wb_ulog`
#

INSERT INTO `wb_ulog` VALUES (24, 7, '92.27.201.212', '', 'f6782f26820fbcaa24067aa354d51391', '2009-11-19', '03:14:28', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (25, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:14:32', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (26, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:17:10', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (27, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:19:37', '2009-11-19', '03:19:43');
INSERT INTO `wb_ulog` VALUES (28, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:19:50', '2009-11-19', '03:32:40');
INSERT INTO `wb_ulog` VALUES (29, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:32:47', '2009-11-19', '03:43:30');
INSERT INTO `wb_ulog` VALUES (30, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:43:36', '2009-11-19', '03:57:46');
INSERT INTO `wb_ulog` VALUES (31, 8, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:57:52', '2009-11-19', '03:58:03');
INSERT INTO `wb_ulog` VALUES (32, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:58:17', '2009-11-19', '03:58:27');
INSERT INTO `wb_ulog` VALUES (33, 8, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '03:58:34', '2009-11-19', '04:00:54');
INSERT INTO `wb_ulog` VALUES (34, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '04:01:00', '2009-11-19', '04:01:29');
INSERT INTO `wb_ulog` VALUES (35, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '04:08:50', '2009-11-19', '04:09:07');
INSERT INTO `wb_ulog` VALUES (36, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '04:10:26', '2009-11-19', '04:10:45');
INSERT INTO `wb_ulog` VALUES (37, 7, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '04:10:54', '2009-11-19', '04:11:05');
INSERT INTO `wb_ulog` VALUES (38, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '04:15:33', '2009-11-19', '04:42:36');
INSERT INTO `wb_ulog` VALUES (39, 8, '61.47.25.130', '', 'bafff0f10dfc1f54195a5f639c389fbd', '2009-11-19', '04:18:21', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (40, 8, '61.47.25.130', '', '3e9fa865bdbd916108b9dc7ad8dd69c2', '2009-11-19', '04:22:18', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (41, 8, '61.47.25.130', '', '4029b8d39ae684c92718f6a7a412e1ad', '2009-11-19', '04:24:38', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (42, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '04:42:43', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (43, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '05:38:41', '2009-11-19', '05:43:09');
INSERT INTO `wb_ulog` VALUES (44, 8, '61.47.25.130', '', '5873be583af80744d0e8b6b60e63a691', '2009-11-19', '05:48:50', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (45, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '06:01:30', '2009-11-19', '06:04:24');
INSERT INTO `wb_ulog` VALUES (46, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '06:09:29', '2009-11-19', '06:10:37');
INSERT INTO `wb_ulog` VALUES (47, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '06:31:50', '2009-11-19', '06:32:06');
INSERT INTO `wb_ulog` VALUES (48, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '06:35:31', '2009-11-19', '06:46:56');
INSERT INTO `wb_ulog` VALUES (49, 8, '61.47.25.130', '', '7c3e494a5bccb46eb313878b12da74f9', '2009-11-19', '06:46:01', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (50, 1, '61.47.25.130', '', '4c98cbcffd042f2913cf2ca2de67f381', '2009-11-19', '07:08:19', '2009-11-19', '07:52:14');
INSERT INTO `wb_ulog` VALUES (51, 1, '202.176.154.200', '', '694ab8236154140ab407acaa21c75ee3', '2009-11-19', '10:35:11', '2009-11-19', '10:36:19');
INSERT INTO `wb_ulog` VALUES (52, 1, '202.176.154.200', 'ppp-202-176-154-200.revip.asianet.co.th', '694ab8236154140ab407acaa21c75ee3', '2009-11-19', '10:47:20', '2009-11-19', '10:54:18');
INSERT INTO `wb_ulog` VALUES (53, 1, '61.47.25.130', '', '8b96d12a17e0b037e0ef5870e08d79ba', '2009-11-20', '04:01:38', '2009-11-20', '04:03:33');
INSERT INTO `wb_ulog` VALUES (54, 1, '61.47.25.130', '', '9be34dc20d55f35b8d2cbcaa08003437', '2009-11-20', '08:25:26', '2009-11-20', '08:26:02');
INSERT INTO `wb_ulog` VALUES (55, 7, '61.47.25.130', '', '9be34dc20d55f35b8d2cbcaa08003437', '2009-11-20', '08:26:09', '2009-11-20', '08:26:17');
INSERT INTO `wb_ulog` VALUES (56, 1, '202.176.154.222', 'ppp-202-176-154-222.revip.asianet.co.th', '8e59c8f0f92826693879f3f6093ec98a', '2009-11-22', '10:06:50', '2009-11-22', '10:07:23');
INSERT INTO `wb_ulog` VALUES (57, 1, '202.176.154.141', 'ppp-202-176-154-141.revip.asianet.co.th', 'e864b89b55dca8b236395a13a76d841f', '2009-11-24', '11:43:44', '2009-11-24', '11:44:08');
INSERT INTO `wb_ulog` VALUES (58, 1, '202.176.154.141', 'ppp-202-176-154-141.revip.asianet.co.th', 'e864b89b55dca8b236395a13a76d841f', '2009-11-24', '11:46:47', '2009-11-24', '11:47:11');
INSERT INTO `wb_ulog` VALUES (59, 8, '202.176.154.143', 'ppp-202-176-154-143.revip.asianet.co.th', 'e18e6f33c34a482c10540133b2148c1b', '2010-01-11', '07:48:40', '2010-01-11', '08:20:22');
INSERT INTO `wb_ulog` VALUES (60, 7, '61.90.26.253', 'ppp-61-90-26-253.revip.asianet.co.th', 'e881295bdbd7727a1d500e0cda2ba03e', '2010-01-14', '10:43:54', '2010-01-14', '10:44:02');
INSERT INTO `wb_ulog` VALUES (61, 8, '61.90.26.253', 'ppp-61-90-26-253.revip.asianet.co.th', 'e881295bdbd7727a1d500e0cda2ba03e', '2010-01-14', '10:44:43', '2010-01-14', '10:45:53');
INSERT INTO `wb_ulog` VALUES (62, 7, '61.47.25.130', '', '5475f7858d0c37e41f99170017006370', '2010-01-15', '09:32:37', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (63, 8, '61.47.25.130', '', 'e2d74162cee09ec1f7fe9037473effe4', '2010-01-15', '09:33:46', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (64, 8, '61.47.25.130', '', '9bc78062722ecdadfe94717da59c2b2b', '2010-01-15', '10:26:52', '2010-01-15', '10:27:44');
INSERT INTO `wb_ulog` VALUES (65, 8, '61.47.25.130', '', '71cc60b7e4b99a4adbd4aaac3e311fb3', '2010-01-15', '10:33:30', '2010-01-15', '10:38:55');
INSERT INTO `wb_ulog` VALUES (66, 8, '61.47.25.130', '', '71cc60b7e4b99a4adbd4aaac3e311fb3', '2010-01-15', '10:39:09', '2010-01-15', '10:40:40');
INSERT INTO `wb_ulog` VALUES (67, 8, '61.47.25.130', '', '71cc60b7e4b99a4adbd4aaac3e311fb3', '2010-01-15', '10:40:49', '2010-01-15', '10:41:37');
INSERT INTO `wb_ulog` VALUES (68, 8, '61.47.25.130', '', '71cc60b7e4b99a4adbd4aaac3e311fb3', '2010-01-15', '10:41:45', '2010-01-15', '10:45:54');
INSERT INTO `wb_ulog` VALUES (69, 8, '61.47.25.130', '', '71cc60b7e4b99a4adbd4aaac3e311fb3', '2010-01-15', '10:46:06', '2010-01-15', '11:03:01');
INSERT INTO `wb_ulog` VALUES (70, 8, '61.47.25.130', '', '4a87ebe300e7b03a63e35c3a067e7d4f', '2010-01-15', '04:48:16', '2010-01-15', '05:06:13');
INSERT INTO `wb_ulog` VALUES (71, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '04:58:52', '2010-01-15', '04:59:24');
INSERT INTO `wb_ulog` VALUES (72, 7, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '04:59:29', '2010-01-15', '04:59:40');
INSERT INTO `wb_ulog` VALUES (73, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '04:59:52', '2010-01-15', '05:06:07');
INSERT INTO `wb_ulog` VALUES (74, 8, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:02:02', '2010-01-15', '05:04:49');
INSERT INTO `wb_ulog` VALUES (75, 9, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:05:00', '2010-01-15', '05:05:44');
INSERT INTO `wb_ulog` VALUES (76, 8, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:06:05', '2010-01-15', '05:06:40');
INSERT INTO `wb_ulog` VALUES (77, 8, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:06:51', '2010-01-15', '05:19:14');
INSERT INTO `wb_ulog` VALUES (78, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:08:47', '2010-01-15', '05:10:14');
INSERT INTO `wb_ulog` VALUES (79, 1, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:10:45', '2010-01-15', '05:11:17');
INSERT INTO `wb_ulog` VALUES (80, 1, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:11:39', '2010-01-15', '05:15:01');
INSERT INTO `wb_ulog` VALUES (81, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:15:06', '2010-01-15', '05:16:32');
INSERT INTO `wb_ulog` VALUES (82, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:16:38', '2010-01-15', '05:18:16');
INSERT INTO `wb_ulog` VALUES (83, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:18:22', '2010-01-15', '05:22:00');
INSERT INTO `wb_ulog` VALUES (84, 8, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:19:22', '2010-01-15', '05:22:48');
INSERT INTO `wb_ulog` VALUES (85, 9, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:22:06', '2010-01-15', '05:22:10');
INSERT INTO `wb_ulog` VALUES (86, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:22:16', '2010-01-15', '05:26:19');
INSERT INTO `wb_ulog` VALUES (87, 9, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:22:56', '2010-01-15', '05:25:01');
INSERT INTO `wb_ulog` VALUES (88, 7, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:25:21', '2010-01-15', '05:26:12');
INSERT INTO `wb_ulog` VALUES (89, 8, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '05:26:19', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (90, 9, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:26:23', '2010-01-15', '05:26:30');
INSERT INTO `wb_ulog` VALUES (91, 8, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '05:26:36', '2010-01-15', '05:37:20');
INSERT INTO `wb_ulog` VALUES (92, 1, '61.47.25.130', '', 'e573ef3d4699d1a2dc2ddf69dad8cf9c', '2010-01-15', '06:04:42', '2010-01-15', '06:05:11');
INSERT INTO `wb_ulog` VALUES (93, 8, '61.47.25.130', '', '74da9a10147a97c25a37da7d3f03a011', '2010-01-15', '06:32:00', '2010-01-15', '06:41:14');
INSERT INTO `wb_ulog` VALUES (94, 8, '61.47.25.130', '', '4f22a4cc5523ee39c1b6c52f22c0cb3e', '2010-01-16', '01:19:57', '2010-01-16', '02:41:49');
INSERT INTO `wb_ulog` VALUES (95, 10, '61.47.25.130', '', '4f22a4cc5523ee39c1b6c52f22c0cb3e', '2010-01-16', '02:42:16', '2010-01-16', '02:42:22');
INSERT INTO `wb_ulog` VALUES (96, 8, '61.47.25.130', '', '4f22a4cc5523ee39c1b6c52f22c0cb3e', '2010-01-16', '02:42:33', '2010-01-16', '02:42:56');
INSERT INTO `wb_ulog` VALUES (97, 9, '61.47.25.130', '', '4f22a4cc5523ee39c1b6c52f22c0cb3e', '2010-01-16', '02:43:15', '2010-01-16', '02:43:28');
INSERT INTO `wb_ulog` VALUES (98, 8, '61.47.25.130', '', '4f22a4cc5523ee39c1b6c52f22c0cb3e', '2010-01-16', '02:43:39', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (99, 8, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '01:43:28', '2010-01-18', '01:53:38');
INSERT INTO `wb_ulog` VALUES (100, 7, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '01:53:49', '2010-01-18', '01:53:55');
INSERT INTO `wb_ulog` VALUES (101, 7, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '01:54:15', '2010-01-18', '01:54:20');
INSERT INTO `wb_ulog` VALUES (102, 8, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '01:54:26', '2010-01-18', '01:56:36');
INSERT INTO `wb_ulog` VALUES (103, 7, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '01:56:45', '2010-01-18', '01:57:08');
INSERT INTO `wb_ulog` VALUES (104, 8, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '01:57:20', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (105, 7, '61.47.25.130', '', '34f0b81c3b5c43ea0b984f3806e0ddb9', '2010-01-18', '03:18:23', '2010-01-18', '03:18:43');
INSERT INTO `wb_ulog` VALUES (106, 9, '61.47.25.130', '', '34f0b81c3b5c43ea0b984f3806e0ddb9', '2010-01-18', '03:18:58', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (107, 9, '78.151.221.176', '', '0a14e25a2fb6cea25df62f74ca452a0f', '2010-01-18', '03:48:21', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (108, 8, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '03:48:57', '2010-01-18', '04:15:36');
INSERT INTO `wb_ulog` VALUES (109, 9, '78.151.221.176', '', 'e94bcd2d27e388ec05770f4015da2d19', '2010-01-18', '03:51:17', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (110, 11, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '04:15:44', '2010-01-18', '04:15:50');
INSERT INTO `wb_ulog` VALUES (111, 8, '61.47.25.130', '', 'b2fcedf628cd7a5f368a4e78e2db905a', '2010-01-18', '04:15:55', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (112, 8, '61.47.25.130', '', '09537a10295f804c20e1404fbd8ebb01', '2010-01-19', '01:54:15', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (113, 8, '61.47.25.130', '', '09537a10295f804c20e1404fbd8ebb01', '2010-01-19', '04:34:31', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (114, 8, '61.47.25.130', '', '5e7ec2ac81928985ea89b286857d430a', '2010-01-19', '04:45:49', '2010-01-19', '04:55:12');
INSERT INTO `wb_ulog` VALUES (115, 11, '61.47.25.130', '', '5e7ec2ac81928985ea89b286857d430a', '2010-01-19', '04:55:20', '2010-01-19', '04:55:42');
INSERT INTO `wb_ulog` VALUES (116, 8, '61.47.25.130', '', '5e7ec2ac81928985ea89b286857d430a', '2010-01-19', '04:55:56', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (117, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '01:37:24', '2010-01-20', '01:38:37');
INSERT INTO `wb_ulog` VALUES (118, 11, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '01:38:44', '2010-01-20', '01:39:01');
INSERT INTO `wb_ulog` VALUES (119, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '01:39:58', '2010-01-20', '02:11:25');
INSERT INTO `wb_ulog` VALUES (120, 11, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:11:34', '2010-01-20', '02:13:24');
INSERT INTO `wb_ulog` VALUES (121, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:13:32', '2010-01-20', '02:16:10');
INSERT INTO `wb_ulog` VALUES (122, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:16:19', '2010-01-20', '02:16:31');
INSERT INTO `wb_ulog` VALUES (123, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:16:44', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (124, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:19:56', '2010-01-20', '02:20:17');
INSERT INTO `wb_ulog` VALUES (125, 7, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:20:26', '2010-01-20', '02:20:35');
INSERT INTO `wb_ulog` VALUES (126, 9, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:20:42', '2010-01-20', '02:20:50');
INSERT INTO `wb_ulog` VALUES (127, 11, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:21:04', '2010-01-20', '02:21:35');
INSERT INTO `wb_ulog` VALUES (128, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:21:41', '2010-01-20', '02:26:07');
INSERT INTO `wb_ulog` VALUES (129, 8, '61.47.25.130', '', 'c5ff6cb1ff09b6266450d7cbe8d35ccf', '2010-01-20', '02:24:12', '2010-01-20', '02:25:21');
INSERT INTO `wb_ulog` VALUES (130, 8, '61.47.25.130', '', '948da93ecdcd5d9c39ad0a9e9d123e0c', '2010-01-20', '02:26:21', '2010-01-20', '02:28:01');
INSERT INTO `wb_ulog` VALUES (131, 8, '61.47.25.130', '', 'b68804de2e46f8c7507c31c767d52ed8', '2010-01-20', '02:32:26', '2010-01-20', '02:35:04');
INSERT INTO `wb_ulog` VALUES (132, 9, '61.47.25.130', '', 'b68804de2e46f8c7507c31c767d52ed8', '2010-01-20', '02:35:10', '2010-01-20', '02:39:24');
INSERT INTO `wb_ulog` VALUES (133, 9, '61.47.25.130', '', 'c5ff6cb1ff09b6266450d7cbe8d35ccf', '2010-01-20', '02:35:21', '2010-01-20', '02:35:41');
INSERT INTO `wb_ulog` VALUES (134, 11, '61.47.25.130', '', 'c5ff6cb1ff09b6266450d7cbe8d35ccf', '2010-01-20', '02:35:54', '2010-01-20', '02:36:25');
INSERT INTO `wb_ulog` VALUES (135, 8, '61.47.25.130', '', 'c5ff6cb1ff09b6266450d7cbe8d35ccf', '2010-01-20', '02:36:39', '2010-01-20', '02:38:19');
INSERT INTO `wb_ulog` VALUES (136, 8, '61.47.25.130', '', 'b68804de2e46f8c7507c31c767d52ed8', '2010-01-20', '02:39:30', '2010-01-20', '03:11:26');
INSERT INTO `wb_ulog` VALUES (137, 8, '61.47.25.130', '', 'b68804de2e46f8c7507c31c767d52ed8', '2010-01-20', '03:11:35', '2010-01-20', '03:11:40');
INSERT INTO `wb_ulog` VALUES (138, 8, '61.47.25.130', '', 'fb1b21c33fa9640404ea6fc2e895aff0', '2010-01-20', '04:53:27', '2010-01-20', '05:04:56');
INSERT INTO `wb_ulog` VALUES (139, 11, '61.47.25.130', '', 'fb1b21c33fa9640404ea6fc2e895aff0', '2010-01-20', '05:05:06', '2010-01-20', '05:52:42');
INSERT INTO `wb_ulog` VALUES (140, 8, '61.47.25.130', '', 'a602d911f7e3a7416c3668e59ec33287', '2010-01-21', '11:14:00', '2010-01-21', '11:15:16');
INSERT INTO `wb_ulog` VALUES (141, 7, '61.47.25.130', '', 'a602d911f7e3a7416c3668e59ec33287', '2010-01-21', '11:15:22', '2010-01-21', '11:15:30');
INSERT INTO `wb_ulog` VALUES (142, 9, '61.47.25.130', '', 'a602d911f7e3a7416c3668e59ec33287', '2010-01-21', '11:15:35', '2010-01-21', '11:15:40');
INSERT INTO `wb_ulog` VALUES (143, 11, '61.47.25.130', '', 'a602d911f7e3a7416c3668e59ec33287', '2010-01-21', '11:15:47', '2010-01-21', '11:15:58');
INSERT INTO `wb_ulog` VALUES (144, 8, '61.47.25.130', '', '4d8183518d02ac3ea98f2ffa29f78bba', '2010-01-21', '01:13:53', '2010-01-21', '01:14:21');
INSERT INTO `wb_ulog` VALUES (145, 7, '61.47.25.130', '', '4d8183518d02ac3ea98f2ffa29f78bba', '2010-01-21', '01:14:26', '2010-01-21', '01:14:32');
INSERT INTO `wb_ulog` VALUES (146, 9, '61.47.25.130', '', '4d8183518d02ac3ea98f2ffa29f78bba', '2010-01-21', '01:14:38', '2010-01-21', '01:14:50');
INSERT INTO `wb_ulog` VALUES (147, 11, '61.47.25.130', '', '4d8183518d02ac3ea98f2ffa29f78bba', '2010-01-21', '01:15:01', '2010-01-21', '01:15:18');
INSERT INTO `wb_ulog` VALUES (148, 8, '61.47.25.130', '', '4d8183518d02ac3ea98f2ffa29f78bba', '2010-01-21', '01:15:23', '0000-00-00', '00:00:00');
INSERT INTO `wb_ulog` VALUES (149, 8, '61.47.25.130', '', '817845a5fda2c0801f0c41ba57e8f64c', '2010-01-21', '01:25:34', '0000-00-00', '00:00:00');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_users`
#

DROP TABLE IF EXISTS `wb_users`;
CREATE TABLE `wb_users` (
  `uid` int(5) NOT NULL auto_increment,
  `gid` int(5) NOT NULL default '0',
  `cid` int(5) NOT NULL default '0',
  `uname` varchar(15) NOT NULL default '',
  `upass` varchar(15) NOT NULL default '',
  `ufname` varchar(30) NOT NULL default '',
  `ulname` varchar(30) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `scur` varchar(5) NOT NULL default '',
  `langid` char(2) NOT NULL default '',
  `status` float NOT NULL default '0',
  PRIMARY KEY  (`uid`),
  KEY `uid` (`uid`)
) TYPE=MyISAM COMMENT='Users' AUTO_INCREMENT=12 ;

#
# dump ตาราง `wb_users`
#

INSERT INTO `wb_users` VALUES (1, 0, 1, 'admin', 'clwadmin', 'Admin', 'CWF BackOffice', 'kampee@computerlabelworldwide.com', 'EUR', 'en', '0');
INSERT INTO `wb_users` VALUES (7, 3, 1, 'cwf', 'cwf', 'Cwf', '', 'cwf@computerlabelworldwide.com', 'EUR', 'en', '0');
INSERT INTO `wb_users` VALUES (8, 3, 1, 'cwfadmin', 'cwfadmin', 'CWF Admin', '', 'cwfbackoffice@computerlabelworldwide.com', 'EUR', 'en', '0');
INSERT INTO `wb_users` VALUES (9, 3, 1, 'elle', 'elle', '', '', '', 'USD', 'en', '0');
INSERT INTO `wb_users` VALUES (11, 3, 1, 'timberland', 'timberland', 'timberland', '', 'timberland', 'EUR', 'en', '0');
