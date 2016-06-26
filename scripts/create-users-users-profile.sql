USE campustry;

DROP TABLE UsersProfile;

DROP TABLE Users;

CREATE TABLE Users
(
	UserID int NOT NULL AUTO_INCREMENT,
	FirstName varchar(20) NOT NULL,
	LastName varchar(20),
	EMail varchar(255),
	PWD varchar(255),
	PRIMARY KEY (UserID)
);

CREATE TABLE UsersProfile
(
	UserID int NOT NULL,
	Dept varchar(100),
	GradLevel varchar(100),
	Image varchar(100),
	Contact varchar(100),
	Course varchar(100),
	Skill varchar(100),
	Project varchar(100),
	Research varchar(100),
	Hobby varchar(100),
	FacebookUrl varchar(100),
	LinkedinUrl varchar(100),
	TwitterUrl varchar(100),
	Active boolean not null default 1,
	FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Sean','Cooke','scooke3@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(1,'Computer Science','Graduate','images/default.png','111-222-3333','CSC400, CSC410','Web Designing','Campustry','None','Driving','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Kailash','Joshi','kjoshi3@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(2,'Computer Science','Graduate','images/default.png','111-333-4444','CSC454, CSC453, CSC410','Programming','Campustry','None','Guitar','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Shawn','Paul','spaul5@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(3,'Bio-medical','Undergraduate','images/default.png','555-222-3333','BME234, BME567','None','Bio-cell','Cell','Badminton','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Bilie','Jean','bjean5@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(4,'Optics','PhD','images/default.png','444-222-3333','OPT454, OPT453, OPT410','None','Photo-detector','Photoconductors','Cooking','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Shaun','Tait','stait3@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(5,'Chemistry','Graduate','images/default.png','666-222-3333','CHM454, CHM453, CHM410','None','Quantum Simulation','None','Travelling','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Mani','Shankar','mshankar@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(6,'Chemical','Undergradutate','images/default.png','888-222-3333','CME454, CME453, CME410','None','None','None','Singing','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Peter','Branson','pbranson3@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(7,'Astronomy','PhD','images/default.png','111-555-3333','AST454, AST453, AST410','None','None','Black Hole','Soccer','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Chin','Chan','cchan5@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(8,'Physics','Graduate','images/default.png','111-222-8888','PHY454, PHY453, PHY410','None','Projectile','None','Reading','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Hui','Hao','hhao67@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(9,'English','PhD','images/default.png','198-222-3333','ENG454, ENG453, ENG410','None','None','Accent','Painting','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Susan','Mathew','smathew@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(10,'Electrical','Graduate','images/default.png','654-222-3333','ECE454, ECE453, ECE410','None','Wireless Charging','None','Tennis','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Richard','Baily','rbaily6@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(11,'Mathematics','Graduate','images/default.png','543-222-3333','MTH454, MTH453, MTH410','None','Theorem Solver','Prime numbers','Sudoku','http://facebook.com','http://linkedin.com','http://twitter.com');

INSERT INTO Users(FirstName,LastName,EMail,PWD)VALUES('Dwayne','Smith','dsmith3@ur.rochester.edu','my_password');
INSERT INTO UsersProfile(UserID,Dept,GradLevel,Image,Contact,Course,Skill,Project,Research,Hobby,FacebookUrl,LinkedinUrl,TwitterUrl)
VALUES(12,'Music','Graduate','images/default.png','786-222-3333','MUR454, MUR453, MUR410','None','None','None','Guitar, Piano','http://facebook.com','http://linkedin.com','http://twitter.com');
