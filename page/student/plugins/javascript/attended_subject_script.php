<script type="text/javascript">
	
const Search =()=>{

var student_id = document.getElementById('student_id_attended').value;
var datefrom = document.getElementById('attended_from').value;
var dateto = document.getElementById('attended_to').value;

$.ajax({
      url: '../../process/student/attended_subject.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'attended',
                    student_id:student_id,
                    datefrom:datefrom,
                    dateto:dateto
                },success:function(response){
                   document.getElementById('subject_attended').innerHTML = response;
                     
                }
   });
}

const get_attended =(param)=>{
    var string = param.split('~!~');
    var id = string[0];
    var student_id = string[1];
    var subj_code = string[2];

document.getElementById('id').value = id;
document.getElementById('student_id').value = student_id;
document.getElementById('subj_code').value = subj_code;
}

</script>