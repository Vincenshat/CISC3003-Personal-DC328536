-- 创建数据库
CREATE DATABASE IF NOT EXISTS mmtuts_db;

-- 使用数据库
USE mmtuts_db;

-- 创建用户表
CREATE TABLE IF NOT EXISTS users (
  idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  uidUsers TINYTEXT NOT NULL,
  emailUsers TINYTEXT NOT NULL,
  pwdUsers LONGTEXT NOT NULL
);

-- 创建密码重置表
CREATE TABLE IF NOT EXISTS pwdReset (
  pwdResetId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  pwdResetEmail TEXT NOT NULL,
  pwdResetSelector TEXT NOT NULL,
  pwdResetToken LONGTEXT NOT NULL,
  pwdResetExpires TEXT NOT NULL
); 