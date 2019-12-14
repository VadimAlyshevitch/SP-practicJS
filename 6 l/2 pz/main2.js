/*let pass = "Qrandom*pass&@";
var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

var valid = regularExpression.test(pass);   
if (valid) {
    alert('norm')
}
    else {
    alert('not');
}
console.log(valid.length);*/
const btn = document.getElementById('btn');

btn.addEventListener('click' , function () {

    validPass();
    
})


function validPass() {
    let re = /^[QZ](?=.*[!@#$%^&*])([a-zA-Z0-9!@#$%^&*]){10}$/;
    let pass = document.getElementById('password').value;
    let valid = re.test(pass);
    if (valid) output = 'Пароль введен правильно!';
    else output = 'Пароль введен неправильно!';
    document.getElementById('message').innerHTML = document.getElementById('message').innerHTML+'<br />'+output;
    return valid;
}