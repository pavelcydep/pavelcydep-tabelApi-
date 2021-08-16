export default class Month {
	constructor(element,mytable,myButton) {
	this.element= element;
    this.mytable=mytable;
    this.myButton = myButton;
	this.tbodyJune = mytable.querySelector('.my-table__tbody-june');
    this.tbodyJuly = mytable.querySelector('.my-table__tbody-july');
    this.tbodyAug = mytable.querySelector('.my-table__tbody-august');
    this.tbody = mytable.querySelector('.my-table__tbody');

}


    clickMonth(){
        this.element.addEventListener('click',()=>{
        this.tbody.classList.remove('display-none');
        this.tbodyJune.classList.add('display-none');
        this.tbodyJuly.classList.add('display-none');
        this.myButton.textContent = "Все месяца";
       });
    }

clickMonthJune(){
    this.element.addEventListener('click',()=>{
    this.tbody.classList.add('display-none');
    this.tbodyJune.classList.remove('display-none');
    this.tbodyJuly.classList.add('display-none');
    this.myButton.textContent = "Июнь";
   });
}

clickMonthJuly(){
    this.element.addEventListener('click',()=>{
    this.tbody.classList.add('display-none');
    this.tbodyJune.classList.add('display-none');
    this.tbodyJuly.classList.remove('display-none');
    this.myButton.textContent = "Июль";
   });

}
   clickMonthAug(){
    this.element.addEventListener('click',()=>{
    this.tbody.classList.add('display-none');
    this.tbodyJune.classList.add('display-none');
    this.tbodyJuly.classList.add('display-none');
    this.tbodyAug.classList.remove('display-none');
    this.myButton.textContent = "Август";
   });

}
clickTask(mytableTask){
this.element.addEventListener('click',()=>{
    mytableTask.classList.toggle('display-none');
    this.mytable.classList.toggle('display-none');
    
});
}
}




