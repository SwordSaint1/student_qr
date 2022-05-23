<script type="text/javascript">
$(document).ready(function(){
	load_enrolled_subject();
});

const load_enrolled_subject =()=>{
var student_id = document.getElementById('student_id').value;

	$.ajax({
      url: '../../process/student/student_info.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_enrolled',
                    student_id:student_id
                },success:function(response){
                   document.getElementById('enrolled_subject').innerHTML = response;
                     
                }
   });
}

</script>