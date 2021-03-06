-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.53 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы menu.dishs: ~32 rows (приблизительно)
/*!40000 ALTER TABLE `dishs` DISABLE KEYS */;
INSERT INTO `dishs` (`id`, `food`, `weight`, `price`, `time_id`, `picture`, `createdate`) VALUES
	(51, 'Винегрет', '140', 35, 2, '../img/20170623150505.jpeg', '2017-06-23 15:05:05'),
	(52, 'Салат витамнный', '140', 28, 2, '../img/20170623150522.jpeg', '2017-06-23 15:05:22'),
	(53, 'Гороховая каша', '100', 23, 3, '../img/20170623150543.jpeg', '2017-06-23 15:05:43'),
	(55, 'Греча', '100', 18, 3, '../img/20170623150647.jpeg', '2017-06-23 15:06:47'),
	(56, 'Пирожок картофельный', '50', 12, 5, '../img/20170623150716.jpeg', '2017-06-23 15:07:16'),
	(57, 'Коврижка', '70', 20, 5, '../img/20170623150736.jpeg', '2017-06-23 15:07:36'),
	(58, 'Компот из черноплодки', '150', 20, 6, '../img/20170623150800.jpeg', '2017-06-23 15:08:00'),
	(59, 'Котлета рыбная', '80', 30, 4, '../img/20170623150832.jpeg', '2017-06-23 15:08:32'),
	(60, 'Каша кукурузная', '150', 20, 3, '../img/20170623151130.jpeg', '2017-06-23 15:11:30'),
	(61, 'Торт медовый', '100', 35, 5, '../img/20170623151154.jpeg', '2017-06-23 15:11:54'),
	(62, 'Мимоза', '120', 37, 2, '../img/20170623151216.jpeg', '2017-06-23 15:12:16'),
	(63, 'Котлета морковная', '80', 18, 3, '../img/20170623151241.jpeg', '2017-06-23 15:12:41'),
	(64, 'Морс', '100', 20, 6, '../img/20170623151422.jpeg', '2017-06-23 15:14:22'),
	(65, 'Щи', '200', 50, 1, '../img/20170623151449.jpeg', '2017-06-23 15:14:49'),
	(66, 'Шашлык свиной', '200', 140, 4, '../img/20170623151825.jpeg', '2017-06-23 15:18:25'),
	(67, 'Тефтели', '180', 47, 4, '../img/20170623151851.jpeg', '2017-06-23 15:18:51'),
	(68, 'Столичный салат', '150', 46, 2, '../img/20170623151911.jpeg', '2017-06-23 15:19:11'),
	(69, 'Сметанник', '90', 35, 5, '../img/20170623151933.jpeg', '2017-06-23 15:19:33'),
	(70, 'Сбитень', '140', 30, 6, '../img/20170623151956.jpeg', '2017-06-23 15:19:56'),
	(71, 'Рассольник', '200', 45, 1, '../img/20170623152148.jpeg', '2017-06-23 15:21:48'),
	(72, 'Гнездо глухаря', '140', 50, 2, '../img/20170623152212.jpeg', '2017-06-23 15:22:12'),
	(73, 'Постный суп', '200', 40, 1, '../img/20170623152312.jpeg', '2017-06-23 15:23:12'),
	(74, 'Окрошка на кефире', '200', 48, 1, '../img/20170623152335.jpeg', '2017-06-23 15:23:35'),
	(75, 'Оливье', '150', 38, 2, '../img/20170623152356.jpeg', '2017-06-23 15:23:56'),
	(76, 'Пельмени', '200', 70, 4, '../img/20170623152418.jpeg', '2017-06-23 15:24:18'),
	(77, 'Пирожок с мясом', '70', 18, 5, '../img/20170623152440.jpeg', '2017-06-23 15:24:40'),
	(78, 'Плюшка', '80', 15, 1, '../img/20170623152958.jpeg', '2017-06-23 15:29:58'),
	(79, 'Бефстроганов с гречкой', '200', 78, 4, '../img/20170626201357.jpeg', '2017-06-26 20:13:57'),
	(80, 'Блинчики с творогом', '150', 50, 5, '../img/20170626201413.jpeg', '2017-06-26 20:14:13'),
	(81, 'Ватрушка с творогом', '70', 15, 5, '../img/20170626201431.jpeg', '2017-06-26 20:14:31'),
	(82, 'Суп гороховый', '200', 50, 1, '../img/20170626201454.jpeg', '2017-06-26 20:14:54'),
	(83, 'Борщ', '200', 45, 1, '../img/20170627202909.jpeg', '2017-06-27 20:29:09');
/*!40000 ALTER TABLE `dishs` ENABLE KEYS */;

-- Дамп данных таблицы menu.foodtime: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `foodtime` DISABLE KEYS */;
INSERT INTO `foodtime` (`id`, `timeofeat`) VALUES
	(1, 'Суп\r\n'),
	(2, 'Салат\r\n'),
	(3, 'Гарнир\r\n'),
	(4, 'Горячее'),
	(5, 'Десерт'),
	(6, 'Напиток');
/*!40000 ALTER TABLE `foodtime` ENABLE KEYS */;

-- Дамп данных таблицы menu.orders: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `food_id`, `count`, `waiter`, `numoftable`, `numoforder`) VALUES
	(10, 'Мясо под шубой', '2', 'Сидоров', '2', '1'),
	(11, 'Борщ', '1', 'Петров', '2', '3'),
	(12, 'Солянка', '2', 'Соколов', '1', '4'),
	(13, 'Салат летний', '3', 'Гринев', '4', '2'),
	(14, 'Рис', '3', 'Гринев', '2', '3');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Дамп данных таблицы menu.waiters: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `waiters` DISABLE KEYS */;
INSERT INTO `waiters` (`id`, `surname`, `name`, `patronymic`, `numofchange`) VALUES
	(3, 'Петров', 'Олег', 'Ильич', '1'),
	(4, 'Соколов', 'Лев ', 'Григорьевич', '2'),
	(5, 'Гринев', 'Петр', 'Савельич', '3'),
	(6, 'Лукин', 'Сергей', 'Павлович', '4'),
	(7, 'Сидоров', 'Михаил', 'Елисеивич', '1');
/*!40000 ALTER TABLE `waiters` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
