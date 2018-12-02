function ready(xmlHttp)
{
if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
    {
        document.getElementById("showInfo").innerHTML = xmlHttp.responseText;
    }
}

function insertData()
{
    var formData = new FormData( document.querySelector("#form_insertData") );
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("post", "insertData.php",true);
    xmlHttp.send(formData);
    xmlHttp.onreadystatechange = function()
        {
            ready(xmlHttp);
        }
}

ob_insertData = document.getElementById("insertData");
ob_insertData.addEventListener("click",insertData);


function cleanData()
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("post", "cleanData.php",true);
    xmlHttp.send();
    xmlHttp.onreadystatechange = function()
        {
            ready(xmlHttp);
        }
}

ob_cleanData = document.getElementById("cleanData");
ob_cleanData.addEventListener("click",cleanData);

function show(xmlHttp){
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
        {
            data = JSON.parse(xmlHttp.responseText);
            table_show = "<table>";
            for(i=0;i<data.length;i++){
                table_show += "<tr>";
                table_show += "<td>" + data[i][0] + "</td>";
                table_show += "<td>" + data[i][1] + "</td>";
                table_show += "<td>" + data[i][2] + "</td>";
                table_show += "<td>" + data[i][3] + "</td>";
                table_show += "<td>" + data[i][4] + "</td>";
                table_show += "</tr>";
            }
            table_show += "</table>";
            var parent = document.body;
            var tmp = document.createElement("table");
            tmp.innerHTML = table_show;
            parent.appendChild(tmp);
        }
}


function selectData()
{
    var formData = new FormData( document.querySelector("#form_selectData") );
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("post", "selectData.php",true);
    xmlHttp.send(formData);
    xmlHttp.onreadystatechange = function()
        {
            show(xmlHttp);
        }
}

ob_selectData = document.getElementById("selectData");
ob_selectData.addEventListener("click",selectData);


