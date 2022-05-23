<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'attended') {
	
	$student_id = $_POST['student_id'];
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$c = 0;

	$query = "SELECT attendance.id,attendance.subj_code,attendance.student_id,attendance.attendance,attendance.date_attended,attendance.file_name,subjects.subject FROM attendance LEFT JOIN subjects ON subjects.subj_code = attendance.subj_code WHERE attendance.student_id = '$student_id' AND (date_attended >='$datefrom' AND date_attended <= '$dateto') ";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#attended_modal" onclick="get_attended(&quot;'.$j['id'].'~!~'.$j['student_id'].'~!~'.$j['subj_code'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['subject'].'</td>';
				echo '<td>'.$j['attendance'].'</td>';
				echo '<td>'.$j['date_attended'].'</td>';
				echo '<td>'.$j['file_name'].'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="5" style="color:red">No Result</td>';
		echo '</tr>';
	}
}

$conn = NULL;
?>