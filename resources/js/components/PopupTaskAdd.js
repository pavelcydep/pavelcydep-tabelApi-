export default class Popup {
	constructor(popupElement,buttonElement) {
		this.popupElement= popupElement;
        this.buttonElement = buttonElement;
      
	}

	openPopup () {
		
        this.buttonElement.addEventListener('click',()=>{
            this.popupElement.classList.add('display');
           

        });
    }
    closePopup(){

        this.buttonElement.addEventListener('click',()=>{
            this.popupElement.classList.remove('display');
            
        });
    }
}