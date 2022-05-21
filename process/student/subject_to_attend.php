<?php 
include '../conn.php';

$method = $_POST['method'];

if($method == 'fetch_to_attend'){
	$student_id = $_POST['student_id'];
	$c=0;

	$query ="SELECT student_info.student_id,student_info.subj_status,subjects.subject,subjects.subj_code FROM student_info LEFT JOIN subjects ON subjects.subj_code = student_info.enrolled_subj WHERE student_info.student_id = '$student_id'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#attend_modal" onclick="get_attend(&quot;'.$j['student_id'].'~!~'.$j['subj_code'].'~!~'.$j['subject'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['subject'].'</td>';
				echo '<td>'.$j['subj_code'].'</td>';
			echo '<tr>';
		}
	}else{
		echo '<tr>';
			echo '<td colspan="3" style="color:red;">No Result</td>';
		echo '</tr>';
	}
}

$conn = NULL;
?>