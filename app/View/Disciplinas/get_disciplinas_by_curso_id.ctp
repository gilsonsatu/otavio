<?php
if (!empty($disciplinas)) {
    foreach ($disciplinas as $key => $value):
        ?>
        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php
    endforeach;
} else {
    ?>
    <option value="">Sem dados</option>
    <?php
}
?>