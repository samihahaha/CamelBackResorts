GRANT SELECT, INSERT, DELETE, UPDATE
ON camelbackresortsdb.*
TO camelbackresorts@localhost
IDENTIFIED BY 'abc'
DROP TABLE IF EXISTS rooms;
CREATE table rooms (
                       roomsId int NOT NULL AUTO_INCREMENT,
                       PRIMARY KEY (roomsId),
                       type ENUM ('Standard', 'Queen', 'Double Queen',
                           'King', 'Penthouse'),
                       price decimal(5,2)
);
DROP TABLE IF EXISTS reservations;
CREATE table reservations(
                             reservationId varchar(200) NOT NULL,
                             PRIMARY KEY (reservationId),
                             roomsId int NOT NULL,
                             FOREIGN KEY (roomsId) REFERENCES rooms(roomsId),
                             first_name varchar (200) NOT NULL,
                             last_name varchar (200) NOT NULL,
                             email varchar (200) NOT NULL,
                             total int NOT NULL,
                             number_of_rooms int NOT NULL,
                             number_of_adults int NOT NULL,
                             number_of_children int,
                             country varchar(200) NOT NULL,
                             addressLOne varchar(200) NOT NULL,
                             addressLTwo varchar(200),
                             city varchar(200) NOT NULL,
                             state varchar(200) NOT NULL,
                             zipCode int NOT NULL,
                             checkIn date NOT NULL,
                             checkOut date NOT NULL,
                             status varchar(200) NOT NULL
);
INSERT INTO rooms VALUES (101, 'Standard', 150.00);
INSERT INTO rooms VALUES (201, 'Queen', 180.00);
INSERT INTO rooms VALUES (301, 'King', 210.00);
INSERT INTO rooms VALUES (401, 'Double Queen',
                          230.00);
INSERT INTO rooms VALUES (501, 'Penthouse',
                          350.00);
INSERT INTO rooms VALUES (601, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (102, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (202, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (302, 'Queen', 180.00);
INSERT INTO rooms (roomsId, type, price) values
    (402, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (502, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (602, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (103, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (203, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (303, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (403, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (503, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (603, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (104, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (204, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (304, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (404, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (504, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (604, 'Queen', 180.00);
INSERT INTO rooms (roomsId, type, price) values
    (105, 'Queen', 180.00);
INSERT INTO rooms (roomsId, type, price) values
    (206, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (306, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (406, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (506, 'Queen', 180.00);
INSERT INTO rooms (roomsId, type, price) values
    (606, 'Queen', 180.00);
INSERT INTO rooms (roomsId, type, price) values
    (107, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (207, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (307, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (407, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (507, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (607, 'Queen', 180.00);
INSERT INTO rooms (roomsId, type, price) values
    (108, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (208, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (308, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (408, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (508, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (608, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (109, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (209, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (309, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (409, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (509, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (609, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (111, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (112, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (113, 'Queen', 180.00);
INSERT INTO rooms (roomsId, type, price) values
    (114, 'King', 210.00);
INSERT INTO rooms (roomsId, type, price) values
    (115, 'Standard', 150.00);
INSERT INTO rooms (roomsId, type, price) values
    (116, 'Penthouse', 350.00);
INSERT INTO rooms (roomsId, type, price) values
    (117, 'Double Queen', 230.00);
INSERT INTO rooms (roomsId, type, price) values
    (118, 'Queen', 180.00);
INSERT INTO `reservations` (`reservationId`,
                            `roomsId`, `first_name`, `last_name`, `email`,
                            `total`, `number_of_rooms`, `number_of_adults`,
                            `number_of_children`, `country`, `addressLOne`,
                            `addressLTwo`, `city`, `state`, `zipCode`,
                            `checkIn`, `checkOut`, `status`) VALUES
    ('abcdefgh', 101, 'joe', 'z', 'x@x.com', 150, 1, 2,
     2, 'country', 'a1', 'a2', 'city', 'state', 11366,
     '2021-04-01', '2021-04-09', 'pending');