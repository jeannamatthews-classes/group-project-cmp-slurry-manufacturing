-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2025 at 10:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmps`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `tool_name` varchar(50) DEFAULT NULL,
  `chamber_h` float DEFAULT NULL,
  `chamber_w` float DEFAULT NULL,
  `chamber_d` float DEFAULT NULL,
  `vol` float DEFAULT NULL,
  `op_tmp_min` float DEFAULT NULL,
  `pwr_rating` float DEFAULT NULL,
  `rpm_min` int(11) DEFAULT NULL,
  `rpm_max` int(11) DEFAULT NULL,
  `pfr_gpd` float DEFAULT NULL,
  `pfr_lpd` float DEFAULT NULL,
  `ut_vol` float DEFAULT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `model_name` varchar(150) DEFAULT NULL,
  `pwr_rating_kg` float DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `op_temp_max` float NOT NULL
);

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`tool_name`, `chamber_h`, `chamber_w`, `chamber_d`, `vol`, `op_tmp_min`, `pwr_rating`, `rpm_min`, `rpm_max`, `pfr_gpd`, `pfr_lpd`, `ut_vol`, `manufacturer`, `model_name`, `pwr_rating_kg`, `reference`, `op_temp_max`) VALUES
('Calcination', 6, 6, 6, 4, 1200, 2, NULL, NULL, NULL, NULL, 3, 'SentroTech', 'ST-1200°C-666', 0.706, '', 0),
('Calcination', 6, 6, 8, 5, 1200, 3, NULL, NULL, NULL, NULL, 4, 'SentroTech', 'ST-1200°C-668', 0.795, NULL, 0),
('Calcination', 6, 7, 8, 6, 1200, 3, NULL, NULL, NULL, NULL, 4, 'SentroTech', 'ST-1200°C-678', 0.681, NULL, 0),
('Calcination', 7, 8, 12, 11, 1200, 4, NULL, NULL, NULL, NULL, 9, 'SentroTech', 'ST-1200°C-7812', 0.454, NULL, 0),
('Calcination', 10, 10, 16, 26, 1200, 7, NULL, NULL, NULL, NULL, 21, 'SentroTech', 'ST-1200°C-101016', 0.334, NULL, 0),
('Calcination', 12, 12, 16, 38, 1200, 8, NULL, NULL, NULL, NULL, 30, 'SentroTech', 'ST-1200°C-121216', 0.265, NULL, 0),
('Calcination', 16, 16, 22, 92, 1200, 14, NULL, NULL, NULL, NULL, 74, 'SentroTech', 'ST-1200°C-161622', 0.19, NULL, 0),
('Calcination', 12, 12, 12, 28, 1200, 6, NULL, NULL, NULL, NULL, 23, 'SentroTech', 'ST-1200°C-121212', 0.265, NULL, 0),
('Calcination', 24, 24, 24, 227, 1200, 23, NULL, NULL, NULL, NULL, 181, 'SentroTech', 'ST-1200°C-242424', 0.127, NULL, 0),
('Calcination', NULL, NULL, NULL, 2, 1150, 1.1, NULL, NULL, NULL, NULL, 1, 'Yamaha', 'FP104', 0.917, '', 0),
('Calcination', NULL, NULL, NULL, 8, 1150, 2.4, NULL, NULL, NULL, NULL, 6, 'Yamaha', 'FP303', 0.4, '', 0),
('Calcination', NULL, NULL, NULL, 8, 1150, 2.4, NULL, NULL, NULL, NULL, 6, 'Yamaha', 'FP313', 0.4, '', 0),
('Calcination', NULL, NULL, NULL, 11, 1150, 3.25, NULL, NULL, NULL, NULL, 9, 'Yamaha', 'FP413', 0.36, '', 0),
('Calcination', NULL, NULL, NULL, 5, 1100, 9, NULL, NULL, NULL, NULL, 4, 'Carbolite', 'GLO 5/11-1G', 2.25, '', 0),
('Calcination', NULL, NULL, NULL, 10, 1100, 14, NULL, NULL, NULL, NULL, 8, 'Carbolite', 'GLO 10/11-1G', 1.75, '', 0),
('Calcination', NULL, NULL, NULL, 40, 1100, 25, NULL, NULL, NULL, NULL, 32, 'Carbolite', 'GLO 40/11-1G', 0.781, '', 0),
('Calcination', NULL, NULL, NULL, 120, 1100, 60, NULL, NULL, NULL, NULL, 96, 'Carbolite', 'GLO 120/11-1G', 0.625, '', 0),
('Calcination', NULL, NULL, NULL, 260, 1100, 70, NULL, NULL, NULL, NULL, 208, 'Carbolite', 'GLO 260/11-1G', 0.337, '', 0),
('Calcination', NULL, NULL, NULL, 400, 1100, 80, NULL, NULL, NULL, NULL, 320, 'Carbolite', 'GLO 400/11-1G', 0.25, '', 0),
('Calcination', NULL, NULL, NULL, 550, 1100, 90, NULL, NULL, NULL, NULL, 440, 'Carbolite', 'GLO 550/11-1G', 0.205, '', 0),
('Calcination', NULL, NULL, NULL, 600, 1100, 95, NULL, NULL, NULL, NULL, 480, 'Carbolite', 'GLO 600/11-1G', 0.198, '', 0),
('Calcination', NULL, NULL, NULL, 850, 1100, 100, NULL, NULL, NULL, NULL, 680, 'Carbolite', 'GLO 850/11-1G', 0.147, '', 0),
('Calcination', NULL, NULL, NULL, 950, 1100, 110, NULL, NULL, NULL, NULL, 760, 'Carbolite', 'GLO 950/11-1G', 0.145, '', 0),
('Calcination', NULL, NULL, NULL, 1300, 1100, 120, NULL, NULL, NULL, NULL, 1040, 'Carbolite', 'GLO 1300/11-1G', 0.115, '', 0),
('Centrifuge', NULL, NULL, NULL, 3, 0, 1.2, NULL, 20500, NULL, NULL, 2, '', 'MSE PRO Benchtop High-Speed Large-Capacity Centrifuge (20,500 RPM)', 0.5, '', 0),
('Centrifuge', NULL, NULL, NULL, 3, 0, 1.5, NULL, 21000, NULL, NULL, 2, '', 'MSE PRO Benchtop High-Speed Large-Capacity Centrifuge (21,000 RPM)', 0.625, '', 0),
('Centrifuge', NULL, NULL, NULL, 3, 0, 5, NULL, 25000, NULL, NULL, 2, '', 'MSE PRO Floor-Standing High-Speed Refrigerated Centrifuge (21,000/25,000 RPM)', 2.083, '', 0),
('Centrifuge', NULL, NULL, NULL, 4, 0, 2, NULL, 5000, NULL, NULL, 3, '', 'MSE PRO High-Capacity Refrigerated Centrifuge (5,000 RPM)', 0.625, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 18.6, NULL, NULL, 190000, 719227, 8, '', '', 2.325, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 18.6, NULL, NULL, 213750, 809131, 8, '', '', 2.325, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 18.6, NULL, NULL, 256500, 970957, 8, '', '', 2.325, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 22.4, NULL, NULL, 304000, 1150760, 8, '', '', 2.8, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 22.4, NULL, NULL, 342000, 1294610, 8, '', '', 2.8, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 29.8, NULL, NULL, 389500, 1474420, 8, '', '', 3.725, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 29.8, NULL, NULL, 427500, 1618260, 8, '', '', 3.725, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 37.3, NULL, NULL, 475000, 1798070, 8, '', '', 4.663, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 37.3, NULL, NULL, 522500, 1977880, 8, '', '', 4.663, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 44.7, NULL, NULL, 570000, 2157680, 8, '', '', 5.588, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 44.7, NULL, NULL, 665000, 2517300, 8, '', '', 5.588, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 55.9, NULL, NULL, 760000, 2876910, 8, '', '', 6.988, '', 0),
('Filtration', NULL, NULL, NULL, 10, 0, 55.9, NULL, NULL, 855000, 3236520, 8, '', '', 6.988, '', 0),
('Hydrothermal', NULL, NULL, NULL, 1, 120, 90, 0, 600, NULL, NULL, 1, 'Linbel', 'S212-1L', 112.5, 'https://www.linbel.com/glass-reactor/200l-glass-reactor.php', 300),
('Hydrothermal', NULL, NULL, NULL, 2, 120, 90, 0, 600, NULL, NULL, 2, 'Linbel', 'S212-2L', 56.25, '', 300),
('Hydrothermal', NULL, NULL, NULL, 5, 120, 90, 0, 600, NULL, NULL, 4, 'Linbel', 'S212-5L', 22.5, '', 300),
('Hydrothermal', NULL, NULL, NULL, 10, 120, 120, 0, 600, NULL, NULL, 8, 'Linbel', 'S212-10L', 15, '', 300),
('Hydrothermal', NULL, NULL, NULL, 20, 120, 120, 0, 600, NULL, NULL, 16, 'Linbel', 'S212-20L', 7.5, '', 300),
('Hydrothermal', NULL, NULL, NULL, 30, 120, 120, 0, 600, NULL, NULL, 24, 'Linbel', 'S212-30L', 5, '', 300),
('Hydrothermal', NULL, NULL, NULL, 50, 120, 120, 0, 600, NULL, NULL, 40, 'Linbel', 'S212-50L', 3, '', 300),
('Hydrothermal', NULL, NULL, NULL, 100, 120, 180, 0, 600, NULL, NULL, 80, 'Linbel', 'GR100L', 2.25, '', 300),
('Hydrothermal', NULL, NULL, NULL, 10, 80, 3, 0, 500, NULL, NULL, 8, 'Valuen', 'VJR10S', 0.375, 'https://www.valuenlab.com/product/300l500ljacketed-stainless-steel-reactor', 350),
('Hydrothermal', NULL, NULL, NULL, 20, 80, 3, 0, 500, NULL, NULL, 16, 'Valuen', 'VJR20S', 0.188, '', 350),
('Hydrothermal', NULL, NULL, NULL, 30, 80, 6, 0, 500, NULL, NULL, 24, 'Valuen', 'VJR30S', 0.25, '', 350),
('Hydrothermal', NULL, NULL, NULL, 500, 80, 12, 0, 500, NULL, NULL, 400, 'Valuen', 'VJR50S', 0.03, '', 350),
('Hydrothermal', NULL, NULL, NULL, 100, 80, 18, 0, 150, NULL, NULL, 80, 'Valuen', 'VJR100S', 0.225, '', 350),
('Hydrothermal', NULL, NULL, NULL, 200, 80, 27, 0, 150, NULL, NULL, 160, 'Valuen', 'VJR200S', 0.169, '', 350),
('Hydrothermal', NULL, NULL, NULL, 300, 80, 27, 0, 150, NULL, NULL, 240, 'Valuen', 'VJR300S', 0.113, '', 350),
('Hydrothermal', NULL, NULL, NULL, 500, 80, 30, 0, 120, NULL, NULL, 400, 'Valuen', 'VJR500S', 0.075, '', 350),
('Hydrothermal', NULL, NULL, NULL, 1000, 80, 60, 0, 120, NULL, NULL, 800, 'Valuen', 'VJR1000S', 0.075, '', 350),
('Hydrothermal', NULL, NULL, NULL, 20, 0, 0, NULL, 650, NULL, NULL, 16, 'RAT-20Dse', 'RAT-20Dse', 0, 'https://www.rpmhardware.com/index.php?route=product/product&product_id=37356&gad_source=1&gclid=Cj0KCQjwjY64BhCaARIsAIfc7YYDtQlAwDPTr4t61H9HD1nvgQ7em_iZ9djfGS46A81oeBhS89tb3VEaAqZ9EALw_wcB', 0),
('Hydrothermal', NULL, NULL, NULL, 5, 0, 0, NULL, 600, NULL, NULL, 4, 'Buchiglasuster', '5, miniPilot', 0, 'https://www.buchiglas.com/en-us/glass-reactors-process-equipment/minipilot.php', 0),
('Hydrothermal', NULL, NULL, NULL, 10, 0, 0, NULL, 600, NULL, NULL, 8, 'Buchiglasuster', '10, miniPilot', 0, 'https://www.buchiglas.com/fileadmin/buchiglas_international/download/dvs/Brochures_and_Flyers/G_Minipilot_Glass_Pilot_Reactor.pdf', 0),
('Hydrothermal', NULL, NULL, NULL, 15, 0, 0, NULL, 600, NULL, NULL, 12, 'Buchiglasuster', '15, miniPilot', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 20, 0, 180, NULL, 650, NULL, NULL, 16, 'RAT-20Dse', 'RAT-20Dse', 11.25, 'https://www.rpmhardware.com/index.php?route=product/product&product_id=37356&gad_source=1&gclid=Cj0KCQjwjY64BhCaARIsAIfc7YYDtQlAwDPTr4t61H9HD1nvgQ7em_iZ9djfGS46A81oeBhS89tb3VEaAqZ9EALw_wcB', 0),
('Hydrothermal', NULL, NULL, NULL, 1, 0, 0, NULL, 420, NULL, NULL, 1, 'TOB NEW ENERGY', '', 0, 'https://www.tobmachine.com/lab-scale-double-layer-jacketed-glass-chemical-reactor-vessel_p996.php', 0),
('Hydrothermal', NULL, NULL, NULL, 2, 0, 0, NULL, 420, NULL, NULL, 2, 'TOB NEW ENERGY', '', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 3, 0, 0, NULL, 420, NULL, NULL, 2, 'TOB NEW ENERGY', '', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 5, 0, 0, NULL, 420, NULL, NULL, 4, 'TOB NEW ENERGY', '', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 10, 0, 0, NULL, 420, NULL, NULL, 8, 'TOB NEW ENERGY', '', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 20, 0, 0, NULL, 420, NULL, NULL, 16, 'TOB NEW ENERGY', '', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 30, 0, 0, NULL, 420, NULL, NULL, 24, 'TOB NEW ENERGY', '', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 50, 0, 0, NULL, 420, NULL, NULL, 40, 'TOB NEW ENERGY', '', 0, '', 0),
('Hydrothermal', NULL, NULL, NULL, 80, 0, 220, NULL, 420, NULL, NULL, 64, 'TOB NEW ENERGY', '', 3.438, '', 0),
('Hydrothermal', NULL, NULL, NULL, 100, 0, 300, NULL, 420, NULL, NULL, 80, 'TOB NEW ENERGY', '', 3.75, '', 0),
('Milling', NULL, NULL, NULL, 1, 0, 2.1, NULL, NULL, NULL, NULL, 20, '', 'Retsch Planetary Ball Mill PM400', 0.105, '', 0),
('Milling', NULL, NULL, NULL, 1, 0, 2.2, NULL, NULL, NULL, NULL, 1, 'Netzsch', 'Alpha® Lab Zeta® RS', 2.75, 'https://grinding.netzsch.com/_Resources/Persistent/8/8/5/0/8850995966983e5d6a22ba5976981d199112bf0c/NETZSCH_NanoMill_ZETA_RS_EN.pdf', 0),
('Milling', NULL, NULL, NULL, 2, 0, 3, NULL, NULL, NULL, NULL, 2, 'Netzsch', 'Zeta® RS 2', 1.875, '', 0),
('Milling', NULL, NULL, NULL, 4, 0, 5.5, NULL, NULL, NULL, NULL, 3, 'Netzsch', 'Zeta® RS 2', 1.719, '', 0),
('Milling', NULL, NULL, NULL, 10, 0, 5.5, NULL, NULL, NULL, NULL, 8, 'Netzsch', 'Zeta® RS 2', 0.688, '', 0),
('Milling', NULL, NULL, NULL, 25, 0, 7.5, NULL, NULL, NULL, NULL, 20, 'Netzsch', 'Zeta® RS 2', 0.375, '', 0),
('Milling', NULL, NULL, NULL, 60, 0, 18, NULL, NULL, NULL, NULL, 48, 'Netzsch', 'Zeta® RS 2', 0.375, '', 0),
('Milling', NULL, NULL, NULL, 11, 0, 15, NULL, NULL, NULL, NULL, 9, 'Buhler', 'Cenomic 1', 1.705, 'https://www.buhlergroup.com/global/en/products/micromedia_high-performancebeadmill.php', 0),
('Milling', NULL, NULL, NULL, 21, 0, 22, NULL, NULL, NULL, NULL, 17, 'Buhler', 'Cenomic 3', 1.31, '', 0),
('Milling', NULL, NULL, NULL, 50, 0, 45, NULL, NULL, NULL, NULL, 40, 'Buhler', 'Cenomic 6', 1.125, '', 0),
('Milling', NULL, NULL, NULL, 117, 0, 75, NULL, NULL, NULL, NULL, 94, 'Buhler', 'Cenomic 15', 0.801, '', 0),
('Milling', NULL, NULL, NULL, 226, 0, 110, NULL, NULL, NULL, NULL, 181, 'Buhler', 'Cenomic 30', 0.608, '', 0),
('Milling', NULL, NULL, NULL, 510, 0, 200, NULL, NULL, NULL, NULL, 408, 'Buhler', 'Centex T4', 0.49, '', 0),
('Milling', NULL, NULL, NULL, 17, 0, 24, NULL, NULL, NULL, NULL, 13, 'DYNO-MILL KD', 'KD 20 B', 1.818, 'https://www.wab-group.com/en/products/dyno-mill-kd/', 0),
('Milling', NULL, NULL, NULL, 18, 0, 24, NULL, NULL, NULL, NULL, 14, 'DYNO-MILL KD', 'KD 20 BS', 1.667, '', 0),
('Milling', NULL, NULL, NULL, 25, 0, 30, NULL, NULL, NULL, NULL, 20, 'DYNO-MILL KD', 'KD 25', 1.5, '', 0),
('Milling', NULL, NULL, NULL, 26, 0, 30, NULL, NULL, NULL, NULL, 21, 'DYNO-MILL KD', 'KD 25 S', 1.442, '', 0),
('Milling', NULL, NULL, NULL, 46, 0, 45, NULL, NULL, NULL, NULL, 37, 'DYNO-MILL KD', 'KD 45 D', 1.223, '', 0),
('Milling', NULL, NULL, NULL, 49, 0, 45, NULL, NULL, NULL, NULL, 39, 'DYNO-MILL KD', 'K 45 DS', 1.148, '', 0),
('Milling', NULL, NULL, NULL, 60, 0, 58, NULL, NULL, NULL, NULL, 48, 'DYNO-MILL KD', 'KD 60', 1.208, '', 0),
('Milling', NULL, NULL, NULL, 62, 0, 58, NULL, NULL, NULL, NULL, 50, 'DYNO-MILL KD', 'KD 60 S', 1.169, '', 0),
('Milling', NULL, NULL, NULL, 128, 0, 75, NULL, NULL, NULL, NULL, 102, 'DYNO-MILL KD', 'KD 120 A', 0.732, '', 0),
('Milling', NULL, NULL, NULL, 196, 0, 84, NULL, NULL, NULL, NULL, 157, 'DYNO-MILL KD', 'KD 190 A', 0.536, '', 0),
('Milling', NULL, NULL, NULL, 296, 0, 110, NULL, NULL, NULL, NULL, 237, 'DYNO-MILL KD', 'KD 280 A', 0.465, '', 0),
('Milling', NULL, NULL, NULL, 612, 0, 250, NULL, NULL, NULL, NULL, 490, 'DYNO-MILL KD', 'KD 600', 0.511, '', 0),
('Sonication', NULL, NULL, NULL, 3, 0, 0.32, NULL, NULL, NULL, NULL, 2, 'Anonkia', 'K230HTDP', 0.133, '', 0),
('Sonication', NULL, NULL, NULL, 4, 0, 0.38, NULL, NULL, NULL, NULL, 3, 'Anonkia', 'K340HTDP', 0.119, '', 0),
('Sonication', NULL, NULL, NULL, 6, 0, 0.48, NULL, NULL, NULL, NULL, 5, 'Anonkia', 'K360HTDP', 0.1, '', 0),
('Sonication', NULL, NULL, NULL, 10, 0, 0.74, NULL, NULL, NULL, NULL, 8, 'Anonkia', 'K410HTDP', 0.093, '', 0),
('Sonication', NULL, NULL, NULL, 15, 0, 0.96, NULL, NULL, NULL, NULL, 12, 'Anonkia', 'K615HTDP', 0.08, '', 0),
('Sonication', NULL, NULL, NULL, 20, 0, 1.2, NULL, NULL, NULL, NULL, 16, 'Anonkia', 'K620HTDP', 0.075, '', 0),
('Sonication', NULL, NULL, NULL, 22, 0, 1.2, NULL, NULL, NULL, NULL, 18, 'Anonkia', 'K820HTDP', 0.068, '', 0),
('Sonication', NULL, NULL, NULL, 30, 0, 1.6, NULL, NULL, NULL, NULL, 24, 'Anonkia', 'K1030HTDP', 0.067, '', 0),
('Sonication', NULL, NULL, NULL, 10, 0, 0.74, NULL, NULL, NULL, NULL, 8, 'Anonkia', 'K410HTDS', 0.093, '', 0),
('Sonication', NULL, NULL, NULL, 15, 0, 0.96, NULL, NULL, NULL, NULL, 12, 'Anonkia', 'K615HTDS', 0.08, '', 0),
('Sonication', NULL, NULL, NULL, 20, 0, 0.96, NULL, NULL, NULL, NULL, 16, 'Anonkia', 'K620HTDS', 0.06, '', 0),
('Sonication', NULL, NULL, NULL, 22, 0, 1.28, NULL, NULL, NULL, NULL, 18, 'Anonkia', 'K820HTDS', 0.073, '', 0),
('Sonication', NULL, NULL, NULL, 30, 0, 1.6, NULL, NULL, NULL, NULL, 24, 'Anonkia', 'K1030HTDS', 0.067, '', 0),
('Sonication', NULL, NULL, NULL, 1, 0, 0.06, NULL, NULL, NULL, NULL, 1, 'Anonkia', '113T', 0.058, '', 0),
('Sonication', NULL, NULL, NULL, 2, 0, 0.06, NULL, NULL, NULL, NULL, 2, 'Anonkia', '120T', 0.038, '', 0),
('Sonication', NULL, NULL, NULL, 3, 0, 0.12, NULL, NULL, NULL, NULL, 2, 'Anonkia', '230T', 0.05, '', 0),
('Sonication', NULL, NULL, NULL, 4, 0, 0.18, NULL, NULL, NULL, NULL, 3, 'Anonkia', '240T', 0.056, '', 0),
('Sonication', NULL, NULL, NULL, 4, 0, 0.18, NULL, NULL, NULL, NULL, 3, 'Anonkia', '340T', 0.056, '', 0),
('Sonication', NULL, NULL, NULL, 6, 0, 0.24, NULL, NULL, NULL, NULL, 5, 'Anonkia', '360T', 0.05, '', 0),
('Sonication', NULL, NULL, NULL, 10, 0, 0.36, NULL, NULL, NULL, NULL, 8, 'Anonkia', '410T', 0.045, '', 0),
('Sonication', NULL, NULL, NULL, 15, 0, 0.36, NULL, NULL, NULL, NULL, 12, 'Anonkia', '613T', 0.03, '', 0),
('Sonication', NULL, NULL, NULL, 22, 0, 0.48, NULL, NULL, NULL, NULL, 18, 'Anonkia', '820T', 0.027, '', 0),
('Sonication', NULL, NULL, NULL, 30, 0, 0.6, NULL, NULL, NULL, NULL, 24, 'Anonkia', '1027T', 0.025, '', 0),
('Sonication', NULL, NULL, NULL, 1, 0, 0.16, NULL, NULL, NULL, NULL, 1, 'Anonkia', 'K113HTD', 0.154, '', 0),
('Sonication', NULL, NULL, NULL, 2, 0, 0.16, NULL, NULL, NULL, NULL, 2, 'Anonkia', 'K120HTD', 0.1, '', 0),
('Sonication', NULL, NULL, NULL, 3, 0, 0.32, NULL, NULL, NULL, NULL, 2, 'Anonkia', 'K230HTD', 0.133, '', 0),
('Sonication', NULL, NULL, NULL, 4, 0, 0.42, NULL, NULL, NULL, NULL, 3, 'Anonkia', 'K240HTD', 0.131, '', 0),
('Sonication', NULL, NULL, NULL, 4, 0, 0.48, NULL, NULL, NULL, NULL, 3, 'Anonkia', 'K340HTD', 0.15, '', 0),
('Sonication', NULL, NULL, NULL, 6, 0, 0.5, NULL, NULL, NULL, NULL, 5, 'Anonkia', 'K360HTD', 0.104, '', 0),
('Sonication', NULL, NULL, NULL, 10, 0, 0.8, NULL, NULL, NULL, NULL, 8, 'Anonkia', 'K410HTD', 0.1, '', 0),
('Sonication', NULL, NULL, NULL, 15, 0, 0.96, NULL, NULL, NULL, NULL, 12, 'Anonkia', 'K615HTD', 0.08, '', 0),
('Sonication', NULL, NULL, NULL, 20, 0, 0.96, NULL, NULL, NULL, NULL, 16, 'Anonkia', 'K620HTD', 0.06, '', 0),
('Sonication', NULL, NULL, NULL, 22, 0, 1.2, NULL, NULL, NULL, NULL, 18, 'Anonkia', 'K820HTD', 0.068, '', 0),
('Sonication', NULL, NULL, NULL, 30, 0, 1.6, NULL, NULL, NULL, NULL, 24, 'Anonkia', 'K1030HTD', 0.067, '', 0),
('Mixing', NULL, NULL, NULL, 50, 0, 0.33, NULL, NULL, NULL, NULL, 20, '', 'Arrow Model A', 0.017, '', 0),
('Mixing', NULL, NULL, NULL, 60, 0, 2.2, NULL, NULL, NULL, NULL, 24, 'Quadro Liquids', 'Quadro Ytron® ZCO', 0.092, '', 0),
('Mixing', NULL, NULL, NULL, 115, 0, 7.5, NULL, NULL, NULL, NULL, 24, 'Quadro Liquids', 'Quadro Ytron® Z1', 0.163, '', 0),
('Mixing', NULL, NULL, NULL, 380, 0, 18.5, NULL, NULL, NULL, NULL, 24, 'Quadro Liquids', 'Quadro Ytron® Z3', 0.122, '', 0),
('Mixing', NULL, NULL, NULL, 1150, 0, 45, NULL, NULL, NULL, NULL, 24, 'Quadro Liquids', 'Quadro Ytron® Z 5', 0.098, '', 0),
('Sonication', NULL, NULL, NULL, 2, 0, 0.055, NULL, NULL, NULL, NULL, 1, 'Crest Powersonic', 'CP 200', 0.039, '', 0),
('Annealing', NULL, NULL, NULL, 10, 1100, 14, NULL, NULL, NULL, NULL, 8, '', 'Carbolite gero', 1.75, 'https://www.carbolite-gero.com/products/annealing-furnaces/glo/models/', 0),
('Annealing', NULL, NULL, NULL, 10, 1100, 14, NULL, NULL, NULL, NULL, 8, '', 'Carbolite gero', 1.75, '', 0),
('Annealing', NULL, NULL, NULL, 40, 1100, 25, NULL, NULL, NULL, NULL, 32, '', 'Carbolite gero', 0.781, '', 0),
('Annealing', NULL, NULL, NULL, 75, 1100, 40, NULL, NULL, NULL, NULL, 60, '', 'Carbolite gero', 0.667, '', 0),
('Annealing', NULL, NULL, NULL, 120, 1100, 60, NULL, NULL, NULL, NULL, 96, '', 'Carbolite gero', 0.625, '', 0),
('Annealing', NULL, NULL, NULL, 260, 1100, 70, NULL, NULL, NULL, NULL, 208, '', 'Carbolite gero', 0.337, '', 0),
('Annealing', NULL, NULL, NULL, 400, 1100, 80, NULL, NULL, NULL, NULL, 320, '', 'Carbolite gero', 0.25, '', 0),
('Annealing', NULL, NULL, NULL, 550, 1100, 90, NULL, NULL, NULL, NULL, 440, '', 'Carbolite gero', 0.205, '', 0),
('Annealing', NULL, NULL, NULL, 600, 1100, 95, NULL, NULL, NULL, NULL, 480, '', 'Carbolite gero', 0.198, '', 0),
('Annealing', NULL, NULL, NULL, 850, 1100, 100, NULL, NULL, NULL, NULL, 680, '', 'Carbolite gero', 0.147, '', 0),
('Annealing', NULL, NULL, NULL, 950, 1100, 110, NULL, NULL, NULL, NULL, 760, '', 'Carbolite gero', 0.145, '', 0),
('Annealing', NULL, NULL, NULL, 1300, 1100, 120, NULL, NULL, NULL, NULL, 1040, '', 'Carbolite gero', 0.115, '', 0);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
