export  default class Filter {
	constructor(arr) {
		this.arr =arr;
	}

    filterDate(start,end) {
        
        let s=new Date(start);
        let e=new Date(end);
        let resDates=[];
        this.arr.forEach((dateStr=>{
        let date=new Date(dateStr.Дата_и_время_старта_задачи)
        if(date>=s && date<=e){
        resDates.push(dateStr)
        }
        }))
        return resDates;
        }
    }



