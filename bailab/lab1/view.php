<!--view-->
<?php echo $page_content ?>
<select name="courses" id="">
    <?php foreach($list_of_course as $course_name): ?>
    <option value=""><?=$course_name?></option>
    <?php endforeach; ?>
</select>