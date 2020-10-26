<?php include_once 'config/init.php' ?>
<?php

$job = new Job;

$id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    // Grabbing all the data from the form in job-create.php and putting it in an array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->update($id, $data)){
        redirect('index.php', 'Your job has been updated','success');

    }else{
        redirect('index.php', 'Something went wrong','error');
    }

}

$template = new Template('templates/job-edit.php');

$template->job = $job->getJob($id);
$template->categories = $job->getCategories();

echo $template;