CREATE TABLE IF NOT EXISTS `bank`(
    `name` varchar(40) NOT NULL,
    `email` varchar(45) NOT NULL,
    `credit` int(20) NOT NULL

);
INSERT INTO `bank`(`Name`,`email`, `credit`) VALUES
('Arpan Sadhu','arp.an7214@gmail.com','500000'),
('Rolwyn Raju','rolz@gmail.com','350000'),
('Tijo Thomas','thomastijo@gmail.com','85000'),
('Astle Pinto','astle.pinto25@gmail.com','192000'),
('Gladden Rumao','rumao20@gmail.com','225000'),
('Divyanshu Slathia','div.12@gmail.com','145000'),
('Elon Musk','xae12@gmail.com','184000'),
('Mrin Shetty','mrins32@gmail.com','58000'),
('Adil Anand','adil672@gmail.com','94000'),
('Parth Shah','shah.p75@gmail.com','69000');


CREATE TABLE IF NOT EXISTS `transfers`(
    `from_user` varchar(40) NOT NULL,
    `to_user` varchar(40) NOT NULL,
    `Credit` varchar(40) NOT NULL
);