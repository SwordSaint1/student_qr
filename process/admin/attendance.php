<?php 
include '../conn.php';

$method = $_POST['method'];

if($method == 'fetch_attendance'){
	$subject = $_POST['subject'];
	$c = 0;
	$query = "SELECT attendance.id,attendance.student_id,student_info.fname,subjects.subject,attendance.attendance FROM attendance LEFT JOIN student_info ON student_info.student_id = attendance.student_id LEFT JOIN subjects ON subjects.subj_code = attendance.subj_code WHERE subjects.subject LIKE '$subject%' GROUP BY subjects.subject ";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#verify_attendance" onclick="get_update_attended(&quot;'.$j['id'].'~!~'.$j['student_id'].'~!~'.$j['fname'].'~!~'.$j['subject'].'~!~'.$j['attendance'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['student_id'].'</td>';
				echo '<td>'.$j['fname'].'</td>';
				echo '<td>'.$j['subject'].'</td>';
				echo '<td>'.$j['attendance'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="5" style="color:red;">No Result</td>';
			echo '</tr>';
	}
}

if ($method == 'verify_attendance_data') {
	$id = $_POST['id'];
	$student_id = $_POST['student_id'];
	$fname = $_POST['fname'];
	$subject = $_POST['subject'];
	$attendance = $_POST['attendance'];


	$update ="UPDATE attendance SET attendance = '$attendance' WHERE id = '$id'";
	$stmt = $conn->prepare($update);
	if($stmt->execute()){
		echo 'success';
	}else{
		echo 'error';
	}
}


$conn = NULL;
?>