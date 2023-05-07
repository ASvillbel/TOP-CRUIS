const nav = document.querySelector('#nav');
const navBtn = document.querySelector('#nav-btn');
const navBtnImg = document.querySelector('#nav-btn-img');

navBtn.onclick = () => {
    if (nav.classList.toggle('open')) {
        navBtnImg.src = "./img/close.svg";
    } else {
        navBtnImg.src = "./img/open.svg";
    }
}

$('#form').submit(function() {
    var faults = $('input').filter(function() {
        // находим не заполненные обязательные элементы input
        return $(this).data('required') && $(this).val() == "";
    }).css("background-color", "red"); // выделяем это поле красным
        if(faults.length) return false; // если одно из полей не заполнено, отменяем отправку
    });
