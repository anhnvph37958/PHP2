<?php 
function get_course()
{
    include 'bai1.php';
    return array_values($course);
}

function find_by_semester($semester)
{
    include 'bai1.php';
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid course');

}
?>