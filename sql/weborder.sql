# phpMyAdmin SQL Dump
# version 2.5.7-pl1
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Mar 23, 2005 at 03:09 PM
# Server version: 4.0.12
# PHP Version: 4.3.1
# 
# Database : `weborder`
# 

# --------------------------------------------------------

#
# Table structure for table `wb_cart`
#

DROP TABLE IF EXISTS `wb_cart`;
CREATE TABLE `wb_cart` (
  `cart_id` int(10) NOT NULL auto_increment,
  `sess_id` varchar(60) NOT NULL default '',
  `uid` int(5) NOT NULL default '0',
  `p_id` int(10) NOT NULL default '0',
  `p_qty` int(10) NOT NULL default '0',
  `order_id` int(5) NOT NULL default '0',
  `order_date` date NOT NULL default '0000-00-00',
  `order_time` time NOT NULL default '00:00:00',
  `cart_date` date NOT NULL default '0000-00-00',
  `cart_time` time NOT NULL default '00:00:00',
  `cart_ip` varchar(15) NOT NULL default '',
  `cart_flag` float NOT NULL default '0',
  PRIMARY KEY  (`cart_id`)
) TYPE=MyISAM COMMENT='Carts' AUTO_INCREMENT=2 ;

#
# Dumping data for table `wb_cart`
#

INSERT INTO `wb_cart` VALUES (1, 'cdb8a4792316cb498bf5410ece9da9e3', 3, 1, 1, 0, '0000-00-00', '00:00:00', '2005-03-23', '01:51:45', '127.0.0.1', '0');

# --------------------------------------------------------

#
# Table structure for table `wb_clients`
#

DROP TABLE IF EXISTS `wb_clients`;
CREATE TABLE `wb_clients` (
  `cid` int(5) NOT NULL auto_increment,
  `ccode` varchar(30) NOT NULL default '',
  `cname` varchar(50) NOT NULL default '',
  `csc` longtext NOT NULL,
  `chowto` longtext NOT NULL,
  `cflag` float NOT NULL default '0',
  PRIMARY KEY  (`cid`)
) TYPE=MyISAM COMMENT='Clients' AUTO_INCREMENT=6 ;

#
# Dumping data for table `wb_clients`
#

INSERT INTO `wb_clients` VALUES (1, 'CLW', 'Computer Label WorldWide Co.,Ltd', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="arial" size="2">\r\n	  <font face="arial" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="arial" size="+3">Customers<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n', '<TABLE cellSpacing="4" cellPadding="0" width="100%" bgColor="white" border="0"><TR>\r\n<TD class="text1" align="left"  bgColor="white">\r\n<font face=\'arial\' size="3"><strong>Welcome to CLW Web Ordering System.</strong><br></font>\r\n<font face="arial" size="2">\r\nOrdering the approved labels, or tags has never been easy. Please follow the easy steps herebelow.<br>\r\n1. Choose your required products into Cart by clicking the Cart icon.<br>\r\n2. After choosing your products, To view your order , Please click View Cart button.<br>\r\n					 3. Please insert the quantity required to order with us.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; If you require to remove the item out of the cart, please just click Remove From Cart button.<br>\r\n					 4. Click Calculate button. System will calculate the total amount for you.<br>\r\n					 5. Click Order Now button<br>\r\n					 6. Final step, Please follow the page. To confirm, Just simply click Confirm Button.<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp;System will automatically generate the Order Number for you.\r\n					 <br><br>\r\n					 Please remember this Order Number for future tracking and checking with us.<br>\r\n					 After complete your order, the system will notify the order back to you (person who logged in).<br>\r\n					 Our Customer Service Officer will get in touch with you within 24 hours for further details.\r\n					 <br><br>\r\n					<strong> Notes :</strong><br>\r\n					Product Ref. Search area : To search product by Morgan\'s Reference<br>\r\n					Order Status Search area : To search status of your order by Order Number provided<br>\r\n					View All Past Orders button : To view all your previous orders placed with us<br>\r\n					Log Out button : To Log out from the system<br>\r\n					Home button : To go back to the first page/home to see all products/items\r\n					 <br><br>					 \r\n					<strong>Payment Condition  :</strong><br>\r\n					All Morgan factories/vendors are awarded with 30 days credit from CLW. <br>\r\n					We have provided 2 methods for accepting your payments.<br>\r\n					1. Telegraphic Transfer (T/T) : After confirming the order with us and    after the goods are shipped, <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; we will send you the Monthly Statement for money collection. <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; Kindly make T/T to our designated Bank Account only.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; The credit terms will start counting from the shipment date.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; All the bank charges have to be responsible by the buyers.<br>\r\n					 2. Credit Cards : We have provided the Secured website for your credit card<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; payment method. Just simply fill out your card information required by our<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; system. After confirmation of the transaction, we will proceed with your<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; orders accordingly. All the credit card payment charges will have to be<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; responsibility of the buyer\r\n					 <br><br>\r\n					 CLW reserves the right to withhold all orders or shipments in the event that past invoices remain unpaid and overdue.  <br>\r\n					 CLW will notify Morgan of all outstanding invoices incurred by the vendor/factory.\r\n					<br><br>\r\n					<strong>Minimum order  :</strong><br>\r\n					We don’t set minimum order for you. Please order 5% overage quantity enough to cover shortage problem.<br>\r\n					We have covered the freight charges for you already as the prices are C&F Courier service.  <br>\r\n					When order, Please order 5% overage on all products. In the event that you need to place small orders, <br>\r\n					our minimum charges are  Euro 250 per order.\r\n					<br><br>\r\n					<strong>Import Duties  :</strong><br>\r\n					Local Import Duties Rates may apply, but are not normally payable if you hold an Import/Export License.\r\n					</font>\r\n</TD>\r\n</TR>\r\n</TABLE>\r\n', '0');
INSERT INTO `wb_clients` VALUES (2, 'MOR', 'Morgan S.A.', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="arial" size="2">\r\n	  <font face="arial" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="arial" size="+3">Customers<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n\r\n', '<TABLE cellSpacing="4" cellPadding="0" width="100%" bgColor="white" border="0"><TR>\r\n<TD class="text1" align="left"  bgColor="white">\r\n<font face=\'arial\' size="3"><strong>Welcome to CLW Web Ordering System.</strong><br></font>\r\n<font face="arial" size="2">\r\nOrdering the approved labels, or tags has never been easy. Please follow the easy steps herebelow.<br>\r\n1. Choose your required products into Cart by clicking the Cart icon.<br>\r\n2. After choosing your products, To view your order , Please click View Cart button.<br>\r\n					 3. Please insert the quantity required to order with us.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; If you require to remove the item out of the cart, please just click Remove From Cart button.<br>\r\n					 4. Click Calculate button. System will calculate the total amount for you.<br>\r\n					 5. Click Order Now button<br>\r\n					 6. Final step, Please follow the page. To confirm, Just simply click Confirm Button.<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp;System will automatically generate the Order Number for you.\r\n					 <br><br>\r\n					 Please remember this Order Number for future tracking and checking with us.<br>\r\n					 After complete your order, the system will notify the order back to you (person who logged in).<br>\r\n					 Our Customer Service Officer will get in touch with you within 24 hours for further details.\r\n					 <br><br>\r\n					<strong> Notes :</strong><br>\r\n					Product Ref. Search area : To search product by Morgan\'s Reference<br>\r\n					Order Status Search area : To search status of your order by Order Number provided<br>\r\n					View All Past Orders button : To view all your previous orders placed with us<br>\r\n					Log Out button : To Log out from the system<br>\r\n					Home button : To go back to the first page/home to see all products/items\r\n					 <br><br>					 \r\n					<strong>Payment Condition  :</strong><br>\r\n					All Morgan factories/vendors are awarded with 30 days credit from CLW. <br>\r\n					We have provided 2 methods for accepting your payments.<br>\r\n					1. Telegraphic Transfer (T/T) : After confirming the order with us and    after the goods are shipped, <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; we will send you the Monthly Statement for money collection. <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; Kindly make T/T to our designated Bank Account only.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; The credit terms will start counting from the shipment date.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; All the bank charges have to be responsible by the buyers.<br>\r\n					 2. Credit Cards : We have provided the Secured website for your credit card<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; payment method. Just simply fill out your card information required by our<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; system. After confirmation of the transaction, we will proceed with your<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; orders accordingly. All the credit card payment charges will have to be<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; responsibility of the buyer\r\n					 <br><br>\r\n					 CLW reserves the right to withhold all orders or shipments in the event that past invoices remain unpaid and overdue.  <br>\r\n					 CLW will notify Morgan of all outstanding invoices incurred by the vendor/factory.\r\n					<br><br>\r\n					<strong>Minimum order  :</strong><br>\r\n					We don’t set minimum order for you. Please order 5% overage quantity enough to cover shortage problem.<br>\r\n					We have covered the freight charges for you already as the prices are C&F Courier service.  <br>\r\n					When order, Please order 5% overage on all products. In the event that you need to place small orders, <br>\r\n					our minimum charges are  Euro 250 per order.\r\n					<br><br>\r\n					<strong>Import Duties  :</strong><br>\r\n					Local Import Duties Rates may apply, but are not normally payable if you hold an Import/Export License.\r\n					</font>\r\n</TD>\r\n</TR>\r\n</TABLE>', '0');
INSERT INTO `wb_clients` VALUES (3, 'MAP', 'Morgan Apparel', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="arial" size="2">\r\n	  <font face="arial" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="arial" size="+3">Customers<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n', '<TABLE cellSpacing="4" cellPadding="0" width="100%" bgColor="white" border="0"><TR>\r\n<TD class="text1" align="left"  bgColor="white">\r\n<font face=\'arial\' size="3"><strong>Welcome to CLW Web Ordering System.</strong><br></font>\r\n<font face="arial" size="2">\r\nOrdering the approved labels, or tags has never been easy. Please follow the easy steps herebelow.<br>\r\n1. Choose your required products into Cart by clicking the Cart icon.<br>\r\n2. After choosing your products, To view your order , Please click View Cart button.<br>\r\n					 3. Please insert the quantity required to order with us.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; If you require to remove the item out of the cart, please just click Remove From Cart button.<br>\r\n					 4. Click Calculate button. System will calculate the total amount for you.<br>\r\n					 5. Click Order Now button<br>\r\n					 6. Final step, Please follow the page. To confirm, Just simply click Confirm Button.<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp;System will automatically generate the Order Number for you.\r\n					 <br><br>\r\n					 Please remember this Order Number for future tracking and checking with us.<br>\r\n					 After complete your order, the system will notify the order back to you (person who logged in).<br>\r\n					 Our Customer Service Officer will get in touch with you within 24 hours for further details.\r\n					 <br><br>\r\n					<strong> Notes :</strong><br>\r\n					Product Ref. Search area : To search product by Morgan\'s Reference<br>\r\n					Order Status Search area : To search status of your order by Order Number provided<br>\r\n					View All Past Orders button : To view all your previous orders placed with us<br>\r\n					Log Out button : To Log out from the system<br>\r\n					Home button : To go back to the first page/home to see all products/items\r\n					 <br><br>					 \r\n					<strong>Payment Condition  :</strong><br>\r\n					All Morgan factories/vendors are awarded with 30 days credit from CLW. <br>\r\n					We have provided 2 methods for accepting your payments.<br>\r\n					1. Telegraphic Transfer (T/T) : After confirming the order with us and    after the goods are shipped, <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; we will send you the Monthly Statement for money collection. <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; Kindly make T/T to our designated Bank Account only.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; The credit terms will start counting from the shipment date.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; All the bank charges have to be responsible by the buyers.<br>\r\n					 2. Credit Cards : We have provided the Secured website for your credit card<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; payment method. Just simply fill out your card information required by our<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; system. After confirmation of the transaction, we will proceed with your<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; orders accordingly. All the credit card payment charges will have to be<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; responsibility of the buyer\r\n					 <br><br>\r\n					 CLW reserves the right to withhold all orders or shipments in the event that past invoices remain unpaid and overdue.  <br>\r\n					 CLW will notify Morgan of all outstanding invoices incurred by the vendor/factory.\r\n					<br><br>\r\n					<strong>Minimum order  :</strong><br>\r\n					We don’t set minimum order for you. Please order 5% overage quantity enough to cover shortage problem.<br>\r\n					We have covered the freight charges for you already as the prices are C&F Courier service.  <br>\r\n					When order, Please order 5% overage on all products. In the event that you need to place small orders, <br>\r\n					our minimum charges are  Euro 250 per order.\r\n					<br><br>\r\n					<strong>Import Duties  :</strong><br>\r\n					Local Import Duties Rates may apply, but are not normally payable if you hold an Import/Export License.\r\n					</font>\r\n</TD>\r\n</TR>\r\n</TABLE>\r\n', '0');
INSERT INTO `wb_clients` VALUES (4, 'RES', 'Reiss', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="arial" size="2">\r\n	  <font face="arial" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="arial" size="+3">Customers<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n', '<TABLE cellSpacing="4" cellPadding="0" width="100%" bgColor="white" border="0"><TR>\r\n<TD class="text1" align="left"  bgColor="white">\r\n<font face=\'arial\' size="3"><strong>Welcome to CLW Web Ordering System.</strong><br></font>\r\n<font face="arial" size="2">\r\nOrdering the approved labels, or tags has never been easy. Please follow the easy steps herebelow.<br>\r\n1. Choose your required products into Cart by clicking the Cart icon.<br>\r\n2. After choosing your products, To view your order , Please click View Cart button.<br>\r\n					 3. Please insert the quantity required to order with us.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; If you require to remove the item out of the cart, please just click Remove From Cart button.<br>\r\n					 4. Click Calculate button. System will calculate the total amount for you.<br>\r\n					 5. Click Order Now button<br>\r\n					 6. Final step, Please follow the page. To confirm, Just simply click Confirm Button.<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp;System will automatically generate the Order Number for you.\r\n					 <br><br>\r\n					 Please remember this Order Number for future tracking and checking with us.<br>\r\n					 After complete your order, the system will notify the order back to you (person who logged in).<br>\r\n					 Our Customer Service Officer will get in touch with you within 24 hours for further details.\r\n					 <br><br>\r\n					<strong> Notes :</strong><br>\r\n					Product Ref. Search area : To search product by Morgan\'s Reference<br>\r\n					Order Status Search area : To search status of your order by Order Number provided<br>\r\n					View All Past Orders button : To view all your previous orders placed with us<br>\r\n					Log Out button : To Log out from the system<br>\r\n					Home button : To go back to the first page/home to see all products/items\r\n					 <br><br>					 \r\n					<strong>Payment Condition  :</strong><br>\r\n					All Morgan factories/vendors are awarded with 30 days credit from CLW. <br>\r\n					We have provided 2 methods for accepting your payments.<br>\r\n					1. Telegraphic Transfer (T/T) : After confirming the order with us and    after the goods are shipped, <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; we will send you the Monthly Statement for money collection. <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; Kindly make T/T to our designated Bank Account only.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; The credit terms will start counting from the shipment date.  <br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; All the bank charges have to be responsible by the buyers.<br>\r\n					 2. Credit Cards : We have provided the Secured website for your credit card<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; payment method. Just simply fill out your card information required by our<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; system. After confirmation of the transaction, we will proceed with your<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; orders accordingly. All the credit card payment charges will have to be<br>\r\n					 &nbsp;&nbsp;&nbsp;&nbsp; responsibility of the buyer\r\n					 <br><br>\r\n					 CLW reserves the right to withhold all orders or shipments in the event that past invoices remain unpaid and overdue.  <br>\r\n					 CLW will notify Morgan of all outstanding invoices incurred by the vendor/factory.\r\n					<br><br>\r\n					<strong>Minimum order  :</strong><br>\r\n					We don’t set minimum order for you. Please order 5% overage quantity enough to cover shortage problem.<br>\r\n					We have covered the freight charges for you already as the prices are C&F Courier service.  <br>\r\n					When order, Please order 5% overage on all products. In the event that you need to place small orders, <br>\r\n					our minimum charges are  Euro 250 per order.\r\n					<br><br>\r\n					<strong>Import Duties  :</strong><br>\r\n					Local Import Duties Rates may apply, but are not normally payable if you hold an Import/Export License.\r\n					</font>\r\n</TD>\r\n</TR>\r\n</TABLE>', '0');
INSERT INTO `wb_clients` VALUES (5, 'SIS', 'Siso', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="arial" size="2">\r\n	  <font face="arial" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="arial" size="+3">Customers<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n', '<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>\r\n   <TR>\r\n	  <TD height="100" align="center"><font face="arial" size="2">\r\n	  <font face="arial" size="+2"> <strong>Statement of Confidentiality</strong></font><br>\r\n		All information contained in this document manual is highly confidential<br>\r\n		and intended for use only by the recipient as it contains<br> \r\n		data that is propriety to <br>\r\n		 \r\n		<strong><font face="arial" size="+3">Customers<br>\r\n		& <br>\r\n		ComputerLabel Worldwide Co., Ltd.</font></strong><br>\r\n		The contents outlined in the proceeding documents should not be delivered<br>\r\n		or disclosed to any party outside the recipients domain.<br><br>\r\n		\r\n		Please note that for the comfort of ALL SUPPLIERS to Customers any<br>\r\n		confidential information passed to CLW concerning the whereabouts of <br>\r\n		their production or supply will not be passed onto “Customers” or any third <br>\r\n		party without consent.<br><br>\r\n	 </font> </TD>\r\n  </TR>\r\n</TABLE>\r\n', '0');

# --------------------------------------------------------

#
# Table structure for table `wb_currency`
#

DROP TABLE IF EXISTS `wb_currency`;
CREATE TABLE `wb_currency` (
  `cur_code` varchar(5) NOT NULL default '',
  `cur_name` varchar(30) NOT NULL default '',
  `cur_sy` varchar(10) NOT NULL default '',
  `cur_rate` double NOT NULL default '0'
) TYPE=MyISAM COMMENT='Currency';

#
# Dumping data for table `wb_currency`
#

INSERT INTO `wb_currency` VALUES ('USD', 'US DOLLARS', '&usd;', '40');
INSERT INTO `wb_currency` VALUES ('EUR', 'EURO', '&euro;', '0');

# --------------------------------------------------------

#
# Table structure for table `wb_group`
#

DROP TABLE IF EXISTS `wb_group`;
CREATE TABLE `wb_group` (
  `gid` int(5) NOT NULL auto_increment,
  `gname` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`gid`)
) TYPE=MyISAM COMMENT='Groups' AUTO_INCREMENT=7 ;

#
# Dumping data for table `wb_group`
#

INSERT INTO `wb_group` VALUES (1, 'admin');
INSERT INTO `wb_group` VALUES (2, 'clw');
INSERT INTO `wb_group` VALUES (3, 'morgan');
INSERT INTO `wb_group` VALUES (4, 'morganapparel');
INSERT INTO `wb_group` VALUES (5, 'reiss');
INSERT INTO `wb_group` VALUES (6, 'siso');

# --------------------------------------------------------

#
# Table structure for table `wb_language`
#

DROP TABLE IF EXISTS `wb_language`;
CREATE TABLE `wb_language` (
  `lang` char(2) NOT NULL default '',
  `language` varchar(30) NOT NULL default ''
) TYPE=MyISAM COMMENT='Languages';

#
# Dumping data for table `wb_language`
#

INSERT INTO `wb_language` VALUES ('en', 'English');

# --------------------------------------------------------

#
# Table structure for table `wb_pgroup`
#

DROP TABLE IF EXISTS `wb_pgroup`;
CREATE TABLE `wb_pgroup` (
  `pgroup` int(5) NOT NULL auto_increment,
  `pcode` varchar(10) NOT NULL default '',
  `pname` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`pgroup`)
) TYPE=MyISAM COMMENT='Product Group' AUTO_INCREMENT=4 ;

#
# Dumping data for table `wb_pgroup`
#

INSERT INTO `wb_pgroup` VALUES (1, '', 'Hang Tag');
INSERT INTO `wb_pgroup` VALUES (2, '', 'Printed Label');
INSERT INTO `wb_pgroup` VALUES (3, '', 'Woven Label');

# --------------------------------------------------------

#
# Table structure for table `wb_product`
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
  `prod_cur` varchar(5) NOT NULL default '',
  `prod_per` int(8) NOT NULL default '0',
  `mini_qty` int(8) NOT NULL default '0',
  `cur_stock` double NOT NULL default '0',
  `min_stock` double NOT NULL default '0',
  `pic_thum` varchar(30) NOT NULL default '',
  `pic_zoom` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`pid`)
) TYPE=MyISAM COMMENT='Product' AUTO_INCREMENT=4 ;

#
# Dumping data for table `wb_product`
#

INSERT INTO `wb_product` VALUES (1, 2, 0, 'B1', 'B1', 'Plastic', '', 'Plastic 0.4 micron, Die Cut<br>\r\nSize 75 x 110 mm. \r\n', '128.87', 'EUR', 1000, 1000, '0', '0', 'B1.JPG', 'B1.JPG');
INSERT INTO `wb_product` VALUES (2, 2, 0, 'B2', '', 'B2', '', 'Plastic 0.4 micron, Die Cut<br>\r\nSize 75 x 110 mm. \r\n', '128.1', 'EUR', 1000, 1000, '0', '0', 'B2.JPG', 'B2.JPG');
INSERT INTO `wb_product` VALUES (3, 2, 0, 'B3', '', 'B3', '', 'Plastic 0.4 micron, Die Cut<br>\r\nSize 75 x 110 mm. \r\n', '121.12', 'EUR', 1000, 1000, '0', '0', 'B3.JPG', 'B3.JPG');

# --------------------------------------------------------

#
# Table structure for table `wb_users`
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
  `status` float NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) TYPE=MyISAM COMMENT='Users' AUTO_INCREMENT=4 ;

#
# Dumping data for table `wb_users`
#

INSERT INTO `wb_users` VALUES (1, 1, 1, 'kampee', 'gatorface', 'Kampee', 'Sridavong', '0');
INSERT INTO `wb_users` VALUES (2, 3, 2, 'morgan', 'morgan', 'Morgan', 'SA', '0');
INSERT INTO `wb_users` VALUES (3, 1, 1, 'admin', 'adm', 'Administrator', 'CLW', '0');
