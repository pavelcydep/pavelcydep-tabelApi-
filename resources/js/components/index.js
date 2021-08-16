
import '../../css/app.css';
import Api from './Api';
import Popup from './popup';
import Filter from './filter';
import Table from './table';
import Button from './Button';
import PopupTaskAdd from './PopupTaskAdd';
import FormValidator from './FormValidator';
import FormAdd from './FormAdd';
import { btnjustify,taskApi,
    mytableTask,mytable,popup,taskButtonAdd,
    dropdown,popupTask,closePopup,taskButton,myButton,
    dropdownJuly,dropdownJune,dropdownAug,
     main, btnjustifyMobile, } from './constants/constants';

import {reduceApi,renderTable,renderTaskApi,filterApiJune,filterApiJuly} from './utils/utils';
 
popup.openClose(btnjustify,main);
popup.openCloseMobile(btnjustifyMobile);



const errorMessages = document.querySelector(".error");
const errorReset=()=>{
    errorMessages.classList.add('error');
}
//форма
const formAdd = document.forms.formAdd;
const id_user_task = formAdd.elements.id_user_task;
const task= formAdd.elements.task;
const time_task = formAdd.elements.time_task;
const real_time_task = formAdd.elements.real_time_task;
const data =formAdd.elements.data;
const sendFormAdd = new FormValidator(formAdd);


//таблицы


const month = new Button(dropdown,mytable,myButton);
month.clickMonth();
    const monthJune = new Button(dropdownJune,mytable,myButton);
monthJune.clickMonthJune();
const monthJuly = new Button(dropdownJuly,mytable,myButton);
monthJuly.clickMonthJuly();
const monthAugust = new Button(dropdownAug,mytable,myButton);
monthAugust.clickMonthAug();

const clickTaskButton = new Button(taskButton,mytable,myButton);
clickTaskButton.clickTask(mytableTask);
//Вывожу task
renderTaskApi();

//Вывожу главную таблицу
renderTable();



const popupButton= document.querySelector('.form-button');
const popupTaskAdd = new PopupTaskAdd(popupTask,taskButtonAdd);
const popupTaskClose = new PopupTaskAdd(popupTask,closePopup);
const popupTaskSubmit = new PopupTaskAdd(popupTask,popupButton);

popupTaskAdd.openPopup();

popupTaskClose.closePopup();
popupTaskSubmit.closePopup();


sendFormAdd.setEventListeners();

  popupButton.addEventListener('click',(event)=>{
  event.preventDefault();
  formAdd.reset();
 
  taskApi.formAddTask(id_user_task,
      task,
      time_task,real_time_task,data);
      
 
      popupTaskClose.closePopup();
      
       }); 
        
     
      
       
      // sendFormAdd.setEventListeners();
      

    




 

          



            