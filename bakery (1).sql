-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 ديسمبر 2023 الساعة 09:22
-- إصدار الخادم: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- بنية الجدول `customers_testimonial`
--

CREATE TABLE `customers_testimonial` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `testimonial` varchar(10000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `customers_testimonial`
--

INSERT INTO `customers_testimonial` (`id`, `customer_name`, `testimonial`, `image`) VALUES
(1, 'John M', 'As a self-proclaimed foodie, I can confidently say that Baked Blissful Moments\r\n has stolen my heart with their exceptional baked goods. From their flaky croissants to their decadent cakes, every bite is a heavenly experience. Trust me, you won\'t be able to resist coming back for more!', '/newBakery/assets/images/prof1 (1).png'),
(2, 'Sarah R', 'I\'ve tried countless bakeries, but none compare to the mouthwatering creations I discovered at Baked Blissful Moments\r\n. Every bite is an explosion of flavor, and their attention to detail is unmatched. A true gem for any dessert enthusiast!', '/newBakery/assets/images/prof1 (2).png'),
(3, 'Emily T', 'Being a health-conscious individual, I was thrilled to discover Baked Blissful Moments\r\n. Their commitment to using organic ingredients without compromising on taste is truly impressive. The flavors in their treats are simply divine, and I can indulge guilt-free knowing that I\'m supporting a bakery that values quality and well-being.', '/newBakery/assets/images/prof1 (3).png');

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(500) NOT NULL,
  `category` bit(1) NOT NULL,
  `Flavours` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `category`, `Flavours`) VALUES
(1, 'French bread', 'French bread, known as baguette, is a long, crusty delight with a soft, chewy interior, perfect for savoring the essence of French baking traditions.', '200.00', '/newBakery/assets/images/French_Bread.jfif', b'1', 'Vanilla'),
(2, 'Cupcake', 'Banana bread is a moist and comforting treat, infused with the sweet aroma of ripe bananas and a hint of warm spices, making it a beloved classic for all to enjoy.', '300.00', '/newBakery/assets/images/cupcake.jpg', b'0', 'Vanilla'),
(3, 'Banana Bread', 'Banana bread is a moist and comforting treat, infused with the sweet aroma of ripe bananas and a hint of warm spices, making it a beloved classic for all to enjoy.', '500.00', '/newBakery/assets/images/banana_bread.jpg', b'1', 'Banana with vanilla'),
(4, 'Donut', 'A donut is a circular pastry with a soft, fluffy interior and a golden, slightly crispy exterior, often topped with a sweet glaze or sprinkles.', '400.00', '/newBakery/assets/images/donut2.jpg', b'0', 'Chocolate'),
(5, 'Burger bread', 'With its golden-brown exterior and tender interior, burger bread serves as the perfect vessel for encasing juicy patties, fresh vegetables, and savory condiments, adding a delightful texture and taste that complements the overall burger creation.', '200.00', '/newBakery/assets/images/Burger_Buns.jfif', b'1', 'Vanilla'),
(6, 'Cookie', 'A cookie is a delectable baked treat that comes in various shapes, sizes, and flavors, often featuring a delightful combination of sweetness, chewiness, and crispness that melts in your mouth and leaves you craving for more.', '500.00', '/newBakery/assets/images/cookies2.jpg', b'0', 'Vanilla'),
(7, ' Croissant', 'The croissant, a classic French pastry, is a flaky and buttery delight known for its crescent shape, achieved through a meticulous process of folding and layering dough, resulting in a light and airy texture that\'s simply irresistible.', '800.00', '/newBakery/assets/images/corosan.jpg', b'1', 'Vanilla'),
(8, 'Toast', 'Toast, a beloved breakfast staple, is made by lightly charring bread slices to achieve a warm and crispy texture, creating a comforting and versatile base that can be enjoyed with a variety of toppings, from classic butter and jam to avocado, eggs, or even melted cheese.', '1500.00', '/newBakery/assets/images/toast2.jpg', b'1', 'No flavor'),
(9, 'Brownies', 'Brownies, a decadent and fudgy dessert, are a chocolate lover\'s dream come true. These rich and moist squares of indulgence are made with melted chocolate, butter, sugar, and eggs, resulting in a heavenly treat that strikes the perfect balance between gooey and cake-like textures.', '500.00', '/newBakery/assets/images/browines.jpg', b'0', 'chocolate'),
(10, 'Knot bread', 'Knot bread, also known as knot rolls or knot-shaped bread, is a visually appealing and flavorful bread variety that features a distinct twisted or knotted shape. These bread rolls are typically made from a dough that is skillfully twisted, resulting in an attractive presentation and a chewy texture.', '700.00', '/newBakery/assets/images/bread.jpg', b'1', 'Vanilla'),
(11, 'Sweet croissant', 'Sweet croissants, a delightful twist on the classic French pastry, are filled with luscious sweet fillings such as chocolate, almond paste, or fruit compote, adding an extra layer of indulgence to the buttery and flaky croissant dough.', '2000.00', '/newBakery/assets/images/sweet_croissant.jfif', b'0', 'Vanilla'),
(12, 'Macaron', 'With their smooth and shiny shells, macarons come in a range of vibrant colors, making them a delightful treat for special occasions or as a luxurious everyday indulgence. The combination of their intricate textures and exquisite flavors creates a truly delightful and irresistible bite-sized dessert', '1500.00', '/newBakery/assets/images/macarons.jfif', b'0', 'Vanilla');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'ali', '456', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_testimonial`
--
ALTER TABLE `customers_testimonial`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_testimonial`
--
ALTER TABLE `customers_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
