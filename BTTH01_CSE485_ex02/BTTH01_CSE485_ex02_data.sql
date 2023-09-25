create database BTTH01_CSE485
use BTTH01_CSE485
go
drop database BTTH01_CSE485

create table tacgia(
	ma_tgia INT NOT NULL PRIMARY KEY,
	ten_tgia VARCHAR(100) NOT NULL,
	hinh_tgia VARCHAR(100)
);

create table theloai(
	ma_tloai INT NOT NULL PRIMARY KEY,
	ten_tloai VARCHAR(50) NOT NULL
);

create table baiviet(
	ma_bviet INT NOT NULL PRIMARY KEY,
	tieude VARCHAR(200) NOT NULL,
	ten_bhat VARCHAR(100) NOT NULL,
	ma_tloai INT NOT NULL,
	tomtat TEXT NOT NULL,
	noidung TEXT,
	ma_tgia INT NOT NULL,
	ngayviet DATETIME,
	hinhanh VARCHAR(200),
	FOREIGN KEY (ma_tloai) REFERENCES baiviet(ma_bviet),
	FOREIGN KEY (ma_tgia) REFERENCES baiviet(ma_bviet),
);

DROP TABLE tacgia
DROP TABLE theloai
DROP TABLE baiviet

INSERT INTO tacgia VALUES
('01',N'Nguyễn Bá A','63CNTT1'),
('02',N'Nguyễn Bá B','63HTTT1'),
('03',N'Nguyễn Bá C','63KTPM1'),
('04',N'Nguyễn Bá D','63CNTT2'),
('05',N'Nguyễn Bá E','63HTTT2'),
('06',N'Nguyễn Bá G','63KTPM2');
SELECT * FROM tacgia

INSERT INTO theloai VALUES
('10',N'Xác xuất thống kê'),
('20',N'Phân tích và thiết kế HTTT'),
('30',N'Nền tảng web'),
('40',N'Tiếng Anh chuyên ngành'),
('50',N'Mạng máy tính'),
('60',N'Lập trình window');
select * from theloai


INSERT INTO baiviet VALUES
('100',N'Xac xuat',N'Thong ke','10',N'Tom tat 1',N'Noi dung 1','01',01-01-2023,1),
('200',N'Phan tich',N'Thiet ke','20',N'Tom tat 2',N'Noi dung 2','02',02-01-2023,2),
('300',N'Nen tang',N'Web','30',N'Tom tat 3',N'Noi dung 3','03',03-01-2023,3),
('400',N'Tieng anh',N'Chuyen nganh','40',N'Tom tat 4',N'Noi dung 4','04',04-01-2023,4),
('500',N'Mang',N'May tinh','50',N'Tom tat 5',N'Noi dung 5','05',05-01-2023,5),
('600',N'Lap trinh',N'Window','60',N'Tom tat 6',N'Noi dung 6','06',06-01-2023,6);
select * from baiviet
