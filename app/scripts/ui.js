function sectiontoggle(name){
    if(document.querySelector("#"+name).classList.contains('on')){
        document.querySelector("#"+name).classList.toggle('onopacity');
        setTimeout(() => {
            document.querySelector("#"+name).classList.toggle('on');
        }, 300);
    } else {
        document.querySelector("#"+name).classList.toggle('on');
        setTimeout(() => {
            document.querySelector("#"+name).classList.toggle('onopacity');
        }, 1);
    }
}