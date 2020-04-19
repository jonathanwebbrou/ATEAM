<?php include_once '../config/init.php'; ?>
<?php include_once '../lib/Job.php'; ?>

<?php
$job = new Job;

$template = new Template('user/user_view.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->Job_Opening = $job->getByCategory($category);


}else{
    $template->title = 'Latest Jobs ';
    $template->Job_Opening = $job->getAllJobs();
}


$template->Company = $job->getCategories();

echo $template;
