create database  if not exists  hospital_management;
use hospital_management;

CREATE TABLE if not exists `Speciality` (
                                            `id` int(10) primary key auto_increment,
                                            `name` varchar(255) NOT NULL
);


CREATE TABLE if not exists  `Doctor` (
                                         `id` int(10) primary key auto_increment,
                                         `first_name` varchar(255),
                                         `last_name` varchar(255),
                                         `email` varchar(255) UNIQUE,
                                         `password` varchar(255),
                                         `role` varchar(255),
                                         `speciality` int(10) DEFAULT NULL,
                                         CONSTRAINT FK_DoctorSpeciality FOREIGN KEY (`speciality`) REFERENCES Speciality(`id`)
);


CREATE TABLE if not exists  `Patient` (
                                          `id` int(10) primary key auto_increment,
                                          `first_name` varchar(255),
                                          `last_name` varchar(255),
                                          `email` varchar(255) UNIQUE,
                                          `password` varchar(255),
                                          `role` varchar(255),
                                          `date_of_birth` date
);


CREATE TABLE if not exists  `Session` (
                                          `id` int(10) primary key auto_increment,
                                          `title` varchar(255) DEFAULT NULL,
                                          `date_start` date DEFAULT NULL,
                                          `max_patient` int(20) DEFAULT NULL,
                                          `id_doctor` int(10) DEFAULT NULL,
                                          CONSTRAINT FK_SessionDoctor FOREIGN KEY (`id_doctor`) REFERENCES Doctor(`id`)
);

CREATE TABLE if not exists  `Appointment` (
                                              `id` int (10) primary key auto_increment,
                                              `order` int(20),
                                              `date` date,
                                              `booking_date` date,
                                              `id_patient` int(10),
                                              `id_session` int(10),
                                              CONSTRAINT FK_AppointmentPatient FOREIGN KEY (`id_patient`) REFERENCES `Patient` (`id`),
                                              CONSTRAINT FK_AppointmentSession FOREIGN KEY (`id_session`) REFERENCES `Session` (`id`)
);


create table  if not exists Admin(
                                     `id` int(10) primary key auto_increment,
                                     `first_name` varchar(255),
                                     `last_name` varchar(255),
                                     `email` varchar(255) UNIQUE,
                                     `password` varchar(255),
                                     `role` varchar(255)
);
