<style>
.type-item {
    display: block;
}
</style>
<div class="nav">目前位置: 首頁 > 分類網誌 > <span class="type">健康新知</span></div>
<fieldset>
    <legend>分類網誌</legend>
    <a class='type-item'>健康新知</a>
    <a class='type-item'>菸害防治</a>
    <a class='type-item'>病防治</a>
    <a class='type-item'>慢性病防治</a>
</fieldset>

<script>
$(".type-item").on('click', function() {
    $('.type').text($(this).text());
})
</script>