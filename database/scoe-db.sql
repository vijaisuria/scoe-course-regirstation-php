CREATE DATABASE `scoe` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

CREATE TABLE `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `initial` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `phone_num` varchar(255) NOT NULL,
  `aadhar_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `diff_abled` varchar(255) NOT NULL,
  `blood_grp` varchar(255) NOT NULL,
  `martial_status` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `univ_name` varchar(255) NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `training_centre` varchar(255) NOT NULL,
  `upload_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aadhar_num` (`aadhar_num`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone_num` (`phone_num`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `upload_img` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url_img` varchar(45) NOT NULL,
  `upload_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


