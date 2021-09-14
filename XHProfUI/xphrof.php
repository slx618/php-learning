<?php
xhprof_enable(XHPROF_FLAGS_NO_BUILTINS +
    XHPROF_FLAGS_CPU +
    XHPROF_FLAGS_MEMORY);


register_shutdown_function(function(){
    $data = xhprof_disable();   //返回运行数据
    //xhprof_lib 在下载的包里存在这个目录,记得将目录包含到运行的php代码中

    include '/usr/local/share/pear/xhprof_lib/utils/xhprof_lib.php';
    include '/usr/local/share/pear/xhprof_lib/utils/xhprof_runs.php';
    $objXhprofRun = new \XHProfRuns_Default();
    $objXhprofRun->save_run($data, basename(parse_url($_SERVER['REQUEST_URI'])['path'])); //test 表示文件后缀
});