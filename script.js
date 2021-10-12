let count=0;

const counter = document.getElementById('counter');
document.getElementById('add-animation').addEventListener('click',Event=>{
    const c1 = counter.classList;
    const c = 'animated-counter';
    count++;

    counter.innerText = count;
    c1.remove(c,c1.contains(c));
    setTimeout(()=>
    counter.classList.add('animated-counter')
    ,1)

})
let count1=0;

const counter1 = document.getElementById('counter1');
document.getElementById('animation').addEventListener('click',Event=>{
    const c2 = counter1.classList;
    const c3= 'animated';
    count1++;

    counter1.innerText = count1;
    c2.remove(c3,c2.contains(c3));
    setTimeout(()=>
    counter1.classList.add('animated')
    ,1)

})
let count3=0;

const counter3 = document.getElementById('counter3');
document.getElementById('add-animation3').addEventListener('click',Event=>{
    const c4 = counter3.classList;
    const c5= 'animated3';
    count3++;

    counter3.innerText = count3;
    c4.remove(c5,c4.contains(c5));
    setTimeout(()=>
    counter3.classList.add('animated3')
    ,1)

})