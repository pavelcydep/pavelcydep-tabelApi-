export default class formAdd {
	constructor(buttonElement,taskApi) {
        
        this.buttonElement = buttonElement;
        this.taskApi=taskApi;
	}
formAddTask(){
    this.buttonElement.addEventListener('click',(event)=>{
        event.preventDefault();
        this.taskApi.formAddTask(id_user_task,
            task,
            time_task,real_time_task,data);
             }); 
               
            }








}