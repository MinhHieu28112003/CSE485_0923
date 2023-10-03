create database QuanLyBaiHat;
drop database QuanLyBaiHat;

create table Theloai (
	id int not null primary key,
	tenTheLoai varchar(255),
);

create table BaiHat (
	id int not null primary key,
	tenBaiHat varchar(255),
	caSi varchar(255),
	idTheLoai int not null,
	foreign key (idTheLoai) references TheLoai(id),
);

drop table BaiHat;
drop table Theloai;