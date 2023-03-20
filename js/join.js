function form_check() {
  var u_id = document.getElementById("u_id");
  var pwd = document.getElementById("pwd");
  var repwd = document.getElementById("repwd");
  var u_name = document.getElementById("u_name");
  var email = document.getElementById("email");
  var mobile = document.getElementById("mobile");
  var ps_code = document.getElementById("ps_code");
  var addr_b = document.getElementById("addr_b");
  var selectall = document.getElementById("selectall");


  if (!u_id.value) {
    var txt = document.getElementById("err_id");
    txt.innerHTML = "아이디를 입력하세요.";

    u_id.focus();
    return false;
  };

  var id_len = u_id.value.length;

  if (id_len < 4 || id_len > 12) {
    var txt = document.getElementById("err_id");
    txt.innerHTML = "아이디는 4~12글자만 입력할 수 있습니다.";
    u_id.focus();
    return false;
  };


  if (!pwd.value) {
    var txt = document.getElementById("err_pwd");
    txt.innerHTML = "비밀번호를 입력하세요.";

    pwd.focus();
    return false;
  };


  var pwd_len = pwd.value.length;

  if (pwd_len < 4 || pwd_len > 8) {
    var txt = document.getElementById("err_pwd");
    txt.innerHTML = "비밀번호는 4~8글자만 입력할 수 있습니다.";
    pwd.focus();
    return false;
  };




  if (!repwd.value) {
    var txt = document.getElementById("err_repwd");
    txt.innerHTML = "비밀번호를 확인해주세요.";
    repwd.focus();
    return false;
  };


  if (pwd.value != repwd.value) {
    var txt = document.getElementById("err_repwd");
    txt.innerHTML = "비밀번호가 같지 않습니다.";
    repwd.focus();
    return false;
  };


  if (!u_name.value) {
    var txt = document.getElementById("err_name");
    txt.innerHTML = "이름을 입력하세요.";

    u_name.focus();
    return false;
  };

  if (!email.value) {
    var txt = document.getElementById("err_email");
    txt.innerHTML = "이메일을 입력하세요.";

    email.focus();
    return false;
  };

  if (!mobile.value) {
    var txt = document.getElementById("err_mobile");
    txt.innerHTML = "전화번호를 입력해주세요.";

    mobile.focus();
    return false;
  };

  var reg = /^[0-9]+$/g;
  if (!reg.test(mobile.value)) {
    var txt = document.getElementById("err_mobile");
    txt.innerHTML = "전화번호는 숫자만 입력할 수 있습니다.";
    mobile.focus();
    return false;
  };


  if (!ps_code.value) {
    var txt = document.getElementById("err_ps_code");
    txt.innerHTML = "주소를 입력해주세요.";

    ps_code.focus();
    return false;
  };

  if (!addr_b.value) {
    var txt = document.getElementById("err_addr_b");
    txt.innerHTML = "주소를 입력해주세요.";

    addr_b.focus();
    return false;
  };



  if (!selectall.checked) {
    var txt = document.getElementById("err_selectall");
    txt.innerHTML = "전체 동의가 필요합니다.";

    selectall.focus();
    return false;
  };

};



function checkSelectAll(checkbox) {
  const selectall
    = document.querySelector('input[name="selectall"]');

  if (checkbox.checked === false) {
    selectall.checked = false;
  };
};

function selectAll(selectAll) {
  const checkboxes
    = document.getElementsByName('sub_chk');

  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAll.checked
  })
};


function checkSelectAll() {
  // 전체 체크박스
  const checkboxes
    = document.querySelectorAll('input[name="apply"]');
  // 선택된 체크박스
  const checked
    = document.querySelectorAll('input[name="apply"]:checked');
  // select all 체크박스
  const selectAll
    = document.querySelector('input[name="selectall"]');

  if (checkboxes.length === checked.length) {
    selectAll.checked = true;
  } else {
    selectAll.checked = false;
  };

};

function selectAll(selectAll) {
  const checkboxes
    = document.getElementsByName('apply');

  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAll.checked
  })
};


function findAddr(){
	new daum.Postcode({
        oncomplete: function(data) {
        	
        	console.log(data);

            var roadAddr = data.roadAddress;
            var jibunAddr = data.jibunAddress; 
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




function id_search(){
  window.open("id_search.php", "idsch",  "width=430, height=250");
};