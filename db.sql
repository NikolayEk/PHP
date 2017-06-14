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

-- Дамп данных таблицы menu.dishs: ~21 rows (приблизительно)
/*!40000 ALTER TABLE `dishs` DISABLE KEYS */;
INSERT INTO `dishs` (`id`, `food`, `weight`, `price`, `time_id`) VALUES
	(22, 'Щи', '250', '50', 1),
	(23, 'Борщ', '250', '56', 1),
	(24, 'Солянка', '250', '65', 1),
	(25, 'Харчо', '250', '70', 1),
	(26, 'Салат летний', '180', '24', 2),
	(27, 'Салат Цезарь', '200', '76', 2),
	(28, 'Салат витаминный', '150', '28', 2),
	(29, 'Рис', '150', '20', 3),
	(30, 'Пюре', '150', '27', 3),
	(31, 'Макароны', '150', '24', 3),
	(32, 'Гречка', '150', '23', 3),
	(33, 'Котлета домашняя', '80', '40', 4),
	(34, 'Рыба лакомка', '120', '60', 4),
	(35, 'Мясо под шубой', '120', '78', 4),
	(36, 'Сырники', '140', '44', 5),
	(37, 'Торт Наполеон', '70', '33', 5),
	(38, 'Блинчики', '130', '45', 5),
	(39, 'Морс', '150', '20', 6),
	(41, 'Сок', '150', '30', 6),
	(42, 'Чай', '150', '20', 6),
	(43, 'Компот', '150', '25', 6);
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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
