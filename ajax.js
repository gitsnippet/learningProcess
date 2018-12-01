function ready(xmlHttp)
{
if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
    {
        document.getElementById("show_info").innerHTML = xmlHttp.responseText;
    }
}

function sendData()
{
    var formData = new FormData( document.querySelector("#form_insert") );
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("post", "insertData.php",true);
    xmlHttp.send(formData);
    xmlHttp.onreadystatechange = function()
        {
            ready(xmlHttp);
        }
}

ob_insertData = document.getElementById("latest_process");
ob_insertData.addEventListener("click",sendData);


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

ob_cleanData = document.getElementById("clean");
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
    var formData = new FormData( document.querySelector("#form_query") );
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("post", "selectData.php",true);
    xmlHttp.send(formData);
    xmlHttp.onreadystatechange = function()
        {
            show(xmlHttp);
        }
}

ob_selectData = document.getElementById("query");
ob_selectData.addEventListener("click",selectData);


