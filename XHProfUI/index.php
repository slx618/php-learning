<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-7-19
 * Time: 16:05
 */
$keyMap = [
    'ct' => '调用总耗时',
    'wt' => '调用次数',
    'cpu' => 'cpu耗时',
    'mu' => '内存耗用',
    'pmu' => '内存耗用峰值'
];
$path = isset($_POST['path']) ? $_POST['path'] : (isset($_GET['path']) ? $_GET['path'] : null);
$content = null;
if (file_exists($path)) {
    $content = file_get_contents($path);
    $content = json_decode($content, true);

    $sort = isset($_GET['sort']) ? $_GET['sort'] : null;
    if ($sort) {
        foreach ($content as $value) {
            $sortArr[] = $value[$sort];
        }
        array_multisort($sortArr, SORT_DESC, $content);
    }
}

?>
<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        table {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form action='' method="post">
    <input type='text' style="width: 60%; margin: 10px" name="path" value="<?= $path?>" placeholder="文件路径">
    <input type="submit" value="提交">
</form>
<?php if ($content) {?>
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <td width="50px">调用</td>
            <?php foreach ($keyMap as $k => $v) {?>
                <td><a href="./?sort=<?= $k?>&path=<?= $path?>"><?= $v?></a></td>
            <?php }?>
        </tr>
        <?php foreach ($content as $key => $value) {?>
        <tr>
            <td><?= $key?></td>
            <?php foreach ($value as $v) {?>
                <td><?= $v?></td>
            <?php }?>
        </tr>
        <?php }?>
    </table>

<?php }?>
</body>
</html>
