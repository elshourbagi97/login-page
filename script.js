document.addEventListener("DOMContentLoaded", function () {
  let input1 = document.getElementById("input-eyes1");
  let input2 = document.getElementById("input-eyes2");
  let input3 = document.getElementById("input_login");
  console.log(input3);

  let check = document.getElementById("check");
  console.log(check);
if(check){
      check.addEventListener("change", function (e) {
            if (check.checked) {
              if(input1){input1.type = "text"}
              if(input2){input2.type = "text"};
              if(input3){input3.type = "text"};
            } else {
              if(input1){input1.type = "password"};
              if(input2){input2.type = "password"};
              if(input3){input3.type = "password"};
            }
          });
}

});
