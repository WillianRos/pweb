
/*
var nome = "José Mentiroso";
var idade = "20";
var altura = 1.77;

document.write("Nome:"+" "+ nome + "<br> " + "Idade:" + " " + idade + "<br> " + "altura:" + altura);


var v1 = 20;
var v2 = 40;
var v3 = 60/2;

var total = v1 + v2 - v3;

alert("Total: " + total);
*/
function acesso_sistema() {
    var user = document.getElementById("cxlogin").value;
    var senha = document.getElementById("cxsenha").value;
    var cont = 0;

while (cont <=3 ){

    if (user == "WILL" && senha == "123") {
        alert("Acesso permitido");
        cont =0;
        }
        else if (user != "WILL" && senha != "123"){

           alert("Não Entra não... Tá tirando né");
           cont++;
        }
        /*
        else{
        window.location.alert();
       
        }
 */
    }
}

function laco() {
    var n1 = 0, cont = 0;
    while (n1 <= 10) {
        n1++;
        document.write("N " + cont++ + "<br>");
    }
}
function tabuada() {
    var num = document.getElementById("numero").value;
    var cont = 0;

    document.write("<h1>Sua Tabuada é: " + num + "</h1><br>");

    while (cont <= 10) {
        document.write("<br>" + num + "X" + cont + " = " + (num * cont) + "<br>");
        cont++;
    }
}
