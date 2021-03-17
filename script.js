var copied = false;

function copy(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = document.getElementById('discord-link').textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();

    var tip = document.getElementById('copytip');
    tip.classList = ['thin tooltip-text']
    tip.textContent = "Copied !"
    tip.style.background = "linear-gradient(to left, rgba(175, 125, 250, 0.75), rgb(250, 85, 160, 0.75))";
    tip.style.padding = " 5px 10px";
    tip.style.width = "100px";
    copied = true;
}

function resetTip(that) {
    if (!copied) return;
    var tip = document.getElementById('copytip');
    tip.classList = ['thin tooltip-text']
    tip.textContent = "Click to copy the id again."
    tip.style.background = "rgb(0, 0, 0, 0.25)";
    tip.style.width = "200px";
}