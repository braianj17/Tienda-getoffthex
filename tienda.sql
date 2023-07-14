-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2019 a las 01:19:33
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(1, 1, 1, '1000.00', 1, 0),
(2, 5, 1, '300.00', 1, 0),
(3, 5, 3, '429.00', 1, 0),
(4, 6, 1, '300.00', 1, 0),
(5, 7, 1, '300.00', 1, 0),
(6, 8, 1, '300.00', 1, 0),
(7, 9, 1, '300.00', 1, 0),
(8, 10, 1, '300.00', 1, 0),
(9, 11, 1, '300.00', 1, 0),
(10, 12, 1, '300.00', 1, 0),
(11, 13, 1, '300.00', 1, 0),
(12, 14, 1, '300.00', 1, 0),
(13, 15, 1, '300.00', 1, 0),
(14, 16, 1, '300.00', 1, 0),
(15, 17, 1, '300.00', 1, 0),
(16, 18, 1, '300.00', 1, 0),
(17, 19, 1, '300.00', 1, 0),
(18, 20, 1, '300.00', 1, 0),
(19, 21, 1, '300.00', 1, 0),
(20, 22, 1, '300.00', 1, 0),
(21, 23, 1, '300.00', 1, 0),
(22, 24, 1, '300.00', 1, 0),
(23, 25, 1, '300.00', 1, 0),
(24, 26, 1, '300.00', 1, 0),
(25, 27, 1, '300.00', 1, 0),
(26, 28, 1, '300.00', 1, 0),
(27, 29, 1, '300.00', 1, 0),
(28, 30, 1, '300.00', 1, 0),
(29, 31, 1, '300.00', 1, 0),
(30, 32, 1, '300.00', 1, 0),
(31, 33, 1, '300.00', 1, 0),
(32, 34, 1, '300.00', 1, 0),
(33, 35, 1, '300.00', 1, 0),
(34, 36, 1, '300.00', 1, 0),
(35, 37, 1, '300.00', 1, 0),
(36, 38, 3, '429.00', 1, 1),
(37, 39, 1, '300.00', 1, 1),
(38, 39, 2, '1005.00', 1, 0),
(39, 39, 3, '429.00', 1, 0),
(40, 40, 1, '300.00', 1, 0),
(41, 41, 1, '300.00', 1, 0),
(42, 42, 3, '429.00', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Learn PHP 7', '300', 'This new book on PHP 7 introduces writing solid, secure, object-oriented code in the new PHP 7: you will create a complete three-tier application using a natural process of building and testing modules within each tier. This practical approach teaches you about app development and introduces PHP features when they are actually needed rather than providing you with abstract theory and contrived examples.', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9781/4842/9781484217290.jpg'),
(2, 'Professional ASP.NET MVC 5 ', '1005', '* Learn how to propagate DOM changes across the website without writing extensive jQuery callbacks code.\r\n* Learn how to achieve reactivity and easily compose views with Vue.js and understand what it does behind the scenes.\r\n* Explore the core features of Vue.js with small examples, learn how to build dynamic content into preexisting web applications, and build Vue.js applications from scratch.', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9781/7864/9781786469946.jpg'),
(3, 'Learning Vue.js 2\r\n', '429', 'MVC 5 is the newest update to the popular Microsoft technology that enables you to build dynamic, data-driven websites. Like previous versions, this guide shows you step-by-step techniques on using MVC to best advantage, with plenty of practical tutorials to illustrate the concepts. It covers controllers, views, and models; forms and HTML helpers; data annotation and validation; membership, authorization, and security.', 'https://images-na.ssl-images-amazon.com/images/I/51u-ERS1W8L._SX396_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventas`
--

CREATE TABLE `tbventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,0) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbventas`
--

INSERT INTO `tbventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(1, '12345678910', '', '2019-08-24 00:00:00', 'braianj174@gmail.com', '700', 'pendiente'),
(2, '12345678910', '', '2019-08-24 00:00:00', 'braianj174@gmail.com', '700', 'pendiente'),
(3, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-24 23:28:38', 'braianj174@gmail.com', '1734', 'pendiente'),
(4, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-24 23:32:53', 'mija@gmail.com', '729', 'pendiente'),
(5, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 13:13:33', 'BRAIANJ@GMAIL.COM', '729', 'pendiente'),
(6, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 13:14:37', 'DS@GMAIL.COM', '300', 'pendiente'),
(7, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 13:23:09', 'minja@gmail.com', '300', 'pendiente'),
(8, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 13:25:08', 'minja@gmail.com', '300', 'pendiente'),
(9, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 13:47:33', 'vf@gmail.com', '300', 'pendiente'),
(10, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 13:48:20', 'vf@gmail.com', '300', 'pendiente'),
(11, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 13:53:14', 'vf@gmail.com', '300', 'pendiente'),
(12, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 14:47:46', 'fghfg@gmail.com', '300', 'pendiente'),
(13, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 16:07:38', 'uyghk@gmail.com', '300', 'pendiente'),
(14, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 16:07:56', 'uyghk@gmail.com', '300', 'pendiente'),
(15, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:25:38', 'uyghk@gmail.com', '300', 'pendiente'),
(16, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:25:48', 'uyghk@gmail.com', '300', 'pendiente'),
(17, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:31:29', 'uyghk@gmail.com', '300', 'pendiente'),
(18, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:31:41', 'uyghk@gmail.com', '300', 'pendiente'),
(19, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:33:56', 'uyghk@gmail.com', '300', 'pendiente'),
(20, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:34:20', 'csdcs@gmail.com', '300', 'pendiente'),
(21, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:36:16', 'csdcs@gmail.com', '300', 'pendiente'),
(22, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:40:12', 'csdcs@gmail.com', '300', 'pendiente'),
(23, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:40:18', 'csdcs@gmail.com', '300', 'pendiente'),
(24, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:40:58', 'csdcs@gmail.com', '300', 'pendiente'),
(25, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:42:01', 'csdcs@gmail.com', '300', 'pendiente'),
(26, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-26 23:42:40', 'csdcs@gmail.com', '300', 'pendiente'),
(27, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:03:39', 'csdcs@gmail.com', '300', 'pendiente'),
(28, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:05:29', 'csdcs@gmail.com', '300', 'pendiente'),
(29, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:06:12', 'csdcs@gmail.com', '300', 'pendiente'),
(30, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:13:31', 'csdcs@gmail.com', '300', 'pendiente'),
(31, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:13:42', 'csdcs@gmail.com', '300', 'pendiente'),
(32, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:14:24', 'csdcs@gmail.com', '300', 'pendiente'),
(33, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:36:58', 'csdcs@gmail.com', '300', 'pendiente'),
(34, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 00:42:54', 'csdcs@gmail.com', '300', 'pendiente'),
(35, 'i1q792d0t52jc04ip6ap49r77h', '', '2019-08-27 01:26:49', 'csdcs@gmail.com', '300', 'pendiente'),
(36, 'i1q792d0t52jc04ip6ap49r77h', '{\"id\":\"PAYID-LVWIA3Y1BV91199E06838018\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"4YP07953GW462911U\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"arkweb.puebla-buyer@gmail.com\",\"first_name\":\"test\",\"last_name\":\"buyer\",\"payer_id\":\"H4EJKHT4HLRQG\",\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9397699896\",\"country_code\":\"MX\"}},\"transactions\":[{\"amount\":{\"total\":\"300.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"300.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"SJJX4F2ABQN5Q\",\"email\":\"arkweb.puebla-facilitator@gmail.com\"},\"description\":\"Compra de productos a ARK:$300.00  \",\"custom\":\"i1q792d0t52jc04ip6ap49r77h#cOG6z5ICM9FgF4TATrM2cw==\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"12T11448HP725920P\",\"state\":\"completed\",\"amount\":{\"total\":\"300.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"300.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"18.38\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-LVWIA3Y1BV91199E06838018\",\"create_time\":\"2019-09-02T02:38:02Z\",\"update_time\":\"2019-09-02T02:38:02Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/12T11448HP725920P\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/12T11448HP725920P/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVWIA3Y1BV91199E06838018\",\"rel\":\"parent_payment\",\"method\":\"GET\"}]}}]}],\"create_time\":\"2019-09-02T02:37:35Z\",\"update_time\":\"2019-09-02T02:38:02Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVWIA3Y1BV91199E06838018\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2019-09-01 21:37:23', 'braianj174@gmail.com', '300', 'aprobado'),
(37, 'emp4e598htt95n64bj8n27v177', '{\"id\":\"PAYID-LVWJCQQ48C64831R7808570T\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"66K91354S9172464M\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"arkweb.puebla-buyer@gmail.com\",\"first_name\":\"test\",\"last_name\":\"buyer\",\"payer_id\":\"H4EJKHT4HLRQG\",\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9397699896\",\"country_code\":\"MX\"}},\"transactions\":[{\"amount\":{\"total\":\"300.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"300.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"SJJX4F2ABQN5Q\",\"email\":\"arkweb.puebla-facilitator@gmail.com\"},\"description\":\"Compra de productos a ARK:$300.00  \",\"custom\":\"emp4e598htt95n64bj8n27v177#U7ohvIXV6ysOIxX9JlyGKQ==\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"6KD47426DM821593Y\",\"state\":\"completed\",\"amount\":{\"total\":\"300.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"300.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"18.38\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-LVWJCQQ48C64831R7808570T\",\"create_time\":\"2019-09-02T03:49:41Z\",\"update_time\":\"2019-09-02T03:49:41Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/6KD47426DM821593Y\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/6KD47426DM821593Y/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVWJCQQ48C64831R7808570T\",\"rel\":\"parent_payment\",\"method\":\"GET\"}]}}]}],\"create_time\":\"2019-09-02T03:49:22Z\",\"update_time\":\"2019-09-02T03:49:41Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVWJCQQ48C64831R7808570T\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2019-09-01 22:49:09', 'ssdf@gmail.com', '300', 'aprobado'),
(38, '1eftc4h887j3uug42trjpdl9ol', '{\"id\":\"PAYID-LVW7ETI6RY91358WU265503A\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"27J11842GX3379633\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"arkweb.puebla-buyer@gmail.com\",\"first_name\":\"test\",\"last_name\":\"buyer\",\"payer_id\":\"H4EJKHT4HLRQG\",\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9397699896\",\"country_code\":\"MX\"}},\"transactions\":[{\"amount\":{\"total\":\"429.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"429.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"SJJX4F2ABQN5Q\",\"email\":\"arkweb.puebla-facilitator@gmail.com\"},\"description\":\"Compra de productos a ARK:$429.00  \",\"custom\":\"1eftc4h887j3uug42trjpdl9ol#yV8lVppF8Y40UCwky4PTyA==\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"7WK62532SX2125041\",\"state\":\"completed\",\"amount\":{\"total\":\"429.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"429.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"24.29\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-LVW7ETI6RY91358WU265503A\",\"create_time\":\"2019-09-03T04:56:08Z\",\"update_time\":\"2019-09-03T04:56:08Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/7WK62532SX2125041\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/7WK62532SX2125041/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVW7ETI6RY91358WU265503A\",\"rel\":\"parent_payment\",\"method\":\"GET\"}]}}]}],\"create_time\":\"2019-09-03T04:55:41Z\",\"update_time\":\"2019-09-03T04:56:08Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVW7ETI6RY91358WU265503A\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2019-09-02 23:55:30', 'minj@gmail.com', '429', 'completo'),
(39, '2l2boeo7mi03nb5f9jj9msbgmu', '{\"id\":\"PAYID-LVXBAGQ18996705UP017993J\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"4AU8236398343535X\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"arkweb.puebla-buyer@gmail.com\",\"first_name\":\"test\",\"last_name\":\"buyer\",\"payer_id\":\"H4EJKHT4HLRQG\",\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"},\"phone\":\"9397699896\",\"country_code\":\"MX\"}},\"transactions\":[{\"amount\":{\"total\":\"1734.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1734.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"SJJX4F2ABQN5Q\",\"email\":\"arkweb.puebla-facilitator@gmail.com\"},\"description\":\"Compra de productos a ARK:$1,734.00  \",\"custom\":\"2l2boeo7mi03nb5f9jj9msbgmu#6sm0zgu9N8OFc16lfdhQEA==\",\"item_list\":{\"shipping_address\":{\"recipient_name\":\"test buyer\",\"line1\":\"Calle Juarez 1\",\"city\":\"Miguel Hidalgo\",\"state\":\"Ciudad de Mexico\",\"postal_code\":\"11580\",\"country_code\":\"MX\"}},\"related_resources\":[{\"sale\":{\"id\":\"74559869658370115\",\"state\":\"completed\",\"amount\":{\"total\":\"1734.00\",\"currency\":\"MXN\",\"details\":{\"subtotal\":\"1734.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"84.06\",\"currency\":\"MXN\"},\"parent_payment\":\"PAYID-LVXBAGQ18996705UP017993J\",\"create_time\":\"2019-09-03T07:03:23Z\",\"update_time\":\"2019-09-03T07:03:23Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/74559869658370115\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/74559869658370115/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVXBAGQ18996705UP017993J\",\"rel\":\"parent_payment\",\"method\":\"GET\"}]}}]}],\"create_time\":\"2019-09-03T07:02:50Z\",\"update_time\":\"2019-09-03T07:03:23Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-LVXBAGQ18996705UP017993J\",\"rel\":\"self\",\"method\":\"GET\"}]}', '2019-09-03 02:02:37', 'pr1@gmail.com', '1734', 'completo'),
(40, '2l2boeo7mi03nb5f9jj9msbgmu', '', '2019-09-03 02:18:44', 'perr@gmail.com', '300', 'pendiente'),
(41, '2l2boeo7mi03nb5f9jj9msbgmu', '', '2019-09-03 02:20:28', 'cjs@gmail.com', '300', 'pendiente'),
(42, 'vbp94g8a36262vatrfjbqva88c', '', '2019-09-03 02:40:30', 'braianj17@hotmail.com', '429', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`),
  ADD KEY `IDVENTA` (`IDVENTA`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbventas`
--
ALTER TABLE `tbventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbventas`
--
ALTER TABLE `tbventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tbventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
