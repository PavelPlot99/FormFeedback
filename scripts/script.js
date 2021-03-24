
  function repl(){
    document.getElementById('question').value.replace(/\n/g, '<br/>');
  }
  
  function validMail() {
    var userEmail = document.getElementById('email').value;
    var regex = /^[\w]{1}[\w-\.]*@[\w-]+\.[a-z]{2,4}$/i;
    var valid = regex.test(userEmail);
    if (!valid) output = "Введите корректный Email";
    else output = '';
    document.getElementById('messageMail').innerHTML = '<br/>'+output;
    return valid;
  }

  function validPhone() {
    var userPhone = document.getElementById('phone').value;
    var regex = /(\+7|8)[- _]*\(?[- _]*(\d{3}[- _]*\)?([- _]*\d){7}|\d\d[- _]*\d\d[- _]*\)?([- _]*\d){6})/g;
    var valid = regex.test(userPhone);
    if (!valid) output = "Введите корректный номер телефона";
    else output = '';
    document.getElementById('messagePhone').innerHTML = '<br/>'+output;
    return valid;
  }
