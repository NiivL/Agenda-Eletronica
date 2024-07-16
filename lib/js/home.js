var menuItem = document.querySelectorAll('.item-menu');

function selectLink() {
    menuItem.forEach((item) =>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
};

menuItem.forEach((item) =>
    item.addEventListener('click', selectLink)
);


var btnExpandir = document.querySelector('#btn-expandir');
var menuSide = document.querySelector('.menuLateral');

btnExpandir.addEventListener('click', function () {
    menuSide.classList.toggle('expandir')
});

