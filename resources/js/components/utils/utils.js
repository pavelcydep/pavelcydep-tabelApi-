
import '../../../css/app.css';
import Filter from '../filter';
import Table from '../table';


import { btnjustify,Julyend,Julystart,Juneend,Junestart,userJobsApi, userJobsUrl,taskApi,
    taskUrl, tbodyJuly,tbodyJune,tbodyAug,tbodyTask,tbody,mytableTask,mytable,popup,taskButton,
    dropdown,taskApiJuly,taskApiAugust,taskApiJune,myButton,dropdownJuly,dropdownJune, main,navigation, btnjustifyMobile, } from '../constants/constants';



const reduceApi=(arr)=>{
    const summed = arr.reduce((acc, { id_пользователя, Время_затраченное_на_выполнение_задачи_в_часах,}) => {
        let user = acc[id_пользователя];
        if (!user)
        user = acc[id_пользователя] = { Время_затраченное_на_выполнение_задачи_в_часах: 0,};
         
        user.Время_затраченное_на_выполнение_задачи_в_часах += Время_затраченное_на_выполнение_задачи_в_часах;
         
        return acc;
        }, {});
    return summed;
    }
//Вывожу главную таблицу
const renderTable=() =>{  taskApi.getApi().then((data)=>{
    const sum=reduceApi(data);
    userJobsApi.getApi().then((data)=>{
       if (document.documentElement.clientWidth < 800) {
        const tablesApi = new Table(data,tbody,160,'mobile');
        tablesApi.renderTableApi(sum);}
        if(document.documentElement.clientWidth > 800){
            const tablesApi = new Table(data,tbody,160,'decktop');
            tablesApi.renderTableApi(sum);}
        });

}
);
}

//Вывожу task

const renderTaskApi=() =>{ taskApi.getApi().then((data)=>{
    if (document.documentElement.clientWidth < 800) {
    const tablesApi = new Table(data,tbodyTask,160,'mobile');
    tablesApi.renderTask();}

    if (document.documentElement.clientWidth > 800) {
        const tablesApi = new Table(data,tbodyTask,160,'decktop');
        tablesApi.renderTask();}

    });
    }

    //фильтер api

const filterApiJune=() =>{
    taskApiJuly.getApi().then((data)=>{
       
        const sum=reduceApi(data);
        userJobsApi.getApi().then((data)=>{
           if (document.documentElement.clientWidth < 800) {
            const tablesApi = new Table(data,tbodyJune,160,'mobile');
            tablesApi.renderTableApi(sum);}
            if(document.documentElement.clientWidth > 800){
                const tablesApi = new Table(data,tbodyJune,160,'decktop');
                tablesApi.renderTableApi(sum);}
        }
        );

}
);}

const filterApiJuly=() =>{
    taskApiJuly.getApi().then((data)=>{
        
    const sum=reduceApi(data);
    userJobsApi.getApi().then((data)=>{
       if (document.documentElement.clientWidth < 800) {
        const tablesApi = new Table(data,tbodyJuly,160,'mobile');
        tablesApi.renderTableApi(sum);}
        if(document.documentElement.clientWidth > 800){
            const tablesApi = new Table(data,tbodyJuly,160,'decktop');
            tablesApi.renderTableApi(sum);}
    }
    );
    

}
);}


const filterApiAugust=() =>{
    taskApiAugust.getApi().then((data)=>{
       
        const sum=reduceApi(data);
        userJobsApi.getApi().then((data)=>{
           if (document.documentElement.clientWidth < 800) {
            const tablesApi = new Table(data,tbodyAug,160,'mobile');
            tablesApi.renderTableApi(sum);}
            if(document.documentElement.clientWidth > 800){
                const tablesApi = new Table(data,tbodyAug,160,'decktop');
                tablesApi.renderTableApi(sum);}
        }
        );

}
);}





export{reduceApi,renderTable,renderTaskApi,filterApiJune,filterApiJuly,filterApiAugust};






