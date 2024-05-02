const form = document.getElementById('form')
const usN = document.getElementById('usN')
const pa1 = document.getElementById('pa1')
const pa2 = document.getElementById('pa2')

form.addEventListener('submit', e =>{
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) =>{
    const inputControl = element.pareventElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element =>{
     const inputControl = element.pareventElement;
     const errorDisplay = inputContro.querySelector('.error');

     errorDisplay.innerText= '';
     inputControl.classList.add('success');
     inputControl.classList.remove('error');
};

const validateInputs = ()=> {

    const usNValue = usN.value.trim();
    const pa1Value = pa1.value.trim();
    const pa2Value = pa2.value.trim();

    if(usNValue === ''){

        setError(usN, 'username is required');
    } else{
        setSuccess(usN);
    }

    if(pa1Value === ''){
        setError(pa1, 'Password is required');

    } else if (pa1Value.length < 5){
        setError(pa1, 'password must be at least 5 characters.')
    }
    else{
        setSuccess(pa1);
    }

    if(pa2Value ===''){
        setError(pa2, 'please confirm your password');

    }else if (pa2Value !== pa1Value){
        
        setError(pa2, "password does not match");
    }else{
        setSuccess(pa2);
    }



};