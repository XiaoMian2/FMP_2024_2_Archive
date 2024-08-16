drop database if exists `zhangsan`;
create database `zhangsan` charset=utf8;

use `zhangsan`;

drop table if exists `zhangsan_accounts`;
create table `zhangsan_accounts`
(
  `userId` int(10) unsigned primary key auto_increment,
  `userEmail` varchar(30) not null,
  `userPassword` char(50) not null
);

drop table if exists `zhangsan_novel`;
create table `zhangsan_novel`
(
  `novelId` int(10) unsigned primary key auto_increment,
  `novelName` varchar(15) not null,
  `novelDescription` text not null,
  `novelImage` varchar(60) not null,
  `authorId` int(10) unsigned not null,
  `createTime` datetime not null,
  `updateTime` datetime not null,
  foreign key (authorId) references zhangsan_accounts(userId)
);

drop table if exists `zhangsan_chapter`;
create table `zhangsan_chapter`
(
  `chapterId` int(10) unsigned primary key auto_increment,
  `chapterName` varchar(15) not null,
  `chapterContent` text not null,
  `novelId` int(10) unsigned not null,
  `createTime` datetime not null,
  `updateTime` datetime not null,
  foreign key (novelId) references zhangsan_novel(novelId)
);


insert into `zhangsan_accounts` values(null, 'zhangsan@qq.com', 'pass'),
                        (null, 'admin@qq.com', 'pass');

