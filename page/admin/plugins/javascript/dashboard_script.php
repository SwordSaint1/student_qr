<script type="text/javascript">
$(document).ready(function(){
	Search_Attendance();
});

const Search_Attendance =()=>{
    var subject = document.getElementById('subject').value;
	$.ajax({
      url: '../../process/admin/attendance.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_attendance',
                    subject:subject
                },success:function(response){
                   document.getElementById('list_of_attendance').innerHTML = response;
                     
                }
   });
}

const get_update_attended =(param)=>{
    var string = param.split('~!~');
    var id = string[0];
    var student_id = string[1];
    var fname = string[2];
    var subject = string[3];
    var attendance = string[4]; 


document.getElementById('id_verify').value = id;
document.getElementById('sid_verify').value = student_id;
document.getElementById('sname_verify').value = fname;
document.getElementById('subject_verify').value = subject;
document.getElementById('verify_attendance_status').value = attendance;
}

const verify_status =()=>{
    var id = document.getElementById('id_verify').value;
    var student_id = document.getElementById('sid_verify').value;
    var fname = document.getElementById('sname_verify').value;
    var subject = document.getElementById('subject_verify').value;
    var attendance = document.getElementById('verify_attendance_status').value;

     $.ajax({
        url: '../../process/admin/attendance.php',
        type: 'POST', 
        cache: false,
        data:{
            method: 'verify_attendance_data',
            id:id,
            student_id:student_id,
            fname:fname,
            subject:subject,
            attendance:attendance
        },success:function(x){
            if (x == 'success') {
               swal('Success',x,'success');
               Search_Attendance();
            }else{
               swal('Error',x,'error');
               Search_Attendance();
            }
        }
    });

}
</script>