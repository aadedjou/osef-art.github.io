var copied = false;
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
    tip.style.background = "linear-gradient(to left, rgba(200, 125, 250, 0.75), rgb(150, 150, 250, 0.75))";
    tip.style.padding = " 5px 10px";
    tip.style.transition = "0s";
    copied = true;
}

function resetTip(that) {
    if (!copied) return;
    var tip = document.getElementById('copytip');
    tip.classList = ['thin tooltip-text']
    tip.textContent = "Click to copy the id again."
    tip.style.background = "rgb(0, 0, 0, 0.25)";
}

function recolorDot(page) {
    var dot = document.getElementById("dot");
    dot.classList = ['dot-' + page];
}

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

function pickRandomGif() {
    var img = document.getElementById("ministick-gif");
    img.src = "assets/gifs/ministick-clip-" + (1 + getRandomInt(3)) + ".gif";
}

function slide(id, timeOnSlide, timeBetweenSlides) {
    // test if the browser supports animation, and if it needs a vendor prefix to do so
    var animation = false;
    var keyframeprefix = '';
    var domPrefixes = 'Webkit Moz O Khtml'.split(' '); 
     // array of possible vendor prefixes
    var pfx  = '';
    var slider = document.getElementById(id); 

    if (slider.style.animationName !== undefined) { animation = true; } 
    // browser supports keyframe animation w/o prefixes

    if (animation === false) {
        for (var i = 0; i < domPrefixes.length; i++) {
            if (slider.style[ domPrefixes[i] + 'AnimationName' ] !== undefined) {
                pfx = domPrefixes[ i ];
                keyframeprefix = '-' + pfx.toLowerCase() + '-';
                animation = true;
                break;
            }
        }
    }

    if  (animation !== false) {
        var images = slider.getElementsByTagName("img");
        var firstImg = images[0]; 

        // get the first image inside the "slidy" element.
        var imgWrap = firstImg.cloneNode(false);  // copy it.
        slider.appendChild(imgWrap); // add the clone to the end of the images
        
        var imgCount = images.length; // count the number of images in the slide, including the new cloned element
        var totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1); // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
        var slideRatio = (timeOnSlide / totalTime)*100; // determine the percentage of time an induvidual image is held static during the animation
        var moveRatio = (timeBetweenSlides / totalTime)*100; // determine the percentage of time for an individual movement
        var basePercentage = 100/imgCount; // work out how wide each image should be in the slidy; as a percentage.
        var position = 0; // set the initial position of the slidy element
        
        css = document.createElement("style"); // start marking a new style sheet
        css.type = "text/css";
        css.innerHTML += "#" + id + " { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; // set the width for the " + id + " container
        css.innerHTML += "#" + id + " img { float: left; width: " + basePercentage + "%; }\n";
        css.innerHTML += "@" + keyframeprefix + "keyframes " + id + " {\n"; 
        
        for (i= 0; i < (imgCount-1); i++) { 
            position += slideRatio; // make the keyframe the position of the image
            css.innerHTML += position+"% { left: -"+(i * 100)+"%; }\n";
            position += moveRatio; // make the postion for the _next_ slide
            css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }\n";
        }
        css.innerHTML += "}\n";
        css.innerHTML += "#" + id + " { left: 0%; " + keyframeprefix + "transform: translate3d(0,0,0); " + keyframeprefix + "animation: " + totalTime + "s " + id + " infinite; }\n"; // call on the completed keyframe animation sequence
        document.body.appendChild(css); // add the new stylesheet to the end of the document
    }
}
