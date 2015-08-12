-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2015-08-12 03:06:04.365




-- tables
-- Table thanhvien

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `ID_thanhvien` int(11) NOT NULL,
  `Ten` varchar(30) DEFAULT NULL,
  `Hodem` varchar(50) DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Gioitinh` varchar(1) DEFAULT NULL,
  `Diachi` varchar(100) DEFAULT NULL,
  `Anhdaidien` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`ID_thanhvien`, `Ten`, `Hodem`, `Ngaysinh`, `Gioitinh`, `Diachi`, `Anhdaidien`) VALUES
(1, 'ChÃ¢u', 'LÃª Nguyá»…n HoÃ ng', '1994-03-16', '2', 'LÃ o Cai', 'anh-girl-xinh-xinh (3).jpg'),
(2, 'HiÃªn', 'Nguyá»…n VÄƒn', '1992-11-06', '1', 'Háº£i DÆ°Æ¡ng', 'nguyenvanhien.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`ID_thanhvien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thanhvien`
--

