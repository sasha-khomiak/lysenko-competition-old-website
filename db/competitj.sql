-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 19 2012 г., 16:56
-- Версия сервера: 5.0.51a-24+lenny5
-- Версия PHP: 5.2.6-1+lenny13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `competitj`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

DROP TABLE IF EXISTS `lang`;
CREATE TABLE IF NOT EXISTS `lang` (
  `number` tinyint(2) NOT NULL default '0',
  `name` varchar(20) NOT NULL default '',
  UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`number`, `name`) VALUES
(1, 'українська'),
(2, 'english');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `date` date NOT NULL default '0000-00-00',
  `text` text NOT NULL,
  `text_all` text NOT NULL,
  `lang` tinyint(1) NOT NULL default '0',
  `n` tinyint(4) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`date`, `text`, `text_all`, `lang`, `n`) VALUES
('2012-10-01', 'Оголошено результати голосування І туру у номінації \\"Віолончель\\"', 'Оголошено результати голосування І туру у номінації \\"Віолончель\\"\r\n\r\nДєдіков Максим, Україна\r\nЛомаков Георгій, Україна\r\nПавловський Антон, Росія\r\nПолуденний Артем, Україна\r\nПровотар Владислав, Росія\r\nРекало Вiктор, Україна\r\nШадрін Олексій, Україна\r\nТрофимчук Ярослава, Україна\r\n\r\nСпеціальний приз за краще виконання твору М.Лисенка\r\n\r\nШадрін Олексій, Україна', 1, 1),
('2012-10-01', 'The results of I Round of Cello nomination announced', 'The results of I Round of Cello nomination announced \r\n\r\nDiedikov Maxym,  Ukraine\r\nLomakov Georgiy, Ukraine\r\nPavlovskiy Anton, Russia\r\nPoludenny Artem, Ukraine\r\nProvotar Vladislav, Russia\r\nRekalo Viktor, Ukraine\r\nShadrin Oleksiy, Ukraine\r\nTrophymchuk Yaroslava, Ukraine\r\n\r\nSpecial Prize for the best performance of a piece by Mykola Lysenko\r\n\r\nShadrin Oleksiy, Ukraine', 2, 1),
('2012-11-17', 'Оголошено результати І туру в номінації Фортепіано', 'Гумінюк Станіслав, Україна\r\n\r\nКачнов Павло, Україна\r\n\r\nКім Сєргєй, Казахстан\r\n\r\nКостюченко Анатолій, Україна\r\n\r\nКозловські Міша, Польша\r\n\r\nМурадов Рустам\r\n\r\nПівненко Дмитро, Україна\r\n\r\nСамойлов Олександр, Україна\r\n\r\nСаєнко Данило, Україна\r\n\r\nШрамко Денис, Україна\r\n\r\nВалентієв Валентин, Україна\r\n\r\nЯковенко Арсен, Україна', 1, 1),
('2012-11-17', 'The results of I Round of Piano nomination is announced', 'Huminiuk Stanislav, Ukraine\r\n\r\nKachnov Pavlo, Ukraine\r\n\r\nKim Sergey, Kazakhstan\r\n\r\nKostiuchenko Anatoliy, Ukraine\r\n\r\nKozlowski Mischa, Poland \r\n\r\nMuradov Rustam, Russia\r\n\r\nPivnenko Dmytro, Ukraine\r\n\r\nSamoylov Oleksandr, Ukraine\r\n\r\nSayenko Danylo, Ukraine\r\n\r\nShramko Denys, Ukraine\r\n\r\nValentiev Valentyn, Ukraine\r\n\r\nYakovenko Arsen, Ukraine', 2, 1),
('2012-11-18', 'Оголошено результати І туру в номінації Сольний спів', 'Гаврилюк Мирослава, \r\nГонюков Андрій, \r\nІванченко Дмитро,\r\nКоваль Вероніка, \r\nКульчинська Ольга, \r\nКиреєв Олександр, \r\nЛесик-Садівська Іванна, \r\nМілєв Олександр,\r\nНіколаєва Ксенія,\r\nСадівський Назарій, \r\nСевастьянов Сергій, \r\nСтецький Андрій, \r\nУшаньова Ірина, \r\nЄвдокименко Ігор, \r\nЖмуденко Олексій, \r\nБражник Олена, \r\nДу Фаньонґ, \r\nДитюк Валентин, \r\nФеденьова Валентина, \r\nКотко Сергій,\r\nГаніна Тетянa, \r\nГрадовська Ольга, \r\nКнязєва Дарія,\r\nКалінкіна Тамара', 1, 2),
('2012-11-18', 'The results of I Round of Singing nomination announced', 'Havryliuk Myroslava,\r\nHoniukov Andriy, \r\nIvanchenko Dmytro, \r\nKoval Veronika, \r\nKulchynska Olga, \r\nKyreyev Oleksandr,\r\nLesyk-Sadivska,\r\nMilev Oleksandr, \r\nNikolayeva Ksenia, \r\nSadivsky Nazariy, \r\nSevastianov Serhiy, \r\nStetsky Andriy, \r\nUshaniova Iryna, \r\nYevdokymenko Ihor, \r\nZhmudenko Oleksiy, \r\nBrazhnyk Olena, \r\nDu Fanyong, \r\nDytiuk Valentyn, \r\nFedeniova Valentyna,\r\nKotko Serhiy, \r\nGanina Tetiana, \r\nGradovska Olha, \r\nKniazeva Daria, \r\nKalinkina Tamara', 2, 2),
('2012-11-21', 'Оголошено фіналістів конкурсу', 'Оголошено результати другого туру конкурсу ім. М Лисенка. Список фіналістів в усіх чотирьох номінаціях дивіться за цим <b><a href=\\"../ua/result_violin.php\\">посиланням</a></b>.', 1, 1),
('2012-11-21', 'Announced the finalists', 'Announced the results of the second round of the Mykola Lysenko International Music Competition. List of finalists in all four categories, see in <b><a href=\\"../eng/result_violin.php\\">this link</a></b>.', 2, 1),
('2012-11-26', 'Оголошено переможців конкурсу', 'Оголошено переможців конкурсу ім. М Лисенка. Список в усіх чотирьох номінаціях дивіться за цим <b><a href=\\"../ua/winners_violin.php\\">посиланням</a></b>.', 1, 1),
('2012-11-26', 'Announced the winners of competition', 'Announced the winners the Mykola Lysenko International Music Competition. List of finalists in all four categories, see in <b><a href=\\"../eng/winners_violin.php\\">this link</a></b>.', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news_foto`
--

DROP TABLE IF EXISTS `news_foto`;
CREATE TABLE IF NOT EXISTS `news_foto` (
  `date` date NOT NULL default '0000-00-00',
  `n` tinyint(1) NOT NULL default '0',
  `foto` text NOT NULL,
  `view` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `x`
--

DROP TABLE IF EXISTS `x`;
CREATE TABLE IF NOT EXISTS `x` (
  `x1` text NOT NULL,
  `x2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `x`
--

INSERT INTO `x` (`x1`, `x2`) VALUES
('serg', '94747a1470803117683bc8fad40ce2ec');

-- --------------------------------------------------------

--
-- Структура таблицы `xusers`
--

DROP TABLE IF EXISTS `xusers`;
CREATE TABLE IF NOT EXISTS `xusers` (
  `x1` text NOT NULL,
  `x2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `xusers`
--

INSERT INTO `xusers` (`x1`, `x2`) VALUES
('serg', '94747a1470803117683bc8fad40ce2ec'),
('editor', 'e44d46e0bb9691cf448a9bb19391e8ab');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
