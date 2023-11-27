-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2023 lúc 05:42 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dat_san`
--

CREATE TABLE `chi_tiet_dat_san` (
  `id_ctdatsan` int(10) NOT NULL,
  `id_bien_the` int(10) NOT NULL,
  `id_ca` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `id_dat_san` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_bien_the`
--

CREATE TABLE `tb_bien_the` (
  `id_bien_the` int(10) NOT NULL,
  `ten_bien_the` varchar(255) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `gia` int(10) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binh_luan`
--

CREATE TABLE `tb_binh_luan` (
  `id_binh_luan` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `id_san` int(10) NOT NULL,
  `ngay_binh_luan` datetime NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_ca_san`
--

CREATE TABLE `tb_ca_san` (
  `id_ca` int(10) NOT NULL,
  `ten_ca` varchar(255) NOT NULL,
  `thoi_gian_bd` datetime NOT NULL,
  `thoi_gian_kt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id_chuc_vu` int(10) NOT NULL,
  `ten_chuc_vu` varchar(255) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danh_muc`
--

CREATE TABLE `tb_danh_muc` (
  `id_danh_muc` int(10) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_dat_san`
--

CREATE TABLE `tb_dat_san` (
  `id_dat_san` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `id_san` int(10) NOT NULL,
  `id_khuyen_mai` int(10) NOT NULL,
  `id_luu_tru_ca` int(10) NOT NULL,
  `ngay_sudung` datetime NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `id_danh_muc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_khachhang`
--

CREATE TABLE `tb_khachhang` (
  `id_khachhang` int(10) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_khuyen_mai`
--

CREATE TABLE `tb_khuyen_mai` (
  `id_khuyen_mai` int(10) NOT NULL,
  `id_san` int(10) NOT NULL,
  `ma_khuyen_mai` int(10) NOT NULL,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime NOT NULL,
  `gia_giam` int(10) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lien_he`
--

CREATE TABLE `tb_lien_he` (
  `id_lien_he` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL,
  `noidung` text NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_ql_hethong`
--

CREATE TABLE `tb_ql_hethong` (
  `id` int(11) NOT NULL,
  `ten_img` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_san`
--

CREATE TABLE `tb_san` (
  `id_san` int(10) NOT NULL,
  `id_bien_the` int(10) NOT NULL,
  `id_danh_muc` int(10) NOT NULL,
  `ten_san` varchar(255) NOT NULL,
  `img_san` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_tai_khoan`
--

CREATE TABLE `tb_tai_khoan` (
  `id_tai_khoan` int(10) DEFAULT NULL,
  `id_chuc_vu` int(10) NOT NULL,
  `id_khachhang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_tin_tuc`
--

CREATE TABLE `tb_tin_tuc` (
  `id_tin_tuc` int(10) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `img_tin_tuc` varchar(255) NOT NULL,
  `ngay_dang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_dat_san`
--
ALTER TABLE `chi_tiet_dat_san`
  ADD PRIMARY KEY (`id_ctdatsan`);

--
-- Chỉ mục cho bảng `tb_bien_the`
--
ALTER TABLE `tb_bien_the`
  ADD PRIMARY KEY (`id_bien_the`);

--
-- Chỉ mục cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `tb_ca_san`
--
ALTER TABLE `tb_ca_san`
  ADD PRIMARY KEY (`id_ca`);

--
-- Chỉ mục cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id_chuc_vu`);

--
-- Chỉ mục cho bảng `tb_danh_muc`
--
ALTER TABLE `tb_danh_muc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tb_dat_san`
--
ALTER TABLE `tb_dat_san`
  ADD PRIMARY KEY (`id_dat_san`);

--
-- Chỉ mục cho bảng `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`);

--
-- Chỉ mục cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Chỉ mục cho bảng `tb_ql_hethong`
--
ALTER TABLE `tb_ql_hethong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_san`
--
ALTER TABLE `tb_san`
  ADD PRIMARY KEY (`id_san`);

--
-- Chỉ mục cho bảng `tb_tin_tuc`
--
ALTER TABLE `tb_tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_dat_san`
--
ALTER TABLE `chi_tiet_dat_san`
  MODIFY `id_ctdatsan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_bien_the`
--
ALTER TABLE `tb_bien_the`
  MODIFY `id_bien_the` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id_binh_luan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_ca_san`
--
ALTER TABLE `tb_ca_san`
  MODIFY `id_ca` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  MODIFY `id_chuc_vu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_danh_muc`
--
ALTER TABLE `tb_danh_muc`
  MODIFY `id_danh_muc` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_dat_san`
--
ALTER TABLE `tb_dat_san`
  MODIFY `id_dat_san` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  MODIFY `id_khachhang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_khuyen_mai`
--
ALTER TABLE `tb_khuyen_mai`
  MODIFY `id_khuyen_mai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  MODIFY `id_lien_he` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_ql_hethong`
--
ALTER TABLE `tb_ql_hethong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_san`
--
ALTER TABLE `tb_san`
  MODIFY `id_san` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_tin_tuc`
--
ALTER TABLE `tb_tin_tuc`
  MODIFY `id_tin_tuc` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
