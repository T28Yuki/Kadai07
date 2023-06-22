<html>
<head>
    <meta charset="utf-8">
    <title>連絡掲示板</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="center">
    <form id="myForm" action="write.php" method="post">
        <div id="form">
            作業日: <input id="dateInput" class="data_input" type="date" name="date"><br>
            作業先: <input id="placeInput" class="place_input" type="text" placeholder="作業予定を入力" name="place"><br>
            <select class="select_input" name="select">
                <option value="入室">入室</option>
                <option value="退室">退室</option>
            </select>
        </div>
        <input class="Button-style" type="submit" value="登録">
    </form>

    <script>
    window.onload = function() {
        document.getElementById('myForm').addEventListener('submit', function(e) {
            const dateInput = document.getElementById('dateInput').value;
            const placeInput = document.getElementById('placeInput').value;

            if (dateInput === '' || placeInput === '') {
                alert("日付、作業予定を入力してください。");
                e.preventDefault(); // formの送信をキャンセル
            }
        });
    }
    </script>
</body>
</html>
