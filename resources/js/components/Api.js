export  default class Api {
	constructor(url) {
		this.url=url;
	}

    async getApi() {
        
        const response = await fetch(`${this.url}`);
        if (!response.ok){
            throw new Error(`Ошибка по адресу ${url}, статус ошибки ${response}`);
        }
        return await response.json();
        };

        async formAddTask (id_user_task,
            task,
            time_task,real_time_task,data
            ){
                const response = await fetch(`${this.url}`,{
                method: 'POST',
                headers:{ 'Content-Type': 'application/json'},
                body: JSON.stringify({
                    id_пользователя: id_user_task.value,
                    Наименование_задачи: task.value,
                    Время_выделенное_на_выполнение_задачи_в_часах: time_task.value,
                    Время_затраченное_на_выполнение_задачи_в_часах:real_time_task.value,
                    Дата_и_время_старта_задачи:data.value,
                })
            })
            if (!response.ok){
                throw new Error(`Ошибка по адресу ${url}, статус ошибки ${response}`);
            }
            return await response.json();
            };
           

            


        } 


