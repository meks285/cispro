<?php include './mandate_/lidh.php' ?>
<?php
class MyClassa{
    public function GetUserInformation(){
	$table1 = 'patient';
	$table2 = 'laboratory';
	$table3 = 'facility';
	$table4 = 'lga';
	$table5 = 'state';
	
	$column = 'patacc_tb';
	$column1 = 'currentlybreastf';
	$column2 = 'otherspec';

	$column4 = 'resultintepretation';
	$column5 = 'assayedby';
	$column6 = 'assaydate';
	$column7 = 'approvedby';
	$column8 = 'approvedate';
	$column9 = 'orderdate';
	$column10 = 'collectedby';
	$column11 = 'collectdate';
	$column13 = 'pcrlabname';
	
	$column14 = 'otherstatus';
	$column15 = 'cliniciandate';
	$column16 = 'pcrsampleno';
	$column17 = 'pcrsampletype';
	$column18 = 'pcrsamplecolldate';
	$column19 = 'pcrsamplerecievedate';
	$column20 = 'vl_indication';
	$column21 = 'artstartdate';
	$column22 = 'drugregimen';
	$column23 = 'orderedby';
	$column23 = 'bmi_muac';

	$column24 = 'lga';
	$column25 = 'state';
	$column26 = 'fac_location';
	$column27 = 'fac_location_lga';
	$column28 = 'data_check';

	include './mandate_/lidh.php';

	if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table1."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `patient` LIKE '".$column."'"))==0){
	$results_C1 = mysqli_query($con,"ALTER TABLE patient
	ADD COLUMN patacc_tb varchar(10) DEFAULT NULL,
	ADD COLUMN otherspec varchar(100) DEFAULT NULL,
	ADD COLUMN uniqueidmother varchar(30) DEFAULT NULL,
	ADD COLUMN patienttransinfac varchar(90) DEFAULT NULL,
	ADD COLUMN patienttransindate DATE DEFAULT NULL,
	ADD COLUMN bmi_muac varchar(15) DEFAULT NULL,
	ADD COLUMN other_art_start_stat varchar(25) DEFAULT NULL,
	ADD COLUMN currentlybreastf varchar(10) DEFAULT NULL;
	");
	}
}
    
	else {
		
	}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table1."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `patient` LIKE '".$column26."'"))==0){
	$results_CX = mysqli_query($con,"ALTER TABLE patient	ADD COLUMN fac_location varchar(45) DEFAULT NULL;
	");
	}
}
    
	else {
		
	}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table1."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `patient` LIKE '".$column27."'"))==0){
	$results_CX = mysqli_query($con,"ALTER TABLE patient	ADD COLUMN fac_location_lga varchar(85) DEFAULT NULL;
	");
	}
}
    
	else {
		
	}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table2."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `laboratory` LIKE '".$column6."'"))==0){
	$results_C2 = mysqli_query($con,"ALTER TABLE laboratory
	ADD COLUMN resultintepretation varchar(70) DEFAULT NULL,
	ADD COLUMN assayedby varchar(70) DEFAULT NULL,
	ADD COLUMN assaydate date DEFAULT NULL,
	ADD COLUMN approvedby varchar(70) DEFAULT NULL,
	ADD COLUMN approvedate date DEFAULT NULL,
	ADD COLUMN orderdate date DEFAULT NULL,
	ADD COLUMN collectedby varchar(70) DEFAULT NULL,
	ADD COLUMN collectdate date DEFAULT NULL,
	ADD COLUMN pcrlabname varchar(70) DEFAULT NULL,
	ADD COLUMN otherstatus varchar(70) DEFAULT NULL,
	ADD COLUMN cliniciandate date DEFAULT NULL,
	ADD COLUMN pcrsampleno varchar(70) DEFAULT NULL,
	ADD COLUMN pcrsampletype varchar(70) DEFAULT NULL,
	ADD COLUMN pcrsamplecolldate TIMESTAMP NULL DEFAULT NULL,
	ADD COLUMN pcrsamplerecievedate TIMESTAMP NULL DEFAULT NULL,
	ADD COLUMN vl_indication varchar(70) DEFAULT NULL,

	ADD COLUMN artstartdate date DEFAULT NULL,
	ADD COLUMN drugregimen varchar(70) DEFAULT NULL,
	ADD COLUMN orderedby varchar(70) DEFAULT NULL;
	");
	}
}
    
	else {
		
}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table3."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `facility` LIKE '".$column24."'"))==0){
	$results_C3 = mysqli_query($con,"ALTER TABLE facility
	ADD COLUMN lga varchar(100) DEFAULT NULL,
	ADD COLUMN facilityidprefix varchar(2) DEFAULT NULL,
	ADD COLUMN state varchar(65) DEFAULT NULL,
	ADD COLUMN data_check int(2) DEFAULT NULL;
	");
	}
}
    
	else {
		
	}
	
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table3."'"))==1){
		if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `facility` LIKE '".$column28."'"))==0){
	$results_C3 = mysqli_query($con,"DROP TABLE IF EXISTS facility;");
	$results_C3Xn = mysqli_query($con,"CREATE TABLE IF NOT EXISTS `facility` (
								`id` int(1) unsigned NOT NULL AUTO_INCREMENT,
								`facilityname` varchar(30) NOT NULL,
								`lga` varchar(100) DEFAULT NULL,
								`facilityidprefix` varchar(2) DEFAULT NULL,
								`state` varchar(65) DEFAULT NULL,
								`data_check` int(2) DEFAULT NULL,
								PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;");
	}

}
else {
		
	}
	
	
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table1."'"))==1){
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allart;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allartforradet;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allart_postintervention;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allart_preintervention;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allcare;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allcareview;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allcd4;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allcd4count;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allipt;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allreg;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allviralload;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allviralload_postintervention;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allviralload_preintervention;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allvlcount;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allvlcount_postintervention;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allvlcount_preintervention;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS allvload;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS all_art;");
	$results_CX = mysqli_query($con,"DROP VIEW IF EXISTS all_lab;");
	$results_CX = mysqli_query($con,"DROP TABLE IF EXISTS all_newart;");
	$results_CX = mysqli_query($con,"DROP VIEW IF EXISTS whostagevisit;");
	$results_CX = mysqli_query($con,"DROP VIEW IF EXISTS whostagepatient;");
	$results_CX = mysqli_query($con,"DROP VIEW IF EXISTS statusforradet;");
	$results_CX = mysqli_query($con,"DROP VIEW IF EXISTS nextappointment;");
}
else {
		
	}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table4."'"))==0){
	$results_CXL = mysqli_query($con,"CREATE TABLE IF NOT EXISTS `lga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `statecode` int(11) NOT NULL,
  `lga` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=792 ;");
	$results_CXLa = mysqli_query($con,"INSERT INTO `lga` (`id`, `statecode`, `lga`) VALUES
(1, 1, 'Aba North'),
(2, 1, 'Aba South'),
(3, 1, 'Arochukwu'),
(4, 1, 'Bende'),
(5, 1, 'Ikwuano'),
(6, 1, 'Isiala-Ngwa North'),
(7, 1, 'Isiala-Ngwa South'),
(8, 1, 'Isuikwato'),
(9, 1, 'Obi Nwa'),
(10, 1, 'Ohafia'),
(11, 1, 'Osisioma'),
(12, 1, 'Ngwa'),
(13, 1, 'Ugwunagbo'),
(14, 1, 'Ukwa East'),
(15, 1, 'Ukwa West'),
(16, 1, 'Umuahia North'),
(17, 1, 'Umuahia South'),
(18, 1, 'Umu-Neochi'),
(19, 2, 'Demsa'),
(20, 2, 'Fufore'),
(21, 2, 'Ganaye'),
(22, 2, 'Gireri'),
(23, 2, 'Gombi'),
(24, 2, 'Guyuk'),
(25, 2, 'Hong'),
(26, 2, 'Jada'),
(27, 2, 'Lamurde'),
(28, 2, 'Madagali'),
(29, 2, 'Maiha'),
(30, 2, 'Mayo-Belwa'),
(31, 2, 'Michika'),
(32, 2, 'Mubi North'),
(33, 2, 'Mubi South'),
(34, 2, 'Numan'),
(35, 2, 'Shelleng'),
(36, 2, 'Song'),
(37, 2, 'Toungo'),
(38, 2, 'Yola North'),
(39, 2, 'Yola South'),
(40, 3, 'Abak'),
(41, 3, 'Eastern Obolo'),
(42, 3, 'Eket'),
(43, 3, 'Esit Eket'),
(44, 3, 'Essien Udim'),
(45, 3, 'Etim Ekpo'),
(46, 3, 'Etinan'),
(47, 3, 'Ibeno'),
(48, 3, 'Ibesikpo Asutan'),
(49, 3, 'Ibiono Ibom'),
(50, 3, 'Ika'),
(51, 3, 'Ikono'),
(52, 3, 'Ikot Abasi'),
(53, 3, 'Ikot Ekpene'),
(54, 3, 'Ini'),
(55, 3, 'Itu'),
(56, 3, 'Mbo'),
(57, 3, 'Mkpat Enin'),
(58, 3, 'Nsit Atai'),
(59, 3, 'Nsit Ibom'),
(60, 3, 'Nsit Ubium'),
(61, 3, 'Obot Akara'),
(62, 3, 'Okobo'),
(63, 3, 'Onna'),
(64, 3, 'Oron '),
(65, 3, 'Oruk Anam'),
(66, 3, 'Udung Uko'),
(67, 3, 'Ukanafun'),
(68, 3, 'Uruan'),
(69, 3, 'Urue-Offong/Oruko'),
(70, 3, 'Uyo'),
(71, 4, 'Aguata'),
(72, 4, 'Anambra East'),
(73, 4, 'Anambra West'),
(74, 4, 'Anaocha'),
(75, 4, 'Awka North'),
(76, 4, 'Awka South'),
(77, 4, 'Ayamelum'),
(78, 4, 'Dunukofia'),
(79, 4, 'Ekwusigo'),
(80, 4, 'Idemili North'),
(81, 4, 'Idemili south'),
(82, 4, 'Ihiala'),
(83, 4, 'Njikoka'),
(84, 4, 'Nnewi North'),
(85, 4, 'Nnewi South'),
(86, 4, 'Ogbaru'),
(87, 4, 'Onitsha North'),
(88, 4, 'Onitsha South'),
(89, 4, 'Orumba North'),
(90, 4, 'Orumba South'),
(91, 4, 'Oyi'),
(101, 5, 'Alkaleri'),
(102, 5, 'Bauchi'),
(103, 5, 'Bogoro'),
(104, 5, 'Damban'),
(105, 5, 'Darazo'),
(106, 5, 'Dass'),
(107, 5, 'Ganjuwa'),
(108, 5, 'Giade'),
(109, 5, 'Itas/Gadau'),
(110, 5, 'Jamaare'),
(111, 5, 'Katagum'),
(112, 5, 'Kirfi'),
(113, 5, 'Misau'),
(114, 5, 'Ningi'),
(115, 5, 'Shira'),
(116, 5, 'Tafawa-Balewa'),
(117, 5, 'Toro'),
(118, 5, 'Warji'),
(119, 5, 'Zaki'),
(120, 6, 'Brass'),
(121, 6, 'Ekeremor'),
(122, 6, 'Kolokuma/Opokuma'),
(123, 6, 'Nembe'),
(124, 6, 'Ogbia'),
(125, 6, 'Sagbama'),
(126, 6, 'Southern Jaw'),
(127, 6, 'Yenegoa'),
(128, 7, 'Ado'),
(129, 7, 'Agatu'),
(130, 7, 'Apa'),
(131, 7, 'Buruku'),
(132, 7, 'Gboko'),
(133, 7, 'Guma'),
(134, 7, 'Gwer East'),
(135, 7, 'Gwer West'),
(136, 7, 'Katsina-Ala'),
(137, 7, 'Konshisha'),
(138, 7, 'Kwande'),
(139, 7, 'Logo'),
(140, 7, 'Makurdi'),
(141, 7, 'Obi'),
(142, 7, 'Ogbadibo'),
(143, 7, 'Oju'),
(144, 7, 'Okpokwu'),
(145, 7, 'Ohimini'),
(146, 7, 'Oturkpo'),
(147, 7, 'Tarka'),
(148, 7, 'Ukum'),
(149, 7, 'Ushongo'),
(150, 7, 'Vandeikya'),
(151, 8, 'Abadam'),
(152, 8, 'Askira/Uba'),
(153, 8, 'Bama'),
(154, 8, 'Bayo'),
(155, 8, 'Biu'),
(156, 8, 'Chibok'),
(157, 8, 'Damboa'),
(158, 8, 'Dikwa'),
(159, 8, 'Gubio'),
(160, 8, 'Guzamala'),
(161, 8, 'Gwoza'),
(162, 8, 'Hawul'),
(163, 8, 'Jere'),
(164, 8, 'Kaga'),
(165, 8, 'Kala/Balge'),
(166, 8, 'Konduga'),
(167, 8, 'Kukawa'),
(168, 8, 'Kwaya Kusar'),
(169, 8, 'Mafa'),
(170, 8, 'Magumeri'),
(171, 8, 'Maiduguri'),
(172, 8, 'Marte'),
(173, 8, 'Mobbar'),
(174, 8, 'Monguno'),
(175, 8, 'Ngala'),
(176, 8, 'Nganzai'),
(177, 8, 'Shani'),
(178, 9, 'Akpabuyo'),
(179, 9, 'Odukpani'),
(180, 9, 'Akamkpa'),
(181, 9, 'Biase'),
(182, 9, 'Abi'),
(183, 9, 'Ikom'),
(184, 9, 'Yarkur'),
(185, 9, 'Odubra'),
(186, 9, 'Boki'),
(187, 9, 'Ogoja'),
(188, 9, 'Yala'),
(189, 9, 'Obanliku'),
(190, 9, 'Obudu'),
(191, 9, 'Calabar South'),
(192, 9, 'Etung'),
(193, 9, 'Bekwara'),
(194, 9, 'Bakassi'),
(195, 9, 'Calabar Municipality'),
(196, 10, 'Oshimili'),
(197, 10, 'Aniocha'),
(198, 10, 'Aniocha South'),
(199, 10, 'Ika South'),
(200, 10, 'Ika North-East'),
(201, 10, 'Ndokwa West'),
(202, 10, 'Ndokwa East'),
(203, 10, 'Isoko south'),
(204, 10, 'Isoko North'),
(205, 10, 'Bomadi'),
(206, 10, 'Burutu'),
(207, 10, 'Ughelli South'),
(208, 10, 'Ughelli North'),
(209, 10, 'Ethiope West'),
(210, 10, 'Ethiope East'),
(211, 10, 'Sapele'),
(212, 10, 'Okpe'),
(213, 10, 'Warri North'),
(214, 10, 'Warri South'),
(215, 10, 'Uvwie'),
(216, 10, 'Udu'),
(217, 10, 'Warri Central'),
(218, 10, 'Ukwani'),
(219, 10, 'Oshimili North'),
(220, 10, 'Patani'),
(221, 11, 'Afikpo South'),
(222, 11, 'Afikpo North'),
(223, 11, 'Onicha'),
(224, 11, 'Ohaozara'),
(225, 11, 'Abakaliki'),
(226, 11, 'Ishielu'),
(227, 11, 'lkwo'),
(228, 11, 'Ezza'),
(229, 11, 'Ezza South'),
(230, 11, 'Ohaukwu'),
(231, 11, 'Ebonyi'),
(232, 11, 'Ivo'),
(233, 12, 'Esan North-East'),
(234, 12, 'Esan Central'),
(235, 12, 'Esan West'),
(236, 12, 'Egor'),
(237, 12, 'Ukpoba'),
(238, 12, 'Central'),
(239, 12, 'Etsako Central'),
(240, 12, 'Igueben'),
(241, 12, 'Oredo'),
(242, 12, 'Ovia SouthWest'),
(243, 12, 'Ovia South-East'),
(244, 12, 'Orhionwon'),
(245, 12, 'Uhunmwonde'),
(246, 12, 'Etsako East '),
(247, 12, 'Esan South-East'),
(248, 13, 'Ado'),
(249, 13, 'Ekiti-East'),
(250, 13, 'Ekiti-West '),
(251, 13, 'Emure/Ise/Orun'),
(252, 13, 'Ekiti South-West'),
(253, 13, 'Ikare'),
(254, 13, 'Irepodun'),
(255, 13, 'Ijero, '),
(256, 13, 'Ido/Osi'),
(257, 13, 'Oye'),
(258, 13, 'Ikole'),
(259, 13, 'Moba'),
(260, 13, 'Gbonyin'),
(261, 13, 'Efon'),
(262, 13, 'Ise/Orun '),
(263, 13, 'Ilejemeje'),
(264, 14, 'Enugu South'),
(265, 14, 'Igbo-Eze South'),
(266, 14, 'Enugu North'),
(267, 14, 'Nkanu'),
(268, 14, 'Udi Agwu'),
(269, 14, 'Oji-River'),
(270, 14, 'Ezeagu'),
(271, 14, 'IgboEze North'),
(272, 14, 'Isi-Uzo'),
(273, 14, 'Nsukka'),
(274, 14, 'Igbo-Ekiti'),
(275, 14, 'Uzo-Uwani'),
(276, 14, 'Enugu Eas'),
(277, 14, 'Aninri'),
(278, 14, 'Nkanu East'),
(279, 14, 'Udenu'),
(280, 15, 'Akko'),
(281, 15, 'Balanga'),
(282, 15, 'Billiri'),
(283, 15, 'Dukku'),
(284, 15, 'Kaltungo'),
(285, 15, 'Kwami'),
(286, 15, 'Shomgom'),
(287, 15, 'Funakaye'),
(288, 15, 'Gombe'),
(289, 15, 'Nafada/Bajoga'),
(290, 15, 'Yamaltu/Delta'),
(291, 16, 'Aboh-Mbaise'),
(292, 16, 'Ahiazu-Mbaise'),
(293, 16, 'Ehime-Mbano'),
(294, 16, 'Ezinihitte'),
(295, 16, 'Ideato North'),
(296, 16, 'Ideato South'),
(297, 16, 'Ihitte/Uboma'),
(298, 16, 'Ikeduru'),
(299, 16, 'Isiala Mbano'),
(300, 16, 'Isu'),
(301, 16, 'Mbaitoli'),
(302, 16, 'Mbaitoli'),
(303, 16, 'Ngor-Okpala'),
(304, 16, 'Njaba'),
(305, 16, 'Nwangele'),
(306, 16, 'Nkwerre'),
(307, 16, 'Obowo'),
(308, 16, 'Oguta'),
(309, 16, 'Ohaji/Egbema'),
(310, 16, 'Okigwe'),
(311, 16, 'Orlu'),
(312, 16, 'Orsu'),
(313, 16, 'Oru East'),
(314, 16, 'Oru West'),
(315, 16, 'Owerri-Municipal'),
(316, 16, 'Owerri North'),
(317, 16, 'Owerri West'),
(318, 17, 'Auyo'),
(319, 17, 'Babura'),
(320, 17, 'Birni Kudu'),
(321, 17, 'Biriniwa'),
(322, 17, 'Buji'),
(323, 17, 'Dutse'),
(324, 17, 'Gagarawa'),
(325, 17, 'Garki'),
(326, 17, 'Gumel'),
(327, 17, 'Guri'),
(328, 17, 'Gwaram'),
(329, 17, 'Gwiwa'),
(330, 17, 'Hadejia'),
(331, 17, 'Jahun'),
(332, 17, 'Kafin Hausa'),
(333, 17, 'Kaugama Kazaure'),
(334, 17, 'Kiri Kasamma'),
(335, 17, 'Kiyawa'),
(336, 17, 'Maigatari'),
(337, 17, 'Malam Madori'),
(338, 17, 'Miga'),
(339, 17, 'Ringim'),
(340, 17, 'Roni'),
(341, 17, 'Sule-Tankarkar'),
(342, 17, 'Taura '),
(343, 17, 'Yankwashi'),
(344, 18, 'Birni-Gwari'),
(345, 18, 'Chikun'),
(346, 18, 'Giwa'),
(347, 18, 'Igabi'),
(348, 18, 'Ikara'),
(349, 18, 'jaba'),
(350, 18, 'Jemaa'),
(351, 18, 'Kachia'),
(352, 18, 'Kaduna North'),
(353, 18, 'Kaduna South'),
(354, 18, 'Kagarko'),
(355, 18, 'Kajuru'),
(356, 18, 'Kaura'),
(357, 18, 'Kauru'),
(358, 18, 'Kubau'),
(359, 18, 'Kudan'),
(360, 18, 'Lere'),
(361, 18, 'Makarfi'),
(362, 18, 'Sabon-Gari'),
(363, 18, 'Sanga'),
(364, 18, 'Soba'),
(365, 18, 'Zango-Kataf'),
(366, 18, 'Zaria'),
(367, 19, 'Ajingi'),
(368, 19, 'Albasu'),
(369, 19, 'Bagwai'),
(370, 19, 'Bebeji'),
(371, 19, 'Bichi'),
(372, 19, 'Bunkure'),
(373, 19, 'Dala'),
(374, 19, 'Dambatta'),
(375, 19, 'Dawakin Kudu'),
(376, 19, 'Dawakin Tofa'),
(377, 19, 'Doguwa'),
(378, 19, 'Fagge'),
(379, 19, 'Gabasawa'),
(380, 19, 'Garko'),
(381, 19, 'Garum'),
(382, 19, 'Mallam'),
(383, 19, 'Gaya'),
(384, 19, 'Gezawa'),
(385, 19, 'Gwale'),
(386, 19, 'Gwarzo'),
(387, 19, 'Kabo'),
(388, 19, 'Kano Municipal'),
(389, 19, 'Karaye'),
(390, 19, 'Kibiya'),
(391, 19, 'Kiru'),
(392, 19, 'kumbotso'),
(393, 19, 'Kunchi'),
(394, 19, 'Kura'),
(395, 19, 'Madobi'),
(396, 19, 'Makoda'),
(397, 19, 'Minjibir'),
(398, 19, 'Nasarawa'),
(399, 19, 'Rano'),
(400, 19, 'Rimin Gado'),
(401, 19, 'Rogo'),
(402, 19, 'Shanono'),
(403, 19, 'Sumaila'),
(404, 19, 'Takali'),
(405, 19, 'Tarauni'),
(406, 19, 'Tofa'),
(407, 19, 'Tsanyawa'),
(408, 19, 'Tudun Wada'),
(409, 19, 'Ungogo'),
(410, 19, 'Warawa'),
(411, 19, 'Wudil'),
(412, 20, 'Bakori'),
(413, 20, 'Batagarawa'),
(414, 20, 'Batsari'),
(415, 20, 'Baure'),
(416, 20, 'Bindawa'),
(417, 20, 'Charanchi'),
(418, 20, 'Dandume'),
(419, 20, 'Danja'),
(420, 20, 'Dan Musa'),
(421, 20, 'Daura'),
(422, 20, 'Dutsi'),
(423, 20, 'Dutsin-Ma'),
(424, 20, 'Faskari'),
(425, 20, 'Funtua'),
(426, 20, 'Ingawa'),
(427, 20, 'Jibia'),
(428, 20, 'Kafur'),
(429, 20, 'Kaita'),
(430, 20, 'Kankara'),
(431, 20, 'Kankia'),
(432, 20, 'Katsina'),
(433, 20, 'Kurfi'),
(434, 20, 'Kusada'),
(435, 20, 'MaiAdua'),
(436, 20, 'Malumfashi'),
(437, 20, 'Mani'),
(438, 20, 'Mashi'),
(439, 20, 'Matazuu'),
(440, 20, 'Musawa'),
(441, 20, 'Rimi'),
(442, 20, 'Sabuwa'),
(443, 20, 'Safana'),
(444, 20, 'Sandamu'),
(445, 20, 'Zango'),
(446, 21, 'Aleiro'),
(447, 21, 'Arewa-Dandi'),
(448, 21, 'Argungu'),
(449, 21, 'Augie'),
(450, 21, 'Bagudo'),
(451, 21, 'Birnin Kebbi'),
(452, 21, 'Bunza'),
(453, 21, 'Dandi '),
(454, 21, 'Fakai'),
(455, 21, 'Gwandu'),
(456, 21, 'Jega'),
(457, 21, 'Kalgo'),
(458, 21, 'Koko/Besse'),
(459, 21, 'Maiyama'),
(460, 21, 'Ngaski'),
(461, 21, 'Sakaba'),
(462, 21, 'Shanga'),
(463, 21, 'Suru'),
(464, 21, 'Wasagu/Danko'),
(465, 21, 'Yauri'),
(466, 21, 'Zuru'),
(467, 22, 'Adavi'),
(468, 22, 'Ajaokuta'),
(469, 22, 'Ankpa'),
(470, 22, 'Bassa'),
(471, 22, 'Dekina'),
(472, 22, 'Ibaji'),
(473, 22, 'Idah'),
(474, 22, 'Igalamela-Odolu'),
(475, 22, 'Ijumu'),
(476, 22, 'Kabba/Bunu'),
(477, 22, 'Kogi'),
(478, 22, 'Lokoja'),
(479, 22, 'Mopa-Muro'),
(480, 22, 'Ofu'),
(481, 22, 'Ogori/Mangongo'),
(482, 22, 'Okehi'),
(483, 22, 'Okene'),
(484, 22, 'Olamabolo'),
(485, 22, 'Omala'),
(486, 22, 'Yagba East '),
(487, 22, 'Yagba West'),
(488, 23, 'Asa'),
(489, 23, 'Baruten'),
(490, 23, 'Edu'),
(491, 23, 'Ekiti'),
(492, 23, 'Ifelodun'),
(493, 23, 'Ilorin East'),
(494, 23, 'Ilorin West'),
(495, 23, 'Irepodun'),
(496, 23, 'Isin'),
(497, 23, 'Kaiama'),
(498, 23, 'Moro'),
(499, 23, 'Offa'),
(500, 23, 'Oke-Ero'),
(501, 23, 'Oyun'),
(502, 23, 'Pategi'),
(503, 24, 'Agege'),
(504, 24, 'Ajeromi-Ifelodun'),
(505, 24, 'Alimosho'),
(506, 24, 'Amuwo-Odofin'),
(507, 24, 'Apapa'),
(508, 24, 'Badagry'),
(509, 24, 'Epe'),
(510, 24, 'Eti-Osa'),
(511, 24, 'Ibeju/Lekki'),
(512, 24, 'Ifako-Ijaye '),
(513, 24, 'Ikeja'),
(514, 24, 'Ikorodu'),
(515, 24, 'Kosofe'),
(516, 24, 'Lagos Island'),
(517, 24, 'Lagos Mainland'),
(518, 24, 'Mushin'),
(519, 24, 'Ojo'),
(520, 24, 'Oshodi-Isolo'),
(521, 24, 'Shomolu'),
(522, 24, 'Surulere'),
(523, 25, 'Akwanga'),
(524, 25, 'Awe'),
(525, 25, 'Doma'),
(526, 25, 'Karu'),
(527, 25, 'Keana'),
(528, 25, 'Keffi'),
(529, 25, 'Kokona'),
(530, 25, 'Lafia'),
(531, 25, 'Nasarawa'),
(532, 25, 'Nasarawa-Eggon'),
(533, 25, 'Obi'),
(534, 25, 'Toto'),
(535, 25, 'Wamba'),
(536, 26, 'Agaie'),
(537, 26, 'Agwara'),
(538, 26, 'Bida'),
(539, 26, 'Borgu'),
(540, 26, 'Bosso'),
(541, 26, 'Chanchaga'),
(542, 26, 'Edati'),
(543, 26, 'Gbako'),
(544, 26, 'Gurara'),
(545, 26, 'Katcha'),
(546, 26, 'Kontagora '),
(547, 26, 'Lapai'),
(548, 26, 'Lavun'),
(549, 26, 'Magama'),
(550, 26, 'Mariga'),
(551, 26, 'Mashegu'),
(552, 26, 'Mokwa'),
(553, 26, 'Muya'),
(554, 26, 'Pailoro'),
(555, 26, 'Rafi'),
(556, 26, 'Rijau'),
(557, 26, 'Shiroro'),
(558, 26, 'Suleja'),
(559, 26, 'Tafa'),
(560, 26, 'Wushishi'),
(561, 27, 'Abeokuta North'),
(562, 27, 'Abeokuta South'),
(563, 27, 'Ado-Odo/Ota'),
(564, 27, 'Egbado North'),
(565, 27, 'Egbado South'),
(566, 27, 'Ewekoro'),
(567, 27, 'Ifo'),
(568, 27, 'Ijebu East'),
(569, 27, 'Ijebu North'),
(570, 27, 'Ijebu North East'),
(571, 27, 'Ijebu Ode'),
(572, 27, 'Ikenne'),
(573, 27, 'Imeko-Afon'),
(574, 27, 'Ipokia'),
(575, 27, 'Obafemi-Owode'),
(576, 27, 'Ogun Waterside'),
(577, 27, 'Odeda'),
(578, 27, 'Odogbolu'),
(579, 27, 'Remo North'),
(580, 27, 'Shagamu'),
(581, 28, 'Akoko North East'),
(582, 28, 'Akoko North West'),
(583, 28, 'Akoko South Akure East'),
(584, 28, 'Akoko South West'),
(585, 28, 'Akure North'),
(586, 28, 'Akure South'),
(587, 28, 'Ese-Odo'),
(588, 28, 'Idanre'),
(589, 28, 'Ifedore'),
(590, 28, 'Ilaje'),
(591, 28, 'Ile-Oluji'),
(592, 28, 'Okeigbo'),
(593, 28, 'Irele'),
(594, 28, 'Odigbo'),
(595, 28, 'Okitipupa'),
(596, 28, 'Ondo East'),
(597, 28, 'Ondo West'),
(598, 28, 'Ose'),
(599, 28, 'Owo'),
(600, 29, 'Aiyedade'),
(601, 29, 'Aiyedire'),
(602, 29, 'Atakumosa East'),
(603, 29, 'Atakumosa West'),
(604, 29, 'Boluwaduro'),
(605, 29, 'Boripe'),
(606, 29, 'Ede North'),
(607, 29, 'Ede South'),
(608, 29, 'Egbedore'),
(609, 29, 'Ejigbo'),
(610, 29, 'Ife Central'),
(611, 29, 'Ife East'),
(612, 29, 'Ife North'),
(613, 29, 'Ife South'),
(614, 29, 'Ifedayo'),
(615, 29, 'Ifelodun'),
(616, 29, 'Ila'),
(617, 29, 'Ilesha East'),
(618, 29, 'Ilesha West'),
(619, 29, 'Irepodun'),
(620, 29, 'Irewole'),
(621, 29, 'Isokan'),
(622, 29, 'Iwo'),
(623, 29, 'Obokun'),
(624, 29, 'Odo-Otin'),
(625, 29, 'Ola-Oluwa'),
(626, 29, 'Olorunda'),
(627, 29, 'Oriade'),
(628, 29, 'Orolu'),
(629, 29, 'Osogbo'),
(630, 30, 'Afijio'),
(631, 30, 'Akinyele'),
(632, 30, 'Atiba'),
(633, 30, 'Atigbo'),
(634, 30, 'Egbeda'),
(635, 30, 'IbadanCentral'),
(636, 30, 'Ibadan North'),
(637, 30, 'Ibadan North West'),
(638, 30, 'Ibadan South East'),
(639, 30, 'Ibadan South West'),
(640, 30, 'Ibarapa Central'),
(641, 30, 'Ibarapa East'),
(642, 30, 'Ibarapa North'),
(643, 30, 'Ido'),
(644, 30, 'Irepo'),
(645, 30, 'Iseyin'),
(646, 30, 'Itesiwaju'),
(647, 30, 'Iwajowa'),
(648, 30, 'Kajola'),
(649, 30, 'Lagelu Ogbomosho North'),
(650, 30, 'Ogbmosho South'),
(651, 30, 'Ogo Oluwa'),
(652, 30, 'Olorunsogo'),
(653, 30, 'Oluyole'),
(654, 30, 'Ona-Ara'),
(655, 30, 'Orelope'),
(656, 30, 'Ori Ire'),
(657, 30, 'Oyo East'),
(658, 30, 'Oyo West'),
(659, 30, 'Saki East'),
(660, 30, 'Saki West'),
(661, 30, 'Surulere'),
(675, 31, 'Barikin Ladi'),
(676, 31, 'Bassa'),
(677, 31, 'Bokkos'),
(678, 31, 'Jos East'),
(679, 31, 'Jos North'),
(680, 31, 'Jos South'),
(681, 31, 'Kanam'),
(682, 31, 'Kanke'),
(683, 31, 'Langtang North'),
(684, 31, 'Langtang South'),
(685, 31, 'Mangu'),
(686, 31, 'Mikang'),
(687, 31, 'Pankshin'),
(688, 31, 'Quaan Pan'),
(689, 31, 'Riyom'),
(690, 31, 'Shendam'),
(691, 31, 'Wase'),
(692, 32, 'Abua/Odual'),
(693, 32, 'Ahoada East'),
(694, 32, 'Ahoada West'),
(695, 32, 'Akuku Toru'),
(696, 32, 'Andoni'),
(697, 32, 'Asari-Toru'),
(698, 32, 'Bonny'),
(699, 32, 'Degema'),
(700, 32, 'Emohua'),
(701, 32, 'Eleme'),
(702, 32, 'Etche'),
(703, 32, 'Gokana'),
(704, 32, 'Ikwerre'),
(705, 32, 'Khana'),
(706, 32, 'Obia/Akpor'),
(707, 32, 'Ogba/Egbema/Ndoni'),
(708, 32, 'Ogu/Bolo'),
(709, 32, 'Okrika'),
(710, 32, 'Omumma'),
(711, 32, 'Opobo/Nkoro'),
(712, 32, 'Oyigbo'),
(713, 32, 'Port-Harcourt'),
(714, 32, 'Tai'),
(715, 33, 'Binji'),
(716, 33, 'Bodinga'),
(717, 33, 'Dange-shnsi'),
(718, 33, 'Gada'),
(719, 33, 'Goronyo'),
(720, 33, 'Gudu'),
(721, 33, 'Gawabawa'),
(722, 33, 'Illela'),
(723, 33, 'Isa'),
(724, 33, 'Kware'),
(725, 33, 'kebbe'),
(726, 33, 'Rabah'),
(727, 33, 'Sabon birni'),
(728, 33, 'Shagari'),
(729, 33, 'Silame'),
(730, 33, 'Sokoto North'),
(731, 33, 'Sokoto South'),
(732, 33, 'Tambuwal'),
(733, 33, 'Tqngaza'),
(734, 33, 'Tureta'),
(735, 33, 'Wamako'),
(736, 33, 'Wurno'),
(737, 33, 'Yabo'),
(738, 34, 'Ardo-kola'),
(739, 34, 'Bali'),
(740, 34, 'Donga'),
(741, 34, 'Gashaka'),
(742, 34, 'Cassol'),
(743, 34, 'Ibi'),
(744, 34, 'Jalingo'),
(745, 34, 'Karin-Lamido'),
(746, 34, 'Kurmi'),
(747, 34, 'Lau'),
(748, 34, 'Sardauna'),
(749, 34, 'Takum'),
(750, 34, 'Ussa'),
(751, 34, 'Wukari'),
(752, 34, 'Yorro'),
(753, 34, 'Zing'),
(754, 35, 'Bade'),
(755, 35, 'Bursari'),
(756, 35, 'Damaturu'),
(757, 35, 'Fika'),
(758, 35, 'Fune'),
(759, 35, 'Geidam'),
(760, 35, 'Gujba'),
(761, 35, 'Gulani'),
(762, 35, 'Jakusko'),
(763, 35, 'Karasuwa'),
(764, 35, 'Karawa'),
(765, 35, 'Machina'),
(766, 35, 'Nangere'),
(767, 35, 'Nguru Potiskum'),
(768, 35, 'Tarmua'),
(769, 35, 'Yunusari'),
(770, 35, 'Yusufari'),
(771, 36, 'Anka'),
(772, 36, 'Bakura'),
(773, 36, 'Birnin Magaji'),
(774, 36, 'Bukkuyum'),
(775, 36, 'Bungudu'),
(776, 36, 'Gummi'),
(777, 36, 'Gusau'),
(778, 36, 'Kaura'),
(779, 36, 'Namoda'),
(780, 36, 'Maradun'),
(781, 36, 'Maru'),
(782, 36, 'Shinkafi'),
(783, 36, 'Talata Mafara'),
(784, 36, 'Tsafe'),
(785, 36, 'Zurmi'),
(786, 37, 'Gwagwalada'),
(787, 37, 'Kuje'),
(788, 37, 'Abaji'),
(789, 37, 'Abuja Municipal'),
(790, 37, 'Bwari'),
(791, 37, 'Kwali');");

}
    
	else {
		
	}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table5."'"))==0){
	$results_CXS = mysqli_query($con,"CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;");
	$results_CXSa = mysqli_query($con,"INSERT INTO `states` (`id`, `state`) VALUES
(1, 'ABIA'),
(2, 'ADAMAWA'),
(3, 'AKWA IBOM'),
(4, 'ANAMBRA'),
(5, 'BAUCHI'),
(6, 'BAYELSA'),
(7, 'BENUE'),
(8, 'BORNO'),
(9, 'CROSS RIVER'),
(10, 'DELTA'),
(11, 'EBONYI'),
(12, 'EDO'),
(13, 'EKITI'),
(14, 'ENUGU'),
(15, 'GOMBE'),
(16, 'IMO'),
(17, 'JIGAWA'),
(18, 'KADUNA'),
(19, 'KANO'),
(20, 'KATSINA'),
(21, 'KEBBI'),
(22, 'KOGI'),
(23, 'KWARA'),
(24, 'LAGOS'),
(25, 'NASARAWA'),
(26, 'NIGER'),
(27, 'OGUN'),
(28, 'ONDO'),
(29, 'OSUN'),
(30, 'OYO'),
(31, 'PLATEAU'),
(32, 'RIVERS'),
(33, 'SOKOTO'),
(34, 'TARABA'),
(35, 'YOBE'),
(36, 'ZAMFARA'),
(37, 'FCT');");
}
    
	else {
		
	}	
	$view1 = 'lab_results_pivot_test';
	$viewcolumn1 = 'HCVAntibody';

$query = mysqli_query($con,"SHOW COLUMNS FROM `lab_results_pivot_test` LIKE '".$viewcolumn1."'");

if($query){
  $numrows = mysqli_num_rows($query);
  if($numrows==0){
$query2 = mysqli_query($con,"CREATE or replace ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lab_results_pivot_test` AS (select `laboratory`.`pepid` AS `pepid`,`laboratory`.`cliniciandate` AS `cliniciandate`,`laboratory`.`pcrlabname` AS `pcrlabname`,`laboratory`.`pcrsampleno` AS `pcrsampleno`,`laboratory`.`pcrsampletype` AS `pcrsampletype`,`laboratory`.`pcrsamplecolldate` AS `pcrsamplecolldate`,`laboratory`.`pcrsamplerecievedate` AS `pcrsamplerecievedate`,`laboratory`.`vl_indication` AS `vl_indication`,`laboratory`.`artstartdate` AS `artstartdate`,`laboratory`.`drugregimen` AS `drugregimen`,`laboratory`.`resultstatus` AS `resultstatus`,`laboratory`.`otherstatus` AS `otherstatus`,`laboratory`.`visitdate` AS `visitdate`,`laboratory`.`reportdate` AS `reportdate`,`laboratory`.`clinicianname` AS `clinicianname`,`laboratory`.`additionaltests` AS `additionaltests`,`laboratory`.`reportedby` AS `reportedby`,`laboratory`.`checkedby` AS `checkedby`,`laboratory`.`checkdate` AS `checkdate`,`laboratory`.`labregno` AS `labregno`,`laboratory`.`baselineorrepeat` AS `baselineorrepeat`,`laboratory`.`artstatus` AS `artstatus`,(case when (`laboratory`.`tests` = 'CD4') then `laboratory`.`results` end) AS `CD4`,(case when (`laboratory`.`tests` = 'Viral Load') then `laboratory`.`results` end) AS `Viral_Load`,(case when (`laboratory`.`tests` = 'WBC') then `laboratory`.`results` end) AS `WBC`,(case when (`laboratory`.`tests` = 'HCVAntibody') then `laboratory`.`results` end) AS `HCVAntibody`,(case when (`laboratory`.`tests` = 'CD4%') then `laboratory`.`results` end) AS `CD4_per`,(case when (`laboratory`.`tests` = 'Lymphocytes') then `laboratory`.`results` end) AS `Lymphocytes`,(case when (`laboratory`.`tests` = 'Monocytes') then `laboratory`.`results` end) AS `Monocytes`,(case when (`laboratory`.`tests` = 'Polymorph') then `laboratory`.`results` end) AS `Polymorph`,(case when (`laboratory`.`tests` = 'Eosinophils') then `laboratory`.`results` end) AS `Eosinophils`,(case when (`laboratory`.`tests` = 'Basophils') then `laboratory`.`results` end) AS `Basophils`,(case when (`laboratory`.`tests` = 'Hb/PCV') then `laboratory`.`results` end) AS `HbPCV`,(case when (`laboratory`.`tests` = 'Platelets') then `laboratory`.`results` end) AS `Platelets`,(case when (`laboratory`.`tests` = 'HBsAG (*At Baseline)') then `laboratory`.`results` end) AS `HBsAG`,(case when (`laboratory`.`tests` = 'VDRL') then `laboratory`.`results` end) AS `VDRL`,(case when (`laboratory`.`tests` = 'Creatinine') then `laboratory`.`results` end) AS `Creatinine`,(case when (`laboratory`.`tests` = 'ALT/SGPT') then `laboratory`.`results` end) AS `ALT_SGPT`,(case when (`laboratory`.`tests` = 'Urinalysis: GLUCOSE') then `laboratory`.`results` end) AS `GLUCOSE`,(case when (`laboratory`.`tests` = 'Urinalysis: PROTEIN') then `laboratory`.`results` end) AS `PROTEIN`,(case when (`laboratory`.`tests` = 'Cytology: VIA/Pap Smear') then `laboratory`.`results` end) AS `VIAPap_Smear`,(case when (`laboratory`.`tests` = 'Na+') then `laboratory`.`results` end) AS `Na`,(case when (`laboratory`.`tests` = 'K+') then `laboratory`.`results` end) AS `K`,(case when (`laboratory`.`tests` = 'Cl-') then `laboratory`.`results` end) AS `Cl`,(case when (`laboratory`.`tests` = 'HCO3') then `laboratory`.`results` end) AS `HCO3`,(case when (`laboratory`.`tests` = 'BUN') then `laboratory`.`results` end) AS `BUN`,(case when (`laboratory`.`tests` = 'Fasting Glucose') then `laboratory`.`results` end) AS `Fasting_Glucose`,(case when (`laboratory`.`tests` = 'Total Bilirubin') then `laboratory`.`results` end) AS `Total_Bilirubin`,(case when (`laboratory`.`tests` = 'Amylase') then `laboratory`.`results` end) AS `Amylase`,(case when (`laboratory`.`tests` = 'Total Cholesterol') then `laboratory`.`results` end) AS `Total_Cholesterol`,(case when (`laboratory`.`tests` = 'LDL') then `laboratory`.`results` end) AS `LDL`,(case when (`laboratory`.`tests` = 'HDL') then `laboratory`.`results` end) AS `HDL`,(case when (`laboratory`.`tests` = 'AST/SGOT') then `laboratory`.`results` end) AS `AST_SGOT`,(case when (`laboratory`.`tests` = 'Triglyceride') then `laboratory`.`results` end) AS `Triglyceride`,(case when (`laboratory`.`tests` = 'Alk. Phosphatase') then `laboratory`.`results` end) AS `Alk_Phosphatase`,(case when (`laboratory`.`tests` = 'Pregnancy') then `laboratory`.`results` end) AS `Pregnancy`,(case when (`laboratory`.`tests` = 'Malaria smear') then `laboratory`.`results` end) AS `Malaria_smear` from `laboratory`)");
  }
  else{
  }
}
else{
  die("something failed");
  }
	}
}
$classa = new MyClassa;
$infoa = $classa->GetUserInformation();
echo mysqli_error($con);


	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<script src="drugcodetranslate.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript">

</script>
<style type="text/css">
body {
	font-family:Arial, Helvetica, sans-serif
}
#availability_status {
	font-size:11px;
	margin-left:10px;
}
input.form_element {
	width: 221px;
	background: transparent url('bg.jpg') no-repeat;
	color : #747862;
	height:20px;
	border:0;
	padding:4px 8px;
	margin-bottom:0px;
}
label {
	width: 125px;
	float: left;
	text-align: left;
	margin-right: 0.5em;
	display: block;
}
.style_form {
	margin:3px;
}
#content {
	margin-left: auto;
	margin-right: auto;
	width: 600px;
	margin-top:200px;
}
#submit_btn {
	margin-left:133px;
	height:30px;
	width: 221px;
}

h1 {
  margin: 0px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}

#footer {
   position:absolute;
   bottom:0;
   width:99.1%;
   font-size:9px;
}

button.gray, a.gray, input[type=submit].gray {
    padding: 10px 10px;
    -webkit-border-radius: 2px 2px;
    border: solid 1px #dadada;
    background: #f4f4f4; /* Old browsers */
    background: -moz-linear-gradient(top,  #f4f4f4 0%, #f1f1f1 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f4f4f4), color-stop(100%,#f1f1f1)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* IE10+ */
    background: linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f4f4', endColorstr='#f1f1f1',GradientType=0 ); /* IE6-9 */
    color: #555;
    text-decoration: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    font-weight:bold;
    font-family:Arial, Helvetica, sans-serif;
    text-shadow: 0px 1px 1px rgba(255,255,255,1);
    line-height: 1;
    font-size:11px;
}
 
.gray:hover { 
    border:1px solid #c6c6c4; 
    background: background: #f8f8f8; /* Old browsers */
    background: -moz-linear-gradient(top,  #f8f8f8 0%, #f1f1f1 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f8f8f8), color-stop(100%,#f1f1f1)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* IE10+ */
    background: linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f1f1f1',GradientType=0 ); /* IE6-9 */
    color: #222; 
    -webkit-box-shadow: 0px 1px 1px 0px rgba(10, 10, 10, 0.4);
    -moz-box-shadow: 0px 1px 1px 0px rgba(10, 10, 10, 0.4);
    box-shadow: 0px 1px 1px 0px rgba(10, 10, 10, 0.4);
}
         
.gray:active { 
    border:1px solid #c6c6c4; 
    color: #222;
    -webkit-box-shadow: inset 0 0 2px 4px #f1f1f1, 0 1px 0 0 #eeeeee;
    -moz-box-shadow: inset 0 0 2px 4px #f1f1f1, 0 1px 0 0 #eeeeee;
    box-shadow: inset 0 0 2px 4px #f1f1f1, 0 1px 0 0 #eeeeee;
}
#copyright{
    clear: both;
    text-align: right;
    font-size: 80%;
    color: #666666;
}

#copyright-apin{
    clear: both;
    text-align: right;
    font-size: 80%;
    color: #666666;
    padding-top: 1px;
}

#copyright-apin span {
	vertical-align: top;
}
</style>
</head>
<?php


class MyClass{
    public function GetUserInformation(){
	$table = 'facility';
include './mandate_/lidh.php';
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table."'"))==1){
	
	$results = mysqli_query($con,"SELECT facilityname,facilityidprefix,state,lga from facility");
	$info = mysqli_fetch_assoc($results);
	return $info;
	} 
    
	else {
		
		$results = mysqli_query($con,"CREATE TABLE IF NOT EXISTS `facility` (
  `id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `facilityname` varchar(30) NOT NULL,
  `lga` varchar(100) DEFAULT NULL,
  `facilityidprefix` varchar(2) DEFAULT NULL,
  `state` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;");
		$info = 'No Facility Set';
	}
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);

?>
<h1 align="center">Clinical Information System || <?php

if (!empty($info['facilityname'])&&!empty($info['lga'])&&!empty($info['state'])){
echo ucwords($info['facilityname']); 
}
else{	
//require("./adprivsco/connect.php");
$sqlnameerr="delete from facility";
$resultnameerr=mysqli_query($con,$sqlnameerr);
//$infone = mysqli_fetch_assoc($resultnameerr);
echo '<a href="#" onclick="window.open(\'./setfacility.php\',\'patient ID\',\'width=300,height=170\')">[UPDATE Facility Information (Click)]</a>&nbsp; &nbsp; &nbsp; &nbsp;'; 
}

?></h1>

<p />
<body >
<div id="content">
<IMG STYLE="position:absolute; TOP:60px; LEFT:2px; WIDTH:285px; HEIGHT:140px" src="images/header1.png">
<IMG STYLE="position:absolute; TOP:60px; RIGHT:2px; WIDTH:190px; HEIGHT:140px" src="images/coa.png">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" style="position:inherit; top:200px; left:500" >
<tr>
<td width="298">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
  <a href="./login.php" style="font-weight:bold; font-size:14px">            <center><img style="border:0;" src="images/loginbtn.PNG" alt="[LOGIN]" width="200" height="100" /></center></a></td>
</tr>
<tr>
<td><div class="style_form"><?php $reasons = array("facility" => "UPDATE Facility Information before login - ALL FIELDS", "blank" => "You have left one or more fields blank.", "SessionExpired" => "Expired Session, Do not click outside white background."); if(isset($_GET["no_fac"])) echo $reasons[$_GET["reason"]]; ?><span id="availability_status"></span></div></td>
</tr>
</table>
</div>
<div id="footer">
<div id="copyright-apin"><a href="./cis_upgrades.html"><img src="images/apin_label.png" alt="APIN" width="39" height="15" /></a>&nbsp;&nbsp;<span>Version:2.5.0.0.0</span></div>
<div id="copyright-apin"><a href="./cis_upgrades.html"><img src="images/apin_label.png" alt="APIN" width="39" height="15" /></a>&nbsp;&nbsp;<span>GON Standard: 2016</span></div>
<div id="copyright-apin"><a href="http://www.apin.org.ng/"><img src="images/apin_label.png" alt="APIN" width="39" height="15" /></a>&nbsp;&nbsp;<span>&copy; 2014, AIDS Prevention Initiative in Nigeria, Ltd./Gte (APIN)</span></div>
</div>
</body>
</html>