function form_check() {
  var chk_1 = document.getElementById("chk_1");
  var chk_2 = document.getElementById("chk_2");

  if (!chk_1.checked && !chk_2.checked) {
    var txt = document.getElementById("err_selectall");
    txt.innerHTML = "* 구매하실 제품을 선택해 주시기 바랍니다.";

    chk_2.focus();
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
    = document.querySelectorAll('input[name="chk"]');
  // 선택된 체크박스
  const checked
    = document.querySelectorAll('input[name="chk"]:checked');
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
    = document.getElementsByName('chk');

  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAll.checked
  })
};