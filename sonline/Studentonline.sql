/*==============================================================*/
/* DBMS name:      Microsoft SQL Server 2005                    */
/* Created on:     2015-12-15 19:01:54                          */
/*==============================================================*/


if exists (select 1
            from  sysobjects
           where  id = object_id('admini')
            and   type = 'U')
   drop table admini
go

if exists (select 1
            from  sysobjects
           where  id = object_id('class')
            and   type = 'U')
   drop table class
go

if exists (select 1
            from  sysobjects
           where  id = object_id('college')
            and   type = 'U')
   drop table college
go

if exists (select 1
            from  sysobjects
           where  id = object_id('course')
            and   type = 'U')
   drop table course
go

if exists (select 1
            from  sysobjects
           where  id = object_id('elect')
            and   type = 'U')
   drop table elect
go

if exists (select 1
            from  sysobjects
           where  id = object_id('major')
            and   type = 'U')
   drop table major
go

if exists (select 1
            from  sysobjects
           where  id = object_id('student')
            and   type = 'U')
   drop table student
go

if exists (select 1
            from  sysobjects
           where  id = object_id('teachcl')
            and   type = 'U')
   drop table teachcl
go

if exists (select 1
            from  sysobjects
           where  id = object_id('teacher')
            and   type = 'U')
   drop table teacher
go

/*==============================================================*/
/* Table: admini                                                */
/*==============================================================*/
create table admini (
   ano                  varchar(20)          not null,
   cono                 varchar(20)          null,
   constraint PK_ADMINI primary key nonclustered (ano)
)
go

/*==============================================================*/
/* Table: class                                                 */
/*==============================================================*/
create table class (
   clno                 varchar(20)          not null,
   mno                  varchar(20)          null,
   constraint PK_CLASS primary key nonclustered (clno)
)
go

/*==============================================================*/
/* Table: college                                               */
/*==============================================================*/
create table college (
   cono                 varchar(20)          not null,
   coname               varchar(20)          null,
   constraint PK_COLLEGE primary key nonclustered (cono)
)
go

/*==============================================================*/
/* Table: course                                                */
/*==============================================================*/
create table course (
   cno                  varchar(20)          not null,
   cname                varchar(20)          null,
   constraint PK_COURSE primary key nonclustered (cno)
)
go

/*==============================================================*/
/* Table: elect                                                 */
/*==============================================================*/
create table elect (
   cno                  varchar(20)          not null,
   sno                  varchar(20)          not null,
   garde                int                  null,
   semester             varchar(20)          null,
   constraint PK_ELECT primary key nonclustered (cno, sno)
)
go

/*==============================================================*/
/* Table: major                                                 */
/*==============================================================*/
create table major (
   mno                  varchar(20)          not null,
   cono                 varchar(20)          null,
   mname                varchar(20)          null,
   constraint PK_MAJOR primary key nonclustered (mno)
)
go

/*==============================================================*/
/* Table: student                                               */
/*==============================================================*/
create table student (
   sno                  varchar(20)          not null,
   clno                 varchar(20)          null,
   sname                varchar(20)          null,
   constraint PK_STUDENT primary key nonclustered (sno)
)
go

/*==============================================================*/
/* Table: teachcl                                               */
/*==============================================================*/
create table teachcl (
   tno                  varchar(20)          not null,
   clno                 varchar(20)          not null,
   constraint PK_TEACHCL primary key nonclustered (tno, clno)
)
go

/*==============================================================*/
/* Table: teacher                                               */
/*==============================================================*/
create table teacher (
   tno                  varchar(20)          not null,
   cno                  varchar(20)          null,
   mno                  varchar(20)          null,
   cono                 varchar(20)          null,
   tname                varchar(20)          null,
   constraint PK_TEACHER primary key nonclustered (tno)
)
go

