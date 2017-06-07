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

-- Дамп данных таблицы menu.dishs: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `dishs` DISABLE KEYS */;
INSERT INTO `dishs` (`id`, `food`, `weight`, `price`, `time_id`) VALUES
	(1, 'Борщ', '250', '60', 2),
	(6, 'Окрошка', '200', '75', 2),
	(8, 'Солянка', '280', '90', 2),
	(10, 'Пюре', '150', '30', 2),
	(11, 'Рис', '200', '30', 2),
	(12, 'Салат летний', '250', '35', 3);
/*!40000 ALTER TABLE `dishs` ENABLE KEYS */;

-- Дамп данных таблицы menu.foodtime: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `foodtime` DISABLE KEYS */;
INSERT INTO `foodtime` (`id`, `timeofeat`) VALUES
	(1, 'Завтрак\r\n'),
	(2, 'Обед\r\n'),
	(3, 'Ужин\r\n'),
	(4, 'Полдник'),
	(5, 'Ланч');
/*!40000 ALTER TABLE `foodtime` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
