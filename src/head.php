<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo管理</title>

    <style>
        /* CSSを直接埋め込む */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: white;
            text-align: left;
            padding: 20px;
        }

        .container {
            display: flex;
        }

        .left-menu {
            width: 200px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .left-menu ul {
            list-style: none;
            padding: 0;
        }

        .left-menu ul li {
            margin-bottom: 10px;
        }

        .left-menu ul li a {
            text-decoration: none;
            color: #333;
        }

        .left-menu ul li.parent ul {
            display: none;
            padding-left: 15px;
        }

        .left-menu ul li.parent.active ul {
            display: block;
        }

        .main {
            flex: 1;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* アクティブなカテゴリのスタイル */
        .left-menu ul li.parent.active a {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="home.php">
            <h1>Todo管理</h1>
        </a>
    </header>
    <div class="container">
        <div class="left-menu">
        <ul>
                <li><a href="home.php">ホーム</a></li>
                <li class="parent" onclick="func1(event, this)">カテゴリー
    <ul>
        <li><a href="#" onclick="changeCategory(event, '人生')">人生</a></li>
        <li><a href="#" onclick="changeCategory(event, '就活')">就活</a></li>
        <li><a href="#" onclick="changeCategory(event, '恋愛')">恋愛</a></li>
    </ul>
</li>
                <li><a href="insert-input.php">Todo追加</a></li>
                <li><a href="update-input.php">Todo更新</a></li>
                <li><a href="delete-input.php">Todo削除</a></li>
            </ul>
        </div>