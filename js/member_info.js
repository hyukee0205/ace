function edit_form_check(){
  var pwd = document.getElementById("pwd");
  var repwd = document.getElementById("repwd");

  if(pwd.value){
      var pw_len = pwd.value.length;
      if(pw_len < 4 || pw_len > 12){
          alert("비밀번호는 4~12글자만 입력할 수 있습니다.");
          pwd.focus();
          return false;
      };
  };
  
  if(pwd.value){
      if(pwd.value != repwd.value){
          alert("비밀번호를 확인해 주세요.");
          repwd.focus();
          return false;
      };
  };           
};

function mem_del(){
var rtn_val = confirm("정말 탈퇴하시겠습니까?");
if(rtn_val == true){
location.href = "member_delete.php";
};
};


function findAddr(){
	new daum.Postcode({
        oncomplete: function(data) {
        	
        	console.log(data);
        	
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
            // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var roadAddr = data.roadAddress; // 도로명 주소 변수
            var jibunAddr = data.jibunAddress; // 지번 주소 변수
            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('ps_code').value = data.zonecode;
            if(roadAddr !== ''){
                document.getElementById("addr_b").value = roadAddr;
            } 
            else if(jibunAddr !== ''){
                document.getElementById("addr_b").value = jibunAddr;
            }
        }
    }).open();
}