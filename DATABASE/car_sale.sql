-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 11:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_listing`
--

CREATE TABLE `car_listing` (
  `id` bigint(20) NOT NULL,
  `sold` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `car_make` text NOT NULL,
  `car_model` text NOT NULL,
  `car_body_style` text NOT NULL,
  `car_year` text NOT NULL,
  `car_condition` text NOT NULL,
  `car_mileage` text NOT NULL,
  `car_interior_color` text NOT NULL,
  `car_body_color` text NOT NULL,
  `car_transmission` text NOT NULL,
  `car_engine` text NOT NULL,
  `car_no_of_gears` text NOT NULL,
  `car_location` text NOT NULL,
  `car_fuel_type` text NOT NULL,
  `car_description` text NOT NULL,
  `car_price` text NOT NULL,
  `no_of_uploaded_photos` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_listing`
--

INSERT INTO `car_listing` (`id`, `sold`, `user_id`, `car_make`, `car_model`, `car_body_style`, `car_year`, `car_condition`, `car_mileage`, `car_interior_color`, `car_body_color`, `car_transmission`, `car_engine`, `car_no_of_gears`, `car_location`, `car_fuel_type`, `car_description`, `car_price`, `no_of_uploaded_photos`) VALUES
(2, 0, 1, 'Nissan', 'Z', 'Sport', '2021', 'Brand New', '0', 'Black', 'Blue', 'Manual', '3.0L V6 Turbo', '6', 'Bolton, UK', 'Gasoline', 'After a three-year hiatus, Nissan has reintroduced the Z sports coupe for 2023. Its retro-themed exterior styling breathes new life into the Z\'s storied lifetime, but the 2023 Z isn\'t entirely new. Underneath its new bodywork and restyled interior is the same chassis as the Nissan 370Z it replaces. It\'s been reinforced for added stiffness, but it\'s limited by a design that dates back to 2009. On the plus side, a more powerful 400-horsepower twin-turbocharged V6 engine and new suspension tunings improve handling and comfort.\r\n\r\nThis new 2023 Nissan Z continues the tradition of delivering fun driving dynamics without breaking the bank. If you\'re a Z fan, we\'re certain you\'ll appreciate the many improvements. Otherwise, we suggest checking out the competition that includes the Toyota GR Supra and the more affordable Ford Mustang GT or Chevrolet Camaro SS.', '42209', 5),
(3, 0, 1, 'Acura', 'Integra', 'Sedan', '2023', 'Brand New', '0', 'Dark Grey', 'Red', 'Automatic', '1.5L I4 Turbo', '6', 'Bury, UK', 'Petrol', 'Based on the same architecture that underpins the Honda Civic Si, the 2023 Acura Integra revives an epic moniker from the brand\'s earliest years. The all-new Integra\'s handsome exterior aligns with the larger Acura TLX sedan, and its spacious cabin provides more rear-seat space than the Audi A3 or Mercedes-Benz CLA 250. The Integra rolls with an eager 200-horsepower 1.5-liter engine and responsive, fun-to-drive chassis. And it offers a pair of features not found in the A3 sedan or CLA 250 four-door coupe: a liftback body with 24.3 cubic-foot of cargo space and an engaging, six-speed manual transmission.', '31895', 5),
(4, 0, 1, 'MINI', 'Clubman', 'Wagon', '2023', 'Brand New', '0', 'Black', 'White', 'Automatic', '2.0L I4 Turbo', '8', 'Wigan, UK', 'Gasoline', 'Mini has long been known for combining quirky styling with strong performance and great handling. It\'s a brand for people who like to drive and want to enjoy the trip, whether it\'s the morning commute or a weekend getaway. The Mini Clubman builds on that legacy with a four-door that adds room for people and cargo. It has the same eye-catching style as the Mini Hardtop but in a more practical packaging. There\'s a responsive turbocharged engine with the option for an automatic or manual transmission. It\'s a compelling choice, but it has a harsh ride that is unsettled on rough pavement. Additionally, the side-hinged tailgate doors provide great access, but there isn\'t much room for cargo.\r\n\r\nThe Lexus UX is more luxurious, with better cargo room, and will be offered only as a hybrid for the 2023 model year. The Mazda CX-30 has an upscale interior with a wider trim range and lower pricing. The Buick Encore GX also has a comfortable and nicely appointed interior but lacks the performance punch of the Mini Clubman.', '35350', 5),
(5, 0, 1, 'Ford', 'Transit Passenger Wagon', 'van', '2022', 'Brand New', '0', 'Black', 'Black', 'Automatic', '3.5L V6', '10', 'Salford, UK', 'Gasoline', 'Three-row SUVs are great for getting your kids to soccer games or driving the neighbors out to dinner. But what about when you need to move the entire soccer team? Get the church group to the holiday service, or get the band to the next gig? For some jobs, only a full-size passenger van will do, and the 2022 Ford Transit Passenger Wagon is one of the few in this corner of the auto market.\r\n\r\nIt comes standard with 12-passenger seating but can seat up to 15 (you can also choose fewer seats and more cargo space). Two V6 engines deliver plenty of muscle, and there are multiple configurations of length and height. Inside, the Transit borrows from Ford\'s economy crossovers with useful interior design and simple, quality materials. A smooth ride, standard driver-safety features, and ample payload and towing limits round out the Transit Wagon\'s benefits.\r\n\r\nThe Mercedes-Benz Sprinter Passenger Van is the only other van with double-digit passenger capacity out there. The Ram ProMaster Crew Van is an option if you only need room for five, but it\'s really a cargo van with extra seats.\r\n\r\nSurprisingly, the base model Benz costs a bit less than the Ford, and both models match up well with feature offerings. The Sprinter has an optional turbodiesel V6 engine that may offer marginally better fuel efficiency (the Sprinter has not been EPA-rated), while the Transit\'s initial maintenance costs will be less than the Mercedes. Either will suit most buyers well, but for carrying large groups in comfort, the Ford Transit Passenger Wagon is an easy choice.', '48340', 5),
(6, 0, 1, 'Honda', 'Odyssey', 'Minivan', '2023', 'Brand New', '0', 'Dark Grey', 'Grey', 'Automatic', '3.5L V6', '10', 'Stockport, UK', 'Gasoline', 'One of America\'s best-selling minivans year after year, the Honda Odyssey delivers the space, comfort, and features most minivan buyers want, plus the highest safety ratings and Honda\'s reputation for reliability. The Odyssey seats up to eight with plenty of head and legroom. Its third row is one of the largest in the class, offering considerably more legroom than you\'ll find in the Kia Carnival or Chrysler Pacifica. Plus, the Honda has more maximum cargo space than the Pacifica and Toyota Sienna. On the road, the Odyssey is smooth and refined. Ride quality is excellent, and light steering makes this sizable van very easy to park. Unlike some of its rivals, the Odyssey is not available as a hybrid or with all-wheel drive, but it is one of the quickest minivans on the market. Its powerful V6 engine offers a satisfying punch off the line and plenty of passing performance, even when the van is packed with passengers.', '40559', 5),
(7, 0, 1, 'GMC', 'Sierra 3500HD', 'Truck', '2022', 'Brand New', '0', 'Black', 'White', 'Automatic', '6.6L V8', '6', 'Middleton', 'Gasoline', 'When it comes to serious heavy-duty trucks, there are only three choices, and the GMC Sierra 3500HD is one of the most capable. Properly configured with a stout turbodiesel engine and dual rear wheels, this massive pickup can tow up to 36,000 pounds. In this select class of trucks, only the Ram 3500 beats the GMC, and only by 1,090 lbs. Meanwhile, the Ford Super Duty F-350 is limited to 32,000 lbs. The Sierra is further bolstered by a spacious cabin, versatile MultiPro tailgate, and several tech features that make towing even easier. Curiously, however, adaptive cruise control is not offered. The 3500HD\'s interior would benefit from a similar refresh as its GMC Sierra 1500 sibling, but it\'s stuck with a carryover that falls short of rivals\' design and quality.', '43195', 5);

-- --------------------------------------------------------

--
-- Table structure for table `car_photos`
--

CREATE TABLE `car_photos` (
  `id` bigint(20) NOT NULL,
  `car_id` text NOT NULL,
  `img_src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_photos`
--

INSERT INTO `car_photos` (`id`, `car_id`, `img_src`) VALUES
(1, '7', '17099306105226.jpg'),
(2, '7', '17099306303055.jpg'),
(3, '7', '17099306468470.jpg'),
(4, '7', '17099306577954.jpg'),
(5, '7', '17099306691963.jpg'),
(6, '6', '17099307061431.jpg'),
(7, '6', '17099307153231.jpg'),
(8, '6', '17099307246942.jpg'),
(9, '6', '17099307348361.jpg'),
(10, '6', '17099307448885.jpg'),
(11, '5', '17099307752370.jpg'),
(12, '5', '17099307847516.jpg'),
(13, '5', '17099307951732.jpg'),
(14, '5', '17099308047211.jpg'),
(15, '5', '17099308138546.jpg'),
(16, '4', '17099308377198.jpg'),
(17, '4', '17099308455652.jpg'),
(18, '4', '17099308558215.jpg'),
(19, '4', '17099308645760.jpg'),
(20, '4', '17099308724828.jpg'),
(21, '3', '17099309031972.jpg'),
(22, '3', '17099309141768.jpg'),
(23, '3', '17099309254724.jpg'),
(24, '3', '17099309341600.jpg'),
(25, '3', '17099309421102.jpg'),
(26, '2', '17099309695219.jpg'),
(27, '2', '17099309795686.jpg'),
(28, '2', '17099309887041.jpg'),
(29, '2', '17099309994695.jpg'),
(30, '2', '17099310085275.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) NOT NULL,
  `t_full_name` text NOT NULL,
  `t_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `t_full_name`, `t_text`) VALUES
(3, 'Robert. C. ', 'Got to know about this website through a friend, he is a professional to the core. I have since bought a 2012 Highlander, 2012 Camry, 2003 Camry and another 2012 Highlander. He is straightforward and always protect the interest of his client. I once paid for duty and he refunded me some money after clearing the vehicle. I highly recommend this website to anyone that wants a good car and a good deal. '),
(4, 'Linda. F', 'This website is transparent & trustworthy in buying cars or any kind of vehicle. they are always after customer\'s satisfaction & ready to listen to any of customer\'s complaint at anytime.They are indeed the best dealer to consult for vehicle purchase. God bless you all.'),
(8, 'William .H', 'I’m so grateful to this Auto website, they are so professional and sale affordable cars. I am very proud that this website is a reputable car dealer in UK and would recommend it to anyone who needs a durable car or sport car.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `profile_picture` text DEFAULT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `phone_number` text NOT NULL,
  `whatsapp_contact` text DEFAULT NULL,
  `email_address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_picture`, `first_name`, `last_name`, `phone_number`, `whatsapp_contact`, `email_address`, `password`) VALUES
(1, 'chris04353435.jpg', 'Chrysanthus', 'Chiagwah', '07765093130', '+447765093130', 'chrysanthusobinna@gmail.com', '$2y$10$2UznDJR1MA8ytR4WR6Jm9uAqMgxx3i7QRFu5ey8avzQKO3SopmM4G'),
(3, '17099315642504.jpg', 'Ann', 'Joe', '+444601230909', '+444601230909', 'ann.joe@example.com', '$2y$10$JocQhYkzDSR3gFGDoA4ubuqzB5.5krvKV5iilaAFLDWh49PI2mg4S'),
(4, '17099319274025.jpg', 'Mary', 'Peters', '09088776650', '09088776650', 'mary.peters@examole.com', '$2y$10$/JTxwQckM5h9bRF0wUqA.Obep92w7/T6jB15N11FedIfu2cPWdVme'),
(5, '17099320232006.jpg', 'Caleb', 'Stone', '07765093139', '07765093139', 'caleb.stone@gmail.com', '$2y$10$oXIkMYplqkjhRj0JFwipPeRTWlG1RiaIT/3.hK5i1sq6db0bRtLQ2');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `id` int(11) NOT NULL,
  `domain_name` text NOT NULL,
  `company_name` text NOT NULL,
  `company_phonenumber` text NOT NULL,
  `company_emailaddress` text NOT NULL,
  `company_address` text NOT NULL,
  `admin_username` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_info`
--

INSERT INTO `website_info` (`id`, `domain_name`, `company_name`, `company_phonenumber`, `company_emailaddress`, `company_address`, `admin_username`, `admin_password`) VALUES
(1, 'chrys-autosales.com', 'AutoSales', '776 509 3130', 'contact@chrys-autosales.com', '49 shuster road, Manchester, M14 5LX', 'Admin', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_listing`
--
ALTER TABLE `car_listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_photos`
--
ALTER TABLE `car_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_listing`
--
ALTER TABLE `car_listing`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_photos`
--
ALTER TABLE `car_photos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
