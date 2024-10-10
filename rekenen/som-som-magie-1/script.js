let inp_A1 = document.getElementById("inp_A1");
let inp_D1 = document.getElementById("inp_D1");
let inp_D2 = document.getElementById("inp_D2");
let inp_D3 = document.getElementById("inp_D3");
let inp_C4 = document.getElementById("inp_C4");
let inp_B4 = document.getElementById("inp_B4");

let opl_B2 = document.getElementById("opl_B2");
let opl_C2 = document.getElementById("opl_C2");
let opl_B3 = document.getElementById("opl_B3");
let opl_C3 = document.getElementById("opl_C3");

function solveProblem()
{
    let gok = 1;
    let decision = true;
    while( decision ){
        opl_B2.value = gok;
        opl_C2.value = parseInt(inp_D2.value) - parseInt(opl_B2.value);
        opl_B3.value = parseInt(inp_B4.value) - parseInt(opl_B2.value);
        opl_C3.value = parseInt(inp_C4.value) - parseInt(opl_C2.value);
        if(parseInt(opl_B2.value) + parseInt(opl_C3.value) == parseInt(inp_A1.value) &&
        parseInt(opl_B3.value) + parseInt(opl_C2.value) == parseInt(inp_D1.value) && 
        parseInt(opl_B3.value) + parseInt(opl_C3.value) == parseInt(inp_D3.value) )
            {
                //alert("BINGO");
                decision = false;
            }
            else
            {
                //alert("KAK");
                decision = true; //overbodig, want hij is al true
                gok++; //shortcut voor gok = gok + 1
            }
    }
    
    //alert("Hallo vrienden van BSD-O-AUG23A");
}