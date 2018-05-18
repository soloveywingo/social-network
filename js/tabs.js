var tab;
var tabContent;

window.onload = function () {
    tab = document.getElementsByClassName('tab');
    tabContent= document.getElementsByClassName('tab-content');

    hideTabsContent(1);

}

function hideTabsContent(n) {
    for(var i = n; i < tabContent.length; i++){
        tabContent[i].classList.remove('show');
        tabContent[i].classList.add('hide');
        tab[i].classList.remove('active');
    }
}

document.getElementById('tabs').onclick = function (event) {
    var target = event.target;

    if(target.className == 'tab'){
        for(var i = 0; i < tab.length; i++){
            if(target == tab[i]){
                showTabsContent(i);
                break;
            }
        }
    }
}

function showTabsContent(m) {
    if(tabContent[m].classList.contains('hide')){
        hideTabsContent(0);
        tab[m].classList.add('active');
        tabContent[m].classList.remove('hide');
        tabContent[m].classList.add('show');
    }
}