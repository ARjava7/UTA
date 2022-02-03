class multiplicacion{
    constructor(num1, num2){
    this.num1= num1;
    this.num2= num2;
    }

   multNumeros()
{

    return this.num1*this.num2;
}
}



function multiNumeros(){
    var n1=parseInt(document.getElementById("primern").value)  ;
    var n2=parseInt(document.getElementById("segundon").value)  ;
    var obj = new multiplicacion(n1,n2);
    document.getElementById("multiplica").innerText= "la multiplicacion entre "+ n1+ " y " +n2 + " es:  "+ obj.multNumeros();
}