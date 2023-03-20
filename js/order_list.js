function form_check() {
  var selectall = document.getElementById("selectall");

  if (!selectall.checked) {
    var txt = document.getElementById("err_selectall");
    txt.innerHTML = "* 전체 동의가 필요합니다.";

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