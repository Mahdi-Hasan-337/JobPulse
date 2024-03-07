var dashboardToggleButton = document.getElementById("menu-toggle-1");
var analyticsToggleButton = document.getElementById("menu-toggle-2");
var feedbackToggleButton = document.getElementById("menu-toggle-3");
var logochangeToggleButton = document.getElementById("menu-toggle-4");
var notification1ToggleButton = document.getElementById("notification1-menu-toggle");
var notification2ToggleButton = document.getElementById("notification2-menu-toggle");
var el = document.getElementById("wrapper");

dashboardToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
analyticsToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
feedbackToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
logochangeToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
notification1ToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
notification2ToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};

document.querySelector('.list-group-item[href="#content-wrapper-1"]').addEventListener('click', function () {
    toggleContent('content-wrapper-1');
});

document.querySelector('.list-group-item[href="#content-wrapper-2"]').addEventListener('click', function () {
    toggleContent('content-wrapper-2');
});

document.querySelector('.list-group-item[href="#content-wrapper-3"]').addEventListener('click', function () {
    toggleContent('content-wrapper-3');
});

document.querySelector('.list-group-item[href="#content-wrapper-4"]').addEventListener('click', function () {
    toggleContent('content-wrapper-4');
});

document.querySelector('.list-group-item[href="#notification1-content-wrapper"]').addEventListener('click',
    function () {
        toggleContent('notification1-content-wrapper');
    });

document.querySelector('.list-group-item[href="#notification2-content-wrapper"]').addEventListener('click',
    function () {
        toggleContent('notification2-content-wrapper');
    });

function toggleContent(contentId) {
    document.getElementById('content-wrapper-1').style.display = 'none';
    document.getElementById('content-wrapper-2').style.display = 'none';
    document.getElementById('content-wrapper-3').style.display = 'none';
    document.getElementById('content-wrapper-4').style.display = 'none';
    document.getElementById('notification1-content-wrapper').style.display = 'none';
    document.getElementById('notification2-content-wrapper').style.display = 'none';

    document.getElementById(contentId).style.display = 'block';
}
