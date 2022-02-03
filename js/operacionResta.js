class resta{
    constructor(num1, num2){
    this.num1= num1;
    this.num2= num2;
    }

    restaNumeros()
{

    return this.num1-this.num2;
}
}



function restarNumeros(){
    var n1=parseInt(document.getElementById("primern").value)  ;
    var n2=parseInt(document.getElementById("segundon").value)  ;
    var obj = new resta(n1,n2);
    document.getElementById("resta").innerText= "la resta de "+ n1+ " y " +n2 + " es:  "+ obj.restaNumeros();
}