-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 24 Φεβ 2017 στις 18:45:28
-- Έκδοση διακομιστή: 10.1.16-MariaDB
-- Έκδοση PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `sygxrona_themata_database`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admins`
--

CREATE TABLE `admins` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `trn_date` date NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `admins`
--

INSERT INTO `admins` (`id`, `name`, `surname`, `username`, `email`, `password`, `gender`, `status`, `trn_date`, `age`) VALUES
(1, 'George', 'Papadopoulos', 'gpap', 'gpap@gmail.com', '4444', 'male', 'professor', '2017-02-23', 45);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `onoma` varchar(50) NOT NULL,
  `epwnymo` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kinhto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `glwsses_program` varchar(50) NOT NULL,
  `platformes` varchar(50) NOT NULL,
  `telikos_vathmos_pt` int(11) NOT NULL,
  `platformes_logismikou` varchar(50) NOT NULL,
  `endiaferonta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `cv`
--

INSERT INTO `cv` (`id`, `onoma`, `epwnymo`, `username`, `kinhto`, `email`, `glwsses_program`, `platformes`, `telikos_vathmos_pt`, `platformes_logismikou`, `endiaferonta`) VALUES
(1, 'xara', 'tsirepa', 'xara', '123456', 'xartsirepa@gmail.com', 'java, ck', 'wordpress', 8, 'visual', 'seminaria');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `trn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `username`, `email`, `password`, `gender`, `trn_date`) VALUES
(1, 'yrw', 'papa', 'irooo', 'urwsfouggari@yahoo.gr', '111', 'female', '2017-02-23'),
(3, 'xara', 'tsirepa', 'xara', 'xartsirepa@gmail.com', '12345', 'female', '2017-02-24');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
