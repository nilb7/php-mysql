CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL
)

INSERT INTO `users`(`emri`,`username`,`email`,`password`,`confirm_password`,`is_admin`) VALUES 
('John','Doe','johndoe@gmail.com','123456','123456','true'), 
('Shpat','Berisha','shpat.berisha@gmail.com','654321','654321','false');


CREATE TABLE `matches` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `match_name` varchar(255) NOT NULL,
    `match_desc` varchar(255) NOT NULL,
    `match_seat` varchar(255) NOT NULL,
    `match_photo` varchar(255) NOT NULL
    );


INSERT INTO `matches`(`match_name`,`match_desc`,`match_seat`,`match_photo`) VALUES 
('Paris Saint Germain - Inter','31 May 2025 , Allianz Arena','Section 239, Row 12, Seat 18','match1.png')
('Tottenham Hotspur - Manchester United','21 May 2025 , San Mames','Section 203, Row 2, Seat 5','match2.png')