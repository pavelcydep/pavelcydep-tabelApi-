
import Api from '../Api';
import Popup from '../popup';

const btnjustify = document.querySelector('.btn-justify');
const btnjustifyMobile = document.querySelector('.btn-justify_mobile');
const navigation = document.querySelector('.navigation');
const main = document.querySelector('.main');
const dropdownJune = document.querySelector('.dropdown-item-june');
const dropdownJuly = document.querySelector('.dropdown-item-july');
const dropdownAug =  document.querySelector('.dropdown-item-august');
const myButton = document.querySelector('.my-button');
const dropdown = document.querySelector('.dropdown-item');
const taskButton = document.querySelector('.navigation__item_task');

const popup = new Popup(navigation);

const mytable = document.querySelector('.my-table');
const mytableTask = document.querySelector('.my-table-task');
const tbody =  document.querySelector('.my-table__tbody');
const tbodyTask = document.querySelector('.my-table-task__tbody')
const tbodyJune =  document.querySelector('.my-table__tbody-june');
const tbodyJuly =  document.querySelector('.my-table__tbody-july');
const tbodyAug =document.querySelector('.my-table__tbody-august');
const popupTask = document.querySelector('.popup');
const closePopup = document.querySelector('.popup__close');
const taskButtonAdd = document.querySelector('.task-button');

const taskUrl = 'http://tabel/api/tasks';
const taskUrlJune = 'http://tabel/api/tasks/june';
const taskUrlJuly = 'http://tabel/api/tasks/july';
const taskUrlAugust = 'http://tabel/api/tasks/august';
const taskApi= new Api(taskUrl);
const taskApiJune= new Api(taskUrlJune);
const taskApiJuly= new Api(taskUrlJuly);
const taskApiAugust = new Api(taskUrlAugust);
const userJobsUrl = 'http://tabel/api/user_jobs';
const userJobsApi = new Api(userJobsUrl);

const Junestart="2021-08-01 00:00:00";
const Juneend ="2021-08-30 00:00:00";
const Julystart="2021-07-01 00:00:00";
const Julyend ="2021-07-30 00:00:00";

 export{
    btnjustify,Julyend,Julystart,Juneend,Junestart,userJobsApi, userJobsUrl,taskApi,
    taskUrl, tbodyJuly,tbodyJune,tbodyAug,tbodyTask,tbody,mytableTask,mytable,popup,
    dropdown,popupTask,closePopup,taskButtonAdd,taskApiAugust,
    taskApiJuly,taskApiJune,myButton,dropdownJuly,dropdownJune,dropdownAug,taskButton, main,navigation, btnjustifyMobile, 
}