window.addEventListener('keydown', keydown);
window.addEventListener('keyup', keyup);

// Load macros
var canFeed = false;
function keydown(event) {
    if (event.keyCode == 87) {
        // Feeding Macro (w)
        canFeed = true;
        feed();
    }
    if (event.keyCode == 70) {
        // Solo-tricksplit (f)
        for (var a = 0; a < 4; a++) {
            setTimeout(function() {
                split();
                $("body").trigger($.Event("keydown", { keyCode: 87}));
                $("body").trigger($.Event("keyup", { keyCode: 87}));
            }, a * 50);
        }
    }
    if (event.keyCode == 67) {
        // Popsplit macro (C)
        split();
        setTimeout(split, Math.random() * (350 - 200) + 200);
    }
    if (event.keyCode == 49 || event.keyCode == 83) {
        // Space macro (s or 1)
        split();
    }
    if (event.keyCode == 16 || event.keyCode == 52) {
        // Tricksplit Macro (shift or 4)
        for (var b = 0; b < 4; b++) setTimeout(split, b * 50);
    }
    if (event.keyCode == 65 || event.keyCode == 51) {
        // Triplesplit Macro (a or 3)
        for (var c = 0; c < 3; c++) setTimeout(split, c * 50);
    }
    if (event.keyCode == 68 || event.keyCode == 50) {
        // Doublesplit Macro (d or 2)
        split();
        setTimeout(split, 50);
    }
    if (event.keyCode == 72) {
        // Horizontal linesplit (h)
        X = window.innerWidth / 2;
        Y = window.innerHeight / 2;
        $("canvas").trigger($.Event("mousemove", {clientX: X, clientY: Y}));
    }
    if (event.keyCode == 86) {
        // Vertical linesplit (v)
        X = window.innerWidth / 2;
        Y = window.innerHeight / 2.006;
        $("canvas").trigger($.Event("mousemove", {clientX: X, clientY: Y}));
    }
}

// When a player lets go of W stop feeding
function keyup(event) {
    if (event.keyCode == 87) canFeed = false;
}

// Alias for W key
function feed() {
    if (!canFeed) return;
    window.onkeydown({keyCode: 87});
    window.onkeyup({keyCode: 87});
    setTimeout(feed, 0);
}

// Alias for space
function split() {
    $("body").trigger($.Event("keydown", { keyCode: 32}));
    $("body").trigger($.Event("keyup", { keyCode: 32}));
}
