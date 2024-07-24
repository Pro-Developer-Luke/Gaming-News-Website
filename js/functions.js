function togglePass() {
    var confPassBox = document.getElementById("confirm_password");
    var passBox = document.getElementById("password");
    var eyeIcon = document.getElementById("eyeIcon");
    eyeIcon.classList.toggle("fa-eye")
    if (passBox.type === "password") {
      passBox.type = "text";
      confPassBox.type = "text";
    } else{
      passBox.type = "password";
      confPassBox.type = "password";
    }
  }