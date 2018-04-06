
//database
create database 'PollServer07';


//Poll table 1
CREATE TABLE `PollStructure` (
`Pollid` BIGINT NOT NULL AUTO_INCREMENT ,
`PollQuestion` VARCHAR( 100 ) NOT NULL ,
`Option1` VARCHAR( 40 ) ,
`Option2` VARCHAR( 40 ) ,
`Option3` VARCHAR( 40 ) ,
`Option4` VARCHAR( 40 ) ,
`HitOption1` BIGINT DEFAULT '0' NOT NULL ,
`HitOption2` BIGINT DEFAULT '0' NOT NULL ,
`HitOption3` BIGINT DEFAULT '0' NOT NULL ,
`HitOption4` BIGINT DEFAULT '0' NOT NULL ,
`Publisheddate` DATE NOT NULL ,
`Permission` VARCHAR( 8 ) NOT NULL ,
PRIMARY KEY ( `Pollid` ) 
);





**********************************************************************
//Poll Table0              ?????????   Cancelled Table???????
CREATE TABLE `PollAdmin` (
`Pollid` BIGINT NOT NULL ,
`Permission` VARCHAR( 8 ) NULL DEFAULT 'NGranted',
UNIQUE (
`Pollid`
)
) ENGINE = MYISAM ;