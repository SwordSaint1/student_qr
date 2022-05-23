<script type="text/javascript">
$(document).ready(function(){
	load_to_attend();
});

const load_to_attend =()=>{
	var student_id = document.getElementById('student_id_to_attend').value;

	$.ajax({
      url: '../../process/student/subject_to_attend.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_to_attend',
                    student_id:student_id
                },success:function(response){
                   document.getElementById('subject_to_attend').innerHTML = response;
                     
                }
   });
}

const get_attend =(param)=>{
    var string = param.split('~!~');
    var student_id = string[0];
    var subject_code = string[1];
    var subject = string[2];

document.getElementById('scode').value = subject_code;
document.getElementById('subject').value = subject;
document.getElementById('sid').value = student_id;
}

const Attend =()=>{
    var sid = document.getElementById('sid').value;
    var scode = document.getElementById('scode').value;
    var subject = document.getElementById('subject').value;

     $.ajax({
        url: '../../process/student/subject_to_attend.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'attend',
            sid:sid,
            scode:scode,
            subject:subject
            
        },success:function(response) {
            if (response == 'Duplicate Record') {
                swal('Error', 'Duplicate Record!', 'error');
               
            }else if(response == 'success'){
                swal('Success', 'Success!', 'success');
            }
            else{
                swal('FAILED', 'FAILED', 'error');
            }
        }
    });
}
</script>