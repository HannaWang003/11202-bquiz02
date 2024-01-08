<fieldset>
    <legend>目前位置: 首頁 > 人氣文章區</legend>
    <table style="width:95%;margin:auto">
        <tr>
            <th width="30%">標題</th>
            <th width="50%">內容</th>
            <th width="">人氣</th>
        </tr>
        <?php
        $nowpage = ($_GET['page']) ?? 1;
        $total = $News->count(['sh' => 1]);
        $size = 5;
        $pages = ceil($total / 5);
        $start = ($nowpage - 1) * $size;
        ?>
        <?php
        $rows = $News->all(['sh' => 1], "order by `good` desc limit $start,$size ");
        foreach ($rows as $row) {
        ?>
            <tr>
                <td>
                    <div class='title' data-id='<?= $row['id'] ?>'><?= $row['title'] ?></div>
                </td>
                <td>
                    <div><?= mb_substr($row['news'], 0, 25) ?>...</div>
                    <div id="p<?= $row['id'] ?>" class="pop">
                        <pre><?= $row['news'] ?></pre>
                    </div>
                </td>
                <td></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
    if ($nowpage - 1 > 0) {
        $prev = $nowpage - 1;
        echo "<a href='?do=pop&page=$prev'> < </a>";
    }
    for ($i = 1; $i <= $pages; $i++) {
        $fontSize = ($i == $nowpage) ? 'font-size:24px' : '';
        echo "<a href='?do=pop&page=$i' style='$fontSize'>$i</a>";
    }
    if ($nowpage + 1 <= $pages) {
        $next = $nowpage + 1;
        echo "<a href='?do=pop&page=$next'> > </a>";
    }
    ?>
</fieldset>
<script>
    $('.title').hover(function() {
        $('.pop').hide();
        let id = $(this).data('id');
        $('#p' + id).show();
    })
</script>