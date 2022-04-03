CREATE TABLE `webdb_book`.`book_members` (
    `no`       INT NOT NULL AUTO_INCREMENT , 
    `userid`   VARCHAR(16) NOT NULL , 
    `password` CHAR(32)    NOT NULL , 
    `username` VARCHAR(20) NOT NULL , 
    `email`    VARCHAR(30) NOT NULL , 
    `phone`    VARCHAR(16) NOT NULL , 
    PRIMARY    KEY (`no`)
) CHARACTER SET utf8mb4;












CREATE DATABASE `database`;












INSERT INTO `book_members`
(`userid`, `password`, `username`, `email`, `phone`)
VALUES
('hong', md5('hong'), '홍길동', 'hong@test.com', '+821012345678');












INSERT INTO `book_members`
(`userid`, `password`, `username`, `email`, `phone`)
VALUES
('lee', md5('hong'), '이순신', 'lee@test.com', '+821056781234'),
('kim', md5('hong'), '김유신', 'kim@test.com', '+821087654321');












INSERT INTO `book_members`
(`userid`, `email`, `phone`, `password`, `username`)
VALUES
('yoon', 'yoon@test.com', '+821011112222', md5('yoon'), '윤봉길');












INSERT INTO `book_members`
VALUES
(null, 'ryu', md5('ryu'), '류관순', 'ryu@test.com', '+821022221111');












INSERT INTO `book_members`
VALUES
(null, 'honggd', md5('honggd'), '홍길동', 'honggd@test.com', '+821012348765'),
(null, 'hongdk', md5('hongdk'), '홍두깨', 'hongdk@test.com', '+821043215678');












SELECT * FROM `book_members`;












SELECT `no`, `userid`, `username`, `phone`, `username` 
FROM `book_members`;












SELECT `no`, `userid`, `username`, `phone`, `username` 
FROM `book_members`
WHERE `no` = 3;












SELECT `no`, `userid`, `username`, `phone`, `username` 
FROM `book_members`
WHERE `no` > 3;












SELECT `no`, `userid`, `username`, `phone`, `username` 
FROM `book_members`
WHERE `no` > 3 AND `username` = '홍길동';












SELECT `no`, `userid`, `username`, `phone`, `username` 
FROM `book_members`
WHERE `username` LIKE '홍%';












SELECT `no`, `userid`, `username`, `phone` 
FROM `book_members` 
ORDER BY `username`;












SELECT `no`, `userid`, `username`, `phone` 
FROM `book_members` 
ORDER BY `username` DESC;












SELECT `no`, `userid`, `username`, `phone` 
FROM `book_members` 
WHERE `username` LIKE '홍%'
ORDER BY `username`, `no` DESC;












UPDATE `book_members` 
SET `phone` = '+821024681357' 
WHERE `no` = 7;












UPDATE `book_members` 
SET `phone` = '+821012123434' 
WHERE `username` = '홍길동';












UPDATE `book_members` 
SET `phone` = '+821099999999',  `email` = 'hong@test.co.kr'
WHERE `username` = '홍길동';












DELETE FROM `book_members`
WHERE `username` LIKE '홍%';












DELETE FROM `book_members`












DROP TABLE `book_members`










