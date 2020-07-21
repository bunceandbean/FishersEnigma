class Animatable{
  constructor(duration, ease_type, infinite){
    this.duration = duration || 0,
    this.ease_type = ease_type || "ease",
    this.infinite = infinite || false,
    this.inAni = false;
  }

  twirlX(el,end,start = Number(el.style.transform.substring(el.style.transform.indexOf("(")+1, el.style.transform.indexOf(")")-3)) || 0, reset = false){
    console.log(el);
    if(el !== null && this.duration != 0){
      let duration = this.duration;
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
  timeline(){

  }
}
// d.twirlX(document.querySelector("#menu"),90).then(function(){ return d.twirlX(document.querySelector("#menu-content"),90)})
