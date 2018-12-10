<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    p{
        margin:50px auto;
        text-align:center;
    }
    table{
        margin:100px auto;
        border:2px solid red;
    }
    tr,td{
        border:1px solid black;
        text-align:center;
        margin:5px;
    }
    input[name="query"]{
        width:95%;
    }
    </style>
</head>
<body>
    <p>近期目标 latex  vim  apache  mysql  js  php</p>
    <table>
        <form id="form_createClass">
            <tr>
                <td>create new class</td>
                <td>
                    <input type="text" name="newClass">
                    <td><input id="createClass" type="button" value="createClass"></td>
                </td>
            </tr>
        </form>
        <form id="form_insertData">
            <tr>
                <td>课程</td>
                <td>
                    <select name="class">
                        {foreach $res as $value}
                            <option>{$value['class']}</option>
                        {/foreach}
                    </select>
                </td>
                <td>
                    <span id="classMsg">请在下拉单中选择</span>
                </td>
            </tr>
            <tr>
                <td>进度</td>
                <td><input type='text' name="process" ></td>
                <td><span id="processMsg">第几页</span></td>
            </tr>
            <tr>
                <td colspan="3"><input type="button" value="latest process" id="insertData"></td>
            </tr>
        </form>
    <tr>
        <td><input id="cleanData" type="button" value="clean" ></td>
        <form id="form_selectData">
        <td>
            <select name="class">
                {foreach $res as $value}
                    <option>{$value['class']}</option>
                {/foreach}
            </select>
        </td>
        <td><input type="button" value="select" id="selectData"></td>
        </form>
    </tr>
    </table>
    <p id="showInfo"></p>
    <script src="ajax.js">    
    </script>
</body>
</html>



