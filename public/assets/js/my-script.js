/* START Validate Form Functions */
function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

function isMail(str){
        var re = /^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/;
        return re.test(str);
}

function isEmptyObject(object) {
    return JSON.stringify(object) == "{}";
}

function signalErrors(objErrors){

    /**
     * Удаляем class = has-error из div, установленный в прошлый раз
     */
    var errorDivs = document.getElementsByClassName('has-error');
    var errorLength = errorDivs.length;
    if(errorLength > 0){
        for(var x = 0; x < errorLength; x++){
            var newClassName = errorDivs[0].className.replace(' has-error', '');
            errorDivs[0].className = newClassName;
        }
    }

    /**
     * Добавялем class = has-error в div, чтобы сигнализировать об ошибке
     */
    for(error in objErrors){
        var input = document.getElementsByName(error);
        var div = input[0].parentNode;
        div.className += ' has-error';
    }
}

function validate(form){

    var objErrors = {};
    for(var i = 0; i < form.length; i++){
        if(!form.elements[i].value){
            objErrors[form.elements[i].name] = form.elements[i].placeholder;
        }else if(form.elements[i].placeholder.indexOf('mail') > 0 && !isMail(form.elements[i].value)){
            objErrors[form.elements[i].name] = form.elements[i].placeholder;
        }else if(form.elements[i].name === 'orderCountPeople'){
            if(!isNumeric(form.elements[i].value) || form.elements[i].value < 1){
                objErrors[form.elements[i].name] = form.elements[i].placeholder;
            }
        }
    }
    /**
     * В objErrors хранятся сообщения для вывода сообщения об ошибке пользователю.
     * Пока решили их не выводить, а просто обводить красным форму
     */
    if(isEmptyObject(objErrors)){
        form.submit();
    }else{
        signalErrors(objErrors);
    }
}
/* END Validate Form Functions */

/* START Calendar Settings */
$('#orderDate').datepicker({
    format: "dd.mm.yy",
    autoclose: true,
    language: 'ru',
    todayBtn: "linked"
});
/* END Calendar Settings */