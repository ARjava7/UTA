class suma{
    constructor(num1, num2){
    this.num1= num1;
    this.num2= num2;
    }

    sumaNumeros()
{

    return this.num1+this.num2;
}
}



function sumarNumeros(){
    var n1=parseInt(document.getElementById("primern").value)  ;
    var n2=parseInt(document.getElementById("segundon").value)  ;
    var obj = new suma(n1,n2);
    document.getElementById("suma").innerText= "la suma de "+ n1+ " y " +n2 + " es: "+ obj.sumaNumeros();
}