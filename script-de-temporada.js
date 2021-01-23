var snow = new Array(30),  //cantidad
    bodyWidth = document.body.scrollWidth,
    bodyHeight = document.body.scrollHeight;

function rand(min, max) { return Math.floor(Math.random() * (max - min + 1)) + min }

function initSnow() {
    for (var i = 0; i < snow.length; i++) {
        snow[i] = document.createElement('div');
        snow[i].style.position = 'absolute';
        snow[i].style.top = rand(0, bodyHeight) + 'px';
        snow[i].style.color = ['#ddd', '#eee', ' #11B28E'][rand(0, 2)];
        snow[i].style.fontFamily = ['serif', 'sans-serif', 'monospace'][rand(0, 2)];
        snow[i].style.fontSize = rand(8, 32) + 'px';
        snow[i].style.lineHeight = '1';
        snow[i].textContent = '♥';
        document.body.appendChild(snow[i]);
        snow[i].w = snow[i].offsetWidth;
        snow[i].h = snow[i].offsetHeight;
        snow[i].style.left = rand(snow[i].w * 2, bodyWidth - snow[i].w * 2) + 'px';
    }
}

function moveSnow() {
    for (var i = 0; i < snow.length; i++) {
        var top = parseInt(snow[i].style.top);
        if (top >= bodyHeight - snow[i].h * 2) {
            snow[i].style.top = '-' + snow[i].h * 2 + 'px';
            snow[i].style.left = rand(snow[i].w * 2, bodyWidth - snow[i].w * 2) + 'px';
        } else {
            snow[i].style.top = top + 4 + 'px';
        }
    }
    setTimeout(moveSnow, 50); //velocidad
}

initSnow();
moveSnow();