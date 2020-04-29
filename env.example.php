<?php
// 开发模式
const APP_ENV = 'production';
//数据库信息
const KX_DB_HOST = '127.0.0.1';
const KX_DB_USER = 'root';
const KX_DB_PWD  = 'root';
const KX_DB_PORT = '3306';
const KX_DB_NAME = 'novel';

//内容缓存
const KX_CACHE_COMMON_DRIVER   = 'memcached';
const KX_CACHE_COMMON_PREFIX   = 'kx_';
const KX_CACHE_COMMON_HOST     = '127.0.0.1';
const KX_CACHE_COMMON_PORT     = '11211';
const KX_CACHE_COMMON_PASSWORD = '';

//章节缓存
const KX_CACHE_CHAPTER_DRIVER   = 'memcached';
const KX_CACHE_CHAPTER_PREFIX   = 'kx_';
const KX_CACHE_CHAPTER_HOST     = '127.0.0.1';
const KX_CACHE_CHAPTER_PORT     = '11211';
const KX_CACHE_CHAPTER_PASSWORD = '';

const API_BASE_URL = 'http://api.ptcms.com';

const PHPPATH = '/usr/bin/php';