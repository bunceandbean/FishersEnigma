class Animatable{
  constructor(duration, ease_type, infinite){
    this.duration = duration || 0,
    this.ease_type = ease_type || "ease",
    this.infinite = infinite || false,
    this.inAni = false;
  }

  twirlX(el,end,start = Number(el.style.transform.substring(el.style.transform.indexOf("(")+1, el.style.transform.indexOf(")")-3)) || 0,duration = this.duration, reset = false){
    if(el !== null && duration != 0){
      return new Promise(function(resolve) {
      el.style.transform = "rotate(" + start + "deg)";
      let incr = (end/duration)*(1/60);
      end = end + start;
      var tick = () => {
        let transform = el.style.transform,
        amt = Number(transform.substring(transform.indexOf("(")+1, transform.indexOf(")")-3)) + incr;
        el.style.transform = "rotateX(" + amt + "deg)";
        if( amt != end){
        requestAnimationFrame(tick);
      }else if(reset){
        el.style.transform = "";
      }else{
        resolve();
      }
      };
      tick();
    });
    }else{
      alert("Element is not defined");
    }
  }
  characterAdd(el,pauseTime = 0){
    if(el !== null && this.duration != 0){
      let text = el.innerHTML,
      textArr = text.split(''),
      count = 0;
      el.innerHTML = "";
      let pause = false;
      return new Promise(function(resolve) {
      var tick = () =>{
        if(!pause){
        el.innerHTML += textArr[count];
        count++;
        if(count != 0 && (textArr[count-1] == "." || textArr[count-1] == "?" || textArr[count-1] == "!")){
          pause = true;
          let timout = setTimeout(function(){pause = false;},pauseTime*1000);
        }
      }
        if(count < textArr.length){
        requestAnimationFrame(tick);
      }else{
        resolve();
      }
      };
      tick();
    });
    }else{
      alert("Element is not defined");
    }
  }
  characterFade(el,duration = this.duration, delayVarience = 1){
    if(el != null && duration != 0 && el.children.length ==0){
    let css = '@keyframes fadeInCharacter{0%{opacity:0;}100%{opacity:1}}',
    style = document.createElement('style');

    document.body.appendChild(style);

    style.type = 'text/css';
    if (style.styleSheet){
      // This is required for IE8 and below.
      style.styleSheet.cssText = css;
    } else {
      style.appendChild(document.createTextNode(css));
    }

    let text = el.innerHTML,
    textArr = text.split('');
    el.innerHTML = "";
    document.createElement("style")
    for(var char of textArr){
      let thing = document.createElement("span");
      thing.innerHTML = char;
      thing.style.opacity = 0;
      el.appendChild(thing);
    }
    let children = el.children,
    longest = 0;

    for(let i =0; i < children.length; i++){
      //3s ease 0.258856s 1 normal none running fadeInCharacter;
      let delay = Math.random() * delayVarience;
      children[i].style.animation = "fadeInCharacter " + duration + "s " +  delay + "s ease forwards";
      if(delay+duration > longest){longest = delay+duration;}
    }
    let timeout = setTimeout(function(){el.innerHTML = text; document.querySelectorAll('style')[document.querySelectorAll('style').length-1].remove();},longest*1000);
  }
}
}
// d.twirlX(document.querySelector("#menu"),90).then(function(){ return d.twirlX(document.querySelector("#menu-content"),90)})
