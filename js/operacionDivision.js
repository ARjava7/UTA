class division{
    constructor(num1, num2){
    this.num1= num1;
    this.num2= num2;
    }

   dividNumeros()
{

    return this.num1/this.num2;
}
}



function dividirNumeros(){
    var n1=parseInt(document.getElementById("primern").value)  ;
    var n2=parseInt(document.getElementById("segundon").value)  ;
    if(n2==0){
        document.getElementById("divide").innerText= "División no  valida para cero";
    }else{
    var obj = new division(n1,n2);
    document.getElementById("divide").innerText= "la division entre "+ n1+ " y " +n2 + " es:  "+ obj.dividNumeros();
}}