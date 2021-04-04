const m = 0.512286623256592433;

function buildWave(w, h) {
    
    const a = h / 4;
    const y = h / 2;
    
    const pathData = [
        'M', w * 0, y + a / 2, 
        'c', 
        a * m, 0,
        -(1 - a) * m, -a, 
        a, -a,
        's', 
        -(1 - a) * m, a,
        a, a,
        's', 
        -(1 - a) * m, -a,
        a, -a,
        's', 
        -(1 - a) * m, a,
        a, a,
        's', 
        -(1 - a) * m, -a,
        a, -a,
        
        's', 
        -(1 - a) * m, a,
        a, a,
        's', 
        -(1 - a) * m, -a,
        a, -a,
        's', 
        -(1 - a) * m, a,
        a, a,
        's', 
        -(1 - a) * m, -a,
        a, -a,
        's', 
        -(1 - a) * m, a,
        a, a,
        's', 
        -(1 - a) * m, -a,
        a, -a,
        's', 
        -(1 - a) * m, a,
        a, a,
        's', 
        -(1 - a) * m, -a,
        a, -a,
        's', 
        -(1 - a) * m, a,
        a, a,
        's', 
        -(1 - a) * m, -a,
        a, -a
    ].join(' ');

    var path = document.querySelector('#wave');

    if (path != null)
        path.setAttribute('d', pathData);
}

buildWave(90, 60);