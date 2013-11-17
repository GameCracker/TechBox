<?php

class Database {
	public static function select($db, $id){
		$query = "select * from Interests where username = \"$id\"";
		$result = $db->query($query);
		$num_result = $result->num_rows;
		if($num_result == 0) {
			print "No preference in database for " . $id . "<br/>";
		}
		else {
			for($i=0; $i<$num_result; $i++) {
				$row = $result->fetch_assoc();
				$tag = $row['tag'];
				print "Intersting feeds tag based on view history: " . $tag . "<br/><br/>";
			}
		}
		print "Feeds suggested for ". $id . ": <br/><br/>";
		$query2 = "select * from Urls where tag = \"$tag\"";
		$result2 = $db->query($query2);
		$num_result2 = $result2->num_rows;
		//print " ". $id . ": <br/>";
		if($num_result2 == 0) {
			print "No feeds in database for " . $id;
		}
		else {
			for($i=0; $i<$num_result2; $i++) {
				$row2 = $result2->fetch_assoc();
				$title = $row2['title'];
				$url = $row2['url'];
				echo "<a class='link' href='".$url."' target='_blank'>".$title."</a>";
				//print "title ". $title . "<br/>";
			}
		}
	}
}