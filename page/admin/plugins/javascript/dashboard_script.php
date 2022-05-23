<script type="text/javascript">
$(document).ready(function(){
	Search_Attendance();
});

const Search_Attendance =()=>{

	$.ajax({
      url: '../../process/admin/attendance.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'fetch_attendance',
                },success:function(response){
                   document.getElementById('list_of_attendance').innerHTML = response;
                     
                }
   });
}

</script>