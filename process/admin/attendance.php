<?php 
include '../conn.php';

$method = $_POST['method'];

if($method == 'fetch_attendance'){
	$c = 0;
	$query = "SELECT attendance.student_id,student_info.fname,subjects.subject,attendance.attendance FROM attendance LEFT JOIN student_info ON student_info.student_id = attendance.student_id LEFT JOIN subjects ON subjects.subj_code = attendance.subj_code GROUP BY subjects.subject ";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr>';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['student_id'].'</td>';
				echo '<td>'.$j['fname'].'</td>';
				echo '<td>'.$j['subject'].'</td>';
				echo '<td>'.$j['attendance'].'</td>';
			echo '</tr>';
		}
	}
}

$conn = NULL;
?>