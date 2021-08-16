export default class Table{
	constructor( users,tbody,hours,site) {
	
        this.data = users;
       this.tbody = tbody;
       this.hours= hours;
       this.site= site;
	}

    renderTableApi(sumMonth){

       
      


        for (const user of this.data) {
         const realTime = sumMonth[user.id] ? sumMonth[user.id].Время_затраченное_на_выполнение_задачи_в_часах : 0;

          const timeHour = realTime;
          const timeDay = realTime / 8;

        

         const timeMonth=()=>{
           
            if((timeHour)>this.hours) {const res=this.hours-timeHour;
            return res;
            }else{
            return 0;
            }
             
            }



//Мобильная версия таблицы.
            if (this.site === 'mobile'){
        const tr = this.tbody.insertRow();
        const tr2 = this.tbody.insertRow();
        const tr3 = this.tbody.insertRow();
        const tr4 = this.tbody.insertRow();
      tr.insertCell().textContent = 'id';
      tr.insertCell().textContent = user.id;
      tr2.insertCell().textContent = 'Полное имя';
    tr2.insertCell().textContent = user.Полное_имя;
    tr3.insertCell().textContent = 'Отработанное время' ;
    tr3.insertCell().textContent = `${timeHour}ч. (${timeDay}дн.)` ;
    tr4.insertCell().textContent = 'Переработка';
    tr4.classList.add('tr4');
        tr4.insertCell().textContent = `${timeMonth()} (${timeHour})`;}
        

//Десктопная версия
if (this.site === 'decktop'){
  const tr = this.tbody.insertRow();
        tr.insertCell().textContent = user.id;
        tr.insertCell().textContent = user.Полное_имя;
        tr.insertCell().textContent = `${timeHour}ч. (${timeDay}дн.)` ;
        tr.insertCell().textContent = `${timeMonth()} (${timeHour})`;
        }
}}
    
      
       
            

renderTask(){
    for (const tasks of this.data) {
      if (this.site === 'mobile'){
      const tr= this.tbody.insertRow();
      const tr1= this.tbody.insertRow();
      const tr2 = this.tbody.insertRow();
      const tr3 = this.tbody.insertRow();
      const tr4 = this.tbody.insertRow();
      const tr5 = this.tbody.insertRow();
        tr.insertCell().textContent = "id";
        tr.insertCell().textContent = tasks.id;
        tr1.insertCell().textContent = "id пользователя";
        tr1.insertCell().textContent = tasks.id_пользователя;
        tr2.insertCell().textContent ='Наименование_задачи';
        tr2.insertCell().textContent =tasks.Наименование_задачи;
        tr3.insertCell().textContent ='Время выделенное на выполнение задачи в часах';
        tr3.insertCell().textContent =tasks.Время_выделенное_на_выполнение_задачи_в_часах;
        tr4.insertCell().textContent ='Время затраченное на выполнение задачи в часах';
        tr4.insertCell().textContent =tasks.Время_затраченное_на_выполнение_задачи_в_часах;
        tr5.insertCell().textContent ='Дата и время старта задачи';
        tr5.insertCell().textContent =tasks.Дата_и_время_старта_задачи;
        const icon = document.createElement('img');
       const data = tasks.id;
        icon.classList.add('img');
        icon.src=('http://s1.iconbird.com/ico/0512/GlyphIcons/file1337171209.png');
        tr.appendChild(icon);
        

        const url = 'http://tabel/api/tasks';
const del=(url,data)=>{ icon.addEventListener('click',(event)=> { 
  fetch(`${url}/${data}`, {
    method: 'DELETE',
    
    headers: {
      'Content-Type': 'application/json',
    },
  })

 
  tr.remove();
  tr1.remove();
  tr2.remove();
  tr3.remove();
  tr4.remove();
  tr5.remove();
  icon.remove();
});}
  del(url,data);
        
}
if(this.site === 'decktop'){
  
   
  const tr = this.tbody.insertRow();
  tr.insertCell().textContent = tasks.id;
        tr.insertCell().textContent = tasks.id_пользователя;
        tr.insertCell().textContent =tasks.Наименование_задачи;
        tr.insertCell().textContent =tasks.Время_выделенное_на_выполнение_задачи_в_часах;
        tr.insertCell().textContent =tasks.Время_затраченное_на_выполнение_задачи_в_часах;
        tr.insertCell().textContent =tasks.Дата_и_время_старта_задачи;
  const icon = document.createElement('img');
 
  
       const data = tasks.id;
        icon.classList.add('img');
        icon.src=('http://s1.iconbird.com/ico/0512/GlyphIcons/file1337171209.png');
        tr.appendChild(icon);
        

        const url = 'http://tabel/api/tasks';
const del=(url,data)=>{ icon.addEventListener('click',(event)=> { 
  fetch(`${url}/${data}`, {
    method: 'DELETE',
    
    headers: {
      'Content-Type': 'application/json',
    },
  })

 
  tr.remove();

});}
  del(url,data);


    }



    }
}
}