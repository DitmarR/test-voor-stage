
window.onload =
function getContent() {

        var A = document.getElementById('cont');



        var content = new Array("");
                        
    
        content[0] = "in deze regel passes niet alle wijsheden op een tegel";
                    
        content[1] = "trouw of trouw niet, in beide gevallen zult je er spijt van hebben"; 

        
        content[2] = "met pensioen gaan is een hele eer, maar let op; je hebt nooit vakantie meer!";

                                                      
        content[3] = "afscheid betekent de geboorte van een herinnering";


        content[4] = localStorage.getItem("1")

        content[5] = localStorage.getItem("2")

        content[6] = localStorage.getItem("3")

        content[7] = localStorage.getItem("4")

        content[8] = localStorage.getItem("5")

        if(localStorage.getItem("6") === null)   {
                console.log('no1')
               }
               else {
                content[9] = localStorage.getItem("6")
               };

        if(localStorage.getItem("7") === null)   {
                console.log('no2')
                }
                else {
                content[10] = localStorage.getItem("7")

                };

        if(localStorage.getItem("8") === null)   {
                console.log('no3')
                }
                else {
                content[11] = localStorage.getItem("8")

                };

        if(localStorage.getItem("9") === null)   {
                console.log('no4')
        }
        else {
        content[12] = localStorage.getItem("9")

        }

        if(localStorage.getItem("10") === null)   {
                console.log('no5')
        }
        else {
        content[13] = localStorage.getItem("10")

        }

        if(localStorage.getItem("11") === null)   {
                console.log('no6')
        }
        else {
        content[14] = localStorage.getItem("11")

        }

        
        if(localStorage.getItem("12") === null)   {
                console.log('no7')
        }
        else {
        content[15] = localStorage.getItem("12")

        }

        if(localStorage.getItem("13") === null)   {
                console.log('no8')
        }
        else {
        content[16] = localStorage.getItem("13")

        }

        
        if(localStorage.getItem("14") === null)   {
                console.log('no9')
        }
        else {
        content[17] = localStorage.getItem("14")

        }

        if(localStorage.getItem("15") === null)   {
                console.log('no10')
        }
        else {
        content[18] = localStorage.getItem("15")

        }

        if(localStorage.getItem("16") === null)   {
                console.log('no11')
        }
        else {
        content[19] = localStorage.getItem("16")

        }

        if(localStorage.getItem("17") === null)   {
                console.log('no12')
        }
        else {
        content[20] = localStorage.getItem("17")

        }

        if(localStorage.getItem("18") === null)   {
                console.log('no13')
        }
        else {
        content[21] = localStorage.getItem("18")

        }

        
        if(localStorage.getItem("19") === null)   {
                console.log('no14')
        }
        else {
        content[22] = localStorage.getItem("19")

        }

        if(localStorage.getItem("20") === null)   {
                console.log('no15')
        }
        else {
        content[23] = localStorage.getItem("20")

        }

        if(localStorage.getItem("21") === null)   {
                console.log('no16')
        }
        else {
        content[24] = localStorage.getItem("21")

        }

        if(localStorage.getItem("22") === null)   {
                console.log('no17')
        }
        else {
        content[25] = localStorage.getItem("22")

        }

       
              
        i = Math.floor(Math.random() * content.length);


        A.innerHTML= content[i];

        // document.getElementByClass("wijsheid").src = image[i].src;
}
// getContent();
        


        const inpKey = document.getElementById("inpKey");
        const inpValue = document.getElementById("inpValue");
        const btnInsert = document.getElementById("btnInsert");
        const lsOutput = document.getElementById("lsOutput");

        btnInsert.onclick = function () {
                const key = inpKey.value;
                const value = inpValue.value;
                
                console.log(key);
                console.log(value);

                if (key && value) {
                        localStorage.setItem(key, value);
                        location.reload();
                }
        };

        for(let i = 0; i < localStorage.length; i++) {
                const key = localStorage.key(i);
                const value = localStorage.getItem(key);

                lsOutput.innerHTML += `NR ${key}ㅤ${value}  ㅤ`;
        }

        btnRemove.onclick = function () {
                const key = inpKey.value;
                const value = inpValue.value;

                localStorage.removeItem(key, value);
                location.reload();
        };


   

