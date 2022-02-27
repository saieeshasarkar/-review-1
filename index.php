<?php
$first_name;
$last_name = "Sarkar";

$x=10;
$y=5;
$z=$x+$y;

echo $z;

echo "Hello";



?>

<html>
<body>
    <form>

<div class="rendered-form">
    <div class="formbuilder-text form-group field-input1">
        <label for="input1" class="formbuilder-text-label">x<span class="formbuilder-required">*</span></label>
        <input type="text" class="form-control" name="input1" access="false" id="input1" required="required" aria-required="true">
    </div>
    <div class="formbuilder-radio-group form-group field-calc">
        <label for="calc" class="formbuilder-radio-group-label">Radio Group<span class="formbuilder-required">*</span></label>
        <div class="radio-group">
            <div class="formbuilder-radio">
                <input name="calc" access="false" id="calc-0" required="required" aria-required="true" value="plus" type="radio">
                <label for="calc-0">+</label>
            </div>
            <div class="formbuilder-radio">
                <input name="calc" access="false" id="calc-1" required="required" aria-required="true" value="minus" type="radio">
                <label for="calc-1">-</label>
            </div>
            <div class="formbuilder-radio">
                <input name="calc" access="false" id="calc-2" required="required" aria-required="true" value="multiply" type="radio">
                <label for="calc-2">*</label>
            </div>
            <div class="formbuilder-radio">
                <input name="calc" access="false" id="calc-3" required="required" aria-required="true" value="divide" type="radio">
                <label for="calc-3">/</label>
            </div>
        </div>
    </div>
    <div class="formbuilder-text form-group field-input2">
        <label for="input2" class="formbuilder-text-label">y<span class="formbuilder-required">*</span></label>
        <input type="text" class="form-control" name="input2" access="false" id="input2" required="required" aria-required="true">
    </div>
    <div class="formbuilder-button form-group field-btn">
        <button type="submit" class="btn-default btn" name="btn" access="false" style="default" id="btn">calculate</button>
    </div>
</div>
</form>
</body>
</html>