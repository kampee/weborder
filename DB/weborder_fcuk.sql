# phpMyAdmin SQL Dump
# version 2.5.4
# http://www.phpmyadmin.net
#
# โฮสต์: localhost
# เวลาในการสร้าง: 31 ก.ค. 2020  12:28น.
# รุ่นของเซิร์ฟเวอร์: 4.0.16
# รุ่นของ PHP: 4.3.3
# 
# ฐานข้อมูล : `weborder_fcuk`
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
) TYPE=MyISAM COMMENT='Carts' AUTO_INCREMENT=11 ;

#
# dump ตาราง `wb_cart`
#

INSERT INTO `wb_cart` VALUES (1, '3956ed0dba21c8b6a1d606e2d6a54ddc', 1, 1, 1, 1, 0, '0000-00-00', '00:00:00', '2008-12-14', '11:41:30', '', '61.47.25.130', '0');
INSERT INTO `wb_cart` VALUES (2, '3956ed0dba21c8b6a1d606e2d6a54ddc', 1, 1, 2, 1, 0, '0000-00-00', '00:00:00', '2008-12-14', '11:41:30', '', '61.47.25.130', '0');
INSERT INTO `wb_cart` VALUES (3, '3956ed0dba21c8b6a1d606e2d6a54ddc', 1, 1, 3, 1, 0, '0000-00-00', '00:00:00', '2008-12-14', '11:41:30', '', '61.47.25.130', '0');
INSERT INTO `wb_cart` VALUES (4, 'e3f00ec1d3437b1f5a874d02f8e641a8', 3, 1, 1, 1, 1, '2008-12-15', '03:05:34', '2008-12-15', '03:05:21', '61.47.25.130', '61.47.25.130', '1');
INSERT INTO `wb_cart` VALUES (5, 'e3f00ec1d3437b1f5a874d02f8e641a8', 3, 1, 4, 1, 1, '2008-12-15', '03:05:34', '2008-12-15', '03:05:21', '61.47.25.130', '61.47.25.130', '1');
INSERT INTO `wb_cart` VALUES (6, 'e3f00ec1d3437b1f5a874d02f8e641a8', 3, 1, 6, 1, 1, '2008-12-15', '03:05:34', '2008-12-15', '03:05:21', '61.47.25.130', '61.47.25.130', '1');
INSERT INTO `wb_cart` VALUES (10, '1d9e9388cd4ac4e74b53ed5e7b08dec4', 1, 1, 2, 1, 0, '0000-00-00', '00:00:00', '2008-12-15', '09:59:37', '', '58.10.3.136', '0');

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

INSERT INTO `wb_clients` VALUES (1, 'FCUK', 'FCUK', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="arial" size="2">\r\n	  <font face="arial" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="arial" size="+3">FCUK<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n', '', 'EUR', '0', 'weborder-fcuk@computerlabelworldwide.com', '0', '1', '1', '0');

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
) TYPE=MyISAM COMMENT='File Manager' AUTO_INCREMENT=7 ;

#
# dump ตาราง `wb_files`
#

INSERT INTO `wb_files` VALUES (1, 1, 'TEST', 'fclg 72 dis-new.pdf', 'TEST', 20081127030150, '0');
INSERT INTO `wb_files` VALUES (2, 1, 'FCUK FILES NAME', 'fcmb 72 dis-new.pdf', 'FCUK AAAAAAA', 20081127030150, '0');
INSERT INTO `wb_files` VALUES (3, 1, 'PROJECT 2008', 'new-fcuk st.pdf', 'PROJECT', 20081127030150, '0');
INSERT INTO `wb_files` VALUES (4, 1, 'TEST 1234', 'new-no-file 003.pdf', 'DCCCC', 20081127030150, '0');
INSERT INTO `wb_files` VALUES (5, 1, 'ASP Broker', 'asp24.pdf', 'ASP', 20081127030521, '0');
INSERT INTO `wb_files` VALUES (6, 2, 'TNS Stock', 'tns24.pdf', 'TNS Details', 20081127030636, '0');

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
  `order_location` varchar(20) NOT NULL default '',
  `order_oq` int(2) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
) TYPE=MyISAM COMMENT='Order Info' AUTO_INCREMENT=2 ;

#
# dump ตาราง `wb_order`
#

INSERT INTO `wb_order` VALUES (3, 1, 1, 'e3f00ec1d3437b1f5a874d02f8e641a8', 0, 0, '0', '0', '', '1', '0', '', 0, 0, 0, '2', '2008-12-15', '03:05:34', '61.47.25.130', '', '', '', '', '', 1, '', '0', '1', 1, '0000-00-00', '0', '1', 'NA', 5);

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
) TYPE=MyISAM COMMENT='Order Status' AUTO_INCREMENT=9 ;

#
# dump ตาราง `wb_ostatus`
#

INSERT INTO `wb_ostatus` VALUES (1, 'WP', 'Work In-Process');
INSERT INTO `wb_ostatus` VALUES (2, 'OR', 'Order Received');
INSERT INTO `wb_ostatus` VALUES (3, 'SI', 'Ship/In Transit');
INSERT INTO `wb_ostatus` VALUES (4, 'DL', 'Delivered');
INSERT INTO `wb_ostatus` VALUES (5, 'CN', 'Cancelled');
INSERT INTO `wb_ostatus` VALUES (7, 'WF', 'Waiting for more Information');
INSERT INTO `wb_ostatus` VALUES (8, 'HC', 'Hold by Customer');

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

INSERT INTO `wb_pgroup` VALUES (1, 'HGT', 'Hangtag');
INSERT INTO `wb_pgroup` VALUES (2, 'PFL', 'Printed Fabric Label');
INSERT INTO `wb_pgroup` VALUES (3, 'WVL', 'Woven Label');
INSERT INTO `wb_pgroup` VALUES (4, 'WCL', 'Wash Care Label');
INSERT INTO `wb_pgroup` VALUES (7, 'LST', 'Leg Sticker');
INSERT INTO `wb_pgroup` VALUES (6, 'ORT', 'Overrider Tag');
INSERT INTO `wb_pgroup` VALUES (10, 'HTX', 'Heat transfers');

# --------------------------------------------------------

#
# โครงสร้างตาราง `wb_product`
#

DROP TABLE IF EXISTS `wb_product`;
CREATE TABLE `wb_product` (
  `pid` int(10) NOT NULL auto_increment,
  `cid` int(5) NOT NULL default '0',
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
  `prod_flag` float NOT NULL default '0',
  PRIMARY KEY  (`pid`)
) TYPE=MyISAM COMMENT='Product' AUTO_INCREMENT=7 ;

#
# dump ตาราง `wb_product`
#

INSERT INTO `wb_product` VALUES (1, 1, 1, 'FCUK001', '', 'French Connection', 'London England', 'Size 40 x 110 mm', '5', 'EUR', '5', 'EUR', 1000, 'PCS', 0, '0', '0', 'FCUK001_A.jpg', 'FCUK001_B.jpg', '', '0', '1');
INSERT INTO `wb_product` VALUES (2, 1, 1, 'FCUK002', '', 'French Connection', '', 'Size 40 x 110 mm\r\n', '7', 'EUR', '7', 'EUR', 1000, 'PCS', 0, '0', '0', 'FCUK002_A.jpg', 'FCUK002_B.jpg', '', '0', '0');
INSERT INTO `wb_product` VALUES (3, 1, 1, 'FCUK003', '', 'FC', '', 'Size 38.45 x 110 mm', '9', 'EUR', '9', 'EUR', 1000, 'PCS', 0, '0', '0', 'FCUK003_A.jpg', 'FCUK003_B.jpg', '', '0', '0');
INSERT INTO `wb_product` VALUES (4, 1, 1, 'FCUK004', '', 'FCUK', '', 'Size 38 x 125 mm', '10', 'EUR', '10', 'EUR', 1000, 'PCS', 0, '0', '0', 'FCUK004_A.jpg', 'FCUK004_B.jpg', '', '0', '1');
INSERT INTO `wb_product` VALUES (5, 1, 1, 'FCUK005', '', 'FC72', '', 'Size 38 x 125 mm', '5', 'EUR', '5', 'EUR', 1000, 'PCS', 0, '0', '0', 'FCUK005_A.jpg', 'FCUK005_B.jpg', '', '0', '0');
INSERT INTO `wb_product` VALUES (6, 1, 1, 'FCUK006', '', 'FC SEVENTY-TWO', '', '', '12', 'EUR', '12', 'EUR', 1000, 'PCS', 0, '0', '0', 'FCUK006_A.jpg', 'FCUK006_B.jpg', '', '0', '1');

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
) TYPE=MyISAM COMMENT='Stock Inventory' AUTO_INCREMENT=2 ;

#
# dump ตาราง `wb_stock`
#


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
  PRIMARY KEY  (`uid`)
) TYPE=MyISAM COMMENT='Users' AUTO_INCREMENT=4 ;

#
# dump ตาราง `wb_users`
#

INSERT INTO `wb_users` VALUES (1, 1, 1, 'admin', 'admin', 'Admin', 'FCUK', 'weborder-fcuk@computerlabelworldwide.com', 'EUR', 'en', '0');
INSERT INTO `wb_users` VALUES (2, 3, 1, 'test', 'test', 'test', 'test', 'test', 'EUR', 'en', '0');
INSERT INTO `wb_users` VALUES (3, 4, 1, 'fcuk', 'fcuk', 'sandra', 'fcuk', 'TomlinsonS@frenchconnection.com', 'EUR', 'en', '0');
