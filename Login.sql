CREATE TABLE IF NOT EXISTS `Login` (
  `Username` varchar(225) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (Username)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Login` (`Username`, `Password`) VALUES
('avanti@gmail.com','abcd123'),
('xyz@gmail.com', 'abcd1234'),
('abc@gmail.com', 'xyz098');