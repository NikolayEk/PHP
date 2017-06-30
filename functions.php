<?php

	function connectDB() {
		$db=mysqli_connect('localhost','root','','menu');
		mysqli_query($db, "SET NAMES utf8");
		return $db;
	}
	
	function closeDB($db) {
		mysqli_close($db);
	}
	
	function getdishs($start, $limit) {
		$db=connectDB();
		$result=mysqli_query($db, "SELECT * FROM dishs LIMIT ".$start.", ".$limit);
		closeDB($db);
		return setResultToArray($result);
	}
	
	function setResultToArray($result) {
		$array=array();
		while ($row = mysqli_fetch_assoc($result)) $array[] = $row;
		return $array;
	}
	
	function countdishs() {
		$db = connectDB();
		$result = mysqli_query($db, "SELECT COUNT(id) FROM dishs");
		closeDB($db);
		$result = mysqli_fetch_row($result);
		return $result[0];
	}
	
	function getStart($page, $limit) {
		return $limit * ($page - 1);
	}
	
	function pagination($page, $limit) {
		// общее кол-во строк в БД
		$count_dishs = countdishs();
		// общее количество стр.
		$count_pages = ceil($count_dishs / $limit);
		if ($page > $count_pages) $page = $count_pages;
		$prev = $page - 1;
		$next = $page + 1;
		if ($prev < 1) $prev = 1;
		if ($next > $count_pages) $next = $count_pages;
		$pagination = "";
		if ($count_pages > 1) {
			// pagination
			if ($page == 1) {
				$pagination .= "<span>Первая </span>";
				$pagination .= "<span>Предыдущая </span>";
			}
			else {
				$pagination .= "<a href='menupagination.php'>Первая </a>";
				if ($prev == 1) $pagination .= "<a href='menupagination.php'>Предыдущая </a>";
				else $pagination .= "<a href='menupagination.php?page=".$prev."'>Предыдущая </a>";
			}
			for ($i = 1; $i <= $count_pages; $i++) {
				if ($i == $page) $pagination .= "<span>  ".$i."  </span>";
				elseif ($i == 1) $pagination .= "<a href='menupagination.php'> ".$i." </a>";
				else $pagination .= "<a href='menupagination.php?page=".$i."'> ".$i." </a>";
			}
			if ($page == $count_pages) {
				$pagination .= "<span> Следующая</span>";
				$pagination .= "<span> Последняя</span>";
			}
			else {
				$pagination .= "<a href='menupagination.php?page=".$next."'> Следующая</a>";
				$pagination .= "<a href='menupagination.php?page=".$count_pages."'> Последняя</a>";
			}
		}
		return $pagination;
	}

?>