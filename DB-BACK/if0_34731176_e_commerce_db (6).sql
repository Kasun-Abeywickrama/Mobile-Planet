-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql309.infinityfree.com
-- Generation Time: Aug 27, 2023 at 03:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34731176_e_commerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandId` int(15) NOT NULL,
  `brandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandId`, `brandName`) VALUES
(1, 'Unknown'),
(2, 'Apple'),
(3, 'Xiaomi'),
(4, 'Samsung'),
(5, 'Google'),
(6, 'Huawei'),
(7, 'Nokia'),
(8, 'Oppo'),
(9, 'Lenovo'),
(10, 'JBL'),
(11, 'HP'),
(12, 'SONY');

-- --------------------------------------------------------

--
-- Table structure for table `cartwishlist`
--

CREATE TABLE `cartwishlist` (
  `cwId` int(15) NOT NULL,
  `userId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartwishlist`
--

INSERT INTO `cartwishlist` (`cwId`, `userId`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(15) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Mobile Phones'),
(2, 'Tablets'),
(3, 'Accessories ');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(10) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyAddress` varchar(500) NOT NULL,
  `companyTelephone` int(10) NOT NULL,
  `companyOpeningTimes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `companyName`, `companyAddress`, `companyTelephone`, `companyOpeningTimes`) VALUES
(1, 'Mobile Planet', 'NSBM - Homagama - Pitipana - Colombo ', 777713456, 'Monday to Friday 9.00 a.m to 3.00 p.m');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inqId` int(7) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `inquiry` varchar(250) NOT NULL,
  `readed` tinyint(1) NOT NULL,
  `userId` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inqId`, `name`, `email`, `inquiry`, `readed`, `userId`) VALUES
(1, 'Hansa Sithuruwan', 'sithuruwan2002@gmial.com', 'I bought an redmi note 9 at month of august this year. But now it\'s display is not working.', 1, 2),
(2, 'Hiruni', 'hiruni@gmail.com', 'HP H200GS Gaming Headset - Speaker is not working properly.', 1, 4),
(3, 'Hiruni', 'hiruni@gmail.com', 'Xiaomi Redmi 12C - Order was not received yet.', 1, 4),
(4, 'Kasun Thiwanka', 'kasun@gamil.com', 'Backcover is damage.', 1, 3),
(5, 'Chamath Jayasanka', 'chamath@gamil.com', 'Temperd glass is damage.', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(10) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `sellingPrice` float NOT NULL,
  `buyingPrice` float NOT NULL,
  `stock` int(5) NOT NULL,
  `categoryId` int(15) NOT NULL,
  `brandId` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`, `description`, `sellingPrice`, `buyingPrice`, `stock`, `categoryId`, `brandId`) VALUES
(1, 'Samsung Galaxy Z Fold 5 12GB RAM 256GB', '12GB RAM | 256GB ROM |  \r\nFoldable Dynamic AMOLED 2X | 120Hz | \r\n4400mAh Battery | \r\nIPX8 water resistant | \r\nAndroid 13 Snapdragon 8 Gen 2.', 564900, 510000, 8, 1, 4),
(2, 'Xiaomi Redmi 12C 4GB RAM 128GB', '6.71 inches IPS LCD | \r\n50MP Primary Camera on the rear side | \r\n5MP Front Lens | \r\nMediaTek Helio G85 chipset | \r\n5000mAh Li-Polymer battery | \r\nExpandable storage.', 49900, 40000, 8, 1, 3),
(3, 'Samsung Galaxy M34 5G 8GB RAM 128GB', '8 GB RAM | 128 GB ROM | \r\n16.51 cm (6.5 inch) Display | \r\n50MP Rear Camera | \r\n6000mAh Battery | \r\n50MP (OIS) Triple Camera, Nightography 13MP Selfie Camera.', 93900, 84000, -5, 1, 4),
(4, 'Apple iPhone 14 256GB New 2022', 'OS: iOS 16 | \r\nDisplay: 6.1 inch â€“ Retina OLED | \r\nCPU: A15 Bionic | \r\nBattery: 3310 mAh | \r\nOur longest battery life ever | \r\nEmergency SOS via satellite | \r\nA huge leap in lowâ€‘light photos.', 319900, 270000, 5, 1, 2),
(5, 'Apple iPad Pro 2021 M1 11-inch 1TB', 'Liquid Retina XDR display | \r\n11-inch iPad Pro has a mini-LED display with XDR | \r\nApple M1 Chip 8-core CPU | \r\n8-core GPU | \r\n16-core Neural Engine | \r\nMain camera 12MP ultra-wide camera | \r\nLiDAR sensor flash | \r\n12MP TrueDepth selfie camera with Center Stage support | \r\nWiFi + Celluar.', 399900, 350000, 57, 2, 2),
(6, 'Apple iPad Mini 6 64GB WiFi + Cellular', '8.3-inch Liquid Retina display with True Tone and wide color | \r\nA15 Bionic chip with Neural Engine | \r\nTouch ID for secure authentication and Apple Pay | \r\n12MP Wide back camera, 12MP Ultra Wide front camera with Center Stage | \r\nAvailable in purple, starlight, pink, and space gray | \r\nLandscape stereo speakers | \r\nStay connected with ultrafast Wi-Fi 6.', 264900, 234900, 9, 2, 2),
(7, 'Samsung Galaxy Tab S8 128GB 5G', 'Network: GSM / HSPA / LTE / 5G (supports only 5G model) | \r\nCPU: Octa-core (1Ã—3.00 GHz Cortex-X2 & 3Ã—2.50 GHz Cortex-A710 & 4Ã—1.80 GHz Cortex-A510) | \r\nGraphic: Adreno 730 | \r\nChipset: Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm) | \r\nOS: Android 12, One UI 4.1 | \r\nMemory: 8 GB RAM | \r\nCard slot: microSDXC (dedicated slot).', 259900, 235900, 8, 2, 4),
(8, 'Xiaomi Redmi Pad 6GB RAM 128GB', '90Hz buttery smooth display | \r\nHigh-performance MediaTek Helio G99 | \r\nLong-lasting 8000mAh (typ) battery | \r\nFlagship-level unibody design | \r\nQuad Speakers with Dolby Atmos.', 89900, 55000, 10, 2, 3),
(9, 'Apple iPad Air 5 256GB WiFi', 'Stunning 10.9-inch Liquid Retina display with True Tone and P3 wide color | \r\n\r\nA14 Bionic chip with Neural Engine | \r\n\r\nTouch ID for secure authentication and Apple Pay | \r\n\r\n12MP back camera, 7MP FaceTime HD front camera | \r\n\r\nAvailable in Silver, Space Gray, Rose Gold, Green, and Sky Blue | \r\n\r\nWide stereo audio | \r\n\r\nWi-Fi 6 (802.11ax) | \r\n\r\nUp to 10 hours of battery life | \r\n\r\nUSB-C connector', 269900, 239900, 10, 2, 4),
(10, 'Samsung Galaxy Z Flip 5 8GB RAM 256GB', 'Display - (Primary)6.70-inch | \r\nProcessor - Snapdragon 8 Gen 2 | \r\nFront Camera - 10MP | \r\nRear Camera - 12MP + 12MP + 10MP | \r\nRAM - 8GB | \r\nStorage - 256GB, 512GB | \r\nBattery Capacity - 3700mAh | \r\nOS - Android 13.', 346900, 310900, 3, 1, 4),
(11, 'Apple iPad 9th Gen 2021 64GB WIFI Only', 'Gorgeous 10.2-inch Retina display with True Tone | \r\nA13 Bionic chip with Neural Engine | \r\n8MP Wide back camera, 12MP Ultra Wide front camera with Center Stage | \r\nStereo speakers | \r\nTouch ID for secure authentication and Apple Pay | \r\n802.11ac Wi-Fi | \r\nUp to 10 hours of battery life | \r\nLightning connector for charging and accessories.', 119900, 100900, 10, 2, 2),
(12, 'Apple iPad Pro 11 (2020) Wi-Fi + Cellular 128GB', '11-inch edge-to-edge Liquid Retina display with Pro Motion, True Tone and P3 wide colour1 | \r\n\r\nApple iPad Pro 11  A12Z Bionic chip with Neural Engine | \r\n\r\n12-megapixel Wide camera, 10-megapixel Ultra Wide camera and LiDAR Scanner | \r\n\r\n7-megapixel True Depth front camera | \r\n\r\nFace ID for secure authentication and Apple Pay | \r\n\r\nFour Speaker Audio and five studio-quality microphones.', 374900, 350900, 10, 2, 2),
(13, 'Samsung Galaxy Tab A 8.0', 'Brand	Samsung  |  \r\nModel	Galaxy Tab A 8.0 (2019) LTE  |  \r\nLaunch Date	5th July 2019  |  \r\nForm factor	Touchscreen  |  \r\nDimensions (mm)	210.00 x 124.40 x 8.00  |  \r\nWeight (g)	347.00  |  \r\nBattery capacity (mAh)	5100  |  \r\nRemovable battery	No  |  \r\nColours	White, Black  |   \r\nScreen size (inches)	8.00  |  \r\nTouchscreen	Yes  |  \r\nResolution	800x1280 pixels  |  \r\nProcessor	2GHz octa-core  |  \r\nRAM	2GB  |  \r\nInternal storage	32GB  |  \r\nExpandable storage	Yes  |  \r\nExpandable storage type	microSD  |  \r\nExpandable storage up to (GB)	512  |  \r\nRear camera	8-megapixel  |  \r\nRear Flash	No  |  \r\nFront camera	2-megapixel  |  \r\nFront Flash	No.', 69900, 55000, 10, 2, 4),
(14, 'Samsung Galaxy Tab A8 X205 4GB 64GB', 'Network: GSM / HSPA / LTE (supports LTE model only)  |  \r\nCPU: Octa-core (2Ã—2.0 GHz Cortex-A75 & 6Ã—2.0 GHz Cortex-A55)  |    \r\n  \r\nGPU: Mali G52 MP2 | \r\nChipset: Unisoc Tiger T618 (12 nm) | \r\nOS: Android 11, One UI 3 | \r\nMemory: 4 GB RAM | \r\nCard slot: microSDXC (dedicated slot) | ', 89900, 75000, 10, 2, 4),
(15, 'Redmi Note 12 Pro 5G 6GB RAM 128GB', '6 GB RAM | 128 GB ROM | \r\n94 cm (6.67 inch) Full HD Display | \r\n50MP (OIS) + 8MP + 2MP | 16MP Front Camera | \r\n5000 mAh Lithium Polymer Battery | \r\nMediatek Dimensity 1080 Processor.', 129000, 110000, 10, 1, 3),
(16, 'Redmi 9 Activ 6GB RAM 128GB', '6 GB RAM | 128 GB ROM | Expandable Upto 512 GB | \r\n59 cm (6.53 inch) HD+ Display | \r\n13MP + 2MP | 5MP Front Camera | \r\n5000 mAh Lithium Polymer Battery | \r\nMediatek Helio G35 Processor.', 68900, 55000, 10, 1, 3),
(17, 'Google Pixel 7a 8GB RAM 128GB', '8 GB RAM | 128 GB ROM | \r\n49 cm (6.1 inch) Full HD+ Display | \r\n64MP (OIS) + 13MP | 13MP Front Camera | \r\n4300 mAh Battery | \r\nTensor G2 Processor.', 149900, 130000, 10, 1, 5),
(18, 'Google Pixel 6 8GB RAM 128GB', 'Powered by Google Tensor | \r\nFast charging, all-day battery  | \r\nTitan M2â„¢ security, Fingerprint Unlock | \r\nWide and Ultra Wide lenses | \r\nProfessional Editing Tools, in your pocket | \r\nIP68 Water and Dust Protection | \r\nTranslates up to 55 languages | ', 154900, 135000, 10, 1, 5),
(19, 'Google Pixel 6 Pro 12GB RAM 128GB', 'Powered by Google Tensor processor | \r\nA New experience from Google thatâ€™s all about you |\r\nFast charging, all-day battery | \r\nIP68 Water and Dust Protection | \r\nWide and Ultra Wide lenses | \r\nTelephoto lens with 4x optical zoom | \r\nProfessional Editing Tools, in your pocket.', 169900, 150000, 10, 1, 5),
(20, 'Nokia C21 Plus 3GB RAM 32GB', '5 inches IPS LCD | \r\nDual Camera Setup on the backside | \r\n5MP Selfie Camera | \r\n3GB RAM | \r\n5050mAh Li-ion battery | \r\n32GB internal storage | \r\nSplashproof IP52 | \r\nDustproof | \r\nFingerprint sensor on the backside.', 57900, 50000, 10, 1, 7),
(21, 'Nokia 5.4 4GB RAM 128GB', 'Capture your world on the 48MP Quad camera and 16MP front camera | \r\nSee the whole picture with 6.39â€ HD+ punch hole display | \r\nStay out with 2-day battery and AI-assisted Adaptive Battery technology | \r\nChoose smart with the QualcommÂ® Snapdragonâ„¢ 662 Mobile Platform.', 50900, 50000, 10, 1, 7),
(22, 'Nokia 7.2 Dual Sim', '6.3â€ Full HD+ screen with PureDisplay | \r\nTriple camera setup including 48 MP main camera and ZEISS Optics \r\n | \r\nQualcomm Snapdragonâ„¢ 660 processor | \r\nMultilayer coating.', 56270, 50000, 10, 1, 7),
(23, 'Huawei Y5 2019 2GB RAM 32GB', '5.71â€³ (720Ã—1520) ultra-high screen-to-body ratio | \r\n2 Cameras | \r\n2GB RAM | \r\n32GB Internal memory | \r\n3020 mAh battery | \r\nFacial recognition face unlock.', 26690, 20000, 10, 1, 6),
(24, 'Huawei Nova 7SE 5G 8GB RAM 128GB', 'EMUI 10.1 (Based on Android 10) | \r\nHUAWEI Kirin 820 Octa-core Processor | \r\n64 MP (High resolution Lens, f/1.8 aperture) + 8 MP (Ultra Wide Angle Lens, f/2.4 aperture) + 2 MP (bokeh lens, f/2.4 aperture) + 2 MP (Macro lens, f/2.4 aperture) | \r\n16 mega-pixel , F/2.0 aperture front camera | \r\n4,000 mAh (Typical Value) | \r\nHUAWEI SuperCharge (Max 40 W).', 82590, 69000, 10, 1, 6),
(25, 'Huawei Y5P 2GB RAM 32GB', 'Octa-core Processor 4 x Cortex-A53 2.0 GHz + 4 x Cortex-A53 1.5 GHz | \r\nEMUI 10.1 (Based on Android 10) | \r\n2 GB RAM + 32 GB ROM,Micro SD Card, up to 512 GB | \r\n3020 mAh (typical value).', 25290, 19000, 10, 1, 6),
(26, 'Oppo A16K 3GB RAM 32GB', '3D Sleek Design HD+ Eye-care Screen | \r\n4230mAh Long-lasting Battery | \r\nUp to 4+64GB (Expandable) + System Booster | \r\nIPX4 Splash Waterproof | \r\n13MP Main Camera.', 39900, 30000, 4, 1, 8),
(27, 'Oppo A54 5G 4GB RAM 64GB', 'QualcommÂ®5G SoC | \r\n5000mAh Mega Battery | \r\n90Hz Hyper-color Screen | \r\n4+64 Storage | \r\n48MP AI Quad Camera.', 68900, 55000, 3, 1, 8),
(28, 'Oppo F19 6GB RAM 128GB', '33W Flash Charge | \r\n5000mAh Battery | \r\nAMOLED FHD+ Punch-Hole Display | \r\n48MP AI Triple Camera | \r\n6GB RAM + 128GB ROM.', 70900, 61000, 2, 1, 8),
(29, 'Oppo A15 3GB RAM 32GB', 'LPDDR4x @1600MHz 2Ã—16bit | \r\nSupport max to 256GB MicroSD | \r\nRear Camera 13MP Main Camera | \r\nFront Camera 5MP Selfie Camera | \r\nCPU: MediaTek Helio P35 (MT6765) | \r\n4230mAh/16.28Wh (typical).', 48000, 40000, 1, 1, 8),
(30, 'Lenovo Tab V7 4GB RAM 64GB', '4 GB RAM | 64 GB ROM | Expandable Upto 128 GB | \r\n17.6 cm (6.93 inch) Display | \r\n13 Megapixels MP Primary Camera | 5 MP Front | \r\nAndroid 9.0 (Pie) | Battery: 5180 mAh Li-Ion Polymer | \r\nVoice Call (Dual Sim, GSM + UMTS + 4G LTE) | \r\nProcessor: QualComm Octa-Core 450.', 62900, 51000, 1, 2, 9),
(31, 'Lenovo Tab M10 HD 4GB RAM 64GB', '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB | \r\n25.65 cm (10.1 inch) HD Display | \r\n8 MP Primary Camera | 5 MP Front | \r\nAndroid 10 | Battery: 5000 mAh Lithium Polymer | \r\nProcessor: MediaTek Helio P22 Octa Core Processor.', 97900, 81000, 0, 2, 9),
(32, 'Huawei Tab T8', '10.8-inches 2K screen | \r\n13MP main camera / 8MP front camera (f/2.0) | \r\nBluetooth 5.1 / Dual band Wi-Fi 802.11 a/b/g/n/ac | \r\n7250mAh battery, 696 hours video playback time | \r\nHiSilicon Kirin 990, Octa Core SoC.', 36850, 25000, 6, 2, 6),
(33, 'Huawei Tab T3-8 4G 2GB RAM 16GB', '8â€ IPS HD display, 1280Ã—800,  | \r\n2MP Fromt Camera and 5MP Rear Camera | \r\nQuad-core processor  | \r\n4800mAh battery | ', 40150, 33000, 0, 2, 6),
(34, 'JBL Tune 570BT On-Ear Bluetooth Headphones', 'JBL Pure Bass Sound | \r\nWireless Bluetooth 5.0 Streaming | \r\nUp to 40H battery life and speed charge (5mins = 2H) | \r\nMulti-point connections | \r\nHands-free calls | \r\nLightweight, comfortable and foldable design | \r\nAsk Siri or Hey Google.', 21990, 15000, 2, 3, 10),
(35, 'JBL Quantum 400 Gaming Headphone', 'Driver size (mm) 50 | \r\nMaximum input power (mW) 30 | \r\nDriver sensitivity at 1kHz/1mW (dB) 98 | \r\nDynamic frequency response range (Hz) 20 Hz - 20 kHz | \r\nImpedance (ohms) 32 | \r\nWeight (g) 274 | \r\nWeight (oz) 9.7 | \r\nBuilt-in Microphone Yes | \r\nOver-ear Yes | \r\nReplaceable Earpads Yes.\r\n', 32900, 25000, 3, 3, 10),
(36, 'Sony MDR-ZX110AP Original Wired', '30mm dome drivers for balanced sound | \r\nHigh energy neodymium magnets deliver powerful sound | \r\n12Hzâ€“22kHz frequency range | \r\nPadded earcups for comfortable listening | \r\nChoice of colours to suit your style.', 12900, 5000, 0, 3, 12),
(37, 'HP H200GS Gaming Headset', '50mm speaker driver | \r\nRotatable Microphone | \r\n7.1 Stereo Surround Sound.', 10900, 5000, 7, 3, 11),
(38, 'JBL Tune 225 TWS Earbuds', 'Pure Bass | \r\nExperience total freedom with no cords | \r\nEnough battery to last all day and all night | \r\nDual Connect.', 40000, 25000, 2, 3, 10),
(39, 'HP H320GS Gaming Headset', 'Product Dimensions	185 x 200 x 95mm | \r\nProduct Weight	about 345 +/- 5g | \r\nFrequency Range	20Hz â€“ 20KHz | \r\nDriving Coil Diameter	\r\nÃ˜ 50mm | \r\n\r\nCable Length	2.1M | \r\nRated Sensitivity	109dB +/- 3dB | \r\nImpedance	22Î© +/- 15% | \r\nInterface	USB | \r\nLoad Impedance	â‰¤ 2.2KÎ© | \r\nMaximum Power	35mW | \r\nCurrent	60mA | \r\nVoltage	DC4.5V.', 8500, 4500, 8, 3, 11),
(40, 'Apple USB-C to Lightning Cable (1 m)', 'Fast-charging feature | \r\nUSB-C To Lightning Cable | \r\nNew Arrival | \r\n1M Cable | \r\nFor Latest Models.', 12000, 5000, 0, 3, 2),
(41, 'Apple 96W USB Type-C Power Adapter', '96W Output Power | \r\nIntegrated USB Type-C Port | \r\nRequires USB Type-C Cable | \r\nFor Apple 16â€³ MacBook Pro | \r\n1 Year Warranty.', 37000, 25000, 13, 3, 2),
(42, 'Xiaomi Redmi 10 6GB RAM 128GB', 'LCD, 90Hz Display | \r\nOcta-core (2Ã—2.0 GHz Cortex-A75 & 6Ã—1.8 GHz Cortex-A55) | \r\nLi-Po 5000 mAh, non-removable | \r\n50 MP Front Camera, 8 MP Selfie Camera.', 79900, 70000, 4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `itemcartwishlist`
--

CREATE TABLE `itemcartwishlist` (
  `itemId` int(10) NOT NULL,
  `cwId` int(15) NOT NULL,
  `cart` tinyint(1) DEFAULT NULL,
  `wishlist` tinyint(1) DEFAULT NULL,
  `cartQuantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemcartwishlist`
--

INSERT INTO `itemcartwishlist` (`itemId`, `cwId`, `cart`, `wishlist`, `cartQuantity`) VALUES
(1, 3, 1, NULL, 2),
(2, 6, 1, NULL, 5),
(9, 1, 1, NULL, 5),
(10, 2, 1, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierId` int(15) NOT NULL,
  `supplierName` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telephone` int(12) NOT NULL,
  `deletedSupplier` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplieritem`
--

CREATE TABLE `supplieritem` (
  `supplierId` int(15) NOT NULL,
  `itemId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topsales`
--

CREATE TABLE `topsales` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tranId` int(11) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tranId`, `dateTime`, `status`, `userId`) VALUES
(1, '2023-08-20 10:09:36', 1, 2),
(2, '2023-08-20 10:53:01', 1, 4),
(3, '2023-08-20 11:13:48', 1, 5),
(4, '2023-08-20 11:26:23', 1, 1),
(5, '2023-08-20 13:23:32', 1, 2),
(6, '2023-08-20 21:37:06', 1, 2),
(7, '2023-08-20 21:42:28', 1, 2),
(8, '2023-08-20 21:42:53', 0, 2),
(9, '2023-08-20 21:43:18', 0, 2),
(10, '2023-08-20 21:43:38', 0, 2),
(11, '2023-08-21 00:07:12', 0, 8),
(12, '2023-08-21 00:36:37', 0, 6),
(13, '2023-08-21 00:37:43', 0, 6),
(14, '2023-08-21 04:17:42', 0, 1),
(15, '2023-08-21 04:49:13', 1, 1),
(16, '2023-08-21 05:11:08', 0, 2),
(17, '2023-08-21 05:11:40', 0, 2),
(18, '2023-08-21 05:13:11', 0, 2),
(19, '2023-08-21 05:14:13', 0, 2),
(20, '2023-08-21 05:14:42', 0, 2),
(21, '2023-08-21 05:16:00', 0, 2),
(22, '2023-08-21 05:17:20', 0, 2),
(23, '2023-08-21 05:29:57', 0, 2),
(24, '2023-08-21 05:30:06', 0, 2),
(25, '2023-08-21 05:31:11', 0, 2),
(26, '2023-08-21 05:38:35', 0, 2),
(27, '2023-08-21 05:39:34', 0, 2),
(28, '2023-08-21 07:23:24', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transactionitem`
--

CREATE TABLE `transactionitem` (
  `tranId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buyingPrice` float NOT NULL,
  `sellingPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionitem`
--

INSERT INTO `transactionitem` (`tranId`, `itemId`, `quantity`, `buyingPrice`, `sellingPrice`) VALUES
(1, 2, 2, 40000, 49900),
(1, 8, 1, 55000, 89900),
(1, 35, 3, 25000, 32900),
(2, 2, 1, 40000, 49900),
(2, 11, 2, 100900, 119900),
(2, 37, 1, 5000, 10900),
(3, 17, 2, 130000, 149900),
(4, 17, 5, 130000, 149900),
(5, 1, 6, 510000, 564900),
(6, 1, 4, 510000, 564900),
(7, 6, 1, 234900, 264900),
(8, 34, 2, 15000, 21990),
(9, 7, 2, 235900, 259900),
(10, 10, 1, 310900, 346900),
(11, 2, 2, 40000, 49900),
(12, 1, 1, 510000, 564900),
(12, 2, 2, 40000, 49900),
(13, 2, 1, 40000, 49900),
(14, 1, 5, 510000, 564900),
(14, 3, 2, 84000, 93900),
(14, 10, 2, 310900, 346900),
(15, 3, 8, 84000, 93900),
(16, 1, 4, 510000, 564900),
(17, 3, 1, 84000, 93900),
(20, 4, 55, 270000, 319900),
(23, 3, 1, 84000, 93900),
(23, 10, 4, 310900, 346900),
(25, 3, 4, 84000, 93900),
(26, 3, 1, 84000, 93900),
(26, 10, 5, 310900, 346900),
(27, 2, 7, 40000, 49900),
(28, 3, 8, 84000, 93900);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(7) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `telephone` int(12) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `adminOrCustomer` tinyint(1) DEFAULT NULL,
  `deletedUser` tinyint(1) DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `telephone`, `address`, `adminOrCustomer`, `deletedUser`, `gender`, `firstName`, `lastName`) VALUES
(1, 'admin@gmail.com', '$2y$10$liCZ9yu441tllN7gN4LzaO5bHLMVYagaEKg9BN3n4a8jTB7Cc8ADW', NULL, NULL, 1, NULL, '', 'Admin', 'Admin'),
(2, 'sithuruwan2002@gmail.com', '$2y$10$f2BWmk9aH6izmo9T1YWSsuk3SILAjMKBQegEyHFj0.bXLGjaNdF5q', 764809120, '13/A Kadanapitiya, bope, padukka', 1, NULL, 'M', 'Hansa', 'Sithuruwan'),
(3, 'kasun@gmail.com', '$2y$10$xcF1./XKuv148midXAqFr..TqP1417VbhriAtz9nS.Q1PFSlS6L1O', NULL, NULL, 0, NULL, '', 'Kasun', 'Thiwanka'),
(4, 'hiruni@gmail.com', '$2y$10$WsRdGRTP9P2N4Qg9Amf5IeQMhYaJUnBUDQFBlNNcsK5Tw63wiBfNu', NULL, NULL, 0, NULL, '', 'Hiruni', 'Perera'),
(5, 'thuva@gmail.com', '$2y$10$Is9axeMnB.3rD4VJmMOYdO4feusZqWesVPEfmQL6R1sM//YgZ9H/O', NULL, NULL, 0, NULL, '', 'Thuvaragan', 'Silva'),
(6, 'dygavsyagvschasvsuh@gmail.com', '$2y$10$pyenRNDCcOGBVUQVAzOJmerWCezAa0UIdkgqHqUM.AHTkZj8r20hS', NULL, NULL, 0, NULL, '', 'aaaa', 'bbbb'),
(7, 'bhagya@gmail.com', '$2y$10$Kyx9./8YzSgm/3sBvfxzMuZaZxyy3PyDbDp9Q46uiGiaLEIVYuw6S', NULL, NULL, 0, NULL, '', 'Bhagya', 'Sahan'),
(8, 'nsasmitha2002@gmail.com', '$2y$10$NKkMSnarYUa45kXGOExF2uPG2QHqRiewAGPqSUke7DFobqAygApsW', NULL, NULL, 0, NULL, '', 'Nadeeja', 'Sasmitha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `cartwishlist`
--
ALTER TABLE `cartwishlist`
  ADD PRIMARY KEY (`cwId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inqId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`),
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `brandId` (`brandId`);

--
-- Indexes for table `itemcartwishlist`
--
ALTER TABLE `itemcartwishlist`
  ADD PRIMARY KEY (`itemId`,`cwId`),
  ADD KEY `cwId` (`cwId`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierId`);

--
-- Indexes for table `supplieritem`
--
ALTER TABLE `supplieritem`
  ADD PRIMARY KEY (`supplierId`,`itemId`),
  ADD KEY `itemId` (`itemId`);

--
-- Indexes for table `topsales`
--
ALTER TABLE `topsales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tranId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `transactionitem`
--
ALTER TABLE `transactionitem`
  ADD PRIMARY KEY (`tranId`,`itemId`),
  ADD KEY `itemId` (`itemId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cartwishlist`
--
ALTER TABLE `cartwishlist`
  MODIFY `cwId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inqId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierId` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topsales`
--
ALTER TABLE `topsales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tranId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartwishlist`
--
ALTER TABLE `cartwishlist`
  ADD CONSTRAINT `cartwishlist_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`brandId`) REFERENCES `brand` (`brandId`);

--
-- Constraints for table `itemcartwishlist`
--
ALTER TABLE `itemcartwishlist`
  ADD CONSTRAINT `itemcartwishlist_ibfk_1` FOREIGN KEY (`itemId`) REFERENCES `item` (`itemId`),
  ADD CONSTRAINT `itemcartwishlist_ibfk_2` FOREIGN KEY (`cwId`) REFERENCES `cartwishlist` (`cwId`);

--
-- Constraints for table `supplieritem`
--
ALTER TABLE `supplieritem`
  ADD CONSTRAINT `supplieritem_ibfk_1` FOREIGN KEY (`supplierId`) REFERENCES `supplier` (`supplierId`),
  ADD CONSTRAINT `supplieritem_ibfk_2` FOREIGN KEY (`itemId`) REFERENCES `item` (`itemId`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `transactionitem`
--
ALTER TABLE `transactionitem`
  ADD CONSTRAINT `transactionitem_ibfk_1` FOREIGN KEY (`tranId`) REFERENCES `transaction` (`tranId`),
  ADD CONSTRAINT `transactionitem_ibfk_2` FOREIGN KEY (`itemId`) REFERENCES `item` (`itemId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
