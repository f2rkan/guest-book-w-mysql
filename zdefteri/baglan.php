﻿<?php



		try{


			$vt = new PDO("mysql:host=127.0.0.1;dbname=zdefteri;charset=utf8;", "root" , "");


		}catch(PDOException $e) {

				print $e->getMessage();

		}




?>