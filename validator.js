 



function validator(){
                if(document.getElementById("source").value===""){
                    alert("Please enter the SOURCE!");
                }
                
                if(document.getElementById("destination").value===""){
                    alert("Please enter the DESTINATION!");
                }
                if(document.getElementById("date").value===""){
                    alert("Please enter the DATE!");
                }
                
                if(document.getElementById("time").value===""){
                    alert("Please enter the TIME!");
                }
                else{
                    window.open("searchResult.html",'_self');
                }
            }
