DROP TABLE IF EXISTS employee;
CREATE TABLE EMPLOYEE(
	USERID INTEGER PRIMARY KEY,
	PASSWORD VARCHAR(8) NOT NULL,
	ROLE CHAR(1) DEFAULT '0'
);

INSERT INTO employee(userid, password, role) values ('100', '100', '0');  -- role=0: developer; 1: Administrator
INSERT INTO employee(userid, password, role) values ('110', '110', '0');  
INSERT INTO employee(userid, password, role) values ('120', '120', '0');  
INSERT INTO employee(userid, password, role) values ('130', '130', '0');  
INSERT INTO employee(userid, password, role) values ('140', '140', '0');  
INSERT INTO employee(userid, password, role) values ('150', '150', '0');  
INSERT INTO employee(userid, password, role) values ('160', '160', '0'); 
INSERT INTO employee(userid, password, role) values ('170', '170', '0');  
INSERT INTO employee(userid, password, role) values ('180', '180', '0');  
INSERT INTO employee(userid, password, role) values ('190', '190', '0');  
INSERT INTO employee(userid, password, role) values ('200', '200', '1');  -- Administrator with role set to '1'

DROP TABLE IF EXISTS employeetime;
CREATE TABLE EMPLOYEETIME (
	ID INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
	USERID INTEGER NOT NULL,
	STATUS CHAR(1) NOT NULL, -- 1: CLOCKED IN ; 2 CLOCKED OUT;
	CLOCKTIMEIN TIMESTAMP DEFAULT NOW() NOT NULL,
	CLOCKTIMEOUT TIMESTAMP
	
);
DROP FUNCTION IF EXISTS ClockTime;
DELIMITER $$
CREATE FUNCTION ClockTime(v_userid INT) RETURNS CHAR(1)
BEGIN
	DECLARE var_status CHAR(1) ;
	DECLARE var_maxID INT;
	select max(id) into var_maxID from employeetime where userid=v_userid group by userid;
	select status into var_status from employeetime where userid=v_userid and id=var_maxID;
	
	IF (var_status is NULL || var_status = '2') THEN -- need do clock in
		INSERT into employeetime (userid, status) values (v_userid, '1') ;
		RETURN '1';
	ELSE -- need do clock out
		UPDATE  employeetime SET clocktimeout=NOW(), status='2'  WHERE id=var_maxID; 
		RETURN '2';
	END IF;	
	
END $$
DELIMITER ;

DROP FUNCTION IF EXISTS Login;
DELIMITER $$
CREATE FUNCTION Login(v_userid INT, v_password VARCHAR(8)) RETURNS CHAR(1)
BEGIN
	DECLARE var_userid INT;
	SELECT userid INTO var_userid FROM employee WHERE userid=v_userid AND password=v_password;
	
	IF (var_userid IS nuLl) THEN 
		RETURN '0';
	ELSE
		RETURN '1';
	END IF;
END $$
DELIMITER ;


DROP FUNCTION IF EXISTS GetRole;
DELIMITER $$
CREATE FUNCTION GetRole(v_userid INT) RETURNS CHAR(1)
BEGIN
	DECLARE var_role CHAR(1);
	SELECT ROLE INTO var_role FROM employee where userid=v_userid;
	IF (var_role IS NOT nuLl) THEN 
		RETURN var_role;
	ELSE
		RETURN '0'; -- this user doesn't exit
	END IF;
END $$
DELIMITER ;




DROP FUNCTION IF EXISTS GetStatus;
DELIMITER $$
CREATE FUNCTION GetStatus(v_userid INT) RETURNS CHAR(1)
BEGIN
	DECLARE var_status CHAR(1);
	SELECT status INTO var_status FROM employeetime where userid=v_userid order by id desc limit 1;
	IF (var_status IS NOT nuLl) THEN 
		RETURN var_status;
	ELSE
		RETURN '0'; -- this user has not clocked yet
	END IF;
END $$
DELIMITER ;


DROP FUNCTION IF EXISTS GetTotalAmount;
DELIMITER $$
CREATE FUNCTION GetTotalAmount(v_userid INT, v_day INT) RETURNS FLOAT(6,2)
BEGIN
	DECLARE var_total FLOAT(6,2);
	
	IF (v_day = 0) THEN 	
	SELECT sum(hour(TIMEDIFF(clocktimeout, clocktimein))*3600+minute(TIMEDIFF(clocktimeout, clocktimein))*60+second(TIMEDIFF(clocktimeout, clocktimein)))/3600
	 INTO var_total FROM employeetime WHERE userid = v_userid and status='2' ;
	ELSE
		SELECT sum(hour(TIMEDIFF(clocktimeout, clocktimein))*3600+minute(TIMEDIFF(clocktimeout, clocktimein))*60+second(TIMEDIFF(clocktimeout, clocktimein)))/3600
	 INTO var_total FROM employeetime WHERE userid = v_userid and status='2' AND clocktimein> NOW() - INTERVAL v_day DAY ;
	END IF;

	IF (var_total IS NOT nuLl) THEN 
		RETURN var_total;
	ELSE
		RETURN 0; -- this user has not clocked yet
	END IF;
END $$
DELIMITER ;





