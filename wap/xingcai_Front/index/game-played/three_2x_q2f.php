<input type="hidden" name="playedGroup" value="<?= $this->groupId ?>" />
<input type="hidden" name="playedId" value="<?= $this->played ?>" />
<input type="hidden" name="type" value="<?= $this->type ?>" />
<?php
foreach (array(
    '百',
    '十'
) as $var) {
?>
<div class="pp" action="tzAllSelect" length="2" random="sscRandom" style="width:100%;">
	<div class="action-wrapper">
		<input type="button" value="清"  class="action none" />
    <input type="button" value="双"  class="action even" />
    <input type="button" value="单"  class="action odd" />
    <input type="button" value="小"  class="action small" />
    <input type="button" value="大"  class="action large" />
    <input type="button" value="全"  class="action all" />
	</div>
	<div class="relative">
		<div class="title" ><div class="wei" style="float:left;"><?= $var ?>位</div></div>
		<ul class="nList" style="display:inline;float:left;">
		   <input type="button" value="0" class="code s min" />
        <input type="button" value="1" class="code d min" />
        <input type="button" value="2" class="code s min" />
        <input type="button" value="3" class="code d min" />
        <input type="button" value="4" class="code s min" />
        <input type="button" value="5" class="code d max" />
        <input type="button" value="6" class="code s max" />
        <input type="button" value="7" class="code d max" />
        <input type="button" value="8" class="code s max" />
        <input type="button" value="9" class="code d max" />
		</ul>
	</div>
	  
</div>
<?php
}

$maxPl = $this->getPl($this->type, $this->played);
?>
<script type="text/javascript">
$(function(){
	gameSetPl(<?= json_encode($maxPl) ?>);
})
</script>

