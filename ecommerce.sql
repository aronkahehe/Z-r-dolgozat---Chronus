-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 11:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(2, 'aron', '7782391677c36f0f0e77363c7ef182e4e75e7669');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'ROLEX DAYTONA', 'WATCH DETAILS\r\nSku: X-RDYT07215\r\nBox: Original Factory Box\r\nPapers: Original Factory Papers\r\nBrand: Rolex\r\nModel: Daytona\r\nCondition: Pre-Owned\r\nReference Number: 116500LN\r\n\r\nCASE & BEZEL:\r\nCase Material: Stainless Steel\r\nCase Size: 40MM\r\nBezel: Ceramic\r\nBezel Function: Tachymeter\r\n\r\nDIAL:\r\nDial Material: Index Hour Markers\r\n\r\nBRACELET:\r\nBracelet Material: Stainless Steel\r\nClosure: Fold Over Clasp\r\nClosure Material: Stainless-Steel\r\n\r\nFEATURES:\r\nWater Resistance: 100 meters / 330 feet\r\nMovement:', 12500, 'rol2-removebg-preview.png', 'rol1-removebg-preview.png', 'rol3-removebg-preview.png'),
(2, 'PATEK PHILIPPE NAUTILUS', 'Model - Patek Philippe Nautilus\r\n\r\n*ORIGINAL PATEK MOVEMENT ONLY*\r\nReference Number - 5711\r\nMovement – Automatic\r\nBezel - Rose Gold Custom Baguette Diamond Bezel\r\nDial - Black Custom Diamond Dial\r\nCase Size – 40mm\r\nCrystal - Scratch-resistant Sapphire Crystal\r\nBracelet - Rose Gold Bracelet\r\nWater Resistant - 10 ATM\r\nGender – Men&#39;s ', 65000, 'patek1.png', 'patek2 - Copy.png', 'patek2.png'),
(3, 'AUDEMARS PIGUET ROYAL OAK', 'WATCH DETAILS:\r\n\r\nSKU: 4789327\r\nReference Number: 26730ST.OO.1320ST.02\r\nBox: Yes\r\nPapers: Yes\r\nYear: 2022\r\nManufactured In: Switzerland\r\nStyle: Casual, Dress\r\nGender: Mens\r\n\r\nCASE & DIAL:\r\n\r\nCase Size: 41mm\r\nCase Material: Stainless Steel\r\nDial Color: Blue\r\nHours Markers: Index\r\nCaseback: Exhibition\r\nCase Shape: Octagon\r\nWater Resistance: 50m\r\n\r\nFUNCTION:\r\n\r\nMovement: Automatic\r\nComplications: Tourbillon\r\n\r\nSTRAP/BRACELET:\r\n\r\nStrap/Bracelet Material: Stainless Steel\r\nBand Color: Silver\r\nBuckle T', 52000, 'ap1.png', 'ap2.png', 'ap3.png'),
(4, 'RICHARD MILLE RM 011', '    WATCH DETAILS:\r\n    Sku: X-M01107029\r\n    Box: Original Factory Box\r\n    Papers: Avi and Co Appraisal\r\n    Brand: Richard Mille\r\n    Model: RM011\r\n    Condition: Pre-owned. Excellent condition\r\n    Reference Number: RM011\r\n\r\n    CASE & BEZEL:\r\n    Case Material: Titanium\r\n    Case Size: 42MM\r\n    Bezel: Titanium\r\n    Bezel Function: Fixed\r\n\r\n    DIAL:\r\n    Dial Material: Arabic Numerals\r\n\r\n    BRACELET:\r\n    Bracelet Material: Rubber\r\n    Closure: Double Fold Over Clasp\r\n    Closure Material', 250000, 'rm1.png', 'rm2.png', 'rm3.png'),
(5, 'OMEGA CONSTELLATION QUARTZ', 'CASE:\r\nTotal product weight (approx.): 89 g\r\nBetween lugs: 17.5 mm\r\nThickness: 8.5 mm\r\nCase: Steel ‑ yellow gold\r\nCase diameter: 28 mm\r\nWater resistance: 3 bar (30 metres / 100 feet)\r\n\r\nDIAL:\r\nDial colour: White\r\nCrystal: Domed scratch‑resistant sapphire crystal with anti‑reflective treatment on both sides\r\n\r\nBRACELET:\r\nMaterial: Steel ‑ yellow gold\r\nType of Clasp: Butterfly clasp with comfort setting\r\n\r\n\r\n\r\n\r\n\r\n', 13000, 'omega1.png', 'omega2.png', 'omega3.png'),
(6, 'JACOB & CO BUGATTI CHIRON TOURBILLON', 'MOVEMENT:  \r\nCaliber: Manufacture Jacob&Co. Manual Winding JCAM37; Size: 41.7x36mm; Height: 15.60mm; Components: 578; Jewels: 51; Shock Protection System: Incabloc; Power Reserve: 60h; Frequency: 21&#39;600 vib/h (3Hz); Decoration: Blue Sapphire on Tourbillon; Functions: 1. Hours, Minutes; 2. 1 minute Tourbillon cage 30° inclined; 3. &#34;W16 engine&#34; in a sapphire block 4. Animation on demand (pusher on the right) creating a rotation of pistons and crankshaft; 5. Power Reserve Indicator at 9', 285000, 'jacob1.png', 'jacob2.png', 'jacob3.png'),
(7, 'CARTIER TANK LOUIS', 'CASE:\r\nDimensions 33.7 mm x 25.5 mm\r\nCase material Rose gold 750/1000\r\nCrown 18K rose gold, Sapphire\r\nWater resistance 3 bar (~30 metres)\r\nGlass Mineral glass\r\nCase thickness 6.6 mm\r\nType of material of back Rose gold 750/1000\r\n\r\nMOVEMENT:\r\nFunctions Hours, Minutes\r\nWinding Manual winding mechanical movement\r\nPower reserve 38 Hours\r\nCaliber 1917 MC\r\n\r\nHANDS:\r\nHands shape Swords\r\nHands colour Blue\r\nHands material Steel\r\n\r\n\r\n', 34500, 'cartier3.png', 'cartier2.png', 'cartier1.png'),
(8, 'FRANCK MULLER VANGUARD', 'CASE:\r\nVanguard case\r\nStainless Steel\r\nHand polished\r\nBlue inserts on both sides of the case\r\nWidth: 44 mm x Length: 53.7 mm x Thickness: 12.7 mm Sapphire crystal\r\nWater resistant up to 30 meters\r\n\r\nDIAL:\r\nBrushed finish\r\nApplique numerals meticulously painted and applied by hand\r\n\r\nMOVEMENT:\r\nMVT FM 2800-DT\r\nSelf-winding movement with bidirectional rotor system Power reserve of 42 hours\r\n191 components\r\n21 jewels\r\nDiameter: Ø 25.60 mm. Thickness: 3.60 mm\r\nBalance wheel frequency set at 28,800 a', 95000, 'franck1.png', 'franck3.png', 'franck2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
